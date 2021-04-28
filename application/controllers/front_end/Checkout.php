<?php

class Checkout extends CI_Controller
{

    public function __construct(){
        parent::__construct();

         $this->load->model('front_model/Category_Model');
         $this->load->model('front_model/Checkout_Model');
         $this->lang->load('content', $this->session->userdata('site_lang'));
    }

    public function index()
    {
        if($this->session->userdata('loggedIn_front') == true && $this->session->userdata('status') == 1)
        {       
            $data['categories'] = $this->Category_Model->get_categories();
            $this->load->view('front/header',$data);
            $this->load->view('front/checkout');
            $this->load->view('front/footer');
        }
        else
        {
            redirect('front_end/auth/Login', 'location');
        }
    }

    public function checkout_submit()
    {
        // alert if the cart is empty
        if($this->cart->total_items() <= 0){
            echo 'empty_cart';
        }
        else
        {
            $f_name = $this->input->post('f_name');
            if(isset($f_name))
            {
                // Form field validation rules
                $this->form_validation->set_rules('f_name', 'First Name', 'required');
                $this->form_validation->set_rules('l_name', 'Last Name', 'required');
                $this->form_validation->set_rules('address', 'Address', 'required');
                $this->form_validation->set_rules('city', 'City', 'required');
                $this->form_validation->set_rules('state', 'State', 'required');
                $this->form_validation->set_rules('payment-group', 'Payment', 'required');

                $name = $this->input->post('f_name').' '.$this->input->post('l_name');
                $address2 = "";
                $address_input = $this->input->post('address');
                if(isset($address_input))
                {
                    $address2 = $address_input;
                }
                $city = "";
                $city_input = $this->input->post('city');
                if(isset($city_input))
                {
                    $city = $city_input;
                }
                $state = "";
                $state_input = $this->input->post('state');
                if(isset($state_input))
                {
                    $state = $state_input;
                }
                $payment = "";
                $payment_input = $this->input->post('payment-group');
                if(isset($payment_input))
                {
                    $payment = $payment_input;
                }

                $tax = $this->Checkout_Model->get_site_setting_tax();
                $tax_price = ($tax->value / 100) * $this->cart->total();

                // Prepare order data
                $order = array('tax'=> $tax->value,
                                'tax_price'=> $tax_price);
                $order_id = $this->Checkout_Model->insert_order_data($order);
                if($order_id)
                {
                    // Retrieve user data 
                    $user_id = $this->session->userdata('user_id');
                    $user = $this->Checkout_Model->get_user_info($user_id);
                    // Retrieve cart data from the session
                     $cartItems = $this->cart->contents();

                    // Cart items
                    $orderItemData = array();
                    $i=0;
                    foreach($cartItems as $item){
                        // $this->Checkout_Model->get_size_id($order);
                        $orderItemData[$i]['order_id']     = $order_id;
                        $orderItemData[$i]['product_id']     = $item['id'];

                
                        if ($this->cart->has_options($item['rowid']) == TRUE)
                        {
                            if($this->cart->product_options($item['rowid'])["size"] !== null)
                            {
                                $string .= $this->cart->product_options($item['rowid'])["size"];
                                $size_id = $this->Checkout_Model->get_size_id($this->cart->product_options($item['rowid'])["size"]);
                                $orderItemData[$i]['size_id'] = $size_id->size_id;
                            }
                            if($this->cart->product_options($item['rowid'])["color"] !== null)
                            {
                                $orderItemData[$i]['color'] = $this->cart->product_options($item['rowid'])["color"];
                            }
                        }                      
                        $orderItemData[$i]['price'] = $item["subtotal"];
                        $orderItemData[$i]['user_id'] = $user[0]['u_id'];
                        $orderItemData[$i]['user_name'] = $user[0]['name'];
                        $orderItemData[$i]['email'] = $user[0]['email'];
                        $orderItemData[$i]['address_name'] = $name;
                        $orderItemData[$i]['address1'] = $user[0]['address'];
                        $orderItemData[$i]['address2'] = $address2;
                        $orderItemData[$i]['city'] = $city;
                        $orderItemData[$i]['state'] = $state;
                        $orderItemData[$i]['mobile'] = $user[0]['phone_number'];
                        $orderItemData[$i]['quantity'] = $item['qty'];
                        $orderItemData[$i]['payment_type'] = $payment;
                        
                        $i++;
                    }
                    if(!empty($orderItemData)){
                        // Insert order items
                        $insertOrderItems = $this->Checkout_Model->insertOrderItems($orderItemData);
                        
                        if($insertOrderItems){
                            // Remove items from the cart
                            $this->cart->destroy();
                            
                            // Return order ID
                            echo $order_id;
                        }                       
                    }
                }               
            }
        }
    }

    public function order_success($order_id)
    {     
        $data['order'] = $this->Checkout_Model->get_order($order_id);   
        $data['products_of_order'] = $this->Checkout_Model->products_of_order($order_id); 
        $data['categories'] = $this->Category_Model->get_categories();
        $this->load->view('front/header',$data);
        $this->load->view('front/order-success');
        $this->load->view('front/footer');
    }
}
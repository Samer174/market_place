<?php
class Cart extends CI_Controller 
{
    public function __construct(){
        parent::__construct();

         $this->load->model('front_model/Product_Model');
         $this->load->model('front_model/Category_Model');
         $this->lang->load('content', $this->session->userdata('site_lang'));
        
    }

    function index()
    {
        $data['categories'] = $this->Category_Model->get_categories();

        $data["cart"] = $this->cart->contents();

        $this->load->view('front/header', $data);
        $this->load->view('front/cart');
        $this->load->view('front/footer');
    }

        
    function add_to_cart(){ 
        
        if($this->input->post('quantity'))
        {
            $qty = $this->input->post('quantity');
        }
        else
        {
            $qty = 1;
        }
        if($this->input->post('product_size'))
        {
            $size = $this->input->post('product_size');
        }
        else
        {
            $size = "";
        }
        if($this->input->post('product_color'))
        {
            $color = $this->input->post('product_color');
        }
        else
        {
            $color = "";
        }
        $name = str_replace(array('(',')',',','/'),"-",$this->input->post('product_name'));
      $data = array(
          'id' => $this->input->post('product_id'), 
          'name' => $name, 
          'price' => $this->input->post('product_price'), 
          'qty' => $qty, 
          'options' => array('image' => $this->input->post('product_image'),
                             'size' => $size,
                             'color' => $color)
      );
      $this->cart->insert($data);
      echo $this->show_cart(); 
    }
    

    function show_cart(){ 
        $output = '';
        $no = 0;
        foreach ($this->cart->contents() as $items) {
            $no++;
            $output .='

            <li>
                <div class="media">
                    <a href=""><img alt="" class="me-3" style="max-width: 87px;"
                            src="'.base_url().'uploads/product/';
                             if ($this->cart->has_options($items['rowid']) == TRUE)
                             {
                                $string_name = (strlen($items['name']) > 30) ? substr($items['name'],0,29).'...' : $items['name'];
                                $output .=$this->cart->product_options($items["rowid"])["image"];
                            //     foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value)
                            //     {
                            //         $output .=$option_value;
                            //     }
                             }
                            $output .='"></a>
                    <div class="media-body">
                        <a href="#">
                            <h4>'.$string_name.'</h4>
                        </a>
                        <h4><span>'.$items['qty'].' x $ '.number_format($items['price']).'</span></h4>
                    </div>
                </div>
                <div class="close-circle"><a href="" id="'.$items['rowid'].'" class="romove_cart"><i class="fa fa-times"
                            aria-hidden="true"></i></a></div>
            </li>
            ';
        }
        $output .= '
            <li>
                <div class="total">
                    <h5>subtotal : <span>$'.number_format($this->cart->total()).'</span></h5>
                </div>
            </li>
            <li>
                <div class="buttons"><a href="'.base_url('front_end/Cart').'" class="view-cart">'.$this->lang->line('view_cart').'</a>
                    <a href="'.base_url().'front_end/checkout" class="checkout">'.$this->lang->line('checkout').'</a></div>
            </li>
        ';
        return $output;
    }

    function load_cart(){ 
        echo $this->show_cart();
    }

    function delete_cart(){ 
        $data = array(
            'rowid' => $this->input->post('row_id'), 
            'qty' => 0, 
        );
        $this->cart->update($data);
        echo $this->show_cart();
    }

    function destroy()
    {
        $this->cart->destroy();
    }
}
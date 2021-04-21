<?php
class Product extends CI_Controller 
{
    public function __construct(){
        parent::__construct();

         $this->load->model('front_model/Product_Model');
         $this->lang->load('content', $this->session->userdata('site_lang'));
        
    }

    public function single_product($id=NULL)
    {
       
        $data = $this->Product_Model->get_single_product($id);
        

      /*   multiple images for the same product */
      
      $all_img= $this->Product_Model->get_all_images($id);

      /* print_r($all_img); */
      
        $colors = $this->Product_Model->get_color($id);

        $sizes = $this->Product_Model->get_sizes($id);
     /*  print_r($sizes); */
     
       
      $this->load->view('front/header');
      $this->load->view('front/product_page_nosidebar',array('product'=>$data,'images'=>$all_img ,'colors'=>$colors,'sizes'=>$sizes));
      $this->load->view('front/footer');
    }

    // public function wishlist()
    // {
    //  $id =  $this->input->post('id');
    //  $name =  $this->input->post('name');
    //  $price =  $this->input->post('price');
    //  $status =  $this->input->post('status');
    //  $wishlist = array(0=> array(
    //    'id'=>$id,
    //    'name'=>$name,
    //    'price'=>$price,
    //    'status'=>$status
    //  ));
     

    //   $this->session->set_userdata('product_id',$wishlist);
      
         
      
      
    // }

    // public function destroy(){
    //   $this->session->sess_destroy();
    // }

    

    public function Add_wish()
    {
     $id = $this->session->userdata('user_id');
     
     
         
      if( $this->session->userdata('loggedIn_front') ==true )
      {
        $wish = $this->Product_Model->get_wish($id);
        echo json_encode($wish);
        // $i=1;
				// foreach($wish as $row)
				// {
				// 	  echo "<tr>";
				// 	  echo "<td>".$i."</td>";
				// 	  echo "<td>".$row['name']."</td>";
				// 	  echo "<td>".$row['price']."</td>";
				// 	  echo "<td>".$row['status']."</td>";
				// 	  echo "</tr>";
				// 	  $i++;
				// }
      }
     
    }
    


   
    
        
}
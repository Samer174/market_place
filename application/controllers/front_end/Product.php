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
     
     
     
         
      // if( $this->session->userdata('loggedIn_front') ==true )
      // {
       $id = $this->session->userdata('user_id');
       
        
      $pid = $this->input->post('pid');
         
        //  $id = $this->input->post('id');
         $wishlist = array(
           
           'user_id'=>$id,
           'product_id'=>$pid,
           
         );
        


       $this->db->insert('user_favorite',$wishlist);
        // echo json_encode($wish);
        $wish = $this->Product_Model->get_wish($id);
        $i=1;
				foreach($wish as $row)
				{
					  echo "<tr>";
					  
					  echo "<td>".$row['name']."</td>";
					  echo "<td>".$row['price']."</td>";
					  echo "<td>".$row['status']."</td>";
           
					  echo "</tr>";
					  $i++;
				}
     
      }
      public function show_fav()
      {
        $id = $this->session->userdata('user_id');
        $wish = $this->Product_Model->get_wish($id);
        $i=1;
				foreach($wish as $row)
				{
					  echo "<tr>";
					  
					  echo "<td>".$row['name']."</td>";
					  echo "<td>".$row['price']."</td>";
					  echo "<td>".$row['status']."</td>";
            echo "<td><a href='#' onclick = 'deleteItem(".$row['id'].")' class='icon me-3'><i class='ti-close'></i></a></td>";
					  echo "</tr>";
					  $i++;
				}
      }


   
      public function delete_wish()
      {
        $product_id = $this->input->post('pro_id');
        $this->db->where('product_id',$product_id);
        $this->db->delete('user_favorite');


        
        $id = $this->session->userdata('user_id');
        $wish = $this->Product_Model->get_wish($id);
        $i=1;
				foreach($wish as $row)
				{
					  echo "<tr>";
					  
					  echo "<td>".$row['name']."</td>";
					  echo "<td>".$row['price']."</td>";
					  echo "<td>".$row['status']."</td>";
            echo "<td><a href='#' onclick = 'deleteItem(".$row['id'].")' class='icon me-3'><i class='ti-close'></i></a></td>";
					  echo "</tr>";
					  $i++;
        }
      }




    
        
}
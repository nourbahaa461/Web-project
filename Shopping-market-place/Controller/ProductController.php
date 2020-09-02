<?php

  require_once(__ROOT__ . "Controller/Controller.php");
class ProductController extends Controller
{
    public function insert() 
    {
        $colorid = $_REQUEST['colorid'];
        $catid = $_REQUEST['catid'];
        $sizeid = $_REQUEST['sizeid'];
        $name = $_REQUEST['name'];
      
        $price = $_REQUEST['price'];
        $image = $_REQUEST['image'];
        $amount = $_REQUEST['amount'];
            
         if(!preg_match( '/^[0-9]+$/', $name) && is_numeric($price) && is_numeric($amount) && !empty($name) && !empty($price) && !empty($amount) && !empty($image))
         {
              $this->model->insertProduct($colorid,$catid,$sizeid,$name,$price,$image,$amount);
        }else
         {
           // Problem: please check your inputs
             echo 'Problem: please check your inputs';
        }

      
    }

    public function edit()
    {
        $colorid = $_REQUEST['colorid'];
        $catid = $_REQUEST['catid'];
        $sizeid = $_REQUEST['sizeid'];
        $name = $_REQUEST['name'];
        $price = $_REQUEST['price'];
        $image = $_REQUEST['image'];
        $amount = $_REQUEST['amount'];
        $id =$_REQUEST['id'];
            
         if(!preg_match( '/^[0-9]+$/', $name) && is_numeric($price) && is_numeric($amount) && !empty($name) && !empty($price) && !empty($amount) && !empty($image))
         {
              $this->model->editProduct($colorid,$catid,$sizeid,$name,$price,$image,$amount,$id);
        }else
         {
           // Problem: please check your inputs
             echo 'Problem: please check your inputs';
        }
      
    }

    public function delete()
    {
      $id = $_REQUEST['id'];
      $this->model->deleteProduct($id); 
    }

}
?>

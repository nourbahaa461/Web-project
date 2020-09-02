<?php
require_once(__ROOT__ . "View/View.php");
require_once(__ROOT__ . "Model/ColorModel.php");
require_once(__ROOT__ . "Model/CategoriesModel.php");
require_once(__ROOT__ . "Model/SizeModel.php");

class ViewAllProducts extends View
{
    public function output()
    {
        $str = "";
        
        foreach($this->model->getProducts() as $product)
        {
            $color = new ColorModel($product->getColorid());
            $Category = new CategoriesModel($product->getCatid());
            $Size = new SizeModel($product->getSizeid());
            $str= $str . '<div class="divTableRow">'.
            '<div class="divTableCell"> <img style="height:100px; weight:10px" 
            src="../View/images/Products/' . $product->getImage() . '"> </div> '.
            '<div class="divTableCell"> ' . $color->getColor() . " </div> ".
            '<div class="divTableCell"> ' . $Category->getCatigory() . " </div> ".
            '<div class="divTableCell"> ' . $Size->getSize() . " </div> ".
            '<div class="divTableCell"> ' . $product->getName() . " </div> ".
            '<div class="divTableCell"> ' . $product->getPrice() . " </div> ".
            '<div class="divTableCell"> ' . $product->getAmount() . " </div> ".
            '<div class="divTableCell"><a href="editProduct.php?id='. $product->getID() .'">Edit</a></div>'.
            '<div class="divTableCell"><a href="deleteProduct.php?id='. $product->getID() .'">Delete</a></div> '.
            '</div>';
        }
        return $str;
    }
}?>
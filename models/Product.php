<?php

class Product{
    public $id;
    public $name;
    public $brand;
    public $category;
    public $price;
    public $is_avaible = true;
    public $image;


    /**
     * @param Number $_id
     * @param String $_name
     * @param String $_brand
     * @param String $_category
     * @param Number $_price
     * @param Boolean $_is_avaible
     * @param String $_image
     */
    public function __construct($_id, $_name, $_brand, $_category, $_price, $_is_avaible, $_image)
    {
        $this-> id = $_id;
        $this->name=$_name;
        $this->brand=$_brand;
        $this->category=$_category;
        $this->price=$_price;
        $this->is_avaible=$_is_avaible;
        $this->image=$_image;
    }
}

?>
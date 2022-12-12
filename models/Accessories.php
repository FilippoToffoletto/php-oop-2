<?php

class Accessories extends Product{
    public $material;
    public $size;


    /** 
     * @param Number $_id
     * @param String $_name
     * @param Array $_category
     * @param Number $_price
     * @param String $_image url img
     * @param String $_weight
     * @param String $_ingredients
     * @param String $_size
     */
    public function __construct($_id, $_name, $_brand, $_category, $_price, $_image, $_material, $_size)
    {
        parent::__construct($_id, $_name, $_brand, $_category, $_price, $_image);

        $this->material=$_material;
        $this->size=$_size;
    }
}
?>
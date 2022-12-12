<?php
class Toy extends Product{
    public $features;
    public $size;

    /** 
     * @param Number $_id
     * @param String $_name
     * @param Array $_category
     * @param Number $_price
     * @param String $_image url img
     * @param String $_features
     * @param String $_size
     */
    public function __construct($_id, $_name, $_brand, $_category, $_price, $_image, $_features, $_size)
    {
        parent::__construct($_id, $_name, $_brand, $_category, $_price, $_image);
        
        $this->features=$_features;
        $this->size=$_size;        
    }
}
?>
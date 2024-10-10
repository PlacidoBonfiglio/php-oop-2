<?php 

class Product{
    public $image;
    public $type;
    public $material;
    public $weight;

    public function __construct(
        string $_image, 
        string $_type,
        string $_material,
        float $_weight
    ){
        $this->image = $_image;
        $this->type = $_type;
        $this->material = $_material;
        $this->weight = $_weight;
    }
}

?>
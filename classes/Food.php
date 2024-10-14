<?php 

//include_once ('./Products.php');
//require_once __DIR__ . "/../traits/Sellable.php";

class Food extends Product{
    public $expire_date;

    use Sellable;

    public function __construct(
        string $_image, 
        string $_type,
        string $_material,
        float $_weight,
        string $_category,
        string $_expire_date,
        int $_quantityProduct
    ){

        parent::__construct($_image, $_type, $_material, $_weight, $_category, $this->expire_date = $_expire_date, $this->quantityProduct = $_quantityProduct);

    }


}

?>
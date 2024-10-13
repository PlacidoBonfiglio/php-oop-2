<?php 
trait Sellable{
    public $quantityProducts;

    public function isSellable($quantityproduct) : bool {
        if ( $this->$quantityproduct > 0 ) {
            return true;
        } else {
            return false;
        }
    }
}
?>
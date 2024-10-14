<?php 
trait Sellable{
    public $quantityProduct;

    public function isSellable(){
        if ( $this->quantityProduct < 0 ){
            throw new InvalidArgumentException("La quantità del prodotto non può avere un numero negativo");
        }else{
            if ( $this->quantityProduct > 0 ) {
                return true;
            } else {
                return false;
            }
        }
    }
}
?>
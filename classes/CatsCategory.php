<?php 
require_once __DIR__ . "/Products.php";

// Estendo le categorie di classe Product
class CatsCategory extends Product{

    public function __construct(
        string $image, 
        string $type,
        string $material,
        float $weight,
    )
    {
        // sovrascrivo 
        parent::__construct($image, $type, $material, $weight);
    }
}

?>
<?php 

require_once __DIR__ . "/Products.php";

// Estendo le categorie di classe Product
class DogsCategory extends Product{

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

    // Prendo i valori per poi stamparli
    public function getImageUrl() : string {
        return $this->image;
    }

    public function getType() : string {
        return $this->type;
    }

    public function getMaterial() : string {
        return $this->material;
    }

    public function getWeight() : float {
        return $this->weight;
    }
}

// Creo un oggetto
$dogHouse = new DogsCategory("./img/cuccia.jpg", "Cuccia per cani", "Legno", 10.5);

$dogToy = new DogsCategory("./img/gioco-per-cani-kong.webp", "Giocattolo per cani", "Plastica", 0.2);

$dogFood = new DogsCategory("./img/crocchette-cane-adulti-otto-20-kg.webp", "Croccantini per cani", "Manzo", 20);

?>
<?php 
require_once __DIR__ . "/Products.php";

// Estendo le categorie di classe Product
class DogsCategory extends Product{
    public $icon;
    public $price;

    public function __construct(
        string $image, 
        string $type,
        string $material,
        float $weight,
        string $icon,
        float $price
    )
    {
        // sovrascrivo 
        parent::__construct($image, $type, $material, $weight, $this->icon = $icon, $this->price = $price);
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

    public function getIconUrl() : string {
        return $this->icon;
    }

    public function getPrice() : float {
        return $this->price;
    }
}

// Creo oggetti
$dogHouse = new DogsCategory("./img/cuccia.jpg", "Cuccia per cani", "Legno", 10.5, "./img/icone/cuccia.png", 79.99);

$dogToy = new DogsCategory("./img/gioco-per-cani-kong.webp", "Giocattolo per cani", "Plastica", 0.2, "./img/icone/icona-giochi.png", 3.99);

$dogFood = new DogsCategory("./img/crocchette-cane-adulti-otto-20-kg.webp", "Croccantini per cani", "Manzo", 20, "./img/icone/icona-cibo.webp", 28.50);

?>
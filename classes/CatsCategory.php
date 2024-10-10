<?php 
require_once __DIR__ . "/Products.php";

// Estendo le categorie di classe Product
class CatsCategory extends Product{
    public $icon;

    public function __construct(
        string $image, 
        string $type,
        string $material,
        float $weight,
        string $icon,
    )
    {
        // sovrascrivo 
        parent::__construct($image, $type, $material, $weight, $this->icon = $icon);
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
}

// Creo oggetti
$catHouse = new CatsCategory("./img/casetta-gatti_.jpg", "Casetta per gatti", "Legno", 3.2, "./img/icone/cuccia.png");

$catToy = new CatsCategory("./img/gioco-gatti.jpg", "Giocattolo per gatti", "Plastica", 0.1, "./img/icone/icona-giochi.png");

$catFood = new CatsCategory("./img/cibo-gatti.jpg", "Cibo per gatti", "Salmone", 1.5, "./img/icone/icona-cibo.webp");

?>
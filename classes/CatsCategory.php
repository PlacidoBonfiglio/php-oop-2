<?php 
require_once __DIR__ . "/Products.php";
require_once __DIR__ . "/../traits/Sellable.php";

// Estendo le categorie di classe Product
class CatsCategory extends Product{
    public $icon;
    public $price;
    public $quantity;

    // Uso il tartto Sellable
    use Sellable;

    public function __construct(
        string $image, 
        string $type,
        string $material,
        float $weight,
        string $icon,
        float $price,
        int $quantity,
    )
    {
        // sovrascrivo 
        parent::__construct($image, $type, $material, $weight, $this->icon = $icon, $this->price = $price, $this->quantity = $quantity);
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

    public function getQuantity() : int {
        return $this->quantity;
    }
}

// Creo oggetti
$catHouse = new CatsCategory("./img/casetta-gatti_.jpg", "Casetta per gatti", "Legno", 3.2, "./img/icone/cuccia.png", 45.98, 2);

$catToy = new CatsCategory("./img/gioco-gatti.jpg", "Giocattolo per gatti", "Plastica", 0.1, "./img/icone/icona-giochi.png", 2.79, 0);

$catFood = new CatsCategory("./img/cibo-gatti.jpg", "Cibo per gatti", "Salmone", 1.5, "./img/icone/icona-cibo.webp", 10.85, 6);

?>
<!-- PHP -->
<?php 

require_once __DIR__ . "/classes/Products.php";
require_once __DIR__ . "/classes/DogsCategory.php";
require_once __DIR__ . "/classes/CatsCategory.php";

// Creo un array che contienene i prodotti per cani
$dogsProducts = [
    $dogHouse,
    $dogToy,
    $dogFood,
];

// Creo un array che contienene i prodotti per gatti
$catsProducts = [
    $catHouse,
    $catToy,
    $catFood,
];

?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>

    <!-- BOOTSTRAP 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS -->
     <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>
        <h1 class="text-center fw-bold py-5">PHP OOP 2</h1>
    </header>

    <main>
        <div class="container">

        <!-- SEZIONE CANI -->
            <section id="dogs-products">

                    <div class="d-flex justify-content-center mb-4">
                        <h2 class="me-3">Dogs Products</h2>
                        <img src="./img/icone/icona-cane.png" alt="dog-icon" class="icon">
                    </div>

                <div class="row row-cols-4 gap-5 justify-content-center text-center">
                    <?php foreach($dogsProducts as $singleDogProduct) { ?>
                        
                    <div class="col dog-card">
                        <figure class="position-relative">
                            <img src="<?php echo $singleDogProduct->getImageUrl()?>" alt="img">
                            <img src="<?php echo $singleDogProduct->getIconUrl()?>" alt="dogs-icons" class="card-icon">
                        </figure>
                        
                        <h3 class="text-center mb-4 text-white"><?php echo $singleDogProduct->getType() ?></h3>
                        <p class="fs-5"><b>Materiale: </b><?php echo $singleDogProduct->getMaterial() ?></p>
                        <p class="fs-5"><b>Peso dell'articolo: </b><?php echo $singleDogProduct->getWeight() ?> kg</p>
                        <p class="fs-5"><b>Prezzo: </b><?php echo $singleDogProduct->getPrice() ?> €</p>
                    </div>
                    <?php } ?>
                </div>

            </section>

            <!-- SEZIONE GATTI -->
            <section id="cats-products">

                <div class="d-flex justify-content-center mb-4">
                    <h2 class="me-3">Cats Products</h2>
                    <img src="./img/icone/icona-gatto.png" alt="cat-icon" class="icon">
                </div>

                <div class="row row-cols-4 gap-5 justify-content-center text-center">

                    <?php foreach($catsProducts as $singleCatProduct) { ?>
                        <div class="col cat-card">
                            <figure class="position-relative">
                                <img src="<?php echo $singleCatProduct->getImageUrl()?>" alt="img">
                                <img src="<?php echo $singleCatProduct->getIconUrl()?>" alt="cats-icons" class="card-icon">
                            </figure>
                        
                            <h3 class="text-center mb-4 text-white"><?php echo $singleCatProduct->getType() ?></h3>
                            <p class="fs-5"><b>Materiale: </b><?php echo $singleCatProduct->getMaterial() ?></p>
                            <p class="fs-5"><b>Peso dell'articolo: </b><?php echo $singleCatProduct->getWeight() ?> kg</p>
                            <p class="fs-5"><b>Prezzo: </b><?php echo $singleCatProduct->getPrice() ?> €</p>
                        </div>
                    <?php } ?>
                </div>

            </section>
        </div>
    </main>
</body>

</html>
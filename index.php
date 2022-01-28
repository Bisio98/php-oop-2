<?php
require_once __DIR__ . '/Sandali.php';
require_once __DIR__ . '/Sneaker.php';
require_once __DIR__ . '/Tacchi.php';
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Scarpe.php';

$converse = new Sneaker('Converse', 'All Stars', 39,70);

$havaianas = new Sandali('Havaianas', 'Infradito', 39,20);

$gucci = new Tacchi('Gucci', 'Decollette', 38,350,12);

$ferragni = new User('Chiara', 'Ferragni');
$ferragni->aggiungiProdotto($converse);
$ferragni->aggiungiProdotto($havaianas);
$ferragni->aggiungiProdotto($gucci);
$ferragni_ordine = $ferragni->getCarrello();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>
<body>

    <h1>Benvenuto <?php echo $ferragni->getFullName(); ?> questo è il tuo carrello</h1>

    <?php foreach($ferragni_ordine as $product) { ?>
        <div>
            <h2><?php echo $product->marca; ?> - <?php echo $product->modello; ?></h2>
            <div>Taglia: <?php echo $product->taglia; ?></div>
            <div>Prezzo: <?php echo $product->prezzo; ?> Euro</div>

            <?php if(isset($product->tacco)) { ?>
                <div>Altezza tacco: <?php echo $product->tacco; ?> cm</div>
            <?php } ?>
        </div>
    <?php } ?>
    
</body>
</html>
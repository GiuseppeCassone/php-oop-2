<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    require 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/d61896bf44.js" crossorigin="anonymous"></script>
</head>
<body class="bg-secondary">

    <div class="container p-5">
        <h1 class="text-center text-white">SHOP PRODOTTI PER CANI E GATTI</h1>
        <div class="row p-5">           
            <?php 
            foreach($products as $product){
                echo "<div class='card shadow-lg p-0'>
                            <img src=" . $product->image . " alt=' . $product->name . '>
                            <div class='card-body p-4'> 
                                <h4>Marca: " . $product->name . "</h4>
                                <p>Prezzo: " . $product->price . "</p>
                                <p>Descrizione: " . $product->description . "</p>
                                <p>Categoria: " . $product->category->getCategory() . "</p>"; 
                                if($product instanceof Food){
                                    echo "<strong>Tipo: " . $product->type . "</strong>";
                                } elseif ($product instanceof Toy) {
                                    echo "<strong>Tipo: " . $product->type . "</strong>";
                                }
                echo "      </div>
                       </div>";
            }
            
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
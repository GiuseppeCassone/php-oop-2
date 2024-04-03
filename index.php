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
    <script src="https://kit.fontawesome.com/d61896bf44.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <div class="row">           
            <?php 
            foreach($products as $product){
                echo "<div class='card'> 
                <h4>" . $product->name . "</h4>
                <p>" . $product->price . "</p>
                <p>" . $product->description . "</p>
                <p>" . $product->category->getCategory() . "</p>"; 
                if($product instanceof Food){
                    echo "<strong> " . $product->type . "</strong>";
                } elseif ($product instanceof Toy) {
                    echo "<strong> " . $product->type . "</strong>";
                }
                echo "</div>";
            }
            
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php 

    require './Models/Product.php';
    require './Models/Food.php';
    require './Models/Toy.php';
    require './Models/Category.php';

    $product1 = new Product("Monge", "9.99", "Cibo per cani, croccantini gustosi al manzo");
    $product1Category = new Category("Cani", "<i class='fa-solid fa-dog'></i>");
    $product1->category = $product1Category;

    $product2 = new Product("Monge", "10.99", "Cibo per gatti, croccantini gustosi al manzo");
    $product2Category = new Category("Gatto", "<i class='fa-solid fa-cat'></i>");
    $product2->category = $product2Category;

    $products = [
        $product1,
        $product2,
    ]
?>
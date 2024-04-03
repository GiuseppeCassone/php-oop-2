<?php 

    require './Models/Product.php';
    require './Models/Food.php';
    require './Models/Toy.php';
    require './Models/Category.php';

    $product1 = new Food("Monge per cani", "9.99", "croccantini gustosi al manzo", "Cibo");
    $product1Category = new Category("Cani", "<i class='fa-solid fa-dog'></i>");
    $product1->category = $product1Category;

    $product2 = new Food("Monge per gatti", "10.99", "croccantini gustosi al manzo", "Cibo");
    $product2Category = new Category("Gatto", "<i class='fa-solid fa-cat'></i>");
    $product2->category = $product2Category;

    $product3 = new Toy("Friskies", "5.99", "Pallina resistente per il tuo cane", "Giochi");
    $product3Category = new Category("Cani", "<i class='fa-solid fa-dog'></i>");
    $product3->category = $product1Category;

    $product4 = new Toy("Friskies", "3.99", "Giocattolo soffice per il tuo gatto", "Giochi");
    $product4Category = new Category("Cani", "<i class='fa-solid fa-dog'></i>");
    $product4->category = $product1Category;

    $products = [
        $product1,
        $product2,
        $product3,
        $product4
    ]
?>
<?php 

    require './Models/Product.php';
    require './Models/Food.php';
    require './Models/Toy.php';
    require './Models/Kennel.php';
    require './Models/Category.php';

    $product1 = new Food("Monge per cani", "9.99", "croccantini gustosi al manzo", "https://www.gardenbedettishop.com/8217-large_default/crocchette-per-cani-monge-adult-salmone-e-riso-12-kg.jpg", "Cibo", "5kg");
    $product1Category = new Category("Cani", "<i class='fa-solid fa-dog'></i>");
    $product1->category = $product1Category;

    $product2 = new Food("Monge per gatti", "10.99", "croccantini gustosi al manzo", "https://www.bestprato.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/m/o/monge-natural-superpremium-monoprotein-per-gatti-adulti-sterilizzati-trota-1_5-kg.jpg", "Cibo", "3kg");
    $product2Category = new Category("Gatto", "<i class='fa-solid fa-cat'></i>");
    $product2->category = $product2Category;

    $product3 = new Toy("Friskies", "5.99", "Pallina resistente per il tuo cane", "https://www.lifestyleblog.it/wp-content/uploads/2013/09/Toys.jpg", "Giochi");
    $product3Category = new Category("Cani", "<i class='fa-solid fa-dog'></i>");
    $product3->category = $product3Category;

    $product4 = new Toy("Friskies", "3.99", "Giocattolo soffice per il tuo gatto", "https://www.lifestyleblog.it/wp-content/uploads/2013/09/Toys.jpg", "Giochi");
    $product4Category = new Category("Gatto", "<i class='fa-solid fa-cat'></i>");
    $product4->category = $product4Category;

    $product5 = new Kennel("Fuss Dog", "50.99", "Cuccia in legno per il tuo cane", "https://www.lifestyleblog.it/wp-content/uploads/2013/09/Toys.jpg", "Cuccia");
    $product5Category = new Category("Cani", "<i class='fa-solid fa-dog'></i>");
    $product5->category = $product5Category;

    $product6 = new Kennel("Good Pet", "30.99", "Cuccia morbida e confortevole per il tuo gatto", "https://www.lifestyleblog.it/wp-content/uploads/2013/09/Toys.jpg", "Cuccia");
    $product6Category = new Category("Gatto", "<i class='fa-solid fa-cat'></i>");
    $product6->category = $product6Category;

    $products = [
        $product1,
        $product2,
        $product3,
        $product4,
        $product5,
        $product6
    ]
?>
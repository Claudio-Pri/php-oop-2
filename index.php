<?php
    class Product {
        public $name;
        public $price;
        public $brand;
        public $productCode;
        public $productImg;
        
        //costruttore prodotto
        public function __construct(
            
            string $name,
            float $price,
            string $brand,
            string $productCode,
            string $productImg
        ) {
            $this->name = $name;
            $this->price = $price;
            $this->brand = $brand;
            $this->productCode = $productCode;
            $this->productImg = $productImg;
        }
        // public function poiSiVede() {

        // }
    }
    $exampleProduct = new Product("Dog Puppy Mini", 23.60, "Royal Canin", "A123b456", "URL IMMAGINE PRODOTTO");
    var_dump($exampleProduct);

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP 2</title>
    </head>
    <body>
        <h1>
             PHP OOP 2
        </h1>
    </body>
</html>
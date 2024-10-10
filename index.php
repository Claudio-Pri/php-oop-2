<?php
    class Product {
        public $category;
        public $name;
        public $price;
        public $brand;
        public $productCode;
        public $productDescription;
        public $productImg;
        
        //costruttore prodotto
        public function __construct(
            string $category,
            string $name,
            float $price,
            string $brand,
            string $productCode,
            string $productDescription,
            string $productImg
        ) {
            $this->category = $category;
            $this->name = $name;
            $this->price = $price;
            $this->brand = $brand;
            $this->productCode = $productCode;
            $this->productDescription = $productDescription;
            $this->productImg = $productImg;
        }
        // public function poiSiVede() {

        // }
    }
    $exampleProduct = new Product("dogs","Dog Puppy Mini", 23.60, "Royal Canin", "A123b456", "lorem ipsum dolor", "URL IMMAGINE PRODOTTO");
    var_dump($exampleProduct);

    // non ha senso
    // class Dogs extends Product {
    //     queste dovrebbero essere classi
    //     public $food;
    //     public $toys;
    //     public $kennels;
    // }

    class Food extends Product {
        public $ingredients;
        public $type;
        public $format;

        function __construct(
            string $category,
            string $name,
            float $price,
            string $brand,
            string $productCode,
            string $productDescription,
            string $productImg,

            array $ingredients,
            string $type,
            string $format
        ){
            parent:: __construct(
                $category,
                $name,
                $price,
                $brand,
                $productCode,
                $productDescription,
                $productImg
            );
            $this->ingredients = $ingredients;  
            $this->type = $type;  
            $this->format = $format;  
        }
    }
    $newExampleProduct = new Food(
        "dogs",
        "Dog Puppy Mini",
        23.60,
        "Royal Canin",
        "A123b456",
        "lorem ipsum dolor",
        "URL IMMAGINE PRODOTTO",
        [
            "pollo",
            "grano",
            "sale",
            "acqua"
        ],
        "dry",
        "2kg"
    );

    var_dump($newExampleProduct);

    class Toy extends Product {
        public $type;
        public $materials;

        function __construct(
            string $category,
            string $name,
            float $price,
            string $brand,
            string $productCode,
            string $productDescription,
            string $productImg,

            string $type,
            string $materials
        ){
            parent:: __construct(
                $category,
                $name,
                $price,
                $brand,
                $productCode,
                $productDescription,
                $productImg
            ); 
            $this->type = $type;  
            $this->materials = $materials;  
        }
    }

    $newExampleToy = new Toy(
        "dogs",
        "Gioco per cani in osso",
        3.50,
        "Camon",
        "A123b456",
        "lorem ipsum dolor",
        "URL IMMAGINE PRODOTTO",
        "chewing",
        "bone"
    );

    var_dump($newExampleToy);

    // class Toys extends Product {
    //     public $type;
    //     public $materials;
    // }
    // class Kennels extends Product {
    //     public $type;
    //     public $size;
    // }
    // class Pesticides extends Product {
    //     public $type;
    // }


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
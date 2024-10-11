<?php
    class Category {
        public $name;
        public $icon;

        public function __construct(
            string $name,
            string $icon,
        ){
            $this->name = $name;
            $this->icon = $icon;  
        }
    }
    $cani = new Category('Cani', 'cani_icona');
    $gatti = new Category('Gatti', 'gatti_icona');
    var_dump($cani);
    var_dump($gatti);

//rivedere lezione per category
    class Product {
        protected $category;
        public $name;
        public $price;
        public $brand;
        public $productCode;
        public $productDescription;
        public $productImg;
        
        //costruttore prodotto
        public function __construct(
            Category $category, //qui errore
            string $name,
            float $price,
            string $brand,
            string $productCode,
            string $productDescription,
            string $productImg
        ) {
            $this->setCategory($category);
            $this->name = $name;
            $this->price = $price;
            $this->brand = $brand;
            $this->productCode = $productCode;
            $this->productDescription = $productDescription;
            $this->productImg = $productImg;
        }
        public function setCategory(Category $category) {

            $this->category = $category;
            // $categories = [
            //     'cani',
            //     'gatti'
            // ];
            // if(
            //     is_string($category)
            //     &&
            //     in_array($category, $categories)
            // ) {
            //     $this->category = $category;
            // }
            // else {
            //     $this->category = null;
            // }

        }
    }

    

    $exampleProduct = new Product(
        $cani,
        "Dog Puppy Mini",
        23.60,
        "Royal Canin",
        "A123b456",
        "lorem ipsum dolor",
        "URL IMMAGINE PRODOTTO"
    );
    var_dump($exampleProduct);

    class Food extends Product {
        public $ingredients;
        public $type;
        public $format;

        function __construct(
            Category $category,
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
        $cani,
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
            Category $category,
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
        $cani,
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
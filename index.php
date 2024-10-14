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
            Category $category,
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
        }
        public function getCategory() {
            return $this->category;
        }
    }

    

    $exampleProduct = new Product(
        $cani,
        "Dog Puppy Mini",
        23.60,
        "Royal Canin",
        "A123b456",
        "lorem ipsum dolor",
        "https://www.agrizoo2.it/wp-content/uploads/2021/08/rc_spt_dry_minipuppy_mv_2_it_it_1__0-250x250.jpg"
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
        "Dog Puppy Pollo",
        23.60,
        "Royal Canin",
        "A123b456",
        "lorem ipsum dolor",
        "https://www.villaggionatura.com/shop/4820-large_default/royal-canin-x-small-adult-15-kg.jpg",
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
        $gatti,
        "Gioco per gatti in tessuto",
        3.50,
        "Camon",
        "A123b456",
        "lorem ipsum dolor",
        "https://raofarmaceutici.it/32937-large_default/mix-lisca-gioco-gatto-15cm.jpg",
        "chewing",
        "fabric"
    );

    var_dump($newExampleToy);

    $products = [
        $newExampleProduct,
        $newExampleToy,
        $exampleProduct
    ]
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
        <div>
            <?php
                foreach ($products as $product) {  
            ?>
                <!-- <img src="<?php echo $product->productImg ?>" alt=""> -->
                <h2>
                    <?php echo $product->name ?>
                </h2>
                <h3>
                    <?php echo number_format($product->price, 2, ',', '.') ?>
                </h3>
                <h4>
                    <?php echo $product->brand ?>
                </h4>
                <h4>
                    <?php echo $product->getCategory()->name ?>
                </h4>
                <h4>
                    <?php $productClass = get_class($product);
                        if ($productClass === 'Product') {
                            echo 'Prodotto generico';
                        }
                        else if ($productClass === 'Food') {
                            echo 'Cibo e mangimi';
                        }
                        else if ($productClass === 'Toy') {
                            echo 'Giochi e attrezzature';
                        }
                    
                    ?>
                </h4>

                <?php echo '<hr/>' ?>
                
            <?php
                }
            ?>
        </div>
    </body>
</html>
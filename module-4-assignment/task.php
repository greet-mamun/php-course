<?php
class Product {
    // Add properties

    public $id;
    public $name;
    public $price;

    // Initialize properties
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // Add getFormattedPrice method
    public function getFormattedPrice(){
        return number_format($this->price, 2, ".", "");
    }

    // Add showDetails method
    public function showDetails(){
        $price = $this->getFormattedPrice();
        echo <<<DOC
        Product Details:<br/>
        - ID: $this->id<br/>
        - Name: $this->name<br/>
        - Price: $$price
        DOC;
    }
}


// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();

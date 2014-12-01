<?php
class Product {
    public $id;
    public $name;
    public $description;
    public $price;
    public $download_size;
    public $version;
    public $image;
    public $subtitle;

    public static function getProduct($name){
        $app = Bootstrap::getApp();
        $product = new Product();
        //queries database for user
        $stmt = $app->database->stmt_init();
        if ($stmt->prepare("SELECT id, description, price, download_size, version, image, subtitle, name FROM product WHERE name = ?")) {
            $stmt->bind_param("s", $name);
            $stmt->execute();
            $stmt->bind_result(
                $product->id,
                $product->description,
                $product->price,
                $product->download_size,
                $product->version,
                $product->image,
                $product->subtitle,
                $product->name);
            if($stmt->fetch()){
                return $product;
            };
        }

        return null;
        //returns new instance of user
    }
} 
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
    }

    public static function getProductById($id) {
        $app = Bootstrap::getApp();
        $product = new Product();
        //queries database for user
        $stmt = $app->database->stmt_init();
        if ($stmt->prepare("SELECT name, description, price, download_size, version, image, subtitle, name FROM product WHERE id = ?")) {
            $stmt->bind_param("i", $id);
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
    }
    public function getOrderDetails()
    {
        $result = array();
        $app = Bootstrap::getApp();
        $detailsArray = array();
        $stmt = $app->database->stmt_init();
        if ($stmt->prepare("SELECT order_details_id, order_id, prod_id, qty FROM order_details WHERE order_id = ?")) {
            $stmt->bind_param("i", $this->id);
            $stmt->execute();
            $stmt->bind_result($result['order_details_id'], $result['order_id'], $result['prod_id'], $result['qty']);
            while($stmt->fetch()){
                $details = new OrderDetails();
                $details->id = $result['order_details_id'];
                $details->order_id = $result['order_id'];
                $details->prod_id = $result['prod_id'];
                $details->qty = $result['qty'];
                $detailsArray[] = $details;
            };
            return $detailsArray;
        }

        return null;
    }
} 
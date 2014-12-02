<?php
class OrderDetails {
    public $id;
    public $order_id;
    public $prod_id;
    public $qty;

    public function getProduct() {
        $app = Bootstrap::getApp();
        $product = new Product();
        //queries database for user
        $stmt = $app->database->stmt_init();
        if ($stmt->prepare("SELECT id, description, price, download_size, version, image, subtitle, name FROM product WHERE id = ?")) {
            $stmt->bind_param("i", $this->prod_id);
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
} 
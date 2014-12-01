<?php
$app->get('/product/:slug', function($slug) use ($app) {

    $product = Product::getProduct($slug);
    if($product !== null) {
        $app->render("product_base.php", array(
            'title' => $product->name,
            'subtitle' => $product->subtitle,
            'name'=> $product->name,
            'description' => $product->description,
            'price' => $product->price,
            'download_size' => $product->download_size,
            'version' => $product->version,
            'image' => $product->image,
        ));
    }else{
        $app->notFound();
    }

});
 
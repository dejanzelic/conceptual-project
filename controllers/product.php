<?php

$app->map('/product/:slug', function($slug) use ($app) {
    $product = Product::getProduct($slug);
    if($product !== null) {
        $app->render("product_base.php", array(
            'title' => $product->name,
            'subtitle' => $product->subtitle,
            'product' => $product,
            'route'=>'/dzelic/Conceptual/product/'.$slug
        ));
    }else{
        $app->notFound();
    }
})->via('GET', 'POST');
<?php

$app->map('/cart', function() use ($app) {
    $app->request();
    $jcart = $app->view->getData('jcart');

    return $jcart->display_cart();
})->via('GET', 'POST');

$app->get(
    '/checkout',
    function () use ($app) {
        $app->render("checkout.php", array(
            'title' => 'Check-Out',
            'subtitle'=> 'Thank you!'
        ));
    }
);
$app->post(
    '/checkout',
    function () use ($app) {

        if(!isset($_POST['jcartItemId'])){
            $app->flash('error', 'Your cart is empty');
            $app->redirect('/dzelic/Conceptual/index.php');
        }

        $jcart = $app->view->getData('jcart');
        $order = Order::set($_POST['jcartItemId'], $_POST['jcartItemQty']);
        if ($order['success'] === true) {
            $app->flash('success', $order['message']);
            $jcart->empty_cart();
        } else{
            $app->flash('error', $order['message']);

        }
        $app->redirect('/dzelic/Conceptual/index.php/checkout');

    }
);
<?php
class Order {

    public $id;
    public $user_id;
    public $date;

    public static function get($id)
    {
        $app = Bootstrap::getApp();
        $order = new Order();
        //queries database for user
        $stmt = $app->database->stmt_init();
        if ($stmt->prepare("SELECT order_id, user_id, date FROM orders WHERE order_id = ?")) {
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->bind_result(
                $order->id,
                $order->user_id,
                $order->date);
            if($stmt->fetch()){
               return $order;
            };
        }

        return null;
        //returns new instance of user
    }

    public function getDetails()
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
    public static function set($productIds, $qtys){
        $response = array();
        $app = Bootstrap::getApp();
        $user = User::getCurrentUser();
        $order = new Order();

        //queries database for order
        $stmt = $app->database->stmt_init();
        try{
            $app->database->autocommit(false); // <- fails "with there is already an active transaction"

            $stmt->prepare('INSERT INTO orders(user_id, date) VALUES(?, NOW())');
            $stmt->bind_param("i", $user->id);
            $stmt->execute();

            $orderID = $stmt->insert_id;
            for($i = 0; $i < count($productIds); $i++)
            {

                $stmt->prepare('INSERT INTO order_details(order_ID, prod_id, qty) VALUES(?, ?, ?)');
                $stmt->bind_param("iii", $orderID, $productIds[$i], $qtys[$i]);
                $stmt->execute();
            }

            $app->database->commit ();
            $response['success'] = true;
            $response['message'] = 'Your order has been processed successfully!';

        } catch(\Exception $e)
        {
            $app->database->rollback();
            $response['success'] = false;
            $response['message'] = $e->getMessage();
        }

        return $response;
        //returns new instance of user
    }
} 
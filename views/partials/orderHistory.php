<?php
$user = User::getCurrentUser();
$orders = $user->getOrders();
?>
<h1>Order History</h1>

<?php if (count($orders) < 1){?>
    <h2 class="text-center">No Order History</h2>
<?php } ?>
    <?php foreach ($orders as $order){?>

        <?php $details = $order->getDetails(); ?>
        <h2 class="text-center">Order ID: #<?php echo $order->id; ?></h2>
        <h4 class="text-center"><span class="label label-success" title="<?php echo $order->date; ?>">
                        <?php echo date('d F, Y', strtotime($order->date)); ?>
                    </span></h4>

        <table class="table table-hover">
            <tr>
                <th></th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
            </tr>
            <?php foreach ($details as $detail){ ?>
                <?php $product = $detail->getProduct(); ?>
                <tr>
                    <td><img alt="Product image" class="thumbnail" src="<?php echo $product->image ?>"></td>
                    <td><?php echo $product->name ?></td>
                    <td><?php echo $detail->qty ?></td>
                    <td><?php echo $product->price ?></td>
                </tr>
            <?php } ?>
        </table>
        <br />
    <?php } ?>

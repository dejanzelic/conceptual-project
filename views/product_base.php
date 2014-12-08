<?php
$product = $this->data->product;
?>
<h1 class="name"><?php echo $product->name ?></h1>
<div class="row">
    <div class="col-lg-4 information">
        <div class="prod_image"><img alt="Product Image" src="<?php echo $product->image ?>"></div>
        <div class="price">$<?php echo $product->price ?></div>
        <div class="size">File size: <?php echo round(($product->download_size / 1024), 2) ?> MB</div>
        <div class="version">Version: <?php echo $product->version ?></div>
    </div>
    <div class="col-lg-8 description">
        <div><?php echo $product->description ?></div>
        <form method="post" action="/cart" class="jcart">
                <input type="hidden" name="my-item-id" value="<?php echo $product->id ?>" />
                <input type="hidden" name="my-item-name" value="<?php echo $product->name ?>" />
                <input type="hidden" name="my-item-price" value="<?php echo $product->price ?>" />
                <input type="hidden" name="my-item-url" value="<?php echo $this->data->route?>" />
                <input type="text" name="my-item-qty" value="1" size="3" />
                <button type="submit" name="my-add-button" data-availible="<?php if(isset($user)){echo 'true';} else{ echo 'false';} ?>" class="btn btn-success btn-lg add-to-cart"><span class="glyphicon glyphicon-shopping-cart
        "></span> Add to Cart</button>
        </form>
    </div>

</div>
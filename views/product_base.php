<?php

?>
<h1 class="name"><?php echo $this->data->name ?></h1>
<div class="row">
    <div class="col-lg-4 information">
        <div class="prod_image"><img src="<?php echo $this->data->image ?>"></div>
        <div class="price">$<?php echo $this->data->price ?></div>
        <div class="size">File size: <?php echo round(($this->data->download_size / 1024), 2) ?> MB</div>
        <div class="version">Version: <?php echo $this->data->version ?></div>
    </div>
    <div class="col-lg-8 description">
        <div><?php echo $this->data->description ?></div>
        <button type="submit" class="btn btn-success btn-lg add-to-cart"><span class="glyphicon glyphicon-shopping-cart
"></span> Add to Cart</button>
    </div>
</div>
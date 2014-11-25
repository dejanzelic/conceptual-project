<?php
?>
<!-- Static navbar -->
<div class="navbar-wrapper">
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Conceptual</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li <?php if($title == "Home"){ echo 'class="active"';}?> ><a href="/Conceptual">Home</a></li>
                        <li <?php if($title == "About Us"){ echo 'class="active"';}?> ><a href="/Conceptual/about-us.php">About Us</a></li>
                        <li <?php if($title == "Contact Us"){ echo 'class="active"';}?> ><a href="/Conceptual/contact-us.php">Contact Us</a></li>
                        <li <?php if($title == "Products"){ echo 'class="active"';}?> class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Products</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">ConTask</a></li>
                                <li><a href="#">ConCal</a></li>
                                <li><a href="#">ConNotes</a></li>
                            </ul>
                        </li>
                    </ul>
                    <?php
                    if(isset($_SESSION["customer"])){
                        helpers::getLoggedInView($title);
                    }else{
                        helpers::getLogInForm($title);
                    }
                    ?>

                </div>
            </div>
        </nav>
    </div>
</div>

 
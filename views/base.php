<?php
$flash = $this->getData('flash');
$user = $this->getData('user');
$jcart = $this->getData('jcart');
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='author' content='dejanzelic@gmail.com'>
    <link rel='icon' href='/Conceptual/favicon.ico'>
    <title>Conceptual - <?php echo $this->data->title; ?></title>

    <!-- CSS -->

    <link href='/dzelic/Conceptual/css/bootstrap.min.css' rel='stylesheet'>
    <link href="/dzelic/Conceptual/css/toastr.min.css" rel="stylesheet"/>
    <link href='/dzelic/Conceptual/css/style.css' rel='stylesheet'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
    <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
    <![endif]-->
</head>
<body>

<div class="<?php echo $this->data->title ?> banner">
    <div class="banner-text"><?php echo $this->data->subtitle; ?></div>
</div>
<!-- Static navbar -->
<div class="navbar-wrapper">
    <div class="container">
        <nav class="navbar navbar-slate" role="navigation">
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
                        <li <?php if($this->data->title == "Home"){ echo 'class="active"';}?> ><a href="/dzelic/Conceptual">Home</a></li>
                        <li <?php if($this->data->title == "About-Us"){ echo 'class="active"';}?> ><a href="/dzelic/Conceptual/index.php/aboutus">About Us</a></li>
                        <li <?php if($this->data->title == "Contact-Us"){ echo 'class="active"';}?> ><a href="/dzelic/Conceptual/index.php/contactus">Contact Us</a></li>
                        <li <?php if($this->data->title == "Products"){ echo 'class="active"';}?> class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Products</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/dzelic/Conceptual/index.php/product/contask">ConTask</a></li>
                                <li><a href="/dzelic/Conceptual/index.php/product/concal">ConCal</a></li>
                                <li><a href="/dzelic/Conceptual/index.php/product/connotes">ConNotes</a></li>
                            </ul>
                        </li>
                    </ul>
                    <?php if($user !== null){ ?>
                    <ul class="nav navbar-nav navbar-right logout">
                        <li class="dropdown <?php if($this->data->title == "Log-in" || $this->data->title == "Account"){ echo 'active';}?>">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button">Hello, <?php echo $user->name; ?><span class="caret"></span></a>
                            <ul class="dropdown-menu loggedIn" role="menu">
                                <li><a class="btn btn-info linkButton in-list myaccount" href="/dzelic/Conceptual/index.php/account">
                                    My Account
                                </a></li>
                                <li><a class="btn btn-danger linkButton in-list" href="/dzelic/Conceptual/index.php/logout">
                                    Log out
                                </a></li>
                                <li id="jcart"><?php $jcart->display_cart();?></li>

                            </ul>
                        </li>
                    </ul>
                    <?php } else {  ?>
                        <ul class="nav navbar-nav navbar-right loginForm">
                            <li class="dropdown <?php if($this->data->title == "Log-In"){ echo 'active';}?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Log In <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <form class="navbar-form" action="/dzelic/Conceptual/index.php/login" method="post">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" placeholder="Enter Email">
                                                <input type="password" class="form-control" name="password" placeholder="Enter Password">
                                                <button type="submit" class="btn btn-default">Log In</button>
                                            </div>
                                        </form>
                                    </li>
                                    <li><a href="/dzelic/Conceptual/index.php/login">Click Here to Register</a></li>
                                    <li><a href="/dzelic/Conceptual/index.php/login/demoaccount">Click Here Log In W/ Demo Account</a></li>
                                </ul>
                            </li>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="container">
    <!--+++++++++++++++++Success++++++++++++++++++++++-->
    <?php  if (isset($flash['success'])){  ?>

        <div class="alert alert-success" role="alert">
            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
            <?php echo $flash['success']; ?>
        </div>
    <?php }?>
    <!--+++++++++++++++++Error++++++++++++++++++++++-->
    <?php if (isset($flash['error'])){  ?>
        <div class="alert alert-danger" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <?php echo $flash['error']; ?>
        </div>
    <?php }?>
    <!--+++++++++++++++++Warning++++++++++++++++++++++-->
    <?php if (isset($flash['warning'])){  ?>
        <div class="alert alert-warning" role="alert">
            <span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>
            <?php echo $flash['warning']; ?>
        </div>
    <?php }?>
    <!--+++++++++++++++++Content++++++++++++++++++++++-->
    <?php echo $this->content; ?>
</div>

<footer class="bs-docs-footer" role="contentinfo">
    <div class="container">
        <p>Designed by Dejan Zelic</p>
        <p>With help from <a href="http://www.slimframework.com/">SlimPHP</a>, <a href="http://getbootstrap.com/">Bootstrap</a>, <a href="http://jquery.com/">jQuery</a>, <a href="https://github.com/CodeSeven/toastr">Toastr</a>, and <a href="http://conceptlogic.com/jcart/">jCart</a></p>
    </div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src='/dzelic/Conceptual/js/bootstrap.min.js'></script>
<script src='/dzelic/Conceptual/js/jcart.js'></script>
<script src="/dzelic/Conceptual/js/toastr.min.js"></script>
<script src="/dzelic/Conceptual/js/script.js"></script>

</body>
</html>
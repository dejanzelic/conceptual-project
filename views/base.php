<?php
$flash = $this->getData('flash');
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8''>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='author' content='dejanzelic@gmail.com'>
    <link rel='icon' href='/Conceptual/favicon.ico'>
    <title>Conceptual - <?php echo $this->data->title; ?></title>

    <!-- CSS -->
    <link href='/dzelic/Conceptual/css/bootstrap.min.css' rel='stylesheet''>
    <link href='/dzelic/Conceptual/css/style.css' rel='stylesheet''>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
    <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
    <![endif]-->
</head>
<body>

<div class="home banner">
    <div class="banner-text"><?php echo $this->data->subtitle; ?></div>
</div>
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
                        <li <?php if($this->data->title == "Home"){ echo 'class="active"';}?> ><a href="/dzelic/Conceptual">Home</a></li>
                        <li <?php if($this->data->title == "About Us"){ echo 'class="active"';}?> ><a href="/dzelic/Conceptual/index.php/aboutus">About Us</a></li>
                        <li <?php if($this->data->title == "Contact Us"){ echo 'class="active"';}?> ><a href="/dzelic/Conceptual/index.php/contactus">Contact Us</a></li>
                        <li <?php if($this->data->title == "Products"){ echo 'class="active"';}?> class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Products</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">ConTask</a></li>
                                <li><a href="#">ConCal</a></li>
                                <li><a href="#">ConNotes</a></li>
                            </ul>
                        </li>
                    </ul>
                    <?php if($this->getData('user') !== null){ ?>
                    <ul class="nav navbar-nav navbar-right logout">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Hello <?php echo $this->getData('user')->name; ?></a>
                            <ul class="dropdown-menu" role="menu">
                                <form class="navbar-form" action="/Conceptual/services/endSession.php">
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                            </ul>
                        </li>
                    </ul>
                    <?php } else {  ?>
                        <ul class="nav navbar-nav navbar-right loginForm">
                            <li class="dropdown <?php if($this->data->title == "Log in"){ echo 'active';}?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Log In</a>
                                <ul class="dropdown-menu" role="menu">
                                    <form class="navbar-form" action="/dzelic/Conceptual/index.php/login" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Enter Email">
                                            <input type="password" class="form-control" name="password" placeholder="Enter Password">
                                            <div class="register"><a href="/dzelic/Conceptual/index.php/login">Click Here to Register</a></div>
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </div>
                                    </form>
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
    <?php if (isset($flash['success'])){  ?>
        <div class="alert alert-success" role="alert">
            <?php echo $flash['success']; ?>
        </div>
    <?php }?>
    <?php if (isset($flash['error'])){  ?>
        <div class="alert alert-danger" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
            <?php echo $flash['error']; ?>
        </div>
    <?php }?>
    <?php echo $this->content; ?>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src='/dzelic/Conceptual/js/bootstrap.min.js'></script>
</body>
</html>
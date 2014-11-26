<?php
//start a php session
session_name("customer");
session_start("customer");
if(isset($_SESSION["customer"])){
    header('Location: account.php');
}
helpers::getHeader("Log in");
?>

<body>
<div class="login banner">
    <div class="banner-text">Log in/Register</div>
</div>
<?php helpers::getNavBar("Log in");?>
<div class="container">
    <div class="messages"><?php if(isset($_GET['message'])){echo $_GET['message']; }  ?></div>
    <div class="row">
        <div class="col-lg-6">
            <h2>Log In</h2>
            <form action="/dzelic/Conceptual/index.php/login" method="post">
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                    <br/>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                    <br/>
                    <button type="submit" class="btn btn-success btn-lg">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-lg-6">
            <h2>Register</h2>
            <form action="../services/register.php" method="post">
                <div class="form-group" >
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                    <br/>
                    <input type="text" class="form-control" id="Name" name="name" placeholder="Enter Name">
                    <br/>
                    <input type="password" class="form-control" id="password" placeholder="Enter Password"
                           title="At least 1 small-case letter At least 1 Capital letter At least 1 digit At least 1 special character Length should be between 8-30 characters. Spaces allowed "
                           pattern="(?=^.{8,30}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&amp;*()_+}
                           {&quot;&quot;:;'?/&gt;.&lt;,]).*$" onchange="form.reenter.pattern=this.value"
                            name="password">
                    <br/>
                    <input type="password" class="form-control" id="reenter" placeholder="Reenter Password">
                    <br/>
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php helpers::getscripts();?>
</body>

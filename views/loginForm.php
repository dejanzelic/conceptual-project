<?php ?>
<ul class="nav navbar-nav navbar-right loginForm">
    <li class="dropdown <?php if($title == "Log in"){ echo 'active';}?>">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Log In</a>
        <ul class="dropdown-menu" role="menu">
            <form class="navbar-form" action="/Conceptual/services/process.php" method="post">
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


 
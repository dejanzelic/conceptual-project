<?php
//No idea why this is the only way but I needed to include Document root to get this to work
include("{$_SERVER['DOCUMENT_ROOT']}/dzelic/Conceptual/services/dbconnect.php");
$name = 'Unchanged';
$stmt = $dbc->stmt_init();
if ($stmt->prepare("SELECT name FROM user WHERE id = ?")) {
    $stmt->bind_param("s", $_SESSION["customer"]);
    $stmt->execute();
    $stmt->bind_result($name);
    if ($stmt->fetch()) {
        $name = $name;
    }
}

$dbc->close();
?>
<ul class="nav navbar-nav navbar-right logout">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Hello <?php echo $name; ?></a>
        <ul class="dropdown-menu" role="menu">
            <form class="navbar-form" action="/Conceptual/services/endSession.php">
                    <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </ul>
    </li>
</ul>


 
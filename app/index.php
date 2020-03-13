

<?php
require ("templates/header.php");
require ("templates/home.php");
require ("templates/aside.php");
require ("templates/footer.php");
require ("functions.php");


$page = "";
$title = "Home";

if ($page == "") {
    require ("templates/home.php");
    require ("templates/aside.php");
    require ("templates/footer.php");
}


?>


<?php

$page = "home";
$title = "Home";

if (!empty($_GET) && !empty($_GET['p'])) {
    $page = $_GET['p'];
}

require("models/Model.php");
require("Controllers/controller.php");
require("views/header.php");

if (file_exists("views/$page.php")) {
    if (file_exists("models/$page-model.php")) {
        require("models/$page-model.php");
    }
    if (file_exists("Controllers/$page-controller.php")) {
        require("Controllers/$page-controller.php");
    }
    require("views/$page.php");
} else {
    require("views/home.php");
}

require("views/aside.php");
require("views/footer.php");




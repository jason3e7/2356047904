<?php
include("flag.php");
$controllerName = $_GET['c'];
if (class_exists($controllerName)) {
    $tmp = base64_decode($_GET['t']);
    $controller = new $controllerName($tmp, $_GET['v']);
    $controller->render();
} else {
    highlight_file(__FILE__);
    die(urldecode('%F0%9F%92%A9'));
}
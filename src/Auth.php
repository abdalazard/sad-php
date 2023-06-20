<?php
include_once 'routes/Router.php';
session_start();

if (!isset($_SESSION["email"])) {
    session_destroy();
    $msg = "Acesso negado";
    header("location: " . $router->toHomePage() . $msg);
}

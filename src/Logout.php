<?php
include_once 'routes/Router.php';

session_start();
session_destroy();
$home_url = "..";

$msg = "Logout efetuado";
header("location: " . $router->toHomePage() . $msg);
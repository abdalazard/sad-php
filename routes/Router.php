<?php

//Rota para todos as pastas e arquivos
$router = new Router();

class Router
{
    public $homepage;

    public $route;

    public function toHomePage()
    {
        echo $this->homepage = "index.php";
    }

    public function toPages($path)
    {
        echo  "../pages/" . $path . "/" . $path . ".php";
    }

    public function toComponents($path)
    {
        echo $this->route = "../components/" . $path . ".php";
    }

    public function toSrc($folder, $file)
    {
        echo $this->route = "../src/" . $folder . "/" . $file;
    }
}
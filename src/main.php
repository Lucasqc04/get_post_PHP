<?php

include_once __DIR__ . "/../vendor/autoload.php";
 
use App\model\Usuario;

 

$u = new Usuario("lucas");
echo $u->getnome() . ", de acordo com o get, você tem: ";
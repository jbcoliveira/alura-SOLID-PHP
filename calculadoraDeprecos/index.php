<?php

function autoload($classname) {
    require_once $classname.".php";
}
spl_autoload_register("autoload");

$compra = new Compra(3000,"SAO PAULO");
$calculadora = new CalculadoraDePrecos(new TabelaDePreco(), new Transportadora());

echo $calculadora->calcula($compra);
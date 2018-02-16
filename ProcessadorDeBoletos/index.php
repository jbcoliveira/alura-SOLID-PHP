<?php

function autoload($classname) {
    require_once $classname.".php";
}
spl_autoload_register("autoload");

$boletos = array();

$fatura = new Fatura("Joao",500);

$boleto1 = new Boleto(100);
$boleto2 = new Boleto(100);
$boleto3 = new Boleto(300);


$boletos[] = $boleto1;
$boletos[] = $boleto2;
$boletos[] = $boleto3;

$processaBoletos = new ProcessadorDeBoletos();


$processaBoletos->processa($boletos, $fatura);

var_dump( $fatura);

<?php
function autoload($classname) {
    require_once $classname.".php";
}
spl_autoload_register("autoload");


$funcionario = new Funcionario(new Desenvolvedor(new DezOuVintePorcento()),3000);
$calculadora = new CalculadoraDeSalario();

echo $calculadora->calcula($funcionario);

//var_dump($funcionario);
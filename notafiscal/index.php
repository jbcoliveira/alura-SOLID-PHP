<?php
function autoload($classname) {
    require_once $classname.".php";
}
spl_autoload_register("autoload");

$fatura = new Fatura(1000);

$geradorNf = new GeradorNotaFiscal();
$geradorNf->adicionaAcao(new EnviadorDeEmail());
$geradorNf->adicionaAcao(new NotaFiscalDao());

$nf = $geradorNf->gera($fatura);

echo $nf->getValorBruto() . "<br />";
echo $nf->getValorLiquido() . "<br />";
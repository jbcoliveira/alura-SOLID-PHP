<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of calculadoraDePrecos
 *
 * @author jboliveira
 */
class CalculadoraDePrecos {
    private $tabela;
    private $frete;
    
    function __construct(iTabelaDePrecoPadrao $tabela, iFrete $frete) {
        $this->tabela = $tabela;
        $this->frete = $frete;
    }

    
    public function calcula(Compra $produto) {            

            $desconto = $this->tabela->aplicarDescontoPara($produto->getValor());                  
            $frete = $this->frete->para($produto->getCidade());

            return $produto->getValor() * (1-$desconto) + $frete;
        }
}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Compra
 *
 * @author jboliveira
 */
class Compra {
    private $valor;
    private $cidade;
    
    function __construct($valor, $cidade) {
        $this->valor = $valor;
        $this->cidade = $cidade;
    }

    
    function getValor() {
        return $this->valor;
    }

    function getCidade() {
        return $this->cidade;
    }


}

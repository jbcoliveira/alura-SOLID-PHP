<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cargo
 *
 * @author joao
 */
class Cargo {

    private $regra;

    function __construct(RegraDeCalculo $regra) {
        $this->regra = $regra;
    }
    
    function getRegra() {
        return $this->regra;
    }



}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TabelaDePrecoPadrao
 *
 * @author jboliveira
 */
class TabelaDePreco implements iTabelaDePrecoPadrao{
    public function aplicarDescontoPara($valor) {
            if($valor > 5000) return 0.03;
            if($valor > 1000) return 0.05;
            return 0;
        }
}

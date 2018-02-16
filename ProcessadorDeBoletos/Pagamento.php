<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pagamento
 *
 * @author jboliveira
 */
class Pagamento {
        private $valor;
        private $forma;

        public function __construct($valor,$forma) {
            $this->valor = $valor;
            $this->forma = $forma;
        }

        public function getValor() {
            return $this->valor;
        }

        public function getForma() {
            return $this->forma;
        }
}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NotaFiscal
 *
 * @author joao
 */
class NotaFiscal {

    private $id;
    private $valorBruto;
    private $impostos;

    public function __construct($valorBruto, $impostos, $id = null) {
        $this->id = $id;
        $this->valorBruto = $valorBruto;
        $this->impostos = $impostos;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getValorBruto() {
        return $this->valorBruto;
    }

    public function setValorBruto($valorBruto) {
        $this->valorBruto = $valorBruto;
    }

    public function getImpostos() {
        return $this->impostos;
    }

    public function setImpostos($impostos) {
        $this->impostos = $impostos;
    }

    public function getValorLiquido() {
        return $this->valorBruto - $this->impostos;
    }

}

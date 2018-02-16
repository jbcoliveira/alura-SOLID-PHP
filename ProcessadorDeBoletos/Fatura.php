<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Fatura
 *
 * @author jboliveira
 */
class Fatura {

    private $cliente;
    private $valor;
    private $pagamentos;
    private $pago;
    private $totalPago;

    public function __construct($cliente, $valor) {
        $this->cliente = $cliente;
        $this->valor = $valor;
        $this->pago = false;
        $this->totalPago = 0;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getPagamentos() {
        return $this->pagamentos;
    }

    public function addPagamento(Pagamento $pagamento) {
        $this->pagamentos[] = $pagamento;
        $this->totalPago += $pagamento->getValor();
        
        if ($this->valorTotalDosPagamentos() >= $this->valor) {
            $this->pago = true;
        }
    }

    public function isPago() {
        return $this->pago;
    }

    private function valorTotalDosPagamentos() {
        $total = 0;

        foreach ($this->pagamentos as $pagamento) {
            $total += $pagamento->getValor();
        }
        return $total;
    }

}

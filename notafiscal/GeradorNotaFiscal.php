<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GeradorNotaFiscal
 *
 * @author joao
 */
class GeradorNotaFiscal {

    private $acoes;

    public function __construct() {
        $this->acoes = array();
    }

    public function adicionaAcao(AcaoAposGerarNota $acao) {
        $this->acoes[] = $acao;
    }

    public function gera(Fatura $fatura) {

        $valor = $fatura->getValorMensal();

        $nf = new NotaFiscal($valor, $this->impostoSobreValor($valor));

        foreach ($this->acoes as $acao) {
            $acao->executa($nf);
        }
        return $nf;
    }

    private function impostoSobreValor($valor) {
        return $valor * 0.06;
    }

}

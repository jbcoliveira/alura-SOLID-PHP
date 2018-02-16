<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProcessadorDeBoletos
 *
 * @author jboliveira
 */
class ProcessadorDeBoletos {
        public function processa($boletos,Fatura $fatura) {

            foreach($boletos as $boleto) {

                $pagamento = new Pagamento($boleto->getValor(), MeioPagamento::Boleto);

                $fatura->addPagamento($pagamento);

            }


        }
}

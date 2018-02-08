<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EnviadorDeEmail
 *
 * @author joao
 */
class EnviadorDeEmail implements AcaoAposGerarNota {

    public function executa(NotaFiscal $nf) {
        echo "email enviado <br />";
    }

}

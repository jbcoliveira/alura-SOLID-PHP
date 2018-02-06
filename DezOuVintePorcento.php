<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DezOuVintePorcento
 *
 * @author joao
 */
class DezOuVintePorcento implements RegraDeCalculo {

    public function calcula(Funcionario $funcionario) {

        if ($funcionario->getSalario() > 3000) {
            return $funcionario->getSalario() * 0.8;
        }

        return $funcionario->getSalario() * 0.9;
    }

}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of QuinzeOuVinteCincoPorcento
 *
 * @author joao
 */
class QuinzeOuVinteCincoPorcento implements RegraDeCalculo{

    public function calcula(Funcionario $funcionario) {

        if ($funcionario->getSalario() > 2000) {
            return $funcionario->getSalario() * 0.75;
        }

        return $funcionario->getSalario() * 0.85;
    }

}

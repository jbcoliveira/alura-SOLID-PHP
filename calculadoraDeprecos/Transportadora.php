<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Frete
 *
 * @author jboliveira
 */
class Transportadora implements iFrete{
   public function para($cidade) {

            if(strtoupper($cidade) == "SAO PAULO") {
                return 30;
            }

            return 45;
        }
}

<?php
namespace AppBundle\LuckyNumber;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LuckyNumberGenerator
 *
 * @author ioana
 */
class LuckyNumberGenerator {

    private $number;
    /**
     * The method generates a random number between 1 and 10
     */
    public function generate()
    {
        $this->number = mt_rand(0, 10);
    }
    
    /**
     * The method returns the random number
     * @return type
     */
    public function getNumber() {
        return $this->number;
    }


    
}

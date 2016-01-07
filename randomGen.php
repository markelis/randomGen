<?php

/**
 * Description of randomGen
 *
 * @author Iraklis Markelis
 */

class RandomGen {
    
    private $sLetters = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
    private $cLetters = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    
    // Is this necessary??? Nahhh :-/
    // private $numbers = array('1','2','3','4','5','6','7','8','9','0');

    // Generate a trully random number between 0 and $max
    public function GenerateNum ($max){
        srand(time());
        return mt_rand(0,$max);    
    }
    
    // Peak a char from my array ($element)
    public function ReturnChar($element) {
        $randNum = $this->GenerateNum(count($element) - 1);
        return $element[$randNum];
    }
    
    // Randomly choose what the next character will be
    public function ChooseElement($choice) {
        
        switch ($choice) {
        case 0:
            return (string)mt_rand(0, 9);
        case 1:
            return $this->ReturnChar($this->sLetters);
        case 2:
            return $this->ReturnChar($this->cLetters);
        default :
            return '_';
        }
    }
    
    public function UseGenerator($numOfChars) {
        $finalString = '';
        
        for ($i = 0; $i < $numOfChars; $i++) {
            $finalString .= $this->ChooseElement($this->GenerateNum(2));
        }
        
        return $finalString;
    }
}

?>
<?php

class Factorial {
    
    static public function calcFact($input) {
        if(gettype($input) != 'integer' || $input < 0) {
            return null;
        }

        if ($input === 0 || $input === 1) {
            return 1;
        }

        $counter = $input;
        $number = 1;

        for ($increment = 2; $increment <= $input; $increment++) {
            $number *= $increment;
        }

        return $number;
    }
}
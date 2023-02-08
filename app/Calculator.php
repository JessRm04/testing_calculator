<?php

namespace App;

class Calculator {
    public function sumar($a, $b) {
        return $a + $b;
    }

    public function restar($a, $b) {
        return $a - $b;
    }

    public function multiplicar($a, $b) {
        return $a * $b;
    }

    // public function dividir($a, $b) {
    //     if ($b == 0) {
    //         throw new Exception("Division by zero");
    //     }
    //     return $a / $b;
    // }
}


?>
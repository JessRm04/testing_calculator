<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase{

   public function test_sumar(){
    /**
     * CASO 1
     * Given - Dos números
     * When - Cuando se ejecute la función sumar
     * Then - Entonces retorna la suma de ambos
    */

    // Arrange : Escenario
    $suma = new Calculator(); // ---> la caja negra

    $resultado_esperado = $suma->sumar(3,5);

    $this->assertEquals(8, $resultado_esperado);
    }
}

?>
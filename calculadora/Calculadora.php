<?php
class Calculadora {
    // Métodos para operações matemáticas

    // Método para soma
    public function somar($num1, $num2) {
        return $num1 + $num2;
    }

    // Método para subtração
    public function subtrair($num1, $num2) {
        return $num1 - $num2;
    }

    // Método para multiplicação
    public function multiplicar($num1, $num2) {
        return $num1 * $num2;
    }

    // Método para divisão
    public function dividir($num1, $num2) {
        if ($num2 == 0) {
            return "Não é possível dividir por zero";
        } else {
            return $num1 / $num2;
        }
    }
}
?>

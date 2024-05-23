<?php
// Incluir o arquivo da classe Calculadora
include 'Calculadora.php';

// Criar um objeto Calculadora
$calc = new Calculadora();

// Realizar operações de cálculo
echo "Soma: " . $calc->somar(5, 3) . "<br>"; // Saída: 8
echo "Subtração: " . $calc->subtrair(10, 4) . "<br>"; // Saída: 6
echo "Multiplicação: " . $calc->multiplicar(2, 6) . "<br>"; // Saída: 12
echo "Divisão: " . $calc->dividir(10, 2) . "<br>"; // Saída: 5
echo "Divisão: " . $calc->dividir(5, 0) . "<br>"; // Saída: Não é possível dividir por zero
?>

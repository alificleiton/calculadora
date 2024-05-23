<?php
// Incluir a classe Calculadora
include 'Calculadora.php';

// Verificar se a expressão foi recebida via POST
if (isset($_POST['expression'])) {
    // Obter a expressão do POST
    $expression = $_POST['expression'];

    // Instanciar a classe Calculadora
    $calc = new Calculadora();

    // Avaliar a expressão usando a função eval()
    // NOTA: Embora seja uma solução simples, o uso de eval() pode ser perigoso em ambientes de produção. Considere validar e processar a expressão de forma mais segura.
    $result = eval("return $expression;");

    // Retornar o resultado
    echo $result;
}
?>

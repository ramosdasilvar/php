<?php

$nome = "Estudante";

$head = "<!DOCTYPE html>
<html>
  <head>
    <title>Site PHP de $nome</title>
  </head>";

$body = "
  <body>
    <h1>Meu nome é $nome</h1>
    <p>Olá $nome! Tudo bem com você?</p>
  </body>
</html>";

$html = $head . $body;

echo $html;

$mensagem_tipagem = "Tipagem Varáveis";

echo "<h3>$mensagem_tipagem: </h3><br>";

echo '-$integer = 100, <br>
-$string = "100",<br>
-float = 3.14, <br>
-$boolean_true = TRUE, <br>
-$boolean_false = FALSE.<br>';


$mensagem_operacao = "Operadores Aritiméticos";

$number_1 = 2;
$number_2 = 10;

echo "<h3>$mensagem_operacao: </h3><br>";
// soma
$operacao = $number_1 + $number_2;
echo "A soma de $number_1 mais $number_2 é $operacao. <br>";

// subtração
$operacao = $number_1 - $number_2;
echo "O subtração de $number_1 por $number_2 é $operacao.<br>";

// multiplicação
$operacao = $number_1 * $number_2;
echo "O número $number_2 multiplicado por $number_1 é $operacao.<br>";

// divisão
$operacao = $number_1 / $number_2;
echo "O número $number_1 divido por $number_2 é $operacao.<br>";


$mensagem_array = "Arrays";

echo "<h3>$mensagem_array: </h3><br>";

$prateleira = [1, 'mundo', 3, 3.14, 5, TRUE];

echo " Primeira posição do array: $prateleira[0],<br>";
echo " Segunda posição do array: $prateleira[1],<br>";
echo " Quarta posição do array: $prateleira[3],<br>";
echo " Sexta posição do array: $prateleira[5].<br>";

echo "<br>O conteudo do array é: ";
print_r($prateleira).'<br>';

echo "<br>O tipo de conteudo do array é: ";
var_dump($prateleira);

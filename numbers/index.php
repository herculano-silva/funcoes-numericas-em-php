<?php
include __DIR__.'/styles.php';

echo '<h1>Funções matemáticas</h1>';

echo '<hr>';
echo '<h2> 1 - round </h2>';
$valor = 10.7890;
$resultado = round($valor);
// Retorna um valor arredondado de valor para precision especificado (número de digitos depois do ponto decimal). precision pode ser negativo ou zero (padrão).
echo "<pre>"; print_r($valor); echo "</pre>";
echo "<pre>"; print_r($resultado); echo "</pre>";

echo '<hr>';
echo '<h2> 2 - ceil </h2>';
$valor = 10.7890;
$resultado = ceil($valor);
// Retorna o próximo maior valor inteiro arredondando para cima do valor, se fracionário.
echo "<pre>"; print_r($valor); echo "</pre>";
echo "<pre>"; print_r($resultado); echo "</pre>";

echo '<hr>';
echo '<h2> 3 - floor </h2>';
$valor = 10.7890;
$resultado = floor($valor);
// Retorna o próximo menor valor inteiro, arredondando o valor se necessário.
echo "<pre>"; print_r($valor); echo "</pre>";
echo "<pre>"; print_r($resultado); echo "</pre>";

echo '<hr>';
echo '<h2> 4 - min </h2>';
$valores = [40,55,10,5,27,38,2];
$resultado = min($valores);
// Se o primeiro e único argumento é um array, min() retorna o menor valor no array. Se no mínimo dois parâmetros são fornecidos, min() retornará o menor deles.
echo "<pre>"; print_r($valores); echo "</pre>";
echo "<pre>"; print_r($resultado); echo "</pre>";

echo '<hr>';
echo '<h2> 5 - max </h2>';
$valores = [40,55,10,5,27,38,2];
$resultado = max($valores);
// Se o primeiro e único parâmetro é um array, max() retorna o maior valor do array. Se no mínimo dois parâmetros são fornecidos, max() retornará o maior desses valores.
echo "<pre>"; print_r($valores); echo "</pre>";
echo "<pre>"; print_r($resultado); echo "</pre>";

echo '<hr>';
echo '<h2> 6 - rand </h2>';
$min = 1;
$max = 99;
$resultado = rand($min,$max);
// Se chamado sem os parâmetros opcionais min e max, rand() retornará um pseudo inteiro randômico entre 0 e getrandmax(). Se você precisa de um número aleatório entre 1 e 99 (inclusive), por exemplo, utilize rand (1, 99).
echo "<pre>"; print_r("minimo: ".$min); echo "</pre>";
echo "<pre>"; print_r("maximo: ".$max); echo "</pre>";
echo "<pre>"; print_r("numero aleatorio: ".$resultado); echo "</pre>";

echo '<hr>';
echo '<h2> 7 - abs </h2>';
$valor = -10;
$resultado = abs($valor);
// O valor absoluto de number. Se o argumento número é do tipo float, o número retornado também é float, em outro caso será inteiro (mas poderá retornar float se o resultado tiver magnitude maior que inteiro).
echo "<pre>"; print_r($valor); echo "</pre>";
echo "<pre>"; print_r($resultado); echo "</pre>";
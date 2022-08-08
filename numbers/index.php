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
// O valor absoluto de valor. Se o argumento número é do tipo float, o número retornado também é float, em outro caso será inteiro (mas poderá retornar float se o resultado tiver magnitude maior que inteiro).
echo "<pre>"; print_r("valor: ".$valor); echo "</pre>";
echo "<pre>"; print_r("Resultado: ".$resultado); echo "</pre>";

echo '<h1>Funções matemáticas - Parte 2</h1>';

echo '<hr>';
echo '<h2> 8 - pow </h2>';
$valor = 2;
$potencia = 8;
$resultado = pow($valor, $potencia);
// Retorna a base elevada ao expoente. Esta função converterá todos os tipos para números, mesmo valores não escalares, o que pode levar a resultados esquisitos.
echo "<pre>"; print_r("valor: ".$valor); echo "</pre>";
echo "<pre>"; print_r("potencia: ".$potencia); echo "</pre>";
echo "<pre>"; print_r("Resultado: ".$resultado); echo "</pre>";


echo '<hr>';
echo '<h2> 9 - sqrt </h2>';
$valor = 16;
$resultado = sqrt($valor);
// Retorna a raiz quadrada. Ou o valor especial NAN para números negativos. 
echo "<pre>"; print_r("valor: ".$valor); echo "</pre>";
echo "<pre>"; print_r("Resultado: ".$resultado); echo "</pre>";


echo '<hr>';
echo '<h2> 10 - pi </h2>';
$resultado = pi();
// Retorna uma aproximação de pi. O retornado float tem uma precisão baseado na diretiva precision no php.ini, onde o padrão é 14. O valor de pi como float.
echo "<pre>"; print_r("Resultado: ".$resultado); echo "</pre>";


echo '<hr>';
echo '<h2> 11 - Decimal p/ binario </h2>';
$decbin = decbin(9);
// Retorna uma string contendo a representação binária do parâmetro number.
echo "<pre>"; print_r("Convertendo 9 para binario:"); echo "</pre>";
echo "<pre>"; print_r("Resultado: ".$decbin); echo "</pre>";


echo '<hr>';
echo '<h2> 12 - Binário p/ Decimal </h2>';
$bindec = bindec(1001);
// Retorna o equivalente decimal do número binário representado pelo argumento. converte um número binário em um integer ou, se precisar por questão de tamanho, float.
echo "<pre>"; print_r("Convertendo 1001 para decimal:"); echo "</pre>";
echo "<pre>"; print_r("Resultado: ".$bindec); echo "</pre>";

echo '<hr>';
echo '<h2> 13 - Decimal p/ hexadecimal </h2>';
$dechex = dechex(15);
// Retorna uma string contendo a representação hexadecimal do argumento number. O maior número que pode ser convertido é 4294967295 em decimal, resultando em "ffffffff".echo "<pre>"; print_r("Convertendo 11 para hexadecimal:"); echo "</pre>";
echo "<pre>"; print_r("Convertendo 15 para decimal:"); echo "</pre>";
echo "<pre>"; print_r("Resultado: ".$dechex); echo "</pre>";
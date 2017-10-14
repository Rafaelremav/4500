<?php

echo '<pre>';

$tamanhoArray = 10;
$numeros = array();



for ($i=0; $i < $tamanhoArray; $i++) { 
	$numeros[] = mt_rand(0,50);
}

var_dump($numeros);

	for ($i=0; $i < $tamanhoArray; $i++) { 
	echo $numeros[$i].',';
}

echo "<hr>";

//------------------------------------------------------------

//MOSTRAR PRIMEIRO NUMERO OU NA POSICAO 0
echo $numeros [0];
echo "<hr>";

//MOSTRAR ULTIMO NUMERO
echo $numeros[$tamanhoArray -1];
echo "<hr>";

//------------------------------------------------------------

//MOSTRAR O NUMERO DA VARIAVEL 'NUM' SE O MESMO FOR PAR
$num = 8;

if($num % 2 == 0){
	echo $num;
}
echo "<hr>";

//MOSTRAR O NUMERO DA VARIAVEL 'NUM' SE O MESMO FOR IMPAR
$num = 8;

if($num % 2 != 0){
	echo $num;
}
echo "<hr>";

//----------------------------------------------------------------

//MOSTRAR OS NUMEROS PARES
foreach ($numeros as $key => $value)
{
	if($value % 2 == 0){
		echo $value . ',';
	}
}
echo "<hr>";


//MOSTRAR OS NUMEROS IMPARES
foreach ($numeros as $key => $value)
{
	if($value % 2 != 0){
		echo $value . ',';
	}
}
//----------------------------------------------------------------
//MAIOR E MENOS NUMEROS
echo "<hr>";
$maior = $numeros[0];
for ($i=0; $i < $tamanhoArray; $i++) { 
	if ($numeros[$i] > $maior) {
		$maior = $numeros[$i];
	}
}
echo $maior;
echo "<br>";
$maior = $numeros[0];
foreach ($numeros as $key => $value) {
	if ($value > $maior) {
		$maior = $value;
	}
}
echo $maior;
echo "<hr>";

$menor = $numeros[0];
for ($i=0; $i < $tamanhoArray; $i++) { 
	if ($numeros[$i] < $menor) {
		$menor = $numeros[$i];
	}
}
echo $menor;
echo "<br>";
$menor = $numeros[0];
foreach ($numeros as $key => $value) {
	if ($value < $menor) {
		$menor = $value;
	}
}
echo $menor;
echo "<hr>";

//--------------------------------------------------------------------


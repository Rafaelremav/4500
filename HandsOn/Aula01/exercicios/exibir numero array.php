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


echo "<hr>";


echo $numeros[0];


?>

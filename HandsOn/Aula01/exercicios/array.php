<?php

$tamanhoArray = 10;
$numeros = array();



for ($i=0; $i < $tamanhoArray; $i++) { 
	$numeros[] = mt_rand(0,50);
	echo $i;
	echo '<br>';
}
	echo "<pre>";
	var_dump($numeros);
	echo '<br>';


?>

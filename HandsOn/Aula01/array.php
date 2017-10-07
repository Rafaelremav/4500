<?php
echo "<pre>";

$var[] = '4Linux';
$var[] = 'PHP';

$var[0] = 'Linux';

var_dump($var);

echo "<hr>";

$pessoa = [
	'nome'=> 'Rafael Alexandre',
	'idade' => 29,
	'profissao' => 'Programador',


];

var_dump($pessoa);

echo "<hr>";

$cursos = [
	'PHP' => [
	'iniciante'=> 500,
	'intermediario' => 501,
	'avancado' => 502],
];
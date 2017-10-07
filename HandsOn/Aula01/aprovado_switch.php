<?php 

//Condicao Aprovado -> Nota >=7 && Frequencia >=8

//Condicao Recuperacao -> Nota >=5 && < 7 && Frequencia >=8

////Condicao Reprovado -> Nota <5 ||  Frequencia <8

$nota = 5;
$frequencia = 8;

switch(true){
	case ($nota >= 7 && $frequencia >=8):
	echo "Aprovado!";
	break;

	case ($nota >=5 && $nota<7 && $frequencia >= 8):
	echo "Recuperacao!";
	break;

	case ($nota < 5 || $frequencia <8):
	echo "REPROVADO!";
	break;

	default:
	#code...
	break;

}



 ?>
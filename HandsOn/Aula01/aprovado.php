<?php 

//Condicao Aprovado -> Nota >=7 && Frequencia >=8

//Condicao Recuperacao -> Nota >=5 && < 7 && Frequencia >=8

////Condicao Reprovado -> Nota <5 ||  Frequencia <8

$nota = 5;
$frequencia = 8;

if($nota >= 7 && $frequencia >=8) {
	echo "Aprovado!";

}elseif ($nota >=5 && $nota<7 && $frequencia >= 8){
	echo "Recuperacao!";

}else{
	echo "Reprovado!";
}



 ?>
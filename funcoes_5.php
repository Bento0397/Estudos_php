<?php 



$a = 10;

// O & significa passagem de parametro por referencia 
// Ele passa o endereço da variável e portanto foge do escopo da função 
function trocaValor(&$a){

	$a +=50;
	return $a;
}



echo $a;

echo "<br>";

echo trocaValor($a);

echo "<br>";

echo $a;

echo "<br>";

echo trocaValor($a);

echo "<br>";

?>
<?php

/*
$frutas = array("laranja" , "abacaxi","melancia");

print_r ($frutas);
*/



/*
$carros [0][0] = "GM";
$carros [0][1] = "Cobalt";
$carros [0][2] = "Onix";
$carros [0][3] = "Camaro";

$carros [1][0] = "Ford";
$carros [1][1] = "fiesta";
$carros [1][2] = "Fusion";
$carros [1][3] = "Eco sport";


echo $carros [0] [3];

echo "</br>" ;

echo end($carros[1]);

*/

$pessoas = array();

array_push($pessoas, array (
	'nome' => 'Gabriel',
	'idade' => 20
));

array_push($pessoas, array (
	'nome' => 'Karina',
	'idade' => 19
));

print_r ($pessoas[0]['nome']); 

require_once("config.php");

?>



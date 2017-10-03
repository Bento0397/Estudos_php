<?php

/*

$pessoas = array();

array_push($pessoas, array (
	'nome' => 'Gabriel',
	'idade' => 20
));

array_push($pessoas, array (
	'nome' => 'Karina',
	'idade' => 19
));

echo json_encode($pessoas); 
*/

$json = '[{"nome":"Gabriel","idade":20},{"nome":"Karina","idade":19}]';

$data = json_decode($json,true) ;

var_dump($data);
?>
<?php

	///Exemplo 01 
	/*	
	define("SERVIDOR","127.0.0.1");

	echo SERVIDOR;

	*/
	 // Exemplo 02

	define("BANCO_DE_DADOS", [
		'127.0.0.1',
		'root',
		'password',
		'teste'

	]);

	print_r (BANCO_DE_DADOS);


	//echo PHP_VERSION; 
?> 

<br>
<br>
<form method="get" action="index.html">
			    	<button type="submit">Index </button>
</form>
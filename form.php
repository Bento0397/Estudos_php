
<br/>
<hr>
<br/>
		<div>
			<form >
				Nome: <input type="text" name="nome"/><br/>
				Ano de Nascimento: <input type="number" name="ano"/><br/>
					<fieldset><legend>Sexo</legend>
						<input type="radio" name="sexo" id="masc" />
						<label for="masc">Masculino</label>
						<input type="radio" name="sexo" id="fem" />
						<label for="fem">Feminino</label>
					</fieldset><br/>
					<input type="submit" value="Enviar"/>
			</form>
		
		</div>

<?php

require_once("config.php");

if (isset($_GET))
{	
	foreach ($_GET as $key => $value) {
		echo "Nome do campo: ".$key  ."<br>";

		echo "Valor do campo: ".$value ."<br>";

		echo "<hr>";
		# code...
	}

}




?>


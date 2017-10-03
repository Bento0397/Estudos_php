<form> 
	<input type="text" name="Nome">
	<input type="date" name="Nascimento">
	<input type="submit" name="ok">
	<fieldset>
		<legend>Sexo</legend>
						<input type="radio" name="sexo" id="masc" />
						<label for="masc">Masculino</label>
						<input type="radio" name="sexo" id="fem" />
						<label for="fem">Feminino</label>
	</fieldset><br/>
</form>

<?php

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
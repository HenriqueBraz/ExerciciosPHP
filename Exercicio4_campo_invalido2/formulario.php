

<html>



	<head>


		<title>Exercicio da Aula 6</title>

	</head>

	<i><h1  title="Por favor, me de um 10 neste trabalho! ^_^">Formulario:</h1></i>

		<form action="http://localhost:8080/index.php" name ="form"method="POST">

		<table><tr>


		

			<td><b>Usuario:</b></td>  <td><input type="text" name="usuario" size ="25" maxlength="30"></td>
		</tr>
		<tr>

			<td><b>Senha:</b></td> <td><input type="text"name="senha" size = "25" maxlength="30"></td><p>

		</tr>
	         <tr>
		</table>

		<p><input  type="submit"  name="button" value="Login">

		<input type="reset" value="Limpar">

               
                

		</form>
</html>

<?php
session_start();

include 'functions.php';

  if (isset($_SESSION['logado']) && $_SESSION['logado'] == false){

      echo 'Não foi possível logar, senha ou usuário incorretos';

  }



?>




<html>

<head>

  <title>Tarefa1</title>

</head>


<form action="http://localhost:8080/tarefa1.php" name ="form"method="POST">

  <table><tr>

    <td><b>Email:</b></td>  <td><input type="text" name="email" size ="25" maxlength="30"></td>
  </tr>
  <tr>

  </table>

  <p><input  type="submit"  name="button" value="Submit">

    <input type="reset" value="Limpar">

  </form>
  </html>

  <?php

// Suponha que você recebeu um parâmetro "email" por POST, como você validaria 
//este dado para ele não estar vazio? E para garantir que é um e-mail válido? 
//Escreva código PHP para esta questão (utilize múltiplas linhas). *


  $email = $_POST['email'];
  $email =  trim ($email);
  $erro = 0;//variável de controle

  if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) ) {

    $erro = 1;
    ECHO ($erro);  //aqui estou imprimindo a variável apenas para demonstração

  } else{

    $erro = 0;
    ECHO($erro); //aqui estou imprimindo a variável apenas para demonstração

  }


  ?>






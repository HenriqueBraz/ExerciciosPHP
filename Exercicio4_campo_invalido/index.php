
<?php
session_start();
include 'functions.php';
 

  $usuario = $_POST["usuario"];
  $senha = $_POST["senha"];

  
  $usuario1 =  trim ($usuario);
  $senha1 =  trim ($senha);

  

  if (valida_login($usuario1,$senha1)) {
	  $_SESSION['logado'] = true;
	  header('location: ./admin.php');
  }
  else{
  	  $_SESSION['logado'] = false;
	  header('location: ./admin.php');


  }

	echo 'Não foi possível logar';
          

?>

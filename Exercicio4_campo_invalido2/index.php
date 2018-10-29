
<?php
session_start();
error_reporting(E_ALL);
include 'functions.php';
include 'Usuario.php';
 

  $usuario = $_POST["usuario"];
  $senha = $_POST["senha"];

  
  $usuario1 =  trim ($usuario);
  $senha1 =  trim ($senha);

  $user = new Usuario();
  

	if ($user->login($usuario1,$senha1)) 
    {
	  $_SESSION['logado'] = true;
	  header('location: ./admin.php');
    }
    else
    {
  	  $_SESSION['logado'] = false;
	  header('location: ./admin.php');
    }

	echo 'Não foi possível logar no admin';
          

?>

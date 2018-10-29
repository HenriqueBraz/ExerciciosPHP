
<?php
session_start();

include 'functions.php';

  if (isset($_SESSION['logado']) && $_SESSION['logado'])
  {

      echo 'Estou online';

  }

  else 
  {
       
	 header('location: ./formulario.php');

	}

?>

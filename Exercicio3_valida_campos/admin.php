
<?php
session_start();

include 'functions.php';

  if (isset($_SESSION['logado']) && $_SESSION['logado'] == true){

      echo 'Estou online';

  }

  else {echo 'Não funfou';}

?>
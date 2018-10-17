
<?php

	
          $frase = array($_POST["frase"]);
          $busca = $_POST["busca"];
          $subst = $_POST["substituir"];


          $novaFrase = str_ireplace($busca,$subst,$frase);


          foreach ( $novaFrase as $a){

	    echo($a);
	}

         
?>



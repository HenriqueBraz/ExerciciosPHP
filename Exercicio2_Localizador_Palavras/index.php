
<?php

	//$cont = 0;

	//$arr = array($_POST["nome1"],$_POST["nome2"],$_POST["nome3"],$_POST["nome4"],$_POST["nome5"]);
 
          $frase = array($_POST["frase"],$_POST["busca" ],$_POST["substituir"]);

          $frase = array($_POST["frase"]);
          $busca = $_POST["busca"];
          $subst = $_POST["substituir"];


          $novaFrase = str_ireplace($busca,$subst,$frase);


          foreach ( $novaFrase as $a){

	    echo($a);
	}

         
        
    	
    

?>



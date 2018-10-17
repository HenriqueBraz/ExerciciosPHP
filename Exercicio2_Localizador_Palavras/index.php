
<?php

	         

          $frase = $_POST["frase"];
          $busca = $_POST["busca"];
          $subst = $_POST["substituir"];

          $pos = stripos($frase, $busca);


          if(stripos($frase, $busca) == true){

	    	$novaFrase = str_ireplace($busca,$subst,$frase);
                echo("O ítem '$busca' está localizado na '$pos' posição da frase: '$frase'");
        	echo'<br>';
        	echo("Modificando '$busca' por '$subst':");
        	echo'<br>';
        	echo($novaFrase);


	  }

	  else{


                echo("Não foi posível encontrar a palavra '$busca' em '$frase'");

          }
      
      

?>



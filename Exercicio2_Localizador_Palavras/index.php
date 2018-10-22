
<?php

	         

          $frase = $_POST["frase"];
          $busca = $_POST["busca"];
          $subst = $_POST["substituir"];
          
          $frase1 =  trim ($frase);

          $pos = stripos($frase1, $busca);


          if(stripos($frase1, $busca) == true){

	    	$novaFrase = str_ireplace($busca,$subst,$frase1);
                echo("O ítem '$busca' está localizado na '$pos' posição da frase: '$frase1'");
        	echo'<br>';
        	echo("Modificando '$busca' por '$subst':");
        	echo'<br>';
        	echo($novaFrase);


	  }

	  else{


                echo("Não foi posível encontrar a palavra '$busca' em '$frase1'");

          }
      
      

?>



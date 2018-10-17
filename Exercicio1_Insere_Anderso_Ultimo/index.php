
<?php

	$arr2 = array();

	$arr = array($_POST["nome1"],$_POST["nome2"],$_POST["nome3"],$_POST["nome4"],$_POST["nome5"]);

	foreach ($arr as $a) {

		if($a != "Anderson"){


          		echo $a;
	                
        	}
		
		else {$cont++;}
          
        
	}
     


	for ($i = 0; $i < $cont; $i++){

	 echo "Anderson";

	}



?>



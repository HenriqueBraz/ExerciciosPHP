
<?php

	$arr2 = array();

	$arr = array($_POST["nome1"],$_POST["nome2"],$_POST["nome3"],$_POST["nome4"],$_POST["nome5"]);

	foreach ($arr as $a) {

		if($a != "Anderson"){


          		$arr2 =([$a]) ;
	                
        	}
		
		else {$cont++;}
          
        
	}
     


	for ($i = 0; $i < $cont; $i++){

	 array_push($arr2, "Anderson");

	}
	
	foreach($arr2 as $b){
		
		print_r($b);
		
	}



?>



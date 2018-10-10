

<?php


$arr = array();


$arr =  $_POST["nome1"];
$arr =  $_POST["nome2"];
$arr =  $_POST["nome3"];
$arr =  $_POST["nome4"];
$arr =  $_POST["nome5"];

$size = count($arr);

for($i = 0; $i < $size; $i++) {
	
	if($arr[$i] == "Anderson"){
	
	end($arr = $arr[$i]);
		
	}
	else{
		
		 var_dump($arr[$i]);
		
	}
   
}


?>



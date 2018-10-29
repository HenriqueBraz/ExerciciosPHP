<?php

class minhaclasse{
	

	public function meuMetodo($foo,$var){

		return 'Olá Mundo!';

	}





}

$var = new minhaClasse();
$foo = $var->meuMetodo('','');
echo $foo;




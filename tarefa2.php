<?php

//Crie uma classe "Palavra". Esta classe deve possuir um método para 
//retornar o número de caracteres da mesma, outro método para retornar 
//o último caractere da palavra e um terceiro método, que recebe um caractere 
//como parâmetro, e retorna o número de incidências deste caractere na palavra. *


class Palavra{
	

	public function conta_caractere($palavra){

		return  strlen($palavra);


	}


	public function ultimo_catractere($palavra){

		return substr($palavra, -1);


	}


	public function inicidencia_caractere($palavra, $busca){

		return substr_count($palavra, $busca);
		
	}


	public static  function xx($numero){


      return 'R$' . number_format($numero,2, ',', '.');


	}



}

$palavra = new Palavra();

echo($palavra->conta_caractere('sim'));
echo("\n");

echo($palavra->ultimo_catractere('sim'));
echo("\n");

echo($palavra->inicidencia_caractere('papepipopu','p'));
echo("\n");

echo($palavra->xx(1211212));
echo("\n");










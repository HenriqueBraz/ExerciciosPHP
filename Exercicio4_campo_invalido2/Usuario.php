<?php # minhaClasse.php;


class Usuario
{
	public $nome;
	public function __construct()
	{
		//$this->nome = $nome;

	}

	public function login($usuario,$senha)
	{

		if($usuario == "Paulo" && $senha == "12345")
		{

			return true;
		}

		else
		{

			return false;
		}

	}

}






<?php
namespace Projeto;
	class Pessoa
	{
		function __construct($nome, $idade, $altura){
			$this->nome = $nome;
			$this->idade = $idade;
			$this->altura = $altura;
	}
	public function andar ()
	{
		echo "Andando...";
	}
	public function indentificacao()
	{
		return "
		Nome:{$this->nome}
		Idade:{$this->idade}
		Altura:{$this->altura}";
	}}
?>
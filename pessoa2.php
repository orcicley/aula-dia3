<?php
	class Pessoa
	{
		protected $nome;
		protected $idade;
		protected $altura;

		function __construct($nome, $idade, $altura){
			$this->nome = $nome;
			$this->idade = $idade;
			$this->altura = $altura;
	}
	public function andar ()
	{
		echo "Correndo...";
	}
	public function indentificacao()
	{
		return "
		Nome:{$this->nome}
		Idade:{$this->idade}
		Altura:{$this->altura}";
	}}
?>
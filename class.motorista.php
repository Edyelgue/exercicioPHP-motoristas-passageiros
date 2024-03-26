<?php

class Motorista{
	// Propriedades ou atributos
	private $nome;
	private $email;
	private $idade;
	private $cnh;

	// Métodos
	// setters
	public function __construct($nome, $email, $idade){
		$this->nome = $nome;
		$this->email = $email;
		$this->idade = $idade;
	}

	public function setCnh($cnh){
		$this->cnh = $cnh;
	}
	// getters
	public function getNome(){
		return $this->nome;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getIdade(){
		return $this->idade;
	}
	public function getCnh(){
		return $this->cnh;
	}
}
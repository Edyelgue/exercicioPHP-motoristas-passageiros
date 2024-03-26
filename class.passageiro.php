<?php

class Passageiro{
	// Propriedades ou atributos
	private $nome;
	private $email;
	private $idade;
	private $pai;
	private $mae;

	// Métodos
	// setters
	public function __construct($nome, $email, $idade) {
		$this->nome = $nome;
		$this->email = $email;
		$this->idade = $idade;
	}
	public function setPai($pai){
		$this->pai = $pai;
	}
	public function setMae($mae){
		$this->mae = $mae;
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
	public function getPai(){
		return $this->pai;
	}
	public function getMae(){
		return $this->mae;
	}
}
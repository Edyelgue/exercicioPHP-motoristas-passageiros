<?php

class Motorista{

	// Propriedades ou atributos
	private $nome;
	private $email;
	private $idade;
	private $cnh;

	// Métodos ou funções
	// setters
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function setIdade($idade){
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

class Passageiro{

	// Propriedades ou atributos
	private $nome;
	private $email;
	private $idade;
	private $pai;
	private $mae;

	// Métodos ou funções
	// setters
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function setIdade($idade){
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

// Pergunte ao usuário quantas pessoas serão informadas
do {
	echo "Informe o número de pessoas que serão relatadas: ";
	$numPessoas = trim(fgets(STDIN)) . "\n";
} while (!is_numeric($numPessoas) || $numPessoas <= 0);

for ($i = 0; $i < $numPessoas; $i++) { 
	$idPessoa = $i + 1;

	echo "Digite seu nome: ";
	$nome[$i] = trim(fgets(STDIN));

	do {
		echo "Digite sua idade: ";
		$idade[$i] = intval(trim(fgets(STDIN)));
	} while (!is_numeric($idade));

	if ($idade >= 18) {
		do {
			echo "$nome, você possui carteira de habilitação? s/n: ";
			$resposta = strtoupper(trim(fgets(STDIN)));
		} while ($resposta != 'S' && $resposta != 'N');

		if ($resposta == 'S') {
			echo "$nome, qual a categoria da sua habilitação? ";
			$categoria[$i] = strtoupper(trim(fgets(STDIN)));
		}
	}
}

$nome = new Motorista();
$nome->set_nome('Edyelgue');
print($nome->get_nome() . "\n");

print_r($motorista);
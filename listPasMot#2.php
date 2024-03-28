<?php

include_once 'class.motorista.php';
include_once 'class.passageiro.php';

// Pergunte ao usuário quantas pessoas serão informadas
do {
	echo "Informe o número de pessoas que serão relatadas: ";
	$numPessoas = trim(fgets(STDIN)) . "\n";
} while (!is_numeric($numPessoas) || $numPessoas <= 0);

for ($i = 0; $i < $numPessoas; $i++) { 
	$idPessoa = $i + 1;

	echo "Digite seu nome: ";
	$nome = trim(fgets(STDIN));

	echo "Digite seu email: ";
	$email = trim(fgets(STDIN));

	do {
		echo "Digite sua idade: ";
		$idade = trim(fgets(STDIN));
	} while (!is_numeric($idade) || $idade <= 0);

	if ($idade >= 18) {
		do {
			echo "$nome, você possui carteira de habilitação? s/n: ";
			$resposta = strtoupper(trim(fgets(STDIN)));
		} while ($resposta != 'S' && $resposta != 'N');

		if ($resposta == 'S') {
			do {
				echo "$nome, qual a categoria da sua habilitação? ";
				$categoria = strtoupper(trim(fgets(STDIN)));
			} while ($categoria !== 'A' && 
					 $categoria !== 'B' && 
					 $categoria !== 'C' && 
					 $categoria !== 'D' && 
					 $categoria !== 'E' && 
					 $categoria !== 'AB' && 
					 $categoria !== 'AC' && 
					 $categoria !== 'AD' && 
					 $categoria !== 'AE');

			$matriz[$i] = new Motorista($nome, $email, $idade);
			$matriz[$i]->setCnh($categoria);

		} elseif ($resposta == 'N') {
			$matriz[$i] = new Passageiro($nome, $email, $idade);
		}
	} else {
		echo "Menores de 18 anos de idade deverão informar os nomes dos pais ou responsáveis.\n";
		echo "Digite o nome de seu pai: ";
		$pai = trim(fgets(STDIN));
		echo "Digite o nome de sua mãe: ";
		$mae = trim(fgets(STDIN));

		$matriz[$i] = new Passageiro($nome, $email, $idade);				
		$matriz[$i]->setPai($pai);
		$matriz[$i]->setMae($mae);
	}
}

print_r($matriz);
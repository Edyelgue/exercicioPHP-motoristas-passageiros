<?php
// Pergunte ao usuário quantas pessoas serão informadas
do {
	echo "Informe o número de pessoas que serão relatadas: ";
	$numPessoas = trim(fgets(STDIN)) . "\n";
} while (!is_numeric($numPessoas) || $numPessoas <= 0);

// Para cada um, o programa deve receber o nome, o email e a idade
$listPessoas = array();
$categoriasCNH = array('A', 'B', 'C', 'D', 'E', 'AB', 'AC', 'AD', 'AE');

for ($i = 0; $i < $numPessoas; $i++) { 
	$idPessoa = $i + 1;

	echo "Informe o nome da $idPessoa" . "ª pessoa: ";
	$listPessoas[$i]['nome'] = trim(fgets(STDIN));

	echo "Informe o email da $idPessoa" . "ª pessoa: ";
	$listPessoas[$i]['email'] = trim(fgets(STDIN));

	do {
		echo "Informe a idade da $idPessoa" . "ª pessoa: ";
		$listPessoas[$i]['idade'] = trim(fgets(STDIN));
	} while (!is_numeric($listPessoas[$i]["idade"]));

		if ($listPessoas[$i]['idade'] >= 18) {
			do {
				echo $listPessoas[$i]['nome'] . ", você possui habilitação s/n? ";
				$listPessoas[$i]['Possui CNH'] = strtoupper((trim(fgets(STDIN))));
			} while ($listPessoas[$i]['Possui CNH'] !== 'S' && $listPessoas[$i]['Possui CNH'] !== 'N');

			if ($listPessoas[$i]['Possui CNH'] == 'S') {
				do {
					echo "Qual a categoria da sua habilitação? ";
					$listPessoas[$i]['CNH'] = trim(fgets(STDIN));
				} while ($categoriasCNH[0] !== $listPessoas[$i]['CNH'] && 
						 $categoriasCNH[1] !== $listPessoas[$i]['CNH'] && 
						 $categoriasCNH[2] !== $listPessoas[$i]['CNH'] && 
						 $categoriasCNH[3] !== $listPessoas[$i]['CNH'] && 
						 $categoriasCNH[4] !== $listPessoas[$i]['CNH'] && 
						 $categoriasCNH[5] !== $listPessoas[$i]['CNH'] && 
						 $categoriasCNH[6] !== $listPessoas[$i]['CNH'] && 
						 $categoriasCNH[7] !== $listPessoas[$i]['CNH'] && 
						 $categoriasCNH[8] !== $listPessoas[$i]['CNH']);
			}
		} else {
			echo "Menores de 18 anos deverão comprovar filiação! ";
			
			echo "Digite o nome de sua mãe: ";
			$listPessoas[$i]['filiação']['mãe'] = fgets(STDIN);

			echo "Digite o nome de seu pai: ";
			$listPessoas[$i]['filiação']['pai'] = fgets(STDIN);
		}

	echo "----\n";
}

do {
	echo "\nDigite >>>\n- 1 para ver os motoristas\n- 2 para ver os passageiros maiores de idade\n- 3 para ver os passageiros menores de idade\n- 0 para finalizar o programa\n\nEscolha uma das opções acima para prosseguir: ";
	$filtro = trim(intval(fgets(STDIN)));
	echo "\n\n";

	//Se o usuário escolher a opção 1, deve mostrar os motoristas (Nome, email, idade e categoria da habilitação);
	if ($filtro == 1) {
		echo "----------------------------------------\n";
		echo "\tLISTA DE MOTORISTAS\n";
		echo "----------------------------------------\n";
		for ($j = 0; $j < $numPessoas; $j++){
			if ($listPessoas[$j]['idade'] >= 18 && $listPessoas[$j]['Possui CNH'] == 'S'){
				echo "NOME: ";
				echo ($listPessoas[$j]['nome'] . "\n");
				echo "IDADE: ";
				echo ($listPessoas[$j]['idade'] . "\n");
				echo "EMAIL: ";
				echo ($listPessoas[$j]['email'] . "\n");
				echo "CNH: ";
				echo ($listPessoas[$j]['CNH'] . "\n");
				echo "----------------------------------------\n";
			}
		}
	} elseif ($filtro == 2) {//Se o usuário escolher a opção 2, deve mostrar os passageiros maiores de idade (Nome, email e idade);
		echo "----------------------------------------\n";
		echo " LISTA DE PASSAGEIROS MAIORES DE IDADE\n";
		echo "----------------------------------------\n";
		for ($k = 0; $k < $numPessoas; $k++) {
			if ($listPessoas[$k]['idade'] >= 18 && $listPessoas[$k]['Possui CNH'] == 'N') {
				echo "NOME: ";
				echo ($listPessoas[$k]['nome'] . "\n");
				echo "IDADE: ";
				echo ($listPessoas[$k]['idade'] . "\n");
				echo "EMAIL: ";
				echo ($listPessoas[$k]['email'] . "\n");
				echo "----------------------------------------\n";
			}
		}
	} elseif ($filtro == 3){//Se o usuário escolher a opção 3, deve mostrar os passageiros menores de idade (Nome, email, idade, pai e mãe);
		echo "----------------------------------------\n";
		echo " LISTA DE PASSAGEIROS MENORES DE IDADE\n";
		echo "----------------------------------------\n";
		for ($l = 0; $l < $numPessoas; $l++) { 
			if ($listPessoas[$l]['idade'] < 18) {
				echo "NOME: ";
				echo ($listPessoas[$l]['nome'] . "\n");
				echo "IDADE: ";
				echo ($listPessoas[$l]['idade'] . "\n");
				echo "EMAIL: ";
				echo ($listPessoas[$l]['email'] . "\n");
				echo "MÃE: ";
				echo ($listPessoas[$l]['filiação']['mãe']);
				echo "PAI: ";
				echo ($listPessoas[$l]['filiação']['pai']);
				echo "----------------------------------------\n";
			}
		}
	}
} while ($filtro != 0);

//print_r($listPessoas);
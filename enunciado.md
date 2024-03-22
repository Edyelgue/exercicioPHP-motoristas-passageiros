# EXERCÍCIO 
Faça um programa que irá receber uma lista de pessoas - passageiros e motoristas.

* Pergunte ao usuário quantas pessoas serão informadas.
* Depois, para cada um, o programa deve receber o nome, o email e a idade.
* Se a pessoa for maior de 18 anos, deve também perguntar se ela possui habilitação. 
* Se possuir, deve perguntar a categoria.
* Se a pessoa não for maior 18 anos, deve pedir filiação (pai e mãe separadamente).

* Ao terminar de captar os dados, o programa deve perguntar ao usuário que digite:
* - 1 para ver os motoris* tas
* - 2 para ver os passageiros maiores de idade
* - 3 para ver os passageiros menores de idade
* - 0 para finalizar o programa.

* Se o usuário escolher a opção 1, deve mostrar os motoristas (Nome, email, idade e categoria da habilitação);
* Se o usuário escolher a opção 2, deve mostrar os passageiros maiores de idade (Nome, email e idade);
* Se o usuário escolher a opção 3, deve mostrar os passageiros menores de idade (Nome, email, idade, pai e mãe);

* Se a escolha foi 1, 2 ou 3, após a listagem deve voltar à pergunta ao usuário para decidir se mostra listagens ou encerra o programa.

* Se o usuário escolher a opção 0, o programa deve terminar.

# INSTRUÇÕES
* - Desenvolver fazendo o uso obrigatório de uma e somente uma matriz;
* - Não utilizar os conceitos de funções;
* - Laços de repetição permitidos: for, do..while, while;
* - Evitar que o usuário digite informações não desejadas (ex. letras onde é esperado um número, números negativos nas idades, categorias de CNH que não existem;
* - O único campo que pode ser aceito em branco é o nome do pai, na filiação.

# DESAFIO
SOMENTE APÓS TER GARANTIDO QUE O SEU CÓDIGO ATENDE O EXERCÍCIO PROPOSTO, fica o desafio de colocar nele um Easter Egg: se na hora de escolher a listagem ou o encerramento do programa, o usuário digitar 666, todos os dados na matriz devem ser apagados.
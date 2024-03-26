# Primeira melhoria
- passe pro construtor a responsabilidade de settar algumas propriedades. Aqui, uma dica: tanto passageiros quanto motoristas tem propriedades em comum. Você pode identificar quais são, e fazer com que o construtor de ambas receba isso já no momento que vc instancia.

A vantagem desse ponto acima é que, se os parametros são iguais, em algum momento vc pode ter algo assim

if (/... situacaoXPTO .../) {
    $objeto = new Motorista($a, $b, $c, ...);
} else {
    $objeto = new Passageiro($a, $b, $c, ...);
} 

if (temCarteira) { 
    $objeto->setCnh($cnh);
}

if ($menorDeIdade) {
    $objeto->setPai($pai);
    $objeto->setMae($mae);
}

> Segunda melhoria
- jogar pra dentro dos setters as regras especificas.
Um exemplo:


public function setCnh($cnh) {
    if ($categoria !== 'A' && ... && $categoria !== 'AE') {
        return false;
    }
    
    $this->cnh = $chn;
    return true;
}

vc faz seu setter retorar um true ou false de acordo com o dado ter sido algo valido ou não.

E ai vc troca isso:


do {
    echo "$nome, qual a categoria da sua habilitação? ";
    $categoria = strtoupper(trim(fgets(STDIN)));
} while ($categoria !== 'A' && ... $categoria !== 'AE');

por isso:

do {
    echo "$nome, qual a categoria da sua habilitação? ";
    $categoria = strtoupper(trim(fgets(STDIN)));
} while ($objeto->setChn($categoria) !== true);

Analise: 
veja que você jogou a regra de negocio (a logica da sua aplicação) pra dentro do metodo, e tirou do escopo livre....

seu codigo fica mais sucinto, e as validações ficam mais localizadas em metodos q elas fazem sentido....
se vc tiver varios lugares no sistema q vao settar a CNH, todos vao respeitar a mesma validação, ja q ela fica dentro do metodo.
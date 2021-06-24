<div class="titulo">Operações com Array</div>

<?php
$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Forteleza"
];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos) . PHP_EOL;

echo '<br>';
$indice = array_rand($dadosCompletos); #ira exibir um indice aleatorio na array
echo "$indice = $dadosCompletos[$indice]";

echo '<br>';
echo "{$dadosCompletos['idade']}"; /*o par de {} permite interpolar exibindo o que
tem dentro do indice. Nesse caso vai exibir so a idade*/

unset($dadosCompletos["nome"]); # unset retira algo da array, nesse caso apagou o nome
echo '<br>';
print_r($dadosCompletos);

echo '<br>';
unset($dadosCompletos); #também é possivel apagar toda a array

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

/* $decimais = $pares + $impares; #Esse caso não irá funcionar porque nao foi definido nenhum indice
entao ele ira seguir o padrao e ira priorizar o que vem mais a esquerda da função
entao so ira mostrar os numeros pares */

# Nesse caso seria melhor utilizar a seguinte expressao

$decimais = array_merge($pares, $impares); #o merge mescla as duas arrays porem ainda da preferencia 
echo '<br>';                               #para a que ta mais a esquerda
print_r($decimais);

echo '<br>'; #para resolvermos isso vamos utilizar a função SORT
sort($decimais); #sort organiza o array
print_r($decimais);

<div class="titulo">Arrays Multidimensionais</div>

<?php
$dados = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia"
    ]
];

print_r($dados);
echo '<br>';
echo '<br>' . $dados[0] ['idade']; #como acessar algum indice do array
echo '<br>' . $dados[1] ['idade']; #acessando o indice da pessoa2

$dados[] = [
    [
        "nome" => "Florinda",
        "idade" => 30,
        "naturalidade" => "Rio de Janeiro"
    ]
];  # o [] vazio indica que vc quer adicionar um novo dados e nao sobescrever

echo '<br>';
print_r($dados) . PHP_EOL;
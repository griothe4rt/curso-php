<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = array('Laranja', 'Abacaxi');
// FRUTAS[0] = 'banana'; No php não é possível redefinir constantes
// FRUTAS[] = 'banana'; Também não é possível adicionar nova informação na constante
echo FRUTAS[1]; # No PHP só é possível ler a constante

const CARROS = ['Fiat' => 'Uno', 'Ford' => 'Fiesta'];
echo '<br>' . CARROS['Ford'];

#Outra forma de passar é usando DEFINE
define('CIDADES', array('Belo Horizonte', 'São Paulo', 'Recife', 
                        'Minas Gerais', 'Machado', 'Manaus', 'Lyon'));
$cidadeAleatoria = array_rand(CIDADES);
echo '<br>' . "Você nasceu em " . CIDADES[$cidadeAleatoria] . " seu fudido";
<div class="titulo">Comparação de Arrays</div>

<?php
$arr1 = ['nome' => 'Maria', 'idade' => '65'];
$arr2 = ['nome' => 'Maria', 'idade' => '65'];
var_dump($arr1 == $arr2); #nestes casos, o valor será true
var_dump($arr1 === $arr2); #na comparação estrita também sera true

$arr3 = ['idade' => 65, 'nome' => 'Maria'];
echo '<br>';
var_dump($arr1 === $arr3); #aqui será FALSE pois na estrita a ordem, tipo e etc influencia

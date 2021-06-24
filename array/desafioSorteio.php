<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elza", "Rapunzel", "Branca de Neve", "Bela", "Cinderela"];
$princesa = array_rand($nomes);

echo "<h1>Você é a princesa $nomes[$princesa] </h1>";
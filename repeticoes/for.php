<div class="titulo">Laços de repetições - FOR</div>

<?php
for($cont = 1; $cont <= 5; $cont++) { #No FOR, ele é divido em 3 partes, separado por ;
    echo "$cont <br>";
}

for(; $cont <= 10; $cont++)  { #não é obrigatório ter todas as partes, podendo até ter nenhuma mas gerando um laço em loop
    echo "$cont <br>";
}

for(; $cont <= 15; ) {
    
}
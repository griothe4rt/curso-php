<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado">
        <option value="AC">Acre</option>
        <option value="BA">Bahia</option>
        <option value="MG">Minas Gerais</option>
        <option value="SP">São Paulo</option>
    </select>
    <button>Enviar</button>    
</form>

<style>
    form > * {
        font-size: 1rem;   
    }
</style>

<?php

print_r($_POST);
<?php

$nota1 = $_GET['nota1'];
// $nota2 = $_GET['nota2'];
// $nome = $_GET['nome'];

/*
if (($med % 2) == 0):
    echo "$nome, sua média foi $med. (Par)";
else:
    echo "$nome, sua média foi $med. (Ímpar)";
endif;
 
if ($med >= 7):
    echo "<br>";
    echo "Você foi aprovado!";
else:
    echo "<br>";
    echo "Você foi reprovado";
endif;
*/

if ($nota1 == 0):
    echo "Esse valor é igual a 0";
elseif ($nota1 > 0):
    echo "Esse valor, $nota1, é positivo";
else:
    echo "Esse valor, $nota1, é negativo";
endif;
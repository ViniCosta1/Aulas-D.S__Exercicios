<?php

$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nome = $_GET['nome'];

$med = ($nota1 + $nota2)/2;

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
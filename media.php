<?php
$n1 = 10;
$n2 = 50;
$med = ($n1 + $n2)/2;
$mult = $med*3;
$square = $med**2;

if ($med%2 == 0)
    echo "Valor 1: $n1 <br>
        Valor 2: $n2<br>
        Média: $med (Par)<br>
        Multiplicação: $mult"
;
else
    echo "Valor 1: $n1 <br>
        Valor 2: $n2<br>
        Média: $med (Ímpar)<br>
        Quadrado: $square"
;
?>
<?php
$dia = 10;
$quinz = ($dia >= 15) ? "2ª quinzena" : "1ª quinzena";

echo "$dia º dia pertence a $quinz";

////////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";

$dia = 15;
if ($dia < 10):
    echo "$dia º dia pertence a 1ª quinzena";
elseif ($dia == 15):
    echo "$dia º dia pertence ao meio do mês";
else:
    echo "$dia º dia pertence a 2ª quinzena";
endif;

echo "<hr>";

$n1 = 10;
$n2 = 20;

$med = ($n1+$n2)/2;

$par = (($med % 2) == 0) ? "A média de $n1 e $n2 é Par" : "A média de $n1 e $n2 é Impar";
echo $par;
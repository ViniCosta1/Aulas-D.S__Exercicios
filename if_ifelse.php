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

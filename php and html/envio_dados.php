<?php

$nome = $_GET['nome'];
$altura = $_GET['altura'];
$peso = $_GET['peso'];

$imc = $peso / ($altura**2);

echo "<h1>Calculadora de IMC</h1>";
echo "Seu IMC é $imc <br>";

if ($imc < 18.5 ):
    echo "Você está abaixo do Peso";
elseif ($imc >= 18.5 && $imc < 25):
    echo "Você está com o peso normal";
elseif ($imc >= 25 && $imc < 30):
    echo "Você está com sobrepeso";
elseif ($imc >= 30 && $imc < 35):
    echo "Você está com Obesidade grau I";
elseif ($imc >= 35 && $imc < 40):
    echo "Você está com Obesidade grau II";
elseif ($imc >= 40):
    echo "Você está com Obesidade grau III";
endif;
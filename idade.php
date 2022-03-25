<html>
<body>
<?php

if (isset($_GET['enviar-forms'])):
    $ano = $_GET['ano'];
    $nome = $_GET['nome'];

    $idade = 2022 - $ano;


    if ($idade >= 16 and $idade < 18):
        echo "$nome, você tem direito de voto FACULTATIVO<br>";
    elseif ($idade >= 18 && $idade <= 65):
        echo "$nome, seu voto é obrigatório<br>";
    elseif ($idade > 65):
        echo "$nome, seu voto é facultativo<br>";
    endif;


    if ($idade >= 18):
        echo "$nome, você pode dirigir";
    else:
        echo "$nome, você não pode dirigir";
    endif;
endif;

?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            Digite seu ano de nascimento <input type="text" name="ano" id=""> <br>

            Digite seu nome <input type="text" name="nome" id=""> <br>

            <input type="submit" value="Somar" name = "enviar-forms">
        </form>
</body>
</html>
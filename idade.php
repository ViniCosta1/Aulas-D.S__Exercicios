<html>
<body>
<?php

if (isset($_GET['enviar-forms'])):
    $ano = $_GET['ano'];
    $nome = $_GET['nome'];

    $idade = 2022 - $ano;


    if ($idade >= 16 and $idade < 18):
        echo "$nome, você tem direito de voto FACULTATIVO, você não pode dirigir.";
    elseif ($idade >= 18 && $idade <= 65):
        echo "$nome, seu voto é obrigatório, você pode dirigir.";
    elseif ($idade > 65):
        echo "$nome, seu voto é facultativo, você pode dirigir.";
    else:
        echo "$nome, você é menor de idade e não tem direito nem a dirigir, nem a votar.";
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
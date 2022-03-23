<html>
<body>
<?php

if (isset($_GET['enviar-forms'])):
    $valor1 = $_GET['n1'];
    $valor2 = $_GET['n2'];
    $valor3 = $_GET['n3'];

    $med = ($valor1+$valor2+$valor3)/3;

    if (($med % 2) == 0):
        echo "A média dos valores é: $med <br>Seu   quadrado é ".$med**2;
    else:
        echo "A média dos valores é: $med <br>Sua   raiz é ".sqrt($med);
    endif;
endif;

?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            Valor 1 <input type="text" name="n1" id=""> <br>

            Valor 2 <input type="text" name="n2" id=""> <br>

            Valor 3 <input type="text" name="n3" id=""> <br>
            <input type="submit" value="Somar" name = "enviar-forms">
        </form>
</body>
</html>
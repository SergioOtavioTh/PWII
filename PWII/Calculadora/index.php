<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>

<body>
    <form action="index.php" method="get">
        <fieldset>
            <label for="valor1">valor1</label>
            <input type="text" name="valor1" id="valor1" placeholder="0" required>

            <br>

            <label for="valor2">valor2</label>
            <input type="text" name="valor2" id="valor2" placeholder="0" required>

            <br>

            <input type="submit" name='somar' value="somar">
            <input type="submit" name='subtrair' value="subtrair">
            <input type="submit" name='multiplicar' value="multiplicar">
            <input type="submit" name='dividir' value="dividir">

        </fieldset>

        <?php

        //is= ser\estar
        //set= difinir
        //isset= variavel definida?
        
        if (isset($_GET['valor1'])) {

            if (empty($_GET['valor1'])) {
                echo 'valor1 é Obrigatorio';
                exit();
            }
            ;
        }
        ;
        if (isset($_GET['valor2'])) {

            if (empty($_GET['valor2'])) {
                echo 'valor2 é Obrigatorio';
                exit();
            }
        }
        ;
        if (isset($_GET['somar'])) {
            echo $_GET['valor1'] + $_GET['valor2'];
        }
        if (isset($_GET['subtrair'])) {
            echo $_GET['valor1'] - $_GET['valor2'];
        }
        if (isset($_GET['multiplicar'])) {
            echo $_GET['valor1'] * $_GET['valor2'];
        }
        if (isset($_GET['dividir'])) {
            echo $_GET['valor1'] / $_GET['valor2'];
        }
        ?>

    </form>

</body>

</html>
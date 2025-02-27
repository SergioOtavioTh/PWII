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
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="nome do personagem" required>

            <br>

            <label for="poder">poder</label>
            <input type="text" name="poder" id="poder" placeholder="poder do personagem" required>

            <br>

            <input type="submit" value="Enviar">

        </fieldset>

        <?php

        //is= ser\estar
        //set= difinir
        //isset= variavel definida?
        
        if (isset($_GET['nome'])) {

            if (empty($_GET['nome'])) {
                echo 'Nome é Obrigatorio';
            } else {
                echo $_GET['nome'];
            }
            ;
        } else {
            echo "O nome é Obrigatorio";
        }
        ;
        if (isset($_GET['poder'])) {

            if (empty($_GET['poder'])) {
                echo 'poder é Obrigatorio';
            } else {
                echo $_GET['poder'];
            }
            ;
        } else {
            echo "O poder é Obrigatorio";
        }
        ;

        ?>

    </form>

</body>

</html>
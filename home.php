<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Formulário 3</title>
</head>

<body>
    <header>
        <h2>WebDev2023</h2>
    </header>

    <main>
        <h1>Formulário de Pesquisa</h1>

        <form action="final.php" method="get">
            <fieldset>
                <legend>Eletrodomésticos</legend>

                <?php
                    foreach ($_GET as $key => $value) {
                        echo "<input type=\"hidden\" name=\"$key\" value=\"$value\">";
                    }
                ?>

                <input type="checkbox" name="fridge" id="f">
                <label for="f">Geladeira</label>
                <br>

                <input type="checkbox" name="stove" id="s">
                <label for="s">Fogão</label>
                <br>

                <input type="checkbox" name="shower" id="sw">
                <label for="sw">Chuveiro elétrico</label>
                <br>

                <button type="submit">Finalizar</button>
            </fieldset>
        </form>
    </main>
</body>

</html>
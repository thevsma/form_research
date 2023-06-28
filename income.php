<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Formulário 2</title>
</head>

<body>
    <header>
        <h2>WebDev2023</h2>
    </header>

    <main>
        <h1>Formulário de Pesquisa</h1>

        <form action="home.php" method="get">
            <fieldset>
                <legend>Faixa Salarial</legend>

                <?php
                    if (isset($_GET['name'])) {
                        $name = $_GET['name'];
                        if ($name == "") {
                            echo "<p>Nome não inserido, volte uma página e preencha!</p>";
                        }
                        else {
                            foreach ($_GET as $key => $value) {
                                echo "<input type=\"hidden\" name=\"$key\" value=\"$value\">";
                            }
                        }
                    }
                ?>

                <input type="radio" name="income" id="1" value="lt1">
                <label for="1">&lt;1 s.m</label>
                <br>

                <input type="radio" name="income" id="5" value="upto5">
                <label for="5">1 s.m a 5 s.m</label>
                <br>

                <input type="radio" name="income" id="m5" value="gt5">
                <label for="m5">&gt;5 s.m</label>
                <br>

                <button type="submit">Próximo</button>
            </fieldset>
        </form>
    </main>
</body>

</html>
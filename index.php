<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Formulário</title>
</head>

<body>
    <header>
        <h2>WebDev2023</h2>
    </header>

    <main>
        <h1>Formulário de Pesquisa</h1>

        <form action="income.php" method="get">
            <fieldset>
                <legend>Nome e Idade</legend>

                <label for="n">Nome</label>
                <input type="text" name="name" id="n">
                <br>

                <label for="a">Idade</label>
                <input type="number" name="age" id="a" min="1" value="1">
                <br>

                <button type="submit">Próximo</button>
            </fieldset>
        </form>
    </main>
</body>

</html>
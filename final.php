<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Resultados</title>
</head>

<body>
    <header>
        <h2>WebDev2023</h2>
    </header>

    <main>
        <h1>Resultados da Pesquisa</h1>

        <?php
            foreach ($_GET as $key => $value) {
                echo "<p>$key =&gt; $value</p>";
            }
        ?>
    </main>
</body>

</html>
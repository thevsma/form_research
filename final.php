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
            if (isset($_GET['name']) && isset($_GET['age'])) {
                echo "<p>Nome: {$_GET['name']}</p>";
                echo "<p>Idade: {$_GET['age']}</p>";
            }
            if (isset($_GET['income'])) {
                $income = $_GET['income'];
                $string = "<p>Faixa salarial: ";
                if ($income == "lt1") {
                    $string .= "até 1 salário mínimo";
                }
                if ($income == "upto5") {
                    $string .= "de 1 a 5 salários mínimos";
                }
                if ($income == "gt5") {
                    $string .= "mais de 5 salários mínimos";
                }
                echo $string . "</p>";
            }
            $home = "<ul>";
            if (isset($_GET['fridge'])) {
                $home .= "<li>Possui geladeira</li>";
            }
            if (isset($_GET['stove'])) {
                $home .= "<li>Possui fogão</li>";
            }
            if (isset($_GET['shower'])) {
                $home .= "<li>Possui chuveiro elétrico</li>";
            }
            echo $home . "</ul>";
        ?>
    </main>
</body>

</html>
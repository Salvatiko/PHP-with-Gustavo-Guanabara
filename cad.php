<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Result</title>
</head>
<body>

    <header>
        <h1>Resultado do Processamento</h1>
    </header>

    <main>
        <?php 
            $n = $_GET["nome"] ?? "NONAME";
            $s = $_GET["sobrenome"] ?? "Desconhecido";
            echo "<p> É um prazer te conhecer,<strong> $n $s </strong>! Este é meu site</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>

</body>
</html>
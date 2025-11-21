<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>

<body>
    
<main>
<?php 

$num = $_GET["num"];

if ($num ===  null) {
    echo "Numero inválido";
}else{
$ante = $num - 1;
$suce = $num + 1;

echo "<h3>Seu número é: $num <br> Seu antecessor: $ante <br> Seu sucessor: $suce</h3>";
}
?>
<p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>

</main>

</body>
</html>

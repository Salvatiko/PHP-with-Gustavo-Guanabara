<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        $nome = "Lucas";
        $idade = 18;
        $peso = 75.4;
        $Casado = false;
        // n existe a var casado e nem a CASADO, apenas essa Casado;
        $sobrenome = "Salvatico";

        const país = "Brasil";

        echo "Olá $nome $sobrenome, você mora no " . país . " <br> <br> ";


        //tipos de primitivas
        $num = 300;
        $numFloat = 4.55;
        $numHexa=0x1A;
        $numBin=0b1111;
        $numOct=077;

        $v =(int)4.5;//forçando a ser int
        var_dump($v);
        var_dump($numFloat);

        $booleano = false; //isso é vazio = 0
        $booltrue = true; // isso vale 1
    
$vet = [1,2.5,3e4,0x54C,0b1110];
var_dump($vet);

$nomeee = "Lucas";
echo "<br> $nomeee <br>";
echo '$nomeee'; // n faz a interpretação


$nom = "Lucas";
$snom = "Salvático";
$apelido = "Gostoso";

echo "$nom \"$apelido\" $snom"; // para colocar aspas dentro do echo

echo "  Saldo: R\$50,00  "; // só pra mostrar como aparece o cifrão

    ?>
</body>
</html>
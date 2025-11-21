<?php 

$res = 50 / 2 + 3 ** 2; // tem prevalencia igual a matematica portanto = 34
echo "texte arit ordem $res <br>";
// pt1


//pt 2 agr
$r = base_convert(254, 10 , 8); // 254 da base 10 para 8
echo "<br> convert base 10->8 $r <br>";

$result = abs(-243); // apenas retira  o sinal
echo "Teste val absoluto " . $result . "<br>";
$result = abs(919);
echo $result;

echo "<br>";

$intdiv = intdiv(5 , 2);
echo "Apenas inteiro da divsao" . $intdiv; // = 2 ao inves de 2.5

$min = min(4 , 5, 6, 7, 8 ,98, -3 , -7);
$max = max(4 , 5, 6, 7, 8 ,98, -3 , -7);
echo "<br> max e min $min , $max <br>";

$pi = M_PI;
//ou
$pitbm = pi();

//potencia
$pot = pow(5 , 2);

//sin() , cos() , tan()

$raiz = sqrt(64); // 8

$raizexpdif = 27 **(1/3); // raiz cubica de 27 ou ainda pow(27,(1/3))

$ceil = ceil(5.1);//retorna o arredondamento do inteiro maior, nesse caso 6
echo $ceil;

$floor = floor(4.9);// retorna o int menor, aq 4
echo "<br> $floor <br>";

$round = round(19495.59192 , 3);// arredonda de forma mais completa, o numero mais proximo e o tanto de casas q quero, aq 12455.592
echo $round;
// ou ainda passar da virgula e arredondar o inteiro tbm
$round = $round = round(19495.59192 , -2); // nesse caso aparece 19500
echo "<br> $round <br>";

//pt 3 agora

$soma = "2" + "2";
echo $soma;
$soma = "2" . "2";
echo "<br>$soma";

/* 
5 + 2 = 7
5 - 2 = 3
5 * 2 = 10
5 / 2 = 2.5
5 % 2 = 1 resto da divisao
5 ** 2 = 25
*/

?>
<?php
$peso = 84;
$altura = 1.80;
$imc = $peso / $altura ** 2;
echo "Seu IMC é de $imc. Você está com IMC ";
if ($imc < 18.5) {
    echo "Abaixo";
}elseif($imc < 25){
    echo "Dentro";
}else{
    echo "Acima";
}
echo " do recomendado.";
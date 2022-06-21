<?php
$conta1 = [
   'titular' => 'Marcel',
   'saldo' => 1000  
];
$conta2 = [
    'titular' => 'Aline',
    'saldo' => 1500
];
$conta3 = [
    'titular' => 'Agnes',
    'saldo' => 50
];
$contasCorrentes = [$conta1, $conta2, $conta3];
for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'].PHP_EOL;
}
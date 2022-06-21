<?php

 $contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 1000  
    ],
    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 1500
    ],
    '123.456.789-12' => [
        'titular' => 'Gertrudes',
        'saldo' => 50
    ]
];
$contasCorrentes['123.456.789.-13'] = [
    'titular' => 'Claudia',
    'saldo' => 2300
];
 foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf.PHP_EOL;
 }
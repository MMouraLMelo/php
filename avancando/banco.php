<?php
require_once 'funcoes.php';
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
$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], valorASacar: 500);
$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], valorASacar: 500);
$contasCorrentes['123.456.789-12'] = sacar($contasCorrentes['123.456.789-12'], valorASacar: 500);
$contasCorrentes['123.456.789-12'] = depositar($contasCorrentes['123.456.789-12'], valorADepositar: 1000);
 foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem (mensagem: "$cpf {$conta['titular']} {$conta['saldo']}");
 }
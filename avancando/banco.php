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
unset($contasCorrentes['123.456.789-12']);
$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], valorASacar: 500);
$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], valorASacar: 500);
$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], valorADepositar: 1000);
echo "<ul>";
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo  <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>
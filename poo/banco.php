<?php
require_once 'Conta.php';
require_once 'Titular.php';
require_once 'CPF.php';
$saturnino = new Titular(new CPF(numero: '123.456.789-01', nome: 'Saturnino Lual'));
$conta1 = new Conta($saturnino);
$conta1->depositar(valorDepositar: 500);
$conta1->sacar(valorSacar: 300);

echo $conta1->recuperaNomeTitular(). PHP_EOL;
echo $conta1->recuperarSaldo(). PHP_EOL;
echo $conta1->recuperaCpfTitular(). PHP_EOL;

$gertrudes = new Titular(new CPF(numero: '123.456.789-02', nome: 'Gertrudes Tree'));
$conta2 = new Conta($gertrudes);
echo Conta:: recuperarNumContas();
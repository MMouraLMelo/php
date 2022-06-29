<?php
require_once 'Conta.php';
require_once 'Endereco.php';
require_once 'Pessoa.php';
require_once 'Titular.php';
require_once 'CPF.php';


$endereco = new Endereco('Uma Cidade', 'Um Bairro', 'Uma Rua', '8');
$saturnino = new Titular(new CPF('123.456.789-01'), 'Saturnino Lual', $endereco);
$conta1 = new Conta($saturnino);
$conta1->depositar(valorDepositar: 500);
$conta1->sacar(valorSacar: 300);

echo $conta1->recuperaNomeTitular(). PHP_EOL;
echo $conta1->recuperarSaldo(). PHP_EOL;
echo $conta1->recuperaCpfTitular(). PHP_EOL;

$gertrudes = new Titular(new CPF('123.456.789-02'), 'Gertrudes Tree', $endereco);
$conta2 = new Conta($gertrudes);
echo Conta:: recuperarNumContas();
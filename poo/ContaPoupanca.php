<?php
require_once 'Conta.php';
class ContaPoupanca extends Conta
{
    public function percentualTarifa(): float
    {
        return 0.03;
    }
}
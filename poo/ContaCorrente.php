<?php
require_once 'Conta.php';
class ContaCorrente extends Conta
{
    public function percentualTarifa(): float
    {
        return 0.05;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this -> saldo)
        {
            echo "Saldo Indisponível";
        }
        $this -> sacar($valorATransferir);
        $contaDestino -> depositar($valorATransferir);
    }
}
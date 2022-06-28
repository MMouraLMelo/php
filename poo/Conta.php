<?php
class Conta
{
    private string $titular;
    private float $saldo;
    private static int $numeroContas = 0;

    public function __construct(Titular $titular)
    {
        $this -> titular = $titular;
        $this -> saldo = 0;
        self :: $numeroContas++;
    }

    public function sacar(float $valorSacar): void
    {
        if ($valorSacar > $this -> saldo)
        {
            echo "Saldo indisponível";
            return;
        }
        $this -> saldo -= $valorSacar;
        
    }
    public function depositar(float $valorDepositar): void
    {
        if ($valorDepositar < 0)
        {
            echo "Valor precisa ser positivo";
            return;
        }
        $this -> saldo += $valorDepositar;
        
    }

    public function transferir(float $valorTransferir, conta $contaDestino): void
    {
        if ($valorTranferir > $this -> saldo)
        {
            echo "Saldo indisponível";
            return;
        }
        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTranferir);
        
    }
    
    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }
    
    public function recuperaNomeTitular(): string
    {
        return $this -> titular -> recuperaNome();
    }

    public function recuperaCpfTitular()
    {
        return $this -> titular -> recuperaCpf();
    }

    public static function recuperarNumContas(): int
    {
        return self:: $numeroContas;
    }
}
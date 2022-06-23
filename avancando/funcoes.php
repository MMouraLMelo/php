<?php
function exibeMensagem (string $mensagem)
{
   echo $mensagem.  '<br>'; 
}
function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']){
        exibeMensagem (mensagem: "Você não pode sacar este valor");
    }else{
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}
function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0){
       $conta['saldo'] += $valorADepositar; 
    }else{
        exibeMensagem(mensagem: "Deposito devem ser positivos.");
    }
    return $conta;
}



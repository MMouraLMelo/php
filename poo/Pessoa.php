<?php
class Pessoa
{
    protected string $nome;
    private string $cpf;

    public function __construct(string $nome, string $cpf)
    {
        $this -> nome = $nome;
        $this -> cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this -> nome;
    }

    public function recuperaCpf(): string
    {
        return $this -> cpf -> recuperaNumero();
    }

    protected function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 10){
            echo "Nome precisa ter ao menos 10 caracteres";
            exit();
        }
    }
}
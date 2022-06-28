<?php
class Titular
{
    private string $cpf;
    private string $nome;

    public function __construct(CPF $cpf, string $nome)
    {
        $this -> cpf = $cpf;
        $this -> validaNomeTitular($nome);
        $this -> nome = $nome;
    }

    public function recuperaCpf(): string
    {
        return $this -> cpf;
    }

    public function recuperaNome(): string
    {
        return $this -> nome;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 10){
            echo "Nome precisa ter ao menos 10 caracteres";
            exit();
        }
    }
}
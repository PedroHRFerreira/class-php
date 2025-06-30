<?php
require "../src/data/CPF.php";

class Holder
{
    private CPF $cpf;
    private string $name;

    public function __construct(CPF $cpf, string $name)
    {
        $this->cpf = $cpf;
        $this->validateName($name);
        $this->name = $name;
    }

    private function validateName(string $name): void
    {
        if (strlen($name) < 3) {
            echo "Nome inválido \n";
            exit();
        }
    }
}

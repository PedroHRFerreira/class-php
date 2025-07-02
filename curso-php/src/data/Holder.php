<?php
require "../curso-php/src/data/CPF.php";
require "../curso-php/src/data/Address.php";

class Holder
{
    private CPF $cpf;
    private string $name;
    private Address $address;

    public function __construct(CPF $cpf, string $name, Address $address)
    {
        $this->cpf = $cpf;
        $this->validateName($name);
        $this->name = $name;
        $this->address = $address;
    }

    private function validateName(string $name): void
    {
        if (strlen($name) < 3) {
            echo "Nome inválido \n";
            exit();
        }
    }

    public function getAddress(): Address
    {
        return $this->address;
    }
}

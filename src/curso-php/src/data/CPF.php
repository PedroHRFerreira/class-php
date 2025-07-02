<?php

class CPF
{
    private string $document;

    public function __construct(string $document)
    {
        $this->validateCpf($document);
        $this->document = $document;
    }

    public function getDocument(): string
    {
        return $this->document;
    }

    private function validateCpf(string $cpf): void
    {
        if (strlen($cpf) != 14) {
            echo "Cpf inválido \n";
            exit();
        }
    }
}

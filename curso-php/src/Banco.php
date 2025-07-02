<?php
require __DIR__ . '/Account.php';

$endereco = new Address('Rua das Flores', '123', 'Centro', 'São Paulo');

$documento = new Cpf('123-456-789.10');
$titularConta = new Holder($documento, 'João da Silva', $endereco);
$conta = new Account($titularConta);
$conta->deposit(1000);
$conta->withdraw(200);


$documento2 = new Cpf('987-654-321.00');
$titularConta2 = new Holder($documento2, 'Maria Oliveira', $endereco);
$conta2 = new Account($titularConta2);
$conta2->deposit(1000);
$conta2->withdraw(200);

var_dump($conta);

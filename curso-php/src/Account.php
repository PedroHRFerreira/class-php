<?php
require __DIR__ . '/data/Holder.php';

class Account
{
    private Holder $holder;
    private float $balance;
    private static int $numberOfAccounts = 0;

    public function __construct(Holder $holder)
    {
        $this->holder = $holder;
        $this->balance = 0;
        self::$numberOfAccounts++;
    }

    public function __destruct()
    {
        self::$numberOfAccounts--;
    }

    public function withdraw(float $amountWithdrawn): void
    {
        if ($amountWithdrawn > $this->balance) {
            echo "Saldo insuficiente \n";
            return;
        }
        $this->balance -= $amountWithdrawn;
    }

    public function deposit(float $amountDeposited): void
    {
        if ($amountDeposited < 0) {
            echo "Valor de depósito inválido \n";
            return;
        }
        $this->balance += $amountDeposited;
    }

    public function transfer(float $valueTransferred, Account $accountDestination): void
    {
        if ($valueTransferred > $this->balance) {
            echo "Saldo insuficiente para transferência \n";
            return;
        }
        $this->withdraw($valueTransferred);
        $accountDestination->deposit($valueTransferred);
    }

    public static function recoverAccountNumber(): int
    {
        return self::$numberOfAccounts;
    }
}

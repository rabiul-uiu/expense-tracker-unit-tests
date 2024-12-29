<?php

namespace Rabiul\PhpExpenseTracker;

/**
 * Class ExpenseManager
 * 
 * Manages a collection of expenses, providing methods to add, remove, and calculate the total amount of expenses.
 *
 * @package Rabiul\PhpExpenseTracker
 */
class ExpenseManager
{
    private array $expenses = [];

    /**
    * Adds an expense to the collection.
    *
    * @param Expense $expense The expense to be added.
    */
    public function addExpense(Expense $expense): void
    {
        $this->expenses[] = $expense;
    }

    public function removeExpense(int $index): void
    {
        if (isset($this->expenses[$index])) {
            unset($this->expenses[$index]);
            $this->expenses = array_values($this->expenses); // Re-index the array
        }
    }

    public function getTotalAmount(): float
    {
        return array_reduce($this->expenses, fn($sum, $expense) => $sum + $expense->getAmount(), 0);
    }

    public function getExpenses(): array
    {
        return $this->expenses;
    }
}

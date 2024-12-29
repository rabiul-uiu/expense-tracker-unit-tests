<?php

namespace Rabiul\PhpExpenseTracker;

/**
 * Class Expense
 * 
 * Represents an individual expense with a title, amount, and date.
 *
 * @package Rabiul\PhpExpenseTracker
 */
class Expense
{
    private string $title;
    private float $amount;
    private string $date;

    /**
     * Expense constructor.
     *
     * @param string $title The title of the expense.
     * @param float $amount The amount of the expense.
     * @param string $date The date of the expense (YYYY-MM-DD).
     */
    public function __construct(string $title, float $amount, string $date)
    {
        $this->title = $title;
        $this->amount = $amount;
        $this->date = $date;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getDate(): string
    {
        return $this->date;
    }
}

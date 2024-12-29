<?php

use PHPUnit\Framework\TestCase;
use Rabiul\PhpExpenseTracker\Expense;

/**
 * Class ExpenseTest
 *
 * Unit tests for the Expense class.
 *
 * @package Rabiul\PhpExpenseTracker\Tests
 */

class ExpenseTest extends TestCase
{
    public function testExpenseCreation(): void
    {
        $expense = new Expense("Groceries", 100.50, "2024-12-01");

        $this->assertEquals("Groceries", $expense->getTitle());
        $this->assertEquals(100.50, $expense->getAmount());
        $this->assertEquals("2024-12-01", $expense->getDate());
    }
}

<?php

namespace Rabiul\PhpExpenseTracker\Tests;

use PHPUnit\Framework\TestCase;
use Rabiul\PhpExpenseTracker\Expense;
use Rabiul\PhpExpenseTracker\ExpenseManager;

/**
 * Class ExpenseManagerTest
 *
 * Unit tests for the ExpenseManager class.
 *
 * @package Rabiul\PhpExpenseTracker\Tests
 */

class ExpenseManagerTest extends TestCase
{

     /**
     * Tests adding an expense to the manager.
     */
    public function testAddExpense()
    {
        $manager = new ExpenseManager();
        $expense = new Expense("Rent", 800.00, "2024-12-01");

        $manager->addExpense($expense);

        $this->assertCount(1, $manager->getExpenses());
        $this->assertEquals(800.00, $manager->getTotalAmount());
    }

    /**
     * Tests removing an expense from the manager.
     */
    public function testRemoveExpense()
    {
        $manager = new ExpenseManager();
        $expense1 = new Expense("Rent", 800.00, "2024-12-01");
        $expense2 = new Expense("Utilities", 150.00, "2024-12-02");

        $manager->addExpense($expense1);
        $manager->addExpense($expense2);
        $manager->removeExpense(0);

        $this->assertCount(1, $manager->getExpenses());
        $this->assertEquals(150.00, $manager->getTotalAmount());
    }

     /**
     * Tests calculating the total amount of all expenses.
     */
    public function testGetTotalAmount()
    {
        $manager = new ExpenseManager();
        $manager->addExpense(new Expense("Rent", 800.00, "2024-12-01"));
        $manager->addExpense(new Expense("Utilities", 150.00, "2024-12-02"));

        $this->assertEquals(950.00, $manager->getTotalAmount());
    }
}

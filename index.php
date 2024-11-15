<?php

require_once 'Person.php';
require_once 'Employee.php';
require_once 'CommissionEmployee.php';
require_once 'HourlyEmployee.php';
require_once 'PieceWorker.php';
require_once 'EmployeeRoster.php';

// Create a new roster with space for 3 employees
$roster = new EmployeeRoster(3);

// Create some sample employees
$commissionEmployee = new CommissionEmployee("Vladimer Singson", "Pajo", 18, "XYZ Corp", 5000, 100, 10);
$hourlyEmployee = new HourlyEmployee("Jane Smith", "456 Oak Ave", 28, "ABC Inc.", 45, 20);
$pieceWorker = new PieceWorker("Alice Johnson", "789 Pine Rd", 35, "Widgets Ltd", 200, 2);

// Add employees to the roster
$roster->add($commissionEmployee);
$roster->add($hourlyEmployee);
$roster->add($pieceWorker);

// Display all employees
echo "\n--- Displaying All Employees ---\n";
$roster->display();

// Display Commission Employees
echo "\n--- Displaying Commission Employees ---\n";
$roster->displayCE();

// Display Hourly Employees
echo "\n--- Displaying Hourly Employees ---\n";
$roster->displayHE();

// Display Piece Workers
echo "\n--- Displaying Piece Workers ---\n";
$roster->displayPE();

// Display Payroll (earnings)
echo "\n--- Payroll for All Employees ---\n";
$roster->payroll();

// Test removal of an employee
echo "\n--- Removing an Employee ---\n";
$roster->remove(1);  // Remove the second employee (index 1)

// Display the roster after removal
echo "\n--- Displaying Remaining Employees ---\n";
$roster->display();
?>

<?php
require_once 'Employee.php';

class EmployeeRoster {
    private array $roster;

    // Constructor initializes the roster with a specified size (number of employee slots)
    public function __construct($rosterSize) {
        $this->roster = array_fill(0, $rosterSize, null);
    }

    // Adds an employee to the first available slot
    public function add(Employee $e): void {
        for ($i = 0; $i < count($this->roster); $i++) {
            if ($this->roster[$i] === null) {
                $this->roster[$i] = $e;
                echo "Employee added successfully.\n";
                return;
            }
        }
        echo "Roster is full!\n";
    }

    // Removes an employee at the given index
    public function remove(int $employee_number): void {
        if (isset($this->roster[$employee_number]) && $this->roster[$employee_number] !== null) {
            $this->roster[$employee_number] = null;
            echo "Employee removed successfully.\n";
        } else {
            echo "Employee not found at that position.\n";
        }
    }

    // Counts the number of employees currently in the roster
    public function count(): int {
        return count(array_filter($this->roster, fn($e) => $e !== null));
    }

    // Counts the number of Commission Employees
    public function countCE(): int {
        return count(array_filter($this->roster, fn($e) => $e instanceof CommissionEmployee));
    }

    // Counts the number of Hourly Employees
    public function countHE(): int {
        return count(array_filter($this->roster, fn($e) => $e instanceof HourlyEmployee));
    }

    // Counts the number of Piece Workers
    public function countPE(): int {
        return count(array_filter($this->roster, fn($e) => $e instanceof PieceWorker));
    }

    // Displays all employees in the roster
    public function display(): void {
        echo "Displaying all employees:\n";
        foreach ($this->roster as $employee) {
            if ($employee !== null) {
                echo $employee . "\n";
            }
        }
    }

    // Displays all Commission Employees
    public function displayCE(): void {
        echo "Displaying all commission employees:\n";
        foreach ($this->roster as $employee) {
            if ($employee instanceof CommissionEmployee) {
                echo $employee . "\n";
            }
        }
    }

    // Displays all Hourly Employees
    public function displayHE(): void {
        echo "Displaying all hourly employees:\n";
        foreach ($this->roster as $employee) {
            if ($employee instanceof HourlyEmployee) {
                echo $employee . "\n";
            }
        }
    }

    // Displays all Piece Workers
    public function displayPE(): void {
        echo "Displaying all piece workers:\n";
        foreach ($this->roster as $employee) {
            if ($employee instanceof PieceWorker) {
                echo $employee . "\n";
            }
        }
    }

    // Computes and displays all employees and their earnings
    public function payroll(): void {
        echo "Payroll for all employees:\n";
        foreach ($this->roster as $employee) {
            if ($employee !== null) {
                echo $employee . "\n";  // this will already print the earnings because __toString includes it
            }
        }
    }
}
?>

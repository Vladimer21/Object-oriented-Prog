<?php
require_once 'Employee.php';

class HourlyEmployee extends Employee {
    private int $hoursWorked;
    private float $rate;

    public function __construct($name, $address, $age, $companyName, $hoursWorked, $rate) {
        parent::__construct($name, $address, $age, $companyName);
        $this->hoursWorked = $hoursWorked;
        $this->rate = $rate;
    }

    public function earnings(): float {
        return $this->hoursWorked > 40 ? 
            (40 * $this->rate + ($this->hoursWorked - 40) * $this->rate * 1.5) : 
            ($this->hoursWorked * $this->rate);
    }

    public function __toString(): string {
        return parent::__toString() . ", Earnings: " . $this->earnings();
    }
}
?>

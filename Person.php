<?php
class Person {
    private string $name;
    private string $address;
    private int $age;

    public function __construct($name, $address, $age) {
        $this->name = $name;
        $this->address = $address;
        $this->age = $age;
    }

    public function __toString(): string {
        return "Name: $this->name, Address: $this->address, Age: $this->age";
    }
}
?>

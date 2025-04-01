<?php
// Базовый класс Employee
class Employee {
    protected $name;
    protected $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }
}

// Производный класс Manager
class Manager extends Employee {
    public function manageTeam() {
        return "{$this->name} управляет командой.";
    }
}

// Производный класс Developer
class Developer extends Employee {
    public function writeCode() {
        return "{$this->name} пишет код.";
    }
}

// Производный класс Designer
class Designer extends Employee {
    public function design() {
        return "{$this->name} разрабатывает дизайн.";
    }
}
$manager = new Manager("Иван", 100000);
$developer = new Developer("Петр", 80000);
$designer = new Designer("Светлана", 70000);

echo $manager->manageTeam() . PHP_EOL;
echo $developer->writeCode() . PHP_EOL;
echo $designer->design() . PHP_EOL;
?>
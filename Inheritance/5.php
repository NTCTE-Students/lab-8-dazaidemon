<?php
// Базовый класс Device
class Device {
    protected $brand;
    protected $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }
}

// Производный класс Smartphone
class Smartphone extends Device {
    public function call($number) {
        return "Звоню на номер: $number";
    }
}

// Производный класс Laptop
class Laptop extends Device {
    public function code() {
        return "Пишу код на ноутбуке.";
    }
}

// Производный класс Tablet
class Tablet extends Device {
    public function draw() {
        return "Рисую на планшете.";
    }
}
$smartphone = new Smartphone("Apple", "iPhone 13");
$laptop = new Laptop("Dell", "XPS 13");
$tablet = new Tablet("Samsung", "Galaxy Tab S7");

echo $smartphone->call("123-456-7890") . PHP_EOL;
echo $laptop->code() . PHP_EOL;
echo $tablet->draw() . PHP_EOL;
?>
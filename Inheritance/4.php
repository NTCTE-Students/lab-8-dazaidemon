<?php
// Базовый класс Animal
class Animal {
    public function eat() {
        return "Животное ест.";
    }

    public function sleep() {
        return "Животное спит.";
    }
}

// Производный класс Bird
class Bird extends Animal {
    public function fly() {
        return "Птица летит.";
    }
}

// Производный класс Fish
class Fish extends Animal {
    public function swim() {
        return "Рыба плавает.";
    }
}

// Производный класс Mammal
class Mammal extends Animal {
    public function walk() {
        return "Млекопитающее идет.";
    }
}
$bird = new Bird();
$fish = new Fish();
$mammal = new Mammal();

echo $bird->eat() . PHP_EOL;
echo $bird->fly() . PHP_EOL;
echo $fish->swim() . PHP_EOL;
echo $mammal->walk() . PHP_EOL;
?>
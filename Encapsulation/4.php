<?php

class Counter {
    private $count;

    public function __construct() {
        $this->count = 0;
    }

    // Метод для увеличения счетчика
    public function increment() {
        $this->count++;
    }

    // Метод для уменьшения счетчика
    public function decrement() {
        if ($this->count > 0) {
            $this->count--;
        } else {
            throw new OutOfRangeException("Счетчик не может быть меньше нуля.");
        }
    }

    // Метод для получения текущего значения счетчика
    public function getCount() {
        return $this->count;
    }
}

// использования класса Counter
$counter = new Counter();
$counter->increment();
$counter->increment();

try {
    $counter->decrement();
    echo "Текущее значение счетчика: " . $counter->getCount();
    $counter->decrement(); // Уменьшаем еще раз
    $counter->decrement(); // Пытаемся уменьшить ниже нуля
} catch (OutOfRangeException $e) {
    echo $e->getMessage();
}
?>
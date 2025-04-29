<?php
class Thermostat {
    private $temperature;

    public function setTemperature($temperature) {
        // Ограничение диапазона температуры
        if ($temperature < 15 || $temperature > 30) {
            throw new InvalidArgumentException("Температура должна быть в диапазоне от 15 до 30 градусов.");
        }
        $this->temperature = $temperature;
    }

    public function getTemperature() {
        return $this->temperature;
    }
}

// использования класса Thermostat
$thermostat = new Thermostat();

try {
    $thermostat->setTemperature(22);
    echo "Текущая температура: " . $thermostat->getTemperature() . " градусов.";
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}
?>
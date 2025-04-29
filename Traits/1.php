<?php
trait Logger {
    public function log($message) {
        print("Лог: {$message}<br>");
    }
}

class User {
    use Logger;

    public function createUser($name) {
        // Логика создания пользователя
        $this->log("Пользователь {$name} создан.");
    }

    public function updateUser($name) {
        // Логика обновления пользователя
        $this->log("Пользователь {$name} обновлен.");
    }
}
$user = new User();
$user->createUser("Иван");
$user->updateUser("Иван");
?>
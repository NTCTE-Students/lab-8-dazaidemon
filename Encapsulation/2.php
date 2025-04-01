<?php
class User {
    private $username;
    private $passwordHash;

    public function __construct($username) {
        $this->username = $username;
    }

    // Метод для установки пароля с хешированием
    public function setPassword($password) {
        $this->passwordHash = password_hash($password, PASSWORD_DEFAULT);
    }

    // Метод для проверки пароля
    public function checkPassword($password) {
        return password_verify($password, $this->passwordHash);
    }

    // Метод для получения имени пользователя
    public function getUsername() {
        return $this->username;
    }
}
$user = new User("exampleUser");
$user->setPassword("securePassword123");

if ($user->checkPassword("securePassword123")) {
    echo "Пароль корректный для пользователя: " . $user->getUsername();
} else {
    echo "Пароль неверный.";
}
?>
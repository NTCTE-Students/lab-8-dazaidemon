<?php
trait Authenticatable {
    public function login($username, $password) {
        // Пример простой логики входа
        if ($username === 'test' && $password === 'password') {
            return "Пользователь {$username} вошел в систему.";
        }
        return "Неверный логин или пароль.";
    }

    public function logout() {
        return "Пользователь вышел из системы.";
    }
}

class User {
    use Authenticatable;

    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

$user = new User("Имя пользователя");
echo $user->login("test", "password") . "<br>";
echo $user->logout();
?>
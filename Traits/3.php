<?php

trait Validatable {
    public function validate($data) {
        // Пример простейшей валидации (можно расширить)
        if (empty($data['username']) || empty($data['password'])) {
            return "Поля не могут быть пустыми.";
        }
        return true;
    }
}

class RegistrationForm {
    use Validatable;

    public function submit($data) {
        $validationResult = $this->validate($data);
        if ($validationResult === true) {
            // Логика для обработки успешной регистрации
            return "Форма регистрации успешно отправлена!";
        }
        return $validationResult;
    }
}

class LoginForm {
    use Validatable;

    public function submit($data) {
        $validationResult = $this->validate($data);
        if ($validationResult === true) {
            // Логика для обработки успешного входа
            return "Форма входа успешно отправлена!";
        }
        return $validationResult;
    }
}

$registrationForm = new RegistrationForm();
echo $registrationForm->submit(['username' => 'user', 'password' => 'password123']) . "<br>";

$loginForm = new LoginForm();
echo $loginForm->submit(['username' => '', 'password' => '']) . "<br>";
?>
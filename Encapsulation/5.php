<?php

class SessionManager {
    public function __construct() {
        session_start();
    }

    // Устанавливаем данные в сессии
    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    // Получаем данные из сессий
    public function get($key) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    // Удаляем данные из сессий
    public function remove($key) {
        unset($_SESSION[$key]);
    }

    // Завершаем сессию
    public function destroy() {
        session_destroy();
    }
}

// использования класса SessionManager
$sessionManager = new SessionManager();
$sessionManager->set('user_id', 123);
echo "Пользователь с ID: " . $sessionManager->get('user_id');

$sessionManager->remove('user_id');
echo "После удаления: " . $sessionManager->get('user_id');

$sessionManager->destroy();
?>
<?php
interface Notifier {
    public function send($message);
}

class EmailNotifier implements Notifier {
    public function send($message) {
        print("Отправка email: {$message}<br>");
    }
}

class SMSNotifier implements Notifier {
    public function send($message) {
        print("Отправка SMS: {$message}<br>");
    }
}

class PushNotifier implements Notifier {
    public function send($message) {
        print("Отправка push-уведомления: {$message}<br>");
    }
}
$emailNotifier = new EmailNotifier();
$smsNotifier = new SMSNotifier();
$pushNotifier = new PushNotifier();

$emailNotifier->send("Здравствуйте, это ваше уведомление по email!");
$smsNotifier->send("Здравствуйте, это ваше SMS!");
$pushNotifier->send("Здравствуйте, это ваше push-уведомление!");
?>
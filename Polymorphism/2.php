<?php

class Payment {
    public function process() {
        echo "Обработка платежа.<br>";
    }
}

class CreditCardPayment extends Payment {
    public function process() {
        echo "Обработка платежа через кредитную карту.<br>";
    }
}

class PayPalPayment extends Payment {
    public function process() {
        echo "Обработка платежа через PayPal.<br>";
    }
}

class BankTransferPayment extends Payment {
    public function process() {
        echo "Обработка банковского перевода.<br>";
    }
}


$creditCardPayment = new CreditCardPayment();
$paypalPayment = new PayPalPayment();
$bankTransferPayment = new BankTransferPayment();

$creditCardPayment->process();
$paypalPayment->process();
$bankTransferPayment->process();
?>
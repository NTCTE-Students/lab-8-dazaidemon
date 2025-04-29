<?php
class Order {
    public function calculateTotal() {
        return 0; // Базовая реализация
    }
}

class OnlineOrder extends Order {
    public function calculateTotal() {
        // Применение скидки, например, 10% для онлайн-заказов
        $baseTotal = 100; // Базовая стоимость
        return $baseTotal - ($baseTotal * 0.10);
    }
}

class StoreOrder extends Order {
    public function calculateTotal() {
        // Применение скидки, например, 5% для заказов в магазине
        $baseTotal = 100;
        return $baseTotal - ($baseTotal * 0.05);
    }
}

class TelephoneOrder extends Order {
    public function calculateTotal() {
        // Нет скидок для телефонных заказов
        $baseTotal = 100;
        return $baseTotal;
    }
}
$onlineOrder = new OnlineOrder();
$storeOrder = new StoreOrder();
$telephoneOrder = new TelephoneOrder();

echo "Итоговая сумма онлайн-заказа: " . $onlineOrder->calculateTotal() . "<br>";
echo "Итоговая сумма заказа в магазине: " . $storeOrder->calculateTotal() . "<br>";
echo "Итоговая сумма телефонного заказа: " . $telephoneOrder->calculateTotal() . "<br>";
?>
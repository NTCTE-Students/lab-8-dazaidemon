<?php

trait Cacheable {
    private $cache = [];

    public function getCache($key) {
        return isset($this->cache[$key]) ? $this->cache[$key] : null;
    }

    public function setCache($key, $value) {
        $this->cache[$key] = $value;
    }
}

class DataProvider {
    use Cacheable;

    public function fetchData($key) {
        $data = $this->getCache($key);
        if ($data === null) {
            // Симуляция запроса данных
            $data = "Данные для {$key}";
            $this->setCache($key, $data);
        }
        return $data;
    }
}

class ProductRepository {
    use Cacheable;

    public function getProduct($id) {
        $cacheKey = "product_{$id}";
        $product = $this->getCache($cacheKey);
        if ($product === null) {
            // Симуляция получения продукта из базы данных
            $product = "Продукт ID: {$id}";
            $this->setCache($cacheKey, $product);
        }
        return $product;
    }
}

$dataProvider = new DataProvider();
echo $dataProvider->fetchData("example") . "<br>";
echo $dataProvider->fetchData("example") . "<br>"; // Использует кеш

$productRepository = new ProductRepository();
echo $productRepository->getProduct(1) . "<br>";
echo $productRepository->getProduct(1) . "<br>"; // Использует кеш
?>
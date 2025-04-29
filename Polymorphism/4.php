<?php
interface Database {
    public function connect();
    public function query($sql);
}

class MySQLDatabase implements Database {
    public function connect() {
        echo "Подключение к MySQL базе данных.<br>";
    }

    public function query($sql) {
        echo "Выполнение SQL-запроса в MySQL: {$sql}<br>";
    }
}

class PostgreSQLDatabase implements Database {
    public function connect() {
        echo "Подключение к PostgreSQL базе данных.<br>";
    }

    public function query($sql) {
        echo "Выполнение SQL-запроса в PostgreSQL: {$sql}<br>";
    }
}

class SQLiteDatabase implements Database {
    public function connect() {
        echo "Подключение к SQLite базе данных.<br>";
    }

    public function query($sql) {
        echo "Выполнение SQL-запроса в SQLite: {$sql}<br>";
    }
}
$mysql = new MySQLDatabase();
$postgresql = new PostgreSQLDatabase();
$sqlite = new SQLiteDatabase();

$mysql->connect();
$mysql->query("SELECT * FROM users");

$postgresql->connect();
$postgresql->query("SELECT * FROM orders");

$sqlite->connect();
$sqlite->query("SELECT * FROM products");
?>
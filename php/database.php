<?php

    $servername = "localhost"; 
    $username = "root"; 
    $password = "";

    // Создание соединения
    $conn = new mysqli($servername, $username, $password);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }
    echo "Успешное подключение";

    $sql = "CREATE DATABASE db_inf";

    // Проверка
    if ($conn->query($sql) === TRUE) {
        echo "База данных создана успешно";
    } else {
        echo "Ошибка создания базы данных: " . $conn->error;
    }

    $bdname = "db_inf";
    $conn = new mysqli($servername, $username, $password, $bdname);

    $sql = "CREATE TABLE Inf (
			id INT(6) AUTO_INCREMENT PRIMARY KEY,
			name VARCHAR(30) NOT NULL,
			surname VARCHAR(30) NOT NULL,
			tel VARCHAR(12) NOT NULL,
			email VARCHAR(30) NOT NULL
			)";

    // Проверка
    if ($conn->query($sql) === true) {
        echo "Таблица information создана успешно";
    } else {
        echo "Ошибка создания таблицы: " . $conn->error;
    }

?>
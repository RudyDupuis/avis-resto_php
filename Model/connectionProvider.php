<?php
abstract class ConnectionProvider {
    public static function getConnection() {
        try {
            $dsn = 'mysql:host=localhost;dbname=avisrestaurantbdd';
            $options = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"];
            $pdo = new PDO($dsn, 'root', '', $options);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $pdo;
    }
}



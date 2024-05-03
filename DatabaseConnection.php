<?php

class DatabaseConnection
{
    protected static ?PDO $connection = null;
    
    public function __construct()
    {
        echo "Database Created";
    }

    public static function connected() {
        try {
            if (!self::$connection) {
                    $pdo = new PDO('mysql:host=localhost;dbname=produk', 'root', '');
                    self::$connection = $pdo;   
            } return self::$connection;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        echo "<br>";
    }
}



<?php

require_once('DatabaseConnection.php');

class ViewProduct {

    protected PDO $db;
    private static ?ViewProduct $product = null;
    
    public function __construct()
    {
        $this->db = DatabaseConnection::connected();
    }

    public static function product(): ViewProduct
    {
        if (self::$product === null) {
            self::$product = new ViewProduct();
        }
        return self::$product;
    }

    public function readProduct() {
        $sql = "SELECT * FROM produk";
        $statement = $this->db->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
        
}


<?php
class DB
{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "ShopShop";

    public function connect()
    {
        try {
            $conn = new PDO("mysql:host=$this->server; dbname=$this->dbname", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,FALSE);
            return $conn;
        } catch (PDOException $e) {
            echo "<script>console.error('db connect error '+'{$e->getMessage()}');</script>";
        }
    }
}
<?php
class DB
{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "project_web_blog";

    public static function connect()
    {
        try {
            $conn = new PDO('"'."mysql:host=".DB::$server."; dbname=".DB::$dbname.'"', DB::$username, DB::$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,FALSE);
            return $conn;
        } catch (PDOException $e) {
            echo "<script>console.error('db connect error '+'{$e->getMessage()}');</script>";
        }
    }
}
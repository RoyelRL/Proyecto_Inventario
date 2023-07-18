<?php

class Database
{
    private $hostname = "localhost";
    private $database = "inventario_biblioteca";
    private $username = "root";
    private $password = "franko22";
   

    function conectar()
    {
        try {

            $conexion = "mysql:host=" . $this->hostname . ";dbname=" . $this->database ;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            $pdo = new PDO($conexion, $this->username, $this->password, $options);

            return $pdo;
        } catch (PDOException $e) {
            echo 'Error conexion: ' . $e->getMessage();
            exit;
        }
    }
}

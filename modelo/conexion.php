<?php
class Conexion extends PDO {
    private $host = 'localhost'; // Cambiar si es necesario
    private $dbname = 'ChiapasTours';
    private $user = 'root';
    private $password = 'iluminado61';

    public function __construct() {
        try {
            parent::__construct("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->user, $this->password);
            // Activa el manejo de errores para PDO
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
            exit;
        }
    }
}
?>
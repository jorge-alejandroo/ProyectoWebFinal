<?php
require_once('conexion.php'); // Asegúrate de que este archivo tenga la ruta correcta

class PaqueteModel {
    private $db;

    public function __construct() {
        $this->db = new Conexion(); // Usamos la clase Conexion
    }

    public function obtenerPaquetes() {
        // Consulta a la base de datos
        $query = "SELECT Nombre, Costo, Descripcion, Actividades, Transporte_Alternativo, Oferta_Especial, imagen FROM Paquete"; // Añadimos el campo de imagen
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>

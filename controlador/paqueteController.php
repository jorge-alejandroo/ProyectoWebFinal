<?php
require_once('modelo/paqueteModel.php'); // Asegúrate de que esta ruta es correcta

class PaqueteController {
    private $model;

    public function __construct() {
        $this->model = new PaqueteModel(); // Instanciar el modelo
    }

    public function mostrarPaquetes() {
        return $this->model->obtenerPaquetes(); // Obtener datos del modelo
    }
}
?>


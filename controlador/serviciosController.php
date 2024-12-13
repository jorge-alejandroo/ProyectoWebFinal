<?php
class ServiciosController {
    public function index() {
        require_once 'modelo/ServicioModel.php';
        $servicioModel = new ServicioModel();
        $servicios = $servicioModel->obtenerServicios();
        require_once 'vista/servicio/mostrarServicio.php';
    }
}
?>

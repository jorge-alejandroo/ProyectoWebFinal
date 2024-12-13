<?php
class ServicioModel {
    public function obtenerServicios() {
        return [
            ['id' => 1, 'nombre' => 'Paquetes', 'descripcion' => 'Paquete turístico completo', 'precio' => 5000],
            ['id' => 2, 'nombre' => 'Hoteles', 'descripcion' => 'Alojamiento incluido', 'precio' => 3000],
        ];
    }
}
?>

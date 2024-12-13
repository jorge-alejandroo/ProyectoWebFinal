<?php
require_once('modelo/productoModel.php');
class ProductosController{
    private $productoModel;
    public function __construct(){
        $this->productoModel = new ProductoModel();
    }
    public static function mostrarProductos(){
        $modelproducto = new ProductoModel();
        $datos=$modelproducto->mostrarProductos();
        require_once('vista/Productos/mostrardatos.php');
    }
}
?>
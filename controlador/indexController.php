<?php 
require_once('modelo/indexModel.php');
require_once('modelo/paqueteModel.php'); 
require_once('controlador/paqueteController.php'); // Asegúrate de que esta ruta es correcta

class IndexController {
    private $indexModel;    

    public function __construct() {
        $this->indexModel = new IndexModel();
    }
    
    public static function index() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $usuarioAutenticado = isset($_SESSION['usuario']);
        require_once("vista/index.php");
    }
    
    public static function login() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['usuario'])) {
            header('Location: index.php');
            exit;
        }
        require_once("vista/auth/login.php");
    }
    

    // Método para la página "Conócenos"
    public static function conocenos() {
        require_once("vista/conocenos/conocenos.php");
    }

    // Método para la página "Servicios"
    public static function servicios() {
        require_once('modelo/servicioModel.php'); // Llama al modelo relacionado con servicios
        $servicioModel = new ServicioModel();
        $servicios = $servicioModel->obtenerServicios(); // Obtiene los servicios
        require_once("vista/servicio/mostrarServicio.php"); // Carga la vista de servicios
    }

    // Método para la página "Mis Viajes"
    public static function misviajes() {
        session_start();
        if (!isset($_SESSION['usuario'])) {
            // Redirigir a login si no está autenticado
            header('Location: index.php?i=login');
            exit;
        }
        require_once("vista/usuario/misviajes.php"); // Carga la vista "Mis Viajes"
    }

    // Método para la página "Vuelos"
    public static function vuelos() {
        require_once("vista/vuelos/vuelos.php"); // Ruta correcta de la vista "Vuelos"
    }

    // Método para la página "paquetes"
    public static function paquetes() { 
        $paqueteController = new PaqueteController(); 
        $paquetes = $paqueteController->mostrarPaquetes();
        
        // Incluye la vista con los transportes obtenidos 
        require_once ('vista/paquetes/paquetes.php'); 
    }

    // Método para la página "Hoteles"
    public static function hoteles() {
        require_once("vista/hoteles/hoteles.php"); // Ruta correcta de la vista "Hoteles"
    }

    // Método para la página "Transporte"
    public static function transporte() {
        require_once("vista/transporte/transporte.php"); // Ruta correcta de la vista "Transporte"
    }

    // Método para la página "Actividades"
    public static function actividades() {
        require_once("vista/actividades/actividades.php"); // Ruta correcta de la vista "Actividades"
    }
    // Método para la página "Ventas"
    public static function ventas() {
        if (isset($_GET['paquete'])) {
            $paquete = $_GET['paquete'];
            // Aquí puedes añadir lógica para obtener detalles del paquete desde la base de datos si es necesario
        }
        require_once("vista/paquetes/ventas.php"); // Ruta correcta de la vista "Ventas"
    }
}
?>
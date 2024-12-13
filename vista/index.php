<?php 
require_once("layout/header.php"); 

// Posición del encabezado (puedes modificar las variables de posición directamente aquí)
$headerStyle = "position: absolute; top: 214px; left: 772px; text-align: left;";
?>

<div class="container text-center" style="margin-top: 30px;">
  <!-- Encabezado "Paquetes más solicitados" -->
  <div class="row">
    <div class="col-12">
      <div style="margin-bottom: 20px; padding: 10px; background-color: rgba(240, 240, 240, 0.9); border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); <?= $headerStyle; ?>">
        <h2 style="font-size: 1.8em; font-weight: bold; color: #333;">Paquetes más solicitados</h2>
      </div>
    </div>
  </div>

  <!-- Paquetes -->
  <div class="row justify-content-center">
    <!-- Caribe y Pacífico -->
    <div class="col-md-4 mb-4">
      <div class="card card-overlay" style="width: 100%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px;">
        <img src="vista/imagenes/jpg/enelcaibeypasifico.jpg" class="card-img-top" alt="Caribe y Pacífico" style="border-radius: 10px 10px 0 0;">
        <div class="card-body">
          <h5 class="card-title">Caribe y Pacífico</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">$5,000 DE DTO.*</h6>
          <p class="card-text">Descubre la belleza del Caribe y el Pacífico.</p>
          <a href="#" class="card-link">Ver más</a>
        </div>
      </div>
    </div>

    <!-- Huatulco -->
    <div class="col-md-4 mb-4">
      <div class="card card-overlay" style="width: 100%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px;">
        <img src="vista/imagenes/jpg/huatulco.jpg" class="card-img-top" alt="Huatulco" style="border-radius: 10px 10px 0 0;">
        <div class="card-body">
          <h5 class="card-title">Huatulco</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">$4,000 DE DTO.*</h6>
          <p class="card-text">Explora las bahías de Huatulco y su naturaleza.</p>
          <a href="#" class="card-link">Ver más</a>
        </div>
      </div>
    </div>

    <!-- Cabo San Lucas -->
    <div class="col-md-4 mb-4">
      <div class="card card-overlay" style="width: 100%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px;">
        <img src="vista/imagenes/jpg/cabosanlucas.jpg" class="card-img-top" alt="Cabo San Lucas" style="border-radius: 10px 10px 0 0;">
        <div class="card-body">
          <h5 class="card-title">Cabo San Lucas</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">56% DE DTO.*</h6>
          <p class="card-text">Vive la experiencia de Cabo San Lucas.</p>
          <a href="#" class="card-link">Ver más</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once("layout/footer.php"); ?>

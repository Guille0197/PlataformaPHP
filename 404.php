<?php
session_start();
include('includes/header.php'); 
?>

<!-- Main Content -->
    <div class="container my-4 mt-5">
      <div class="container-fluid">
            <!-- 404 Error Text -->
            <div class="text-center">
              <div class="error mx-auto" data-text="404">404</div>
              <p class="lead text-gray-800 mb-5">Error página no encontrada</p>
              <p class="text-gray-500 mb-0">Parece que has encontrado un fallo...</p>
              <a href="index.php">&larr; Volver al tablero</a>
            </div>
      </div>
    </div>
<?php
include('includes/scripts.php'); 

?>
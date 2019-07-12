<?php
#include('security.php'); 

include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- Page Heading -->
<!-- Nav breadcrumb /-->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Tablero</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profesores</li>
        </ol>
    </nav>
    <!--Download Report-->
    <div class="dropdown">
        <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-download fa-sm text-white-50"></i>
            Descargar
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#"><i class="fas fa-file-excel mr-2"></i>Excel</a>
            <a class="dropdown-item" href="#"><i class="fas fa-file-pdf mr-2"></i>PDF</a>
        </div>
    </div>
</div>
<!-- End of Main Content -->

<!--Content all-professors-->
<div class="contacts-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="row">

            
                <div class="card" style="width: 18rem; margin: 5px;">
                    <img src="https://www.superprof.mx/imagenes/anuncios/profesor-home-profesora-britanica-nativa-inglaterra-con-anos-experiencia-clases-todo-niveles-cdmx.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and
                            make up the bulk of the card's
                            content.</p>
                    </div>
                </div>
               
            </div> <!-- row -->
        </div> <!-- row -->
        <!--End-all-professors-->

    </div>
</div>

<!--End Content-->


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
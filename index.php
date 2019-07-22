<?php
#include('security.php'); 

include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Academia Cristiana Bilingüe de Arraiján</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generar Reporte</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total de Cuentas Registradas </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

              <?php
              require 'dbconfig.php';

              $query = "SELECT id FROM registeradmin ORDER BY id";
              $query_run = mysqli_query($connection, $query);
              
              $row = mysqli_num_rows($query_run);
              echo '<h1>'.$row.'</h1>';
              
              ?>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-30"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Profesores registrados</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
              require 'dbconfig.php';

              $query = "SELECT id FROM teachers ORDER BY id";
              $query_run = mysqli_query($connection, $query);
              
              $row = mysqli_num_rows($query_run);
              echo '<h1>'.$row.'</h1>';
              
              ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user-tie fa-2x text-gray-30"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Estudiantes -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Estudiantes registrados</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
              require 'dbconfig.php';

              $query = "SELECT id FROM student ORDER BY id";
              $query_run = mysqli_query($connection, $query);
              
              $row = mysqli_num_rows($query_run);
              echo '<h1>'.$row.'</h1>';
              
              ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-child fa-2x text-gray-30"></i>
            </div>
          </div>
        </div>
      </div>
    </div>


     <!-- Padres acudientes -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Acudientes registrados</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
              require 'dbconfig.php';

              $query = "SELECT id FROM parent ORDER BY id";
              $query_run = mysqli_query($connection, $query);
              
              $row = mysqli_num_rows($query_run);
              echo '<h1>'.$row.'</h1>';
              
              ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-child fa-2x text-gray-30"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    

  
  </div> <!-- Content Row -->


  <iframe src="https://calendar.google.com/calendar/embed?src=es.pa%23holiday%40group.v.calendar.google.com&ctz=America%2FPanama" style="border: 0" width="700" height="500" frameborder="0" scrolling="no"></iframe>

  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>
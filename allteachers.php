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

<?php
      if (isset($_SESSION['success']) && $_SESSION['success'] !='') {

        echo '<h2> '.$_SESSION['success'].' </h2>';
        unset($_SESSION['success']);
      }
      if (isset($_SESSION['status']) && $_SESSION['status'] !='') {

        echo '<h2 class="bg-info"> '.$_SESSION['status'].'</h2>';
        unset($_SESSION['status']);
      }
  ?>

<!--Content all-professors-->
<div class="contacts-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="row">
        <?php

            $connection = mysqli_connect("localhost","root","","projectbd")or die ("No se ha podido conectar al servidor de Base de datos");
            $query = "SELECT * FROM teachers";
            $query_run = mysqli_query($connection, $query);

            if (mysqli_num_rows($query_run) > 0) {
                
        ?>

        <?php
            while ($row = mysqli_fetch_assoc($query_run)) {
        ?>
                   <div class="card" style="width: 18rem; margin: 5px;">
                        <?php echo '<img src="upload/'.$row['image_teachers'].'" class="card-img-top" alt="...">'?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['name'] ?></h5>
                            <p class="card-text"><?php echo $row['description'] ?></p>
                        </div>
                    </div>

        <?php
                }
        ?>
                
        <?php
            }
            else {
                echo"No Record Found";
            }
        ?>
               
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
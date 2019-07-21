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
            <li class="breadcrumb-item active" aria-current="page">Estudiantes</li>
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
            $query = "SELECT * FROM student";
            $query_run = mysqli_query($connection, $query);

            if (mysqli_num_rows($query_run) > 0) {
                
        ?>

        <?php
            while ($row = mysqli_fetch_assoc($query_run)) {
        ?>
                   <div class="card" style="width: 18rem; margin: 5px;">
                        <?php echo '<img src="upload/'.$row['img_student'].'" class="card-img-top" alt="...">'?>
                        <div class="card-body">
                            <h5 class="card-title"><i class="far fa-user"></i> <?php echo $row['nameStudent'] ?></h5>                            
                            <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-book"></i> <?php echo $row['genderStudent'] ?></h6>
                            <h6 class="card-subtitle mb-2 text-muted"><i class="far fa-envelope"></i> <?php echo $row['addressStudent'] ?></h6>
                            <p class="card-text"><i class="far fa-edit"></i> <?php echo $row['bdayStudent'] ?></p>

                            <div >
                                <form action="editstudent.php" method="post">
                                    <input type="hidden" name="editstudent_id" value="<?php echo $row['id']; ?>">
                                    <button  type="submit" name="editstudent_btn" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Editar</button>
                                </form> <br>
                                <form action="#" method="post">
                                    <input type="hidden" name="deletestudent_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="delete_btn" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Borrar</button>
                                </form>
                            </div>
                             
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
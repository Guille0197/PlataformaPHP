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
        <a class="btn btn-primary" href="addparents.php" role="button">
            Matricular Estudiante
        </a>
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
                        <?php echo '<img src="upload/student/'.$row['img_student'].'" class="card-img-top" style="width:100%; height:300px;" alt="Imagen del Estudiante">'?>
                        <div class="card-body">
                            <h5 class="card-title"><i class="far fa-user"></i> <?php echo $row['nameStudent'] ?></h5>                            
                            <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-id-card"></i> <?php echo $row['numberidStudent'] ?></h6>
                            <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-school"></i> <?php echo $row['levelStudent'] ?></h6>
                            <h6  class="card-subtitle mb-2 text-muted"><i class="fas fa-map-marker-alt"></i> <?php echo $row['addressStudent'] ?></h6>
                            <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-birthday-cake"></i> <?php echo $row['bdayStudent'] ?> | <?php echo $row['age'] ?> Años</h6>
                            <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-passport"></i> Nacionalidad <?php echo $row['nationalityStudent'] ?></h6>
                            

                            <div >
                                <form action="editstudent.php" method="post">
                                    <input type="hidden" name="editstudent_id" value="<?php echo $row['id']; ?>">
                                    <button  type="submit" name="editstudent_btn" class="btn btn-warning btn-lg btn-block"><i class="fas fa-edit"></i> Editar</button>
                                </form> <hr/>
                                <form action="code.php" method="post">
                                    <input type="hidden" name="deletestudent_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="deletestudent_btn" class="btn btn-danger btn-lg btn-block" onClick="Delete()"><i class="fas fa-trash"></i> Borrar</button>
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
                echo"No tenemos ningun registro de estudiante";
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
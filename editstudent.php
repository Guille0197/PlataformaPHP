<?php
#include('security.php'); 

include('includes/header.php'); 
include('includes/navbar.php'); 
?>
    <div class="container-fluid">
            <!-- Nav breadcrumb /-->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Tablero</a></li>
                        <li class="breadcrumb-item"><a href="allstudent.php">Estudiante</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Editar Estudiante</li>
                    </ol>
                </nav>
            </div>

     <!--Content all-professors-->
            <div class="row">
                <div class="container mb-5">
                    <div class="card">
                        <h5 class="card-header">Editar información</h5>
                        <div class="card-body">
                            <h5 class="card-title">Información del Estudiante</h5>

     <!--Codigo PHP-->
    <?php
        $connection = mysqli_connect("localhost","root","","projectbd")or die ("No se ha podido conectar al servidor de Base de datos");

    if (isset($_POST['editstudent_btn'])) {
        $id = $_POST['editstudent_id'];

        $query = "SELECT * FROM student WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        foreach ($query_run as $row) {
            ?>

                         <form action="code.php" method="POST">
                            <div class="form-group col-md-6 img-fluid">
                            <?php echo '<img src="upload/'.$row['img_student'].' "class="rounded float-left" style="width:200px; height:230px;"">'?>   
                                </div>
                            <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="hidden" name="editstudent_id" value="<?php echo $row['id'] ?>" >

                                        <label>Nombre y apellido</label>
                                        <input type="text" name="name_student" value="<?php echo $row['nameStudent'] ?>" class="form-control" placeholder="Nombre completo" autofocus required>
                                    </div>
                                    
                                        <div class="form-group col-md-6">
                                        <label>Número de identidicación</label>
                                        <input type="text" name="numberid_student" value="<?php echo $row['numberidStudent'] ?>" class="form-control" placeholder="Número de cédula" required>
                                    </div>
                                
                                    <div class="form-group col-md-6">
                                        <label for="gender_student">Seleccione un género</label>
                                        <select required="true" id="gender_student" name="gender_student" class="form-control" >
                                            <option value="<?php $row['genderStudent'] ?>" disabled selected><?php echo $row['genderStudent'] ?></option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                                        </select>
                                    </div>

                                        <div class="form-group col-md-6">
                                    <label>Fecha de nacimiento</label>
                                    <input type="date" name="bday_student" value="<?php echo $row['bdayStudent'] ?>" max="3000-12-31" 
                                            min="1000-01-01" class="form-control" required>
                                    </div> 

                                    <div class="form-group col-md-6">
                                        <label>Dirección</label>
                                        <input type="text" name="address_student" value="<?php echo $row['addressStudent'] ?>" class="form-control" placeholder="Dirección" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Seleccione tipo de sangre</label>
                                        <select name="bloodtype_student" class="form-control" required>
                                            <option value="<?php $row['bloodtypeStudent'] ?>" disabled selected><?php echo $row['bloodtypeStudent'] ?></option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </div>                                               
                                
                                    <div class="form-group col-md-6">
                                        <label>Número de celular</label>
                                        <input type="number" name="phone_student" value="<?php echo $row['phoneStudent'] ?>" class="form-control" placeholder="+507 6600-6600">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Seleccione el grado</label>
                                        <select name="level_student" class="form-control" required>
                                            <option value="<?php $row['levelStudent'] ?>" disabled selected><?php echo $row['levelStudent'] ?></option>
                                            <option value="1 Grado">1° Grado</option>
                                            <option value="2 Grado">2° Grado</option>
                                            <option value="3 Grado">3° Grado</option>
                                            <option value="4 Grado">4° Grado</option>
                                            <option value="5 Grado">5° Grado</option>
                                            <option value="6 Grado">6° Grado</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="nationality">Nacionalidad</label>
                                        <input type="text" name="nationality_student" value="<?php echo $row['nationalityStudent'] ?>" class="form-control" placeholder="Nacionalidad" required>
                                    </div>  

                                    <div class="form-group col-md-6">
                                        <label>Cargar una imagen del estudiante</label>
                                        <input type="file" name="img_student" id="img_student"  >
                                    </div> 
                                
                            </div>
                                <a href="allstudent.php" class="btn btn-danger btn-lg">Cancelar</a>
                                <button type="submit" name="update_student_btn" class="btn btn-success btn-lg"> Actualizar </button> 
                        </form>
                        <hr/>
    <?php
          }
        }
        else {
          echo "No Student record Found";
        }
    ?>

<!-- Footer & Scripts -->
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
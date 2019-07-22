<?php
#include('security.php'); 

include('includes/header.php'); 
include('includes/navbar.php'); 
?>
    <div class="container-fluid">
            <!-- Nav breadcrumb /-->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <nav class="container" aria-label="breadcrumb">
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

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Estudiante</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Acudientes</a> 
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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
                                            <?php echo '<img src="upload/student/'.$row['img_student'].' "class="rounded float-left" style="width:200px; height:230px;"">'?>   
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
                                                    <label>Edad del estudiante</label>
                                                    <input type="number" name="age" value="<?php echo $row['age'] ?>" class="form-control" placeholder="Edad del estudiante" required>
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
                                                        <option value="1° Grado">1° Grado</option>
                                                        <option value="2° Grado">2° Grado</option>
                                                        <option value="3° Grado">3° Grado</option>
                                                        <option value="4° Grado">4° Grado</option>
                                                        <option value="5° Grado">5° Grado</option>
                                                        <option value="6° Grado">6° Grado</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="nationality">Nacionalidad</label>
                                                    <input type="text" name="nationality_student" value="<?php echo $row['nationalityStudent'] ?>" class="form-control" placeholder="Nacionalidad" required>
                                                </div>                                
                                        </div>
                                            <a href="allstudent.php" class="btn btn-danger btn-lg">Cancelar</a>
                                            <button type="submit" name="update_student_btn" class="btn btn-success btn-lg"> Actualizar </button> 
                                    </form>
                                    <?php
                                                }
                                            }
                                            else {
                                            echo "No tenemos registro del estudiante";
                                            }
                                    ?>
                                </div>
                            </div>
                            <!--  -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <!--Content all-professors-->
                                <div class="row">
                                    <div class="container  mb-5">
                                        <div class="card">
                                            <h5 class="card-header">Ingrese a los Acudientes</h5>
                                            <div class="card-body">
                                                <h5 class="card-title">Información de los padres</i></h5>
        <!--Codigo PHP-->
    <?php
        $connection = mysqli_connect("localhost","root","","projectbd")or die ("No se ha podido conectar al servidor de Base de datos");

    if (isset($_POST['editstudent_btn'])) {
        $id = $_POST['editstudent_id'];

        $query = "SELECT * FROM parent WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        foreach ($query_run as $row) {
    ?>
                                                <form action="code.php" method="POST" enctype="multipart/form-data">
                                                 <div class="form-group col-md-6 img-fluid">
                                                    <?php echo '<img src="upload/'.$row['imgidparent'].' "class="rounded float-left" style="width:200px; height:230px;"">'?>   
                                                </div>
                                                <div class="form-group col-md-6 img-fluid">
                                                    </div>
                                                        <div class="form-row">
                                                            <div class="form-row">
                                                            
                                                            <div class="form-group col-md-6">
                                                                <input type="hidden" name="parent_id" value="<?php echo $row['id'] ?>" >
                                                                <label>Número de cédula del Niño</label>
                                                                <input type="text" name="numberid_Student" value="<?php echo $row['numberidStudent'] ?>" class="form-control" placeholder="Número de cédula del niño" disabled>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Nombre de la Madre <i class="fas fa-female"></i></label>
                                                                <input type="text" name="namep_mother" value="<?php echo $row['namepmother'] ?>" class="form-control" placeholder="Nombre completo" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Número de identidicación de la Madre</label>
                                                                <input type="text" name="numid_mother" value="<?php echo $row['numidmother'] ?>" class="form-control" placeholder="Número de cédula" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <input type="hidden" name="edits_id">
                                                                <label>Profesión de la Madre</label>
                                                                <input type="text" name="profession_mother" value="<?php echo $row['professionmother'] ?>" class="form-control" placeholder="Profesión" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Número de celular de la Madre</label>
                                                                <input type="number" name="phone_mother"  value="<?php echo $row['phonemother'] ?>"class="form-control" placeholder="+507 6600-6600" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <input type="hidden" name="edits_id">
                                                                <label>Nombre del Padre <i class="fas fa-male"></i></label>
                                                                <input type="text" name="namep_father" value="<?php echo $row['namepfather'] ?>" class="form-control" placeholder="Nombre completo" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Número de identidicación del Padre</label>
                                                                <input type="text" name="numid_father" value="<?php echo $row['numidfather'] ?>" class="form-control" placeholder="Número de cédula" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <input type="hidden" name="edits_id">
                                                                <label>Profesión del Padre</label>
                                                                <input type="text" name="profession_father" value="<?php echo $row['professionfather'] ?>" class="form-control" placeholder="Profesión" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Número de celular del Padre</label>
                                                                <input type="number" name="phone_father" value="<?php echo $row['phonefather'] ?>" class="form-control" placeholder="+507 6600-6600" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Dirección</label>
                                                                <input type="text" name="address_parent" value="<?php echo $row['addressparent'] ?>" class="form-control" placeholder="Dirección" required>
                                                            </div> 
                                                            <div class="form-group col-md-6">
                                                                <label for="nationality">Nacionalidad</label>
                                                                <input type="text" name="nationality_parent" value="<?php echo $row['nationalityparent'] ?>" class="form-control" placeholder="Nacionalidad" required>
                                                            </div>
                                                        </div>
                                                        <button type="submit" name="update_parent_btn" class="btn btn-success btn-lg btn-block"> Actualizar datos de los acudientes </button> 
                                                    </form>
                                                    <?php
                                                                }
                                                            }
                                                            else {
                                                            echo "No tenemos registro de los acudientes";
                                                            }
                                                    ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Content-->
                            </div>
                        </div>

                    <!-- container -->
                    </div>
                </div>
            </div>
                              
                        

<!-- Footer & Scripts -->
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
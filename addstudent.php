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
                        <li class="breadcrumb-item"><a href="allteachers.php">Estudiantes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Añadir Estudiantes</li>
                    </ol>
                </nav>
            </div>

     <!--Content all-professors-->
                    <div class="row">
                        <div class="container mb-5">
                            <div class="card">
                                <nav class="card-header">
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Estudiante</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Acudiente / Padres <i class="fas fa-restroom"></i></a>
                                        
                                    </div>
                                </nav>
                                <div class="card-body">
                                    
<?php
#$connection = mysqli_connect("localhost","root","","projectbd")or die ("No se ha podido conectar al servidor de Base de datos");

   # if (isset($_POST['edit_btn'])) {
       # $id = $_POST['edit_id'];

     #   $query = "SELECT * FROM teachers WHERE id='$id' ";
       # $query_run = mysqli_query($connection, $query);

       # foreach ($query_run as $row) {
?>
                                       
<?php
#}
#}
?>
                                    <div class="tab-content" id="nav-tabContent">
                                    <!-- STUDENT -->

                                        
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                         <form action="code.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group col-md-6 img-fluid">
                                                <h5 class="card-title">Información del Estudiante</h5>
                                            
                                                </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <input type="hidden" name="edits_id">
                                                    <label>Nombre y apellido</label>
                                                    <input type="text" name="name_edit" class="form-control" placeholder="Nombre completo" required>
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>Número de identidicación</label>
                                                    <input type="text" name="numerid_edit" class="form-control" placeholder="Número de cédula" required>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Seleccione un género</label> <br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Masculino">
                                                        <label class="form-check-label" for="inlineRadio1">Masculino</label>
                                                    </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Femenino">
                                                        <label class="form-check-label" for="inlineRadio2">Femenino</label>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                <label>Fecha de nacimiento</label>
                                                <input type="date" name="bday" max="3000-12-31" 
                                                        min="1000-01-01" class="form-control" required>
                                                </div>

                                                 <div class="form-group col-md-6">
                                                    <label>Dirección</label>
                                                    <input type="text" name="username_edit"  class="form-control" placeholder="Dirección" required>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Seleccione tipo de sangre</label>
                                                    <select name="department_edit" class="form-control" required>
                                                        <option> Seleccione un grupo sanguíneo </option>
                                                        <option value="1">A+</option>
                                                        <option value="2">A-</option>
                                                        <option value="3">B+</option>
                                                        <option value="4">B-</option>
                                                        <option value="5">AB+</option>
                                                        <option value="6">AB-</option>
                                                        <option value="5">O+</option>
                                                        <option value="6">O-</option>
                                                    </select>
                                                </div>                                               
                                            
                                                <div class="form-group col-md-6">
                                                    <label>Número de celular</label>
                                                    <input type="number" name="phone_edit" class="form-control" placeholder="+507 6600-6600" required>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Seleccione el grado</label>
                                                    <select name="department_edit" class="form-control" required>
                                                        <option> Seleccione un grado </option>
                                                        <option value="1">1° Grado</option>
                                                        <option value="2">2° Grado</option>
                                                        <option value="3">3° Grado</option>
                                                        <option value="4">4° Grado</option>
                                                        <option value="5">5° Grado</option>
                                                        <option value="6">6° Grado</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="nationality">Nacionalidad</label>
                                                    <input type="text" name="nationality" class="form-control" placeholder="Nacionalidad" required>
                                                </div> 

                                                <div class="form-group col-md-6">
                                                    <label>Cargar una imagen de perfil</label>
                                                    <input type="file" name="image_teachers" id="image_teachers"  >
                                                </div> 
                                            </div>
                                             <a href="addteachers.php" class="btn btn-danger btn-lg">Cancelar</a>
                                            <button type="submit" name="update_teachers_btn" class="btn btn-success btn-lg"> Actualizar </button> 
                                         </form>
                                        </div>

                                       <!-- PARENTS -->
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <form action="code.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group col-md-6 img-fluid">
                                                <h5 class="card-title">Información de los padre </h5>
                                            
                                                </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <input type="hidden" name="edits_id">
                                                    <label>Nombre de la Madre <i class="fas fa-female"></i></label>
                                                    <input type="text" name="name_edit" class="form-control" placeholder="Nombre completo" required>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Número de identidicación de la Madre</label>
                                                    <input type="text" name="numerid_edit" class="form-control" placeholder="Número de cédula" required>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <input type="hidden" name="edits_id">
                                                    <label>Profesión de la Madre</label>
                                                    <input type="text" name="name_edit" class="form-control" placeholder="Profesión" required>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Número de celular de la Madre</label>
                                                    <input type="number" name="phone_edit" class="form-control" placeholder="+507 6600-6600" required>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <input type="hidden" name="edits_id">
                                                    <label>Nombre del Padre <i class="fas fa-male"></i></label>
                                                    <input type="text" name="name_edit" class="form-control" placeholder="Nombre completo" required>
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>Número de identidicación del Padre</label>
                                                    <input type="text" name="numerid_edit" class="form-control" placeholder="Número de cédula" required>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <input type="hidden" name="edits_id">
                                                    <label>Profesión del Padre</label>
                                                    <input type="text" name="name_edit" class="form-control" placeholder="Profesión" required>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Número de celular del Padre</label>
                                                    <input type="number" name="phone_edit" class="form-control" placeholder="+507 6600-6600" required>
                                                </div>

                                                 <div class="form-group col-md-6">
                                                    <label>Dirección</label>
                                                    <input type="text" name="username_edit"  class="form-control" placeholder="Dirección" required>
                                                </div>                                               
                                            
                                                

                                                <div class="form-group col-md-6">
                                                    <label>Seleccione el grado</label>
                                                    <select name="department_edit" class="form-control" required>
                                                        <option> Seleccione un grado </option>
                                                        <option value="1">1° Grado</option>
                                                        <option value="2">2° Grado</option>
                                                        <option value="3">3° Grado</option>
                                                        <option value="4">4° Grado</option>
                                                        <option value="5">5° Grado</option>
                                                        <option value="6">6° Grado</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="nationality">Nacionalidad</label>
                                                    <input type="text" name="nationality" class="form-control" placeholder="Nacionalidad" required>
                                                </div> 

                                                <div class="form-group col-md-6">
                                                    <label>Subir una imagen de la cédula del acudiente</label>
                                                    <input type="file" name="image_teachers" id="image_teachers"  >
                                                </div> 
                                            </div>
                                            <a href="addteachers.php" class="btn btn-danger btn-lg">Cancelar</a>
                                            <button type="submit" name="update_teachers_btn" class="btn btn-success btn-lg"> Actualizar </button> 
                                         </form>
                                        </div>
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Content-->
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
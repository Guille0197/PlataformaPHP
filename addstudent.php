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
                        <li class="breadcrumb-item active" aria-current="page">Añadir Estudiante</li>
                    </ol>
                </nav>
            </div>

     <!--Content add student-->
                    <div class="row">
                        <div class="container  mb-5">
                            <div class="card">
                                <h5 class="card-header">Ingrese un estudiante</h5>
                                <div class="card-body">
                                    <h5 class="card-title">Información del estudiante <i class="fas fa-user-graduate"></i></h5>

                                       <form action="code.php" method="POST" enctype="multipart/form-data">

                                                <input type="hidden" name="user_type_student" value="student">
                                                <!-- Imagen del estudiantes  -->
                                                <div class="form-group col-md-6 img-fluid"> </div> 
                                                
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <input type="hidden" name="edits_id">
                                                        <label>Nombre y apellido</label>
                                                        <input type="text" name="name_student" class="form-control" placeholder="Nombre completo" autofocus required>
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label>Número de identidicación</label>
                                                        <input type="text" name="numer_id_student" class="form-control" placeholder="Número de cédula" required>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label for="gender">Seleccione un género</label>
                                                        <select required="true" id="gender" name="gender_student" class="form-control" >
                                                            <option  disabled selected>Seleccione género</option>
                                                            <option value="Masculino">Masculino</option>
                                                            <option value="Femenino">Femenino</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                    <label>Fecha de nacimiento</label>
                                                    <input type="date" name="bday_student" max="3000-12-31" 
                                                            min="1000-01-01" class="form-control" required>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label>Dirección</label>
                                                        <input type="text" name="address_student"  class="form-control" placeholder="Dirección" required>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label>Seleccione tipo de sangre</label>
                                                        <select name="bloodtype_student" class="form-control" required>
                                                            <option  disabled selected> Seleccione un grupo sanguíneo </option>
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
                                                        <input type="number" name="phone_student" class="form-control" placeholder="+507 6600-6600">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label>Seleccione el grado</label>
                                                        <select name="level_student" class="form-control" required>
                                                            <option  disabled selected> Seleccione un grado </option>
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
                                                        <input type="text" name="nationality_student" class="form-control" placeholder="Nacionalidad" required>
                                                    </div> 

                                                    <!-- <div class="form-group col-md-6">
                                                        <label>Cargar una imagen del estudiante</label>
                                                        <input type="file" name="img_student" id="img_student"  >
                                                    </div>  -->
                                                </div>
                                                <button type="submit" name="add_student_btn" class="btn btn-success btn-lg btn-block"> Agregar estudiante </button> 
                                            </div>
                                        </form>
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
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
                        <li class="breadcrumb-item"><a href="allteachers.php">Acudientes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Añadir Padres</li>
                    </ol>
                </nav>
            </div>

     <!--Content all-professors-->
                    <div class="row">
                        <div class="container  mb-5">
                            <div class="card">
                                <h5 class="card-header">Ingrese a los Acudientes</h5>
                                <div class="card-body">
                                    <h5 class="card-title">Información de los padres</i></h5>
<?php
#$connection = mysqli_connect("localhost","root","","projectbd")or die ("No se ha podido conectar al servidor de Base de datos");

    #if (isset($_POST['edit_btn'])) {
      #  $id = $_POST['edit_id'];

       # $query = "SELECT * FROM teachers WHERE id='$id' ";
       # $query_run = mysqli_query($connection, $query);

       # foreach ($query_run as $row) {
?>
                                       <form action="code.php" method="POST" enctype="multipart/form-data">
                                       <div class="form-group col-md-6 img-fluid">
                                        </div>
                                            <div class="form-row">
                                                
                                                <div class="form-group col-md-6">
                                                    <label>Número de cédula del Niño</label>
                                                    <input type="text" name="numerid_edit" class="form-control" placeholder="Número de cédula del niño" required>
                                                </div>
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
                                                    <label for="nationality">Nacionalidad</label>
                                                    <input type="text" name="nationality" class="form-control" placeholder="Nacionalidad" required>
                                                </div> 
                                                <div class="form-group col-md-6">
                                                    <label>Subir una imagen de la cédula del acudiente</label>
                                                    <input type="file" name="image_teachers" id="image_teachers"  >
                                                </div> 
                                            </div>
                                            <button type="submit" name="update_teachers_btn" class="btn btn-success btn-lg btn-block"> Agregar a los padres </button> 
                                         </form>
<?php
#}
#}
?>
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
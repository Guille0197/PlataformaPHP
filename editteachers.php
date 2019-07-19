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
                        <li class="breadcrumb-item"><a href="allteachers.php">Profesores</a></li>
                        <li class="breadcrumb-item"><a href="addteachers.php">Añadir Profesores</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Editar Profesor</li>
                    </ol>
                </nav>
            </div>

     <!--Content all-professors-->
                    <div class="row">
                        <div class="container  mb-5">
                            <div class="card">
                                <h5 class="card-header">Editar información</h5>
                                <div class="card-body">
                                    <h5 class="card-title">Información del Profesor</h5>
<?php
$connection = mysqli_connect("localhost","root","","projectbd")or die ("No se ha podido conectar al servidor de Base de datos");

    if (isset($_POST['edit_btn'])) {
        $id = $_POST['edit_id'];

        $query = "SELECT * FROM teachers WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        foreach ($query_run as $row) {
?>
                                        <form action="code.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group col-md-6 img-fluid">
                                            <?php echo '<img src="upload/'.$row['image_teachers'].' "class="rounded float-left" style="width:200px; height:230px;"">'?>   
                                                </div>
                                            <div class="form-row">

                                                

                                                <div class="form-group col-md-6">
                                                    <input type="hidden" name="edits_id" value="<?php echo $row['id'] ?>" >
                                                    <label>Nombre y apellido</label>
                                                    <input type="text" name="name_edit" value="<?php echo $row['name'] ?>" class="form-control">
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>Número de identidicación</label>
                                                    <input type="text" name="numerid_edit" value="<?php echo $row['numerid'] ?>" class="form-control">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Correo</label>
                                                    <input type="email" name="email_edit" value="<?php echo $row['email'] ?>"  class="form-control ">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Nombre de usuario</label>
                                                    <input type="text" name="username_edit" value="<?php echo $row['username'] ?>"  class="form-control">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Número de celular</label>
                                                    <input type="number" name="phone_edit" value="<?php echo $row['phone'] ?>" class="form-control">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Seleccione un departamento</label>
                                                    <select name="department_edit" class="form-control" required>
                                                        <option  disabled selected><?php echo $row['department'] ?></option>
                                                        <option value="Español">Español</option>
                                                        <option value="Matemáticas">Matemáticas</option>
                                                        <option value="Inglés">Inglés</option>
                                                        <option value="Ciencias">Ciencias</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Seleccione un género</label>
                                                    <select name="gender_edit" class="form-control" required>
                                                        <option  disabled selected><?php echo $row['gender'] ?></option>
                                                        <option value="Masculino"> Masculino</option>
                                                        <option value="Femenino"> Femenino</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="password_edit">Contraseña</label>
                                                    <input type="password" name="password_edit" value="<?php echo $row['password'] ?>" class="form-control">
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>Descripción</label>
                                                    <input type="text" name="description_edit" value="<?php echo $row['description'] ?>" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Cargar una imagen de perfil</label>
                                                    <input type="file" name="image_teachers" id="image_teachers"  >
                                                </div>      
                                            </div>
                                                <a href="addteachers.php" class="btn btn-danger btn-lg">Cancelar</a>
                                                <button type="submit" name="update_teachers_btn" class="btn btn-success btn-lg"> Actualizar </button> 
                                           
                                         </form>
<?php
}
}
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
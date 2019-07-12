<?php
#include('security.php');

include('includes/header.php'); 
include('includes/navbar.php'); 
?>
 
 <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Profile </h6>
  </div>

  <div class="card-body">

<?php
$connection = mysqli_connect("localhost","root","","projectbd")or die ("No se ha podido conectar al servidor de Base de datos");

    if (isset($_POST['edit_btn'])) {
        $id = $_POST['edit_id'];

        $query = "SELECT * FROM registeradmin WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        foreach ($query_run as $row) {
            ?>

            <form action="code.php" method="POST">
            <input type="hidden" name="edits_id" value="<?php echo $row['id'] ?>" >
                
                <div class="form-group">
                            <label> Nombre de usuario </label>
                            <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control">
                </div>
                    <div class="form-group">
                        <label>Correo</label>
                        <input type="email" name="edit_email" value="<?php echo $row['email'] ?>"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" name="edit_password" value="<?php echo $row['password'] ?>"  class="form-control">
                    </div>   
                    <div class="form-group">
                        <label>Tipo de usuarios</label>
                        <select name="update_usertype" class="form-control">
                            <option value="admin"> Administrador</option>
                            <option value="user"> Usuario</option>
                        </select>
                    </div>
                        <a href="register.php" class="btn btn-danger">Cancelar</a>
                        <button type="submit" name="updatebtn" class="btn btn-success"> Actualizar </button>
            </form>
        <?php
        }
    }
?>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
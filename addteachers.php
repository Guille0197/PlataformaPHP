<?php
#include('security.php'); 

include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingresar Profesores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label> Nombre y Apellido </label>
                <input type="text" name="name" class="form-control" placeholder="Nombre completo"  required autofocus>
            </div>
            <div class="form-group">
                <label> Número de identificación </label>
                <input type="text" name="numerid" class="form-control" placeholder="Número de identificación personal"  required >
            </div>
            <div class="form-group">
                <label>Correo</label>
                <input type="email" name="email" class="form-control" placeholder="Correo" required>
            </div>
            <div class="form-group">
                <label>Nombre de usuario</label>
                <input type="text" name="username" class="form-control" placeholder="@ Nombre de usuario" required>
            </div>
            <div class="form-group">
                <label> Número celular </label>
                <input type="number" name="phone" class="form-control" placeholder="+507 "  required>
            </div>
            <div class="form-group">
                <label for="department">Seleccione un departamento</label>
                <select id="department" name="department" class="form-control" required>
                    <option  disabled selected>Seleccione departamento</option>
                    <option value="Español">Español</option>
                    <option value="Matemáticas">Matemáticas</option>
                    <option value="Inglés">Inglés</option>
                    <option value="Ciencias">Ciencias</option>
                </select>
            </div>
            <div class="form-group">
                <label for="gender">Seleccione un género</label>
                <select id="gender" name="gender" class="form-control" required>
                    <option  disabled selected>Seleccione género</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" require>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" require>
            </div>
            <div class="form-group">
                <label for="textarea">Descripción</label>
                <textarea name="description" class="form-control" id="textarea" rows="1"
                    placeholder="Breve descripción" required></textarea>
            </div>
             <div class="form-group">
                <label>Cargar una imagen de perfil</label>
                <input type="file" name="image_teachers" id="image_teachers"  required>
            </div> 

            <input type="hidden" name="usertype" value="teachers">
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" name="teacherbtn" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="container-fluid">

<!-- Data Tables  -->
<div class="card shadow mb-4">
  <div class="card-header py-3">

      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Añadir Profesores</h1>
          <button type="button" class=" d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#addadminprofile">
            <i class="fas fa-user-plus"></i> Añadir profesores</button>
      </div>
  </div>

  <div class="card-body">

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

    <div class="table-responsive">

    <?php 
      $connection = mysqli_connect("localhost","root","","projectbd")or die ("No se ha podido conectar al servidor de Base de datos");

      $query = "SELECT * FROM teachers";
      $query_run = mysqli_query($connection,$query);
    ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Identificación</th>
            <th>Correo</th>
            <th>Usuario</th>
            <th>Celular</th>
            <th>Departamento</th>
            <th>Género</th>
            <th>Contraseña</th>
            <th>Editar</th>
            <th>Borrar</th>
          </tr>
        </thead>
        <tbody>

        <?php
          if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
        ?>
            <tr>
              <td> <?php echo $row['id']; ?> </td>
              <td> <?php echo $row['name']; ?> </td>
              <td> <?php echo $row['numerid']; ?> </td>
              <td> <?php echo $row['email']; ?> </td>
              <td> <?php echo $row['username']; ?> </td>
              <td> <?php echo $row['phone']; ?> </td>
              <td> <?php echo $row['department']; ?> </td>
              <td> <?php echo $row['gender']; ?> </td>
              <td> <?php echo $row['password']; ?> </td>

              <td>
                <form action="editteachers.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="deleteteachers_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="deleteteachers_btn" class="btn btn-danger"><i class="fas fa-trash"></i> Borrar</button>
                </form>
            </td>
              
        <?php
              }
            }
          else {
          echo "No record Found";
          }
        ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
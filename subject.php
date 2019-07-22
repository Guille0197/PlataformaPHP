<?php
#include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de Asignatura</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Nombre de la Asignatura </label>
                <input type="text" name="subjectname" class="form-control" placeholder="Ingrese el nombre" require>
            </div>
            <div class="form-group">
                <label>Código de la asignatura</label>
                <input type="text" name="subjectcode" class="form-control" placeholder="Ingrese el código" require>
            </div>
            <div class="form-group ">
                <label>Seleccione el grado para la asignatura</label>
                <select name="levelgrade" class="form-control" required>
                    <option  disabled selected> Seleccione un grado </option>
                    <option value="1° Grado">1° Grado</option>
                    <option value="2° Grado">2° Grado</option>
                    <option value="3° Grado">3° Grado</option>
                    <option value="4° Grado">4° Grado</option>
                    <option value="5° Grado">5° Grado</option>
                    <option value="6° Grado">6° Grado</option>
                </select>
            </div>        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="subjectbtn" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">

      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Listado de Asignaturas</h1>
          <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#addadminprofile">
            <i class="fas fa-user-plus"></i> Añadir asignatura</button>
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

      $query = "SELECT * FROM subject";
      $query_run = mysqli_query($connection,$query);
    ?>
      <table class="table" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID </th>
            <th>Nombre de la asignatura </th>
            <th>Código de la asignatura </th>
            <th>Grado asignado</th>
            <th>EDITAR </th>
            <th>ELIMINAR </th>
          </tr>
        </thead>
        <tbody>

        <?php
          if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
        ?>
            <tr>
              <td> <?php echo $row['id']; ?> </td>
              <td> <?php echo $row['subjectname']; ?> </td>
              <td> <?php echo $row['subjectcode']; ?> </td>
              <td> <?php echo $row['levelgrade']; ?> </td>
              <td>
                <form action="subject_edit.php" method="post">
                    <input type="hidden" name="subedit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="subedit_btn" class="btn btn-warning"><i class="fas fa-edit"></i> EDITAR</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="iddelete" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="btndelete" class="btn btn-danger"><i class="fas fa-trash"></i> ELIMINAR</button>
                </form>
            </td>
        <?php
              }
            }
          else {
          echo "No tenemos registro de asignatura";
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
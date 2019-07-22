<?php
#include('security.php');

include('includes/header.php'); 
include('includes/navbar.php'); 
?>
 
 <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Editar Asignatura </h6>
  </div>

  <div class="card-body">

<?php
$connection = mysqli_connect("localhost","root","","projectbd")or die ("No se ha podido conectar al servidor de Base de datos");

    if (isset($_POST['subedit_btn'])) {
        $id = $_POST['subedit_id'];

        $query = "SELECT * FROM subject WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        foreach ($query_run as $row) {
            ?>

            <form action="code.php" method="POST">
            <input type="hidden" name="edits_id" value="<?php echo $row['id'] ?>" >
                
                <div class="form-group">
                            <label> Nombre de la asignatura </label>
                            <input type="text" name="edit_subjectname" value="<?php echo $row['subjectname'] ?>" class="form-control">
                </div>
                    <div class="form-group">
                        <label>Código de la asignatura</label>
                        <input type="text" name="edit_subjectcode" value="<?php echo $row['subjectcode'] ?>"  class="form-control">
                    </div>
                    <div class="form-group ">
                        <label>Seleccione el grado para la asignatura</label>
                        <select name="levelgrade" class="form-control" required>
                            <option  value="<?php echo $row['levelgrade'] ?>"  disabled selected><?php echo $row['levelgrade'] ?></option>
                            <option value="1° Grado">1° Grado</option>
                            <option value="2° Grado">2° Grado</option>
                            <option value="3° Grado">3° Grado</option>
                            <option value="4° Grado">4° Grado</option>
                            <option value="5° Grado">5° Grado</option>
                            <option value="6° Grado">6° Grado</option>
                        </select>
                     </div>

                        <a href="subject.php" class="btn btn-danger">Cancelar</a>
                        <button type="submit" name="btnupdate" class="btn btn-success"> Actualizar </button>
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
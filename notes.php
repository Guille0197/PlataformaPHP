<?php
#include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


          <div class="row">
            <div class="container  mb-5">
                <div class="card">
                    <h5 class="card-header">Ingrese las calificaciones</h5>
                    <div class="card-body">
                                <form>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefaultUsername">Español</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2">Español</span>
                                            </div>
                                            <input type="number" class="form-control" id="validationDefaultUsername" placeholder="Ingrese la nota" aria-describedby="inputGroupPrepend2" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefaultUsername">Matemáticas</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2">Matemáticas</span>
                                            </div>
                                            <input type="number" class="form-control" id="validationDefaultUsername" placeholder="Ingrese la nota" aria-describedby="inputGroupPrepend2" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefaultUsername">Inglés</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2">Inglés</span>
                                            </div>
                                            <input type="number" class="form-control" id="validationDefaultUsername" placeholder="Ingrese la nota" aria-describedby="inputGroupPrepend2" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationDefaultUsername">Ciencias</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2">Ciencias</span>
                                            </div>
                                            <input type="number" class="form-control" id="validationDefaultUsername" placeholder="Ingrese la nota" aria-describedby="inputGroupPrepend2" required>
                                        </div>
                                    </div>


                                <button type="submit" class="btn btn-primary">Registar</button>
                                </form>
                    </div>
                </div>
            </div>
          </div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
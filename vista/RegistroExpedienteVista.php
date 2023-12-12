
<!DOCTYPE html>
<html lang="en">

<?php include_once "bin/component/head.php";?>

<body>
                      <?php include_once "bin/component/header.php";?>

                      <?php include_once "bin/component/sidebar.php";?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tabla de Datos</h1>
 
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Lista de Expedientes</h5>
              
              <button type="button" class="btn btn-primary m-1" id="nuevo">
                Registrar Expediente
              </button>

              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="titulo"></h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                      <div class="modal-body">
                        <form class="row g-3 needs-validation" novalidate>
                          <input type="hidden" name="accion" class="form-control" id="accion">
                          <input type="hidden" name="id" class="form-control" id="id">
                          <div class="col-12">
                            <label for="supervisor" class="form-label">Supervisor</label>
                            <input type="text" name="supervisor" class="form-control" id="supervisor" value ="<?php echo $_SESSION['usuario']["nombre_apellido"] ?>">
                            <spam id="ssupervisor"></spam>
                          </div>
                          <div class="col-12">
                            <label for="NroProvidencia" class="form-label">Nro de Providencia</label>
                            <input type="Text" name="Nro" class="form-control" id="NroProvidencia" required>
                            <spam id="sNroProvidencia"></spam>
                          </div>
                          <div class="col-12">
                            <label for="SuPa" class="form-label">Sujeto Pasivo</label>
                            <input type="Text" name="Sujeto Pasivo" class="form-control" id="SuPa" required>
                            <spam id="sSuPa"></spam>
                          </div>
                          <div class="col-12">
                            <label for="yourRifC" class="form-label">Rif</label>
                            <input type="Text" name="RifC" class="form-control" id="yourRifC" required>
                            <spam id="syourRifC"></spam>
                          </div>
                          <div class="col-12">
                            <label for="DomiFI" class="form-label">Domicilio Fiscal</label>
                            <input type="Text" name="RifC" class="form-control" id="DomiFI" required>
                            <spam id="sDomiFI"></spam>
                          </div>
                          <div class="col-12">
                            <label for="AddFiscal" class="form-label">Asignar Fiscal</label>
                            <select class="form-control" id="AddFiscal">
                            <option value="0" selected>--Seleccione--</option>
                            <?php foreach ($r2 as $key => $value) {?>
                              <option value="<?=$value['id'];?>"><?=$value['nombre_user'];?></option>
                            <?php }?>
                          </select>
                            <spam id="sAddFiscal"></spam>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" id="enviar" class="btn btn-primary">Registrar Usuario</button>
                          </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>

          <div class="card border">
            <div class="table-responsive p-2">
              <div class="d-flex flex-wrap justify-content-between m-1">
                </div>
                  <table id="funcionpaginacion" class="table datatable">
                    <thead>
                      <tr>
                      <th scope="col">Nro de Expediente</th>
                        <th scope="col">Fiscal Asignado</th>
                        <th scope="col">Supervisor asignado</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Cambiar Estado</th>
                        <th>Detalles de Expediente</th>
                        <th>Editar Expediente</th>
                        <th>Eliminar Expediente</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($r1 as $valor) {?>
                      <tr>
                      <td> <?php echo $valor['NroProvi']; ?></td>
                        <td>
                        <?php echo $valor['nombre_user']; ?>
                        </td>
                        <td>
                        <?php echo $valor['supervisor']; ?>
                        </td>
                        <td> 
                          <span class="badge bg-success"><?php echo $valor['estado_exp']; ?></span>
                        </td> 
                        <td>
                          <button type="button" class="btn btn-primary ri-article-line" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"></button> 
                            <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Cambiar el estado del Expediente</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    
                                    <form class="row g-3 needs-validation" novalidate>

                                      <button type="button" class="btn btn-secondary rounded-pill">En revision</button> 
                                      <button type="button" class="btn btn-warning rounded-pill">En proceso</button>

                                      <!-- <button type="button" class="btn btn-success rounded-pill">Despachar</button>
                                      <div class="modal-footer"> -->

                                      <select class="form-select" aria-label="Default select example">
                                        <option selected=""> despachar expediente</option>
                                        <option value="1">A oficina 1</option>
                                        <option value="2">A oficna 2</option>
                                        <option value="3">A oficina 3</option>
                                      </select>
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    </form>

                                  </div>
                                </div>
                              </div>
                            </div>
                        </td>
                        <td>
                          <button type="button" class="btn btn-primary ri-add-box-line" data-bs-toggle="modal" data-bs-target="#staticBackdrop3"></button> 
                            <!-- Modal De datos de expedientes -->
                          <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Datos de Expediente</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                  <div class="col-12">
                                    <label for="yourNro" class="form-label" style="color: red">Nro de Providencia</label>
                                    <div class="col-12">
                                      <h5 class="form-label"><?php echo $valor['NroProvi']; ?></h5>
                                    </div>
                                  </div>

                                  <div class="col-12">
                                    <label style="color: red" class="form-label">Sujeto Pasivo</label>
                                    <div class="col-12">
                                      <h5 class="form-label"><?php echo $valor['sujetoP']; ?></h5>
                                    </div>
                                  </div>
                                  
                                  <div class="col-12">
                                    <label style="color: red" for="yourRif" class="form-label">Rif</label>
                                    <div class="col-12">
                                    <h5 class="form-label"><?php echo $valor['RifSP']; ?></h5>
                                  </div>
                                    
                                  <div class="col-12">
                                    <label style="color: red" class="form-label">Domicilio Fiscal</label>
                                    <div class="col-12">
                                      <h5 class="form-label"><?php echo $valor['DomicilioFiscal']; ?></h5>
                                    </div>
                                  </div>

                                  <div class="col-12">
                                    <label style="color: red"class="form-label">Fiscal Asignado</label>
                                    <div class="col-12">
                                      <h5 class="form-label"><?php echo $valor['nombre_user']; ?></h5>
                                    </div>
                                  </div>

                                  <div class="col-12">
                                    <label style="color: red" class="form-label">Fecha de registro</label>
                                    <div class="col-12">
                                      <h5 class="form-label">00/00/0000</h5>
                                    </div>
                                  </div>

                                  <div class="col-12">
                                    <label style="color: red" class="form-label">Fecha de Despacho</label>
                                    <div class="col-12">
                                      <h5 class="form-label">00/00/0000</h5>
                                    </div>
                                  </div>

                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                  </div>
                              </div>
                            </div>
                          </div>  
                        </td>  
                        <td> 
                        <button type="button" class="btn btn-primary ri-edit-line" onclick="cargar_datos(<?=$valor['id_expedientes'];?>, <?=$valor['id_usuario'];?>);">
                        </button>
                        </td>
                        <td>
                          </button>
                            <button type="button" class="btn btn-danger ri-delete-bin-2-line" onclick="eliminar(<?=$valor['id_expedientes'];?>, <?=$valor['id_usuario'];?>);"> 
                          </button> 
                        </td>
                        <?php } ?>
                    </tbody>
                    <tfooter>
                      <tr>
                        <th scope="col">Nro de Expediente</th>
                        <th scope="col">Fiscal Asignado</th>
                        <th scope="col">Supervisor asignado</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Cambiar Estado</th>
                        <th>Detalles de Expediente</th>
                        <th>Editar Expediente</th>
                        <th>Eliminar Expediente</th>
                      </tr>
                    </tfooter>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </main><!-- End #main -->
  <?php include_once "bin/component/footer.php";?>
  <script src="content/js/Expedientes.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var supervisorInput = document.getElementById("supervisor");
      
      // Deshabilitar el campo
      supervisorInput.disabled = true;

      // Evitar que se modifique mediante el inspector de código
      supervisorInput.addEventListener("input", function(event) {
        event.preventDefault();
        return false;
      });
    });
  </script>
</body>

</html>

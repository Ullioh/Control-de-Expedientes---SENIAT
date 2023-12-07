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

<!-- seccion de la tabla-->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              <h5 class="card-title">Lista de Expedientes</h5>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Registrar Expediente
            </button>

<!-- Modal 1 registro de expediente -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel">
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Registrar Expediente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="yourNro" class="form-label">Nro de Providencia</label>
                      <input type="Text" name="Nro" class="form-control" id="NroProvidencia" required>
                      <div class="invalid-feedback">Por Favor, Ingresa el Nro de Providencia!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourContribuyente" class="form-label">Sujeto Pasivo</label>
                      <input type="Text" name="Sujeto Pasivo" class="form-control" id="SuPa" required>
                      <div class="invalid-feedback">Por Favor, Ingresa el sujeto Pasivo!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourRif" class="form-label">Rif</label>
                      <input type="Text" name="RifC" class="form-control" id="yourRifC" required>
                      <div class="invalid-feedback">Por Favor, Ingresa el Rif de Providencia!</div>
                    </div>
                    <div class="col-12">
                      <label for="DomiciFi" class="form-label">Domicilio Fiscal</label>
                      <input type="Text" name="RifC" class="form-control" id="DomiFI" required>
                      <div class="invalid-feedback">Por Favor, Ingresa el Domicilio Fiscal!</div>
                    </div>
                    <div class="col-12">
                    <label for="DomiciFi" class="form-label">Asignar Fiscal</label>
                    <select class="form-control" id="AddFiscal">
                      <option>Fiscal 1</option>
                      <option>Fiscal 2</option>
                      <option>Fiscal 3</option>
                      <option>Fiscal 4</option>
                      <option>Fiscal 5</option>
                    </select>
                  </div>
                     <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Registrar Expediente</button>
                  </div>
                </form>
                  </div>
                </div>
              </div>
        </div>
<!-- final de Modal 1 -->


<!-- Inicion de la tabla de expedientes -->
      <table class="table datatable">
<!-- Cabesera de la tabla -->
                <thead>
                  <tr>
                    <th scope="col">Nro de Expediente</th>
                    <th scope="col">Fiscal Asignado</th>
                    <th scope="col">Supervisor asignado</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Cambiar Estado</th>
                    <th>Detalles de Expediente</th>
                  </tr>
                </thead>
<!-- Final de la cabsera de la tabla -->

<!-- Inicion de los dats de la tabla -->
  <tbody>
              <tr>
                  <td>
                    0000-0000-0000
                  </td>

                  <td>
                    Nombre Fisca
                  </td>
                    
                  <td>
                    Nombre Supervisor
                  </td>

                  <td> 
                    <span class="badge bg-success">En Revision</span>
                  <td> 
                    <button type="button" class="btn btn-primary ri-article-line" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"></button> 
<!-- modal de cambiar estados de los expedientes-->
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
                                  <option selected=""> despachar expediente?</option>
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
<!-- final de cambiar estados de los expedientes-->
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
                                  <h5 class="form-label">000-0200-000-200-582489</h5>
                                </div>
                                  
                                </div>
                                <div class="col-12">
                                  <label style="color: red" class="form-label">Sujeto Pasivo</label>
                                </div>
                                <div class="col-12">
                                  <h5 class="form-label">Nro Sujeto Pasivo</h5>
                                </div>
                                
                                <div class="col-12">
                                  <label style="color: red" for="yourRif" class="form-label">Rif</label>
                                  <div class="col-12">
                                  <h5 class="form-label">Nro fiscal</h5>
                                </div>
                                  
                                </div>
                                <div class="col-12">
                                  <label style="color: red" class="form-label">Domicilio Fiscal</label>
                                <div class="col-12">
                                  <h5 class="form-label">Calle tal Carrera tal</h5>
                                </div>
                                <div class="col-12">
                                <label style="color: red"class="form-label">Fiscal Asignado</label>
                                <div class="col-12">
                                  <h5 class="form-label">Nombre Fiscal</h5>
                                </div>
                                <div class="col-12">
                                <label style="color: red" class="form-label">Fecha de registro</label>
                                <div class="col-12">
                                  <h5 class="form-label">00/00/0000</h5>
                                </div>
                                <label style="color: red" class="form-label">Fecha de Despacho</label>
                                <div class="col-12">
                                  <h5 class="form-label">00/00/0000</h5>
                                </div>
                                
                                 <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                
                              </div>
                              </div>
                            </div>
                          </div>
                    </div> </td>    

</tbody>
</table>
</div>
</div>
</div>
</div>
</section>
</main> <!-- End #main -->

    <?php include_once "bin/component/footer.php";?>

</html>
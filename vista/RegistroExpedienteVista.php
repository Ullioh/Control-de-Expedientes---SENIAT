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

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Registrar Expediente
            </button>

            <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nro de Expediente</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Fiscal</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>0000-0000-0000</td>
                    <td>Designer</td>
                    <td> <span class="badge bg-success">Success</span></td>

                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

    <?php include_once "bin/component/footer.php";?>

</body>

</html>
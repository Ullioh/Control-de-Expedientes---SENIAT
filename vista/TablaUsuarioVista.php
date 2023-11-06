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

              <h5 class="card-title">Lista de Usuarios</h5>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Registrar Ususario
            </button>

            <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Registrar Usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">


                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Nombre</label>
                      <input type="text" name="name" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Por Favor, Ingresa un nombre!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourCedula" class="form-label">Cedula</label>
                      <input type="text" name="cedula" class="form-control" id="yourCedula" required>
                      <div class="invalid-feedback">Por Favor, Ingresa un Correo!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Contraseña</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Por Favor, Ingresa una contraseña!</div>
                    </div>
                    <div class="col-12">
                    <label for="DomiciFi" class="form-label">Asignar cargo</label>
                    <select class="form-control" id="AddFiscal">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  	</div>

                  	 <div class="col-12">
                    <label for="DomiciFi" class="form-label">Asignar Area</label>
                    <select class="form-control" id="AddFiscal">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  	</div>

                    </div>
                     <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Registrar Usuario</button>
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
                    <th scope="col">Cedula</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Area</th>
                    <th scope="col">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>27209480</td>
                    <td>Julio Linarez</td>
                    <td>Pasante</td>
                    <td>Informatica</td>
                    <td>  <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary ri-mark-pen-line" data-bs-toggle="modal" data-bs-target="#staticBackdrop1"> 
            </button>

            <!-- Modal Editar Usuario -->
        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">


                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Nombre</label>
                      <input type="text" name="name" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Por Favor, Ingresa un nombre!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourCedula" class="form-label">Cedula</label>
                      <input type="text" name="cedula" class="form-control" id="yourCedula" required>
                      <div class="invalid-feedback">Por Favor, Ingresa un Correo!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Contraseña</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Por Favor, Ingresa una contraseña!</div>
                    </div>
                    <div class="col-12">
                    <label for="DomiciFi" class="form-label">Asignar cargo</label>
                    <select class="form-control" id="AddFiscal">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  	</div>

                  	 <div class="col-12">
                    <label for="DomiciFi" class="form-label">Asignar Area</label>
                    <select class="form-control" id="AddFiscal">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  	</div>

                   </div>
                     <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Editar Usuario</button>
                    </div>
                  </form>


                  </div>
                </div>
              </div>
        </div>

             <button type="button" class="btn btn-danger ri-chat-delete-fill"> 
            </button> 

                	</td>

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
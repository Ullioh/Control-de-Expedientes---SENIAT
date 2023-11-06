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

              <h5 class="card-title">Lista de Roles</h5>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Registrar un nuevo rol
            </button>

            <!-- Modal de Registrar Rol -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Registrar Rol</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <form class="row g-3 needs-validation" novalidate>
                      <div class="col-12">
                        <label for="yourName" class="form-label">Nombre del Rol</label>
                        <input type="text" name="name" class="form-control" id="yourName" required>
                        <div class="invalid-feedback">Por Favor, Ingresa un Rol!</div>
                      </div>  
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-primary">Registrar Rol</button>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
        </div>

              <!-- Tabla De Roles -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Pasante</td>
                    <td> 
            <!-- Button editar permisos de roles -->
            <button type="button" class="btn btn-primary ri-mark-pen-line" data-bs-toggle="modal" data-bs-target="#staticBackdrop1"> 
            </button>

            <!-- Modal Editar Permisos Rol -->
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
                       
<table class="table">
  <thead>
    <tr>
      <th scope="col">Rol</th>
      <th scope="col">Registrar</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Solicitar</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Administrador</td>
      <td>
       <div>
        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."> </div> </td>
        <td> <div>
        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."> </div>  </td>
        <td> <div>
        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."> </div>  </td>
        <td> <div>
        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."> </div>  </td>
    </tr>
    <tr>
      <td>Gerente</td>
      <td>
       <div>
        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."> </div> </td>
      <td> <div>
        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."> </div>  </td>
        <td> <div>
        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."> </div>  </td>
        <td> <div>
        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."> </div>  </td>
    </tr>
    <tr>
      <td>Supervisor</td>
      <td>
       <div>
        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."> </div> </td>
        <td> <div>
        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."> </div>  </td>
        <td> <div>
        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."> </div>  </td>
        <td> <div>
        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."> </div>  </td>
    </tr>
  </tbody>
</table>

                    </div>

                   </div>
                     <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Editar permisos</button>
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
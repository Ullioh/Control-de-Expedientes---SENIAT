
<!DOCTYPE html>
<html lang="en">

<?php include_once "bin/component/head.php";?>

<body>
                      <?php include_once "bin/component/header.php";?>

                      <?php include_once "bin/component/sidebar.php";?>
                      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tabla de Datos</h1>
 
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Lista de Bitacora Expedientes</h5>

          <div class="card border">
            <div class="table-responsive p-2">
              <div class="d-flex flex-wrap justify-content-between m-1">
                </div>
                  <table id="funcionpaginacion" class="table datatable">
                    <thead>
                      <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Supervisor del expediente</th>
                        <th scope="col">Nro expediente</th>
                        <th scope="col">Movimiento del expediente</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($r1 as $valor) {?>
                      <tr>
                        <td> 
                          <?php echo $valor['fecha_formateada']; ?>
                        </td>
                        <td>
                        <?php echo $valor['usuario']; ?>
                        </td>
                        <td>
                        <?php echo $valor['nro_expediente']; ?>
                        </td>
                        <td>
                          <?php echo $valor['movimiento_de_expediante']; ?>
                        </td>
                        <?php } ?>
                    </tbody>
                    <tfooter>
                      <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Supervisor del expediente</th>
                        <th scope="col">Nro expediente</th>
                        <th scope="col">Movimiento del expediente</th>
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
  <script src="content/js/BitacoraExpedientes.js"></script>
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

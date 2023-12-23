
<!DOCTYPE html>
<html lang="en">

<?php include_once "bin/component/head.php";?>

<body>
                      <?php include_once "bin/component/header.php";?>

                      <?php include_once "bin/component/sidebar.php";?>
                      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
                      <script src="https://code.highcharts.com/highcharts.js"></script>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tabla de Datos</h1>
 
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ruta del Expedientes</h5>
              <div class="input-group mb-3">
                <input type="text" class="form-control" id="nro_expediente" placeholder="Nro de expediente" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="reporte_expediente">Buscar</button>
              </div>
              <div id="chart-container" style="min-width: 310px; height: 200px; margin: 0 auto"></div>

  
              </div>
            </div>
          </div>
        </div>
    </section>
  </main><!-- End #main -->
  
  <?php include_once "bin/component/footer.php";?>
  <script src="content/js/ReporteExpediente.js"></script>

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

<!DOCTYPE html>
<html lang="en">

<?php include_once "bin/component/head.php";?>

<body style="background: #f33f3f">

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <img src="assets/img/SOP.png" style="width: 224px; height: 44px;">
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">
                  <div class="pt-4 pb-2">

                    <div class="d-flex justify-content-center py-4">
                      <img src="assets/img/SL.png" style="width: 186px; height: 64px;">
                    </div>

                    <h5 class="card-title text-center pb-0 fs-4">Iniciar Sesión</h5>
                    <p class="text-center small">Ingrese su Cedula y Contraseña</p>
                  </div>

                  <div class="row g-3">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Cedula</label>
                      <div class="input-group has-validation">
                        <input type="text" name="username" class="form-control" id="user">
                        <spam id="spam1" class="text-danger"></spam>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Contraseña</label>
                      <input type="password" name="password" class="form-control" id="contrasena">
                      <spam id="spam2" class="text-danger"></spam>
                    </div>

                    <div class="col-12">
                      <div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" id="entrasystem" >Iniciar Sesión</button>
                    </div>
</div>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/js/jquery-3.6.3.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="content/js/Login.js"></script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!--  <script src="assets/vendor/chart.js/chart.umd.js"></script> -->
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>

  <!-- Template Main JS File -->

</body>

</html>

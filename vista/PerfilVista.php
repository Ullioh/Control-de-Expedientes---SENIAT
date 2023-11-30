<!DOCTYPE html>
<html lang="en">

 <?php include_once "bin/component/head.php";?>

<body>
  
  <?php include_once "bin/component/header.php";?>

  <?php include_once "bin/component/sidebar.php";?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Perfil</h1>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2><?php echo $_SESSION['usuario']["nombre_apellido"] ?></h2>
              <h3> <?php echo $_SESSION['usuario']["nombre_rol"]?> </h3>
              <div class="social-links mt-2">
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Detalle de la cuenta</button>
                </li>
              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                 

                  <h5 class="card-title">Detalles de perfil</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label "> Nombre y Apellido</div>
                    <div class="col-lg-9 col-md-8"> <?php echo $_SESSION['usuario']["nombre_apellido"] ?>  </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Compañia</div>
                    <div class="col-lg-9 col-md-8"> SENIAT</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Cargo en el sistema</div>
                    <div class="col-lg-9 col-md-8"> <?php echo $_SESSION['usuario']["nombre_rol"]?> </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Cedula</div>
                    <div class="col-lg-9 col-md-8"> 000 </div>
                  </div>
                </div>

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php include_once "bin/component/footer.php";?>

</body>

</html>
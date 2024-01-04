  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-heading">Paginas</li>
      <?php if($_SESSION['usuario']["nombre_rol"] == "Administrador" || $_SESSION['usuario']["nombre_rol"] == "Super Usuario" ) { ?>
        <li class="nav-item">
          <a class="nav-link " href="?pagina=Principal">
            <i class="bi bi-grid"></i>
            <span>Control General</span>
          </a>
        </li><!-- End Dashboard Nav -->
      <?php } ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="?pagina=Perfil">
          <i class="bi bi-person"></i>
          <span>Mi Perfil</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <?php if($_SESSION['usuario']["division"] == "División de Fiscalizacíon" || $_SESSION['usuario']["nombre_rol"] == "Super Usuario" ) { ?>
      <li class="nav-item">
        <a class="nav-link collapsed"  href="?pagina=RegistroExpediente">
          <i class="bi bi bi-layout-text-window-reverse"></i><span>Estado de Expedientes Fiscalización</span>
        </a>
      </i><!-- End Tables Nav -->
      <?php } ?>
      
      <?php if($_SESSION['usuario']["division"] == "División de Sumario Administrativo" || $_SESSION['usuario']["nombre_rol"] == "Super Usuario" ) { ?>
      <li class="nav-item">
        <a class="nav-link collapsed"  href="?pagina=RegistroExpedienteSumario">
          <i class="bi bi bi-layout-text-window-reverse"></i><span>Estado de Expedientes Sumario</span>
        </a>
      </li><!-- End Tables Nav -->
      <?php } ?>
      <?php if($_SESSION['usuario']["nombre_rol"] == "Administrador" || $_SESSION['usuario']["nombre_rol"] == "Super Usuario" ) { ?>
      <li class="nav-item">
        <a class="nav-link collapsed"  href="?pagina=BitacoraExpedientes">
          <i class="bi bi bi-layout-text-window-reverse"></i><span>Bitacora de expedientes</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed"  href="?pagina=ReporteExpediente">
          <i class="bi bi bi-layout-text-window-reverse"></i><span>Reporte de Expediente</span>
        </a>
      </li>
      <?php } ?>
      <?php if($_SESSION['usuario']["nombre_rol"] == "Super Usuario" ) { ?>
      <li class="nav-item">
        <a class="nav-link collapsed"  href="?pagina=TablaUsuario">
          <i class="ri-file-user-line"></i><span>Estado de Usuarios</span>
        </a>
      </li><!-- End Tables Nav -->
      <?php } ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="?pagina=Contactos">
          <i class="bi bi-envelope"></i>
          <span>Contactos</span>
        </a>
      </li><!-- End Contact Page Nav -->
    </ul>
  </aside><!-- End Sidebar-->
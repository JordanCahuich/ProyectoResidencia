partial -->
<div class="container-fluid page-body-wrapper">
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="/">
        <i class="mdi mdi-home menu-icon"></i>
        <span class="menu-title">Inicio</span>
      </a>
   
  
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="mdi mdi-account-multiple-plus menu-icon"></i>
        <span class="menu-title">Sección de Alumnos</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('alumno.create') }}">Registrar nuevo Alumno</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('alumno.index') }}">Lista de Alumnos</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="mdi mdi-coin menu-icon"></i>
        <span class="menu-title">Sección de Pagos</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('pago.index') }}">Historial de pagos</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('concepto.forma') }}">Formas de pago</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('concepto.index') }}">Concepto</a></li>
        
         <li class="nav-item"> <a class="nav-link" href="{{ route('pagos.configuracion') }}">Configuracion</a></li>
        
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        <i class="mdi mdi-file-export menu-icon"></i>
        <span class="menu-title">Carga Academica</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="collapseExample">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('carga.create') }}">Registrar nueva carga</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('carga.index') }}">Lista de cargas</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
        <i class="mdi mdi-account-card-details menu-icon"></i>
        <span class="menu-title">Seccion de Docentes</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="collapseExample1">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('profe.create') }}">Registrar docente</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('profe.index') }}">Lista de docentes</a></li>
        </ul>
      </div>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="{{ route('horario.create') }}">
        <i class="mdi mdi-clock-fast menu-icon"></i>
        <span class="menu-title">Horarios</span>
      </a>
    </li>
   

  </ul>
</nav>



<h6 class="navbar-heading text-muted">Gestión</h6>

<ul class="navbar-nav">
    <li class="nav-item  active ">
      <a class="nav-link  active " href="{{route('home')}}">
        <i class="ni ni-tv-2 text-danger"></i> Principal
      </a>
    </li>



    <li class="nav-item">
        <a class="nav-link " href="{{route('listadoPacientes')}}">
          <i class="fas fa-wheelchair text-orange"></i> Lista Pacientes
        </a>
    </li>


    <li class="nav-item">
      <a class="nav-link " href="{{route('perfilDoctor')}}">
        <i class="ni ni-single-02 text-yellow"></i> Perfil de Usuario
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}"
      onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
        <i class="fas fa-sign-in-alt"></i> Cerrar Sesión
      </a>
      <form action="{{ route('logout') }}" method="POST" style="display: none;" id="formLogout">
        @csrf

      </form>
    </li>
  </ul>
  <!-- Divider -->
  <hr class="my-3">
  <!-- Heading -->
  <h6 class="navbar-heading text-muted">About Us</h6>
  <!-- Navigation -->
  <ul class="navbar-nav mb-md-3">
    <li class="nav-item">
      <a class="nav-link" href="https://www.linkedin.com/in/maicol-arroyave-%C3%A1lvarez-637072210/" target="blank">
        <div>Maicol AA Dev</div>
      </a>
    </li>

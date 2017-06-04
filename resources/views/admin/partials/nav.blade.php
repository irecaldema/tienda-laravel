<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      {!! link_to('admin/home', "Huck", $attributes = array('class' => 'navbar-brand main-title')) !!}
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <p class="navbar-text"><i class="fa fa-dashboard"></i> Panel de administración</p>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/admin/category">Categorias</a></li>
        <li><a href="/admin/product">Productos</a></li>
        <li><a href="/admin/orders">Pedidos</a></li>
        <li><a href="/admin/user">Usuarios</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <i class="fa fa-user"></i> {{ Auth::user()->user }} <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ route('logout') }}">Finalizar sesión</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
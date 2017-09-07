<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div id="logo">
      <a class="navbar-brand main-title" href="{{route('homea')}}"><i><img src="../icono3.png" alt="HTML5 Icon" type="image/png" style="width:55px;height:30px;"></i> Laube Cosmeticos</a>
      </div>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li><a href="{{route('cart-show')}}"><i class="fa fa-shopping-cart"></i> Carrito</a></li>
      <li><a href="#"><i class="fa fa-group"></i> Conocenos</a></li>
      <li><a href="#"><i class="fa fa-paper-plane"></i> Contacto</a></li>
      <li><a href="../admin/home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @include('store.partials.menu-user')
        </ul>
  </div>
</nav>
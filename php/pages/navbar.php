<?php
function navbar(){
    ?>
  <header class="navbar" id="header-navbar">
    <div class="container">
      <a href="concepto.php" id="logo" class="navbar-brand"> TaxTuquerres</a>
      <div class="clearfix">
        <button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="fa fa-bars"></span>
        </button>
        <div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
          <ul class="nav navbar-nav pull-left">
            <li>
              <a class="btn" id="make-small-nav"><i class="fa fa-bars"></i></a>
            </li>
          </ul>
        </div>
        <div class="nav-no-collapse pull-right" id="header-nav">
          <ul class="nav navbar-nav pull-left">
            <li class="dropdown profile-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" alt=""/>
                <span class="hidden-xs"><?php echo $_SESSION['nombre']; ?></span> <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="../ajax/usuarios.php?op=mostrar"><i class="fa fa-user"></i>Perfil</a></li>
                <li><a href="../ajax/usuarios.php?op=salir"><i class="fa fa-power-off"></i>Salir</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

    <?php
}
?>
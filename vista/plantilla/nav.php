
  <!-- Navbar -->
  <div class="wrapper sticky-top bg-primary">
        <div class="nav main-header"> 
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md">
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style='color: white'></i></a>
                            </div>
                        </div>
                        <?php 
                        if (isset($_SESSION['fistname'])){
                            ?>
                        <ul> 
                            <!-- Messages Dropdown Menu -->
                            <li class="nav-item dropdown">
                                <a class="btn btn-app" data-toggle="dropdown" href="#" title=" <?=$_SESSION['fistname'];?>">
                                <i class="far fa-user"></i>
                                <?=$_SESSION['fistname'];?>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                <a href="#" class="dropdown-item">
                                    <!-- Message Start -->
                                    <div class="media">
                                    <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                        <?= (isset($_SESSION['fistname']))?$_SESSION['fistname']:'Visitante';?>
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">
                                        <i class="far fa-envelope"></i> : <?= (isset($_SESSION['email']))?$_SESSION['email']:'-';?>
                                        </p>
                                        <p class="text-sm">
                                        <i class="far fa-clock mr-1"></i> Hace 4 hrs.
                                        </p>
                                    </div>
                                    </div>
                                    <!-- Message End -->
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item dropdown-footer">Acerca de...</a>
                                <div class="dropdown-divider"></div>
                                <a href="?ctrl=CtrlUsuario&accion=cerrarSesion" class="dropdown-item dropdown-footer">Cerrar Sesión</a>
                                </div>
                            </li>
                                <?php
                                } else {
                                ?>
                                <li class="nav-item">
                                <a class="btn btn-app" role="button" 
                                data-toggle="modal" data-target="#modal-login" title="Ingresar ...">
                                <i class="far fa-user"></i>
                                Ingresar</a>
                                </li>  
                                <?php
                                }
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                                <i class="fas fa-expand-arrows-alt"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                                <i class="fas fa-th-large"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
        </div>
  </div>
  <!-- /.navbar -->
  

  <div class="modal fade" id="modal-login">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Login</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p class="login-box-msg">Registre la siguiente información</p>

        <form action="?ctrl=CtrlAdministrador&accion=validar" method="post">
            <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="User">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="password" name="clave" class="form-control" placeholder="Clave">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-8">
                <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                    Recuérdame
                </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
            </div>
            <!-- /.col -->
            </div>
        </form>
        <!-- /.social-auth-links -->
        </div>
        </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
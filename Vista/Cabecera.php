<!-- Cabecera -->
<?php session_start(); ?>
<div class="container-fluid">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
        <!-- Al colapsar quedan agrupados para una mejor visualización móvil -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="?sec=Inicio"><img src="img/LOGO_2.png" width="120px"/></a><!-- logo ObraRed -->
        </div>
        <!-- Recoge los enlaces de navegación, formularios y otros contenidos para alternar -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="?sec=Inicio"><b class="glyphicon glyphicon-home"></b>&nbsp;Inicio</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="glyphicon glyphicon-lock"></b>&nbsp;Nuestra Empresa <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="?sec=Nosotros"><b class="glyphicon glyphicon-question-sign"></b>&nbsp;Quienes Somos</a></li>
                        <li><a href="?sec=Vision"><b class="glyphicon glyphicon-eye-open"></b>&nbsp;Visión</a></li>
                        <li><a href="?sec=Mision"><b class="glyphicon glyphicon-ok-sign"></b>&nbsp;Misión</a></li>
                        <li><a data-toggle="modal" href="#" data-target="#formulario-contacto"><b class="glyphicon glyphicon-envelope"></b>&nbsp;Contacto</a></li>
                    </ul>
                </li>
                <!--<li id="contacto_logout" style="display:block"><a data-toggle="modal" href="#" data-target="#formulario-contacto"><b class="glyphicon glyphicon-envelope"></b>&nbsp;Contacto</a></li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="glyphicon glyphicon-star"></b>&nbsp;Presupuesto <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="?sec=Presupuesto"><b class="glyphicon glyphicon-list-alt"></b>&nbsp;Crear Presupuesto</a></li>
                        <li><a href="?sec=Buscar"><b class="glyphicon glyphicon-search"></b>&nbsp;Buscar</a></li>
                    </ul>
                </li>               
            </ul>
            <?php
                if(isset($_SESSION['nombre'])){
            ?>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienvenido <?php echo $_SESSION['nombre'].' '.$_SESSION['ap_paterno'] ?> <b class="glyphicon glyphicon-user"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="?sec=Perfil"><b class="glyphicon glyphicon-cog"></b>&nbsp;Perfil</a></li>
                        <li><a href="?sec=muestra_presupuestos"><b class="glyphicon glyphicon-folder-open"></b>&nbsp;Mis Presupuestos</a></li> 
                        <li><a href="?sec=mantenedorMateriales"><b class="glyphicon glyphicon-briefcase"></b>&nbsp;Materiales</a></li> 
                        <li><a href="?sec=mantenedorUsuarios"><b class="glyphicon glyphicon-floppy-open"></b>&nbsp;Usuarios</a></li>  
                        <li><a href="?sec=Agrega_Materiales"><b class="glyphicon glyphicon-floppy-open"></b>&nbsp;Agregar Materiales</a></li>  
                        <li><a href="Controlador/Logout.php"><b class="glyphicon glyphicon-off"></b>&nbsp;Cerrar Sesión</a></li>
                    </ul>
                </li>
                <!--<script type="text/javascript">document.getElementById("drop_presupuesto").style.display="block";</script>-->
                <!--<script type="text/javascript">document.getElementById("presupuesto").style.display="block";</script>-->
                <script type="text/javascript">document.getElementById("servicios_logout").style.display="none";</script>
                <script type="text/javascript">document.getElementById("servicios_login").style.display="block";</script>
                <!--<script type="text/javascript">document.getElementById("contacto_logout").style.display="none";</script>-->
                <!--<script type="text/javascript">document.getElementById("contacto_login").style.display="block";</script>-->
                <!--<script type="text/javascript">document.getElementById("buscar").style.display="block";</script>-->
                <!--<script type="text/javascript">document.getElementById("AgregaMateriales").style.display="block";</script>-->
            </ul>
            <?php }else{ ?>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="glyphicon glyphicon-user"></b>&nbsp;Inicio de Sesión</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a data-toggle="modal" href="#" data-target="#login"><b class="glyphicon glyphicon-off"></b>&nbsp;Iniciar Sesión</a></li>
                            <li><a data-toggle="modal" href="#" data-target="#formulario-registro"><b class="glyphicon glyphicon-pencil"></b>&nbsp;Registrarse</a></li>
                        </ul>
                    </li>
                </ul>
            <?php } ?>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<div class="row">&nbsp;</div>
<div class="row">&nbsp;</div>
<div class="row">&nbsp;</div>

<?php 
    include 'Vista/Registro_Usuario.php';
    include 'Vista/Contacto.php';
    include 'Vista/Login.php';

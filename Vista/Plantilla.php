<? //xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title></title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="bootstrap/css/footer.css"/>
        <script type="text/javascript" src="bootstrap/js/jQuery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="Controlador/Javascript/funciones.js"></script>
        <script type="text/javascript" src="Controlador/Javascript/jQueryRut.js"></script>
        <script type="text/javascript" src="Controlador/Javascript/jquery.Rut.js"></script>
        <script type="text/javascript" language="javascript" src="bootstrap/js/ajax.js"></script>
    </head>
    <body>
        <div class="container">
            <?php
                include 'Cabecera.php';
                $seccion=filter_input(INPUT_GET, "sec");
                if(empty($seccion)){
                    $seccion='Inicio';
                }
                if(!$_SESSION){
//                    include 'Oferta.php';
                    switch($seccion){
                        case "Inicio":
                            include 'Carousel.php';
                            break;
                        case "Servicios":
                            include 'Servicios.php';
                            break;
                        case "Nosotros":
                            include 'Quienes_Somos.php';
                            break;
                        case "Vision":
                            include 'Vision.php';
                            break;
                        case "Mision":
                            include 'Mision.php';
                            break;
                        case "Contacto":
                            include 'Contacto.php';
                            break;
                        case "Codigo":
                            include 'Codigo.php';
                            break;
                        case "Presupuesto":
                            include 'Presupuesto.php';
                            break;
                        case "ResBuscar":
                            include 'ResBuscar_2.php';
                            break;
                        case "Buscar":
                            include 'BuscarMateriales.php';
                            break;
                        case "Agrega_Materiales":
                            include 'Registro_Materiales.php';
                            break;
                        default:
                            include 'Carousel.php';
                            break;
                    }
                }else{
                    switch($seccion){
                        case "Inicio":
                            include 'Carousel.php';
                            break;
                        case "Servicios":
                            include 'Servicios.php';
                            break;
                        case "Nosotros":
                            include 'Quienes_Somos.php';
                            break;
                        case "Vision":
                            include 'Vision.php';
                            break;
                        case "Mision":
                            include 'Mision.php';
                            break;
                        case "Contacto":
                            include 'Contacto.php';
                            break;
                        case "Presupuesto":
                            include 'Presupuesto.php';
                            break;   
                        case "Login":
                            include 'Login.php';
                            break;
                        case "Registro":
                            include 'Registro_Usuario.php';
                            break;
                        case "Perfil":
                            include 'Perfil.php';
                            break;
                        case "ResBuscar":
                            include 'ResBuscar_2.php';
                            break;                
                        case "Buscar":
                            include 'BuscarMateriales.php';
                            break; 
                        case "Agrega_Materiales":
                            include 'Registro_Materiales.php';
                            break;   
                        case "Cotizacion":
                            include 'Cotizacion.php';
                            break;
                        case "Codigo":
                            include 'Codigo.php';
                            break;
                    }
                }
                include 'Footer.php';
            ?>
        <!--</div>-->
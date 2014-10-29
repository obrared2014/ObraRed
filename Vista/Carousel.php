<!--Carousel.php -->
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">Inicio</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <!--Nav tabs--> 
        <ul class="nav nav-tabs" role="tablist">
            <li class="active "><a class="btn-primary" style="width: 88px; text-align: center;" href="#radier_basico" role="tab" data-toggle="tab">Radier</a></li>
            <li><a class="btn-primary" style="width: 88px; text-align: center;"  href="#muro_basico" role="tab" data-toggle="tab">Muro</a></li>
            <li><a class="btn-primary" style="width: 88px; text-align: center;" href="#techo_basico" role="tab" data-toggle="tab">Techo</a></li>
            <li><a class="btn-primary" style="width: 88px; text-align: center;" href="#casa_basica" role="tab" data-toggle="tab">Casa</a></li>
        </ul>
        <!--Tab panes--> 
        <div class="tab-content">
            <div class="tab-pane active" id="radier_basico"><!-- Panel Radier -->
                <form class="form-horizontal" action="./Modelo/Presupuestos/obtenerPresupuestos.php" method="POST" name="form_presupuesto_medidas_radier">
                    <input type="hidden" name="idUsuario" id="idUsuario" value="0<?php
                    if (isset($_SESSION["id_persona"])) {
                        echo $_SESSION["id_persona"];
                    } else {
                        0;
                    }
                    ?>">
                    <input type="hidden" name="nombreConstruccion" id="nombreConstruccion" value="Radier">
                    <input type="hidden" name="construccion" id="construccion" value="1"> <!-- se debe cambiar esto ya que debe encontrar el id-->
                    <input type="hidden" name="presupuestoRapido" id="presupuestoRapido" value="SI">
                    <div class="row">
                        <div class="col-lg-12" name="div_medidas" id="div_medidas">
                            <table class="table table-bordered">
                                <tr class="active">
                                    <th colspan="2">Zona Geográfica</th>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="input-group col-lg-12">
                                            <select class="form-control" required="true" name="zona_geografica">
                                                <option value="">Seleccione</option>
                                                <option value="1">Zona Centro</option>
                                                <option value="2">Zona Norte</option>
                                                <option value="3">Zona Sur</option>
                                            </select>
                                            <span class="input-group-addon">
                                                <a href="#" tabindex="0" class="glyphicon glyphicon-question-sign ayuda-popover" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-content="Los materiales se ajustan según la Zona Geográfica que selecciones."></a>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr class="active"><th colspan="2">Unidad de Medida</th></tr>
                                <tr>
                                    <td colspan="2" style="text-align: center">
                                        <input type="radio" name="unidadMedida" id="centimetros" value="C" onClick="activaCampos('radier');" onChange="cambiaUm(this.value, 'radier');" required="true">Centimetros
                                        <input type="radio" name="unidadMedida" id="metros"  value="M" onClick="activaCampos('radier');" onChange="cambiaUm(this.value, 'radier');">Metros
                                    </td>
                                </tr>
                                <tr class="active"><th colspan="2">Medidas</th></tr>
                                <tr>
                                    <td>Alto: </td>
                                    <td>
                                        <div class="input-group col-lg-12">
                                            <input type="text" placeholder="Alto" maxlength="4" class="form-control" name="alto" id="alto_radier" onkeypress="soloNumeros(event);" disabled required="true"/>
                                            <span class="input-group-addon">
                                                <a href="#" tabindex="0" class="glyphicon glyphicon-question-sign ayuda-popover" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-content="Altura total de lo que será tu radier"></a>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ancho: </td>
                                    <td>
                                        <div class="input-group col-lg-12">
                                            <input type="text" placeholder="Ancho" maxlength="4" class="form-control" name="ancho" id="ancho_radier" onkeypress="soloNumeros(event);" disabled required="true"/>
                                            <span class="input-group-addon">
                                                <a href="#" tabindex="0" class="glyphicon glyphicon-question-sign ayuda-popover" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-content="Ancho total de lo que será tu radier"></a>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Largo: </td>
                                    <td>
                                        <div class="input-group col-lg-12">
                                            <input type="text" placeholder="Largo" maxlength="4" class="form-control" name="largo" id="largo_radier" onkeypress="soloNumeros(event);" disabled required="true"/>
                                            <span class="input-group-addon">
                                                <a href="#" tabindex="0" class="glyphicon glyphicon-question-sign ayuda-popover" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-content="Largo total de lo que será tu radier"></a>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><button type="submit" data-loading-text="Calculando..." class="btn btn-block btn-primary loading">Calcular</button></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="muro_basico"><!-- Panel Muro -->
                <form class="form-horizontal" action="" method="POST" name="form_presupuesto_medidas_muro">
                    <input type="hidden" name="idUsuario" id="idUsuario" value="0<?php
                    if (isset($_SESSION["id_persona"])) {
                        echo $_SESSION["id_persona"];
                    } else {
                        0;
                    }
                    ?>">
                    <input type="hidden" name="nombreConstruccion" id="nombreConstruccion" value="Muro">
                    <input type="hidden" name="presupuestoRapido" id="presupuestoRapido" value="SI">
                    <div class="row">
                        <div class="col-lg-12" name="div_medidas" id="div_medidas">
                            <table class="table table-bordered">
                                <tr class="active">
                                    <th colspan="2">Zona Geográfica</th>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="input-group col-lg-12">
                                            <select class="form-control" required="true" name="zona_geografica">
                                                <option value="">Seleccione</option>
                                                <option value="1">Zona Centro</option>
                                                <option value="2">Zona Norte</option>
                                                <option value="3">Zona Sur</option>
                                            </select>
                                            <span class="input-group-addon">
                                                <a href="#" tabindex="0" class="glyphicon glyphicon-question-sign ayuda-popover" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-content="Los materiales se ajustan según la Zona Geográfica que selecciones."></a>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="active"><th colspan="2">Unidad de Medida</th></tr>
                                <tr>
                                    <td colspan="2" style="text-align: center">
                                        <input type="radio" name="unidadMedida" id="centimetros" value="C" onClick="activaCampos('muro');" onChange="cambiaUm(this.value, 'muro');" required="true">Centimetros
                                        <input type="radio" name="unidadMedida" id="metros"  value="M" onClick="activaCampos('muro');" onChange="cambiaUm(this.value, 'muro');">Metros
                                    </td>
                                </tr>
                                <tr class="active"><th colspan="2">Medidas</th></tr>
                                <tr>
                                    <td>Alto: </td>
                                    <td>
                                        <div class="input-group col-lg-12">
                                            <input type="text" placeholder="Alto" maxlength="4" class="form-control" name="alto" id="alto_muro" onkeypress="soloNumeros(event);" disabled required="true"/>
                                            <span class="input-group-addon">
                                                <a href="#" tabindex="0" class="glyphicon glyphicon-question-sign ayuda-popover" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-content="Alto total de lo que será tu radier"></a>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ancho: </td>
                                    <td>
                                        <div class="input-group col-lg-12">
                                            <input type="text" placeholder="Ancho" maxlength="4" class="form-control" name="ancho" id="ancho_radier" disabled required="true"/>
                                            <span class="input-group-addon">
                                                <a href="#" tabindex="0" class="glyphicon glyphicon-question-sign ayuda-popover" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-content="Ancho total de lo que será tu radier"></a>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Largo: </td>
                                    <td>
                                        <div class="input-group col-lg-12">
                                            <input type="text" placeholder="Largo" maxlength="4" class="form-control" name="largo" id="largo_muro" onkeypress="soloNumeros(event);" disabled required="true"/>
                                            <span class="input-group-addon">
                                                <a href="#" tabindex="0" class="glyphicon glyphicon-question-sign ayuda-popover" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-content="Largo total de lo que será tu radier"></a>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><button type="submit" data-loading-text="Calculando..." class="btn btn-block btn-primary loading">Calcular</button></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form>
            </div>

            <div class="tab-pane" id="techo_basico"><!-- Panel Techo -->
                <form class="form-horizontal" action="./Modelo/Presupuestos/obtenerPresupuestos.php" method="POST" name="form_presupuesto_medidas_techo">
                    <input type="hidden" name="idUsuario" id="idUsuario" value="0<?php
                    if (isset($_SESSION["id_persona"])) {
                        echo $_SESSION["id_persona"];
                    } else {
                        0;
                    }
                    ?>">
                    <input type="hidden" name="nombreConstruccion" id="nombreConstruccion" value="Techo">
                    <input type="hidden" name="presupuestoRapido" id="presupuestoRapido" value="SI">
                    <div class="row">
                        <div class="col-lg-12" name="div_medidas" id="div_medidas">
                            <table class="table table-bordered">
                                <tr class="active">
                                    <th colspan="2">Zona Geográfica</th>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="input-group col-lg-12">
                                            <select class="form-control" required="true" name="zona_geografica">
                                                <option value="">Seleccione</option>
                                                <option value="1">Zona Centro</option>
                                                <option value="2">Zona Norte</option>
                                                <option value="3">Zona Sur</option>
                                            </select>
                                            <span class="input-group-addon">
                                                <a href="#" tabindex="0" class="glyphicon glyphicon-question-sign ayuda-popover" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-content="Los materiales se ajustan según la Zona Geográfica que selecciones."></a>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="active"><th colspan="2">Unidad de Medida</th></tr>
                                <tr>
                                    <td colspan="2" style="text-align: center">
                                        <input type="radio" name="unidadMedida" id="centimetros" value="C" onClick="activaCampos('techo');" onChange="cambiaUm(this.value, 'techo');" required="true">Centimetros
                                        <input type="radio" name="unidadMedida" id="metros"  value="M" onClick="activaCampos('techo');" onChange="cambiaUm(this.value, 'techo');">Metros
                                    </td>
                                </tr>
                                <tr class="active"><th colspan="2">Medidas</th></tr>
                                <tr>
                                    <td>Aguas: </td>
                                    <td>
                                        <div class="input-group col-lg-12">
                                            <select name="aguas" id="aguas_techo"  class="form-control" required disabled>
                                                <option value="">Cantidad de Aguas</option>
                                                <option value="1">1 Aguas</option>
                                                <option value="2">2 Aguas</option>
                                            </select>
                                            <span class="input-group-addon">
                                                <a href="#" tabindex="0" class="glyphicon glyphicon-question-sign ayuda-popover" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-content="Corresponde a las caídas de agua que tendrá su techo"></a>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ancho: </td>
                                    <td>
                                        <div class="input-group col-lg-12">
                                            <input type="text" placeholder="Ancho" maxlength="4" class="form-control" name="ancho" id="ancho_techo" onkeypress="soloNumeros(event);"  required="true" disabled/>
                                            <span class="input-group-addon">
                                                <a href="#" tabindex="0" class="glyphicon glyphicon-question-sign ayuda-popover" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-content="Ancho total de lo que será tu radier"></a>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Largo: </td>
                                    <td>
                                        <div class="input-group col-lg-12">
                                            <input type="text" placeholder="Largo" maxlength="4" class="form-control" name="largo" id="largo_techo" onkeypress="soloNumeros(event);"  required="true" disabled/>
                                            <span class="input-group-addon">
                                                <a href="#" tabindex="0" class="glyphicon glyphicon-question-sign ayuda-popover" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-content="Largo total de lo que será tu radier"></a>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><button type="submit" data-loading-text="Calculando..." class="btn btn-block btn-primary loading">Calcular</button></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form>
            </div>

            <div class="tab-pane" id="casa_basica"><!-- Panel Casa -->
                <form class="form-horizontal" action="" method="POST" name="form_presupuesto_medidas_casa">
                    <input type="hidden" name="idUsuario" id="idUsuario" value="0<?php
                    if (isset($_SESSION["id_persona"])) {
                        echo $_SESSION["id_persona"];
                    } else {
                        0;
                    }
                    ?>">
                    <input type="hidden" name="nombreConstruccion" id="nombreConstruccion" value="Casa">
                    <input type="hidden" name="presupuestoRapido" id="presupuestoRapido" value="SI">
                    <div class="row">
                        <div class="col-lg-12" name="div_medidas" id="div_medidas">
                            <table class="table table-bordered">
                                <tr class="active">
                                    <th colspan="2">Zona Geográfica</th>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="input-group col-lg-12">
                                            <select class="form-control" required="true" name="zona_geografica">
                                                <option value="">Seleccione</option>
                                                <option value="1">Zona Centro</option>
                                                <option value="2">Zona Norte</option>
                                                <option value="3">Zona Sur</option>
                                            </select>
                                            <span class="input-group-addon">
                                                <a href="#" tabindex="0" class="glyphicon glyphicon-question-sign ayuda-popover" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-content="Los materiales se ajustan según la Zona Geográfica que selecciones."></a>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="active"><th colspan="2">Unidad de Medida</th></tr>
                                <tr>
                                    <td colspan="2" style="text-align: center">
                                        <input type="radio" name="unidadMedida" id="centimetros" value="C" onClick="activaCampos('casa');" onChange="cambiaUm(this.value, 'casa');" required="true">Centimetros
                                        <input type="radio" name="unidadMedida" id="metros"  value="M" onClick="activaCampos('casa');" onChange="cambiaUm(this.value, 'casa');">Metros
                                    </td>
                                </tr>
                                <tr class="active"><th colspan="2">Medidas</th></tr>
                                <tr>
                                    <td>Alto: </td>
                                    <td>
                                        <div class="input-group col-lg-12">
                                            <input type="text" placeholder="Alto" maxlength="4" class="form-control" name="alto" id="alto_casa" onkeypress="soloNumeros(event);" disabled required="true"/>
                                            <span class="input-group-addon">
                                                <a href="#" tabindex="0" class="glyphicon glyphicon-question-sign ayuda-popover" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-content="Alto total de lo que será tu radier"></a>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ancho: </td>
                                    <td>
                                        <div class="input-group col-lg-12"> 
                                            <input type="text" placeholder="Ancho" maxlength="4" class="form-control" name="ancho" id="ancho_casa" onkeypress="soloNumeros(event);" disabled required="true"/>
                                            <span class="input-group-addon">
                                                <a href="#" tabindex="0" class="glyphicon glyphicon-question-sign ayuda-popover" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-content="Ancho total de lo que será tu radier"></a>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Largo: </td>
                                    <td>
                                        <div class="input-group col-lg-12">
                                            <input type="text" placeholder="Largo" maxlength="4" class="form-control" name="largo" id="largo_casa" onkeypress="soloNumeros(event);" disabled required="true"/>
                                            <span class="input-group-addon">
                                                <a href="#" tabindex="0" class="glyphicon glyphicon-question-sign ayuda-popover" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-content="Largo total de lo que será tu radier"></a>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><button type="submit" data-loading-text="Calculando..." class="btn btn-block btn-primary loading">Calcular</button></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8"><!-- inicio Carrousel -->
        <div id="carousel-example-generic" class="carousel slide " data-ride="carousel"><!-- comienzo carousel -->
            <ol class="carousel-indicators"><!-- Indicadores -->
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol><!-- fin indicadores -->
            <div class="carousel-inner"><!-- Slides -->
                <div class="item active"><!-- imagenes 1500 x 500 -->
                    <img src="img/img_carousel_001.jpg" class="img-responsive" alt="0"> <!-- style="height: 600px; width: 600px" -->
                    <div class="carousel-caption">
                        <h3>Con unas simples medidas de tu obra</h3>
                        <p>Para obtener lo necesario...</p>
                    </div>    
                </div>
                <div class="item">
                    <img src="img/img_carousel_002.jpg" class="img-responsive" alt="1">
                    <div class="carousel-caption">
                        <h3>Levantar una construcción</h3>
                        <p>Con ObraRed es mucho más fácil</p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/img_carousel_003.jpg" class="img-responsive" alt="2">
                    <div class="carousel-caption">
                        <h3>Solo compra lo que utilizaras...</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="img/img_carousel_004.jpg"  class="img-responsive" alt="3">
                    <div class="carousel-caption">
                        <h3>Comienza a levantar tu obra mucho más rápido</h3>
                    </div>
                </div>
            </div><!--Fin slides -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"><!-- Control izquierda -->
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"><!-- Control derecha -->
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div><!-- fin carousel -->
    </div>
</div>
<!--<a href="Vista/PDF.php">PDF</a>-->
<script type="text/javascript">
    $(document).ready(function() {$(".ayuda-tooltip").tooltip({});});//data-toggle="tooltip" data-original-title="Default tooltip"
    $(document).ready(function() {$(".ayuda-popover").popover({});});//data-toggle="popover" title="Popover title" data-content="Default popover"
    (function($){$('.loading').click(function() {var btn = $(this);btn.button('loading');setTimeout(function() {btn.button('reset');},2000);});})(jQuery);
</script>

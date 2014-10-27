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
            <li class="active "><a class="btn-primary" href="#radier_basico" role="tab" data-toggle="tab">Radier</a></li>
            <li><a class="btn-primary"  href="#muro_basico" role="tab" data-toggle="tab">Muro</a></li>
            <li><a class="btn-primary" href="#techo_basico" role="tab" data-toggle="tab">Techumbre</a></li>
            <li><a class="btn-primary" href="#casa_basica" role="tab" data-toggle="tab">Casa</a></li>
        </ul>
        <!--Tab panes--> 
        <div class="tab-content">
            <div class="tab-pane active" id="radier_basico"><!-- Panel Radier -->
                <form class="form-horizontal" action="./Modelo/Presupuestos/obtenerPresupuestos.php" method="POST" name="form_presupuesto_medidas_radier">
            <input type="hidden" name="idUsuario" id="idUsuario" value="0<?php if(isset($_SESSION["id_persona"])){
                                                                                echo $_SESSION["id_persona"];
                                                                        }else{
                                                                            0;} ?>">
                    <input type="hidden" name="nombreConstruccion" id="nombreConstruccion" value="Radier">
                   <input type="hidden" name="construccion" id="construccion" value="1"> <!-- se debe cambiar esto ya que debe encontrar el id-->
                    <input type="hidden" name="presupuestoRapido" id="presupuestoRapido" value="SI">
                    <div class="row">
                        <div class="col-lg-12" name="div_medidas" id="div_medidas">
                            <table class="table table-bordered">
                                <tr class="active"><th colspan="2">Unidad de Medida</th></tr>
                                <tr>
                                    <td colspan="2" style="text-align: center">
                                        <input type="radio" name="unidadMedida" id="centimetros" value="C" onClick="activaCampos('radier');" onChange="cambiaUm(this.value,'radier');" required="true">Centimetros
                                        <input type="radio" name="unidadMedida" id="metros"  value="M" onClick="activaCampos('radier');" onChange="cambiaUm(this.value,'radier');">Metros
                                    </td>
                                </tr>
                                <tr class="active"><th colspan="2">Medidas</th></tr>
                                <tr>
                                    <td>Alto: </td>
                                    <td><input type="text" placeholder="Alto" maxlength="4" class="form-control" name="alto" id="alto_radier" onkeypress="soloNumeros(event);" disabled required="true"/></td>
                                </tr>
                                <tr>
                                    <td>Ancho: </td>
                                    <td><input type="text" placeholder="Ancho" maxlength="4" class="form-control" name="ancho" id="ancho_radier" onkeypress="soloNumeros(event);" disabled required="true"/></td>
                                </tr>
                                <tr>
                                    <td>Largo: </td>
                                    <td><input type="text" placeholder="Largo" maxlength="4" class="form-control" name="largo" id="largo_radier" onkeypress="soloNumeros(event);" disabled required="true"/></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="submit" class="btn btn-block btn-primary" value="Calcular"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="tab-pane" id="muro_basico"><!-- Panel Muro -->
                <form class="form-horizontal" action="" method="POST" name="form_presupuesto_medidas_muro">
                    <input type="hidden" name="idUsuario" id="idUsuario" value="0<?php if(isset($_SESSION["id_persona"])){
                                                                                echo $_SESSION["id_persona"];
                                                                        }else{
                                                                            0;} ?>">
                    <input type="hidden" name="nombreConstruccion" id="nombreConstruccion" value="Muro">
                    <input type="hidden" name="presupuestoRapido" id="presupuestoRapido" value="SI">
                    <div class="row">
                        <div class="col-lg-12" name="div_medidas" id="div_medidas">
                            <table class="table table-bordered">
                                <tr class="active"><th colspan="2">Unidad de Medida</th></tr>
                                <tr>
                                    <td colspan="2" style="text-align: center">
                                        <input type="radio" name="unidadMedida" id="centimetros" value="C" onClick="activaCampos('muro');" onChange="cambiaUm(this.value,'muro');" required="true">Centimetros
                                        <input type="radio" name="unidadMedida" id="metros"  value="M" onClick="activaCampos('muro');" onChange="cambiaUm(this.value,'muro');">Metros
                                    </td>
                                </tr>
                                <tr class="active"><th colspan="2">Medidas</th></tr>
                                <tr>
                                    <td>Alto: </td>
                                    <td><input type="text" placeholder="Alto" maxlength="4" class="form-control" name="alto" id="alto_muro" onkeypress="soloNumeros(event);" disabled required="true"/></td>
                                </tr>
                                <tr>
                                    <td>Ancho: </td>
                                    <td><input type="text" placeholder="Ancho" maxlength="4" class="form-control" name="ancho" id="ancho_radier" disabled required="true"/></td>
                                </tr>
                                <tr>
                                    <td>Largo: </td>
                                    <td><input type="text" placeholder="Largo" maxlength="4" class="form-control" name="largo" id="largo_muro" onkeypress="soloNumeros(event);" disabled required="true"/></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="submit" class="btn btn-block btn-primary" value="Calcular"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="tab-pane" id="techo_basico"><!-- Panel Techo -->
                <form class="form-horizontal" action="./Modelo/Presupuestos/obtenerPresupuestos.php" method="POST" name="form_presupuesto_medidas_techo">
                    <input type="hidden" name="idUsuario" id="idUsuario" value="0<?php if(isset($_SESSION["id_persona"])){
                                                                                echo $_SESSION["id_persona"];
                                                                        }else{
                                                                            0;} ?>">
                    <input type="hidden" name="nombreConstruccion" id="nombreConstruccion" value="Techo">
                    <input type="hidden" name="presupuestoRapido" id="presupuestoRapido" value="SI">
                    <div class="row">
                        <div class="col-lg-12" name="div_medidas" id="div_medidas">
                            <table class="table table-bordered">
                                <tr class="active"><th colspan="2">Unidad de Medida</th></tr>
                                <tr>
                                    <td colspan="2" style="text-align: center">
                                        <input type="radio" name="unidadMedida" id="centimetros" value="C" onClick="activaCampos('techo');" onChange="cambiaUm(this.value,'techo');" required="true">Centimetros
                                        <input type="radio" name="unidadMedida" id="metros"  value="M" onClick="activaCampos('techo');" onChange="cambiaUm(this.value,'techo');">Metros
                                    </td>
                                </tr>
                                <tr class="active"><th colspan="2">Medidas</th></tr>
                                <tr>
                                    <td>Aguas: </td>
                                    <td>
                                        <select name="aguas" id="aguas_techo"  class="form-control" required disabled>
                                            <option value="">Cantidad de Aguas</option>
                                            <option value="1">1 Aguas</option>
                                            <option value="2">2 Aguas</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ancho: </td>
                                    <td><input type="text" placeholder="Ancho" maxlength="4" class="form-control" name="ancho" id="ancho_techo" onkeypress="soloNumeros(event);"  required="true" disabled/></td>
                                </tr>
                                <tr>
                                    <td>Largo: </td>
                                    <td><input type="text" placeholder="Largo" maxlength="4" class="form-control" name="largo" id="largo_techo" onkeypress="soloNumeros(event);"  required="true" disabled/></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="submit" class="btn btn-block btn-primary" value="Calcular"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="tab-pane" id="casa_basica"><!-- Panel Casa -->
                <form class="form-horizontal" action="" method="POST" name="form_presupuesto_medidas_casa">
                    <input type="hidden" name="idUsuario" id="idUsuario" value="0<?php if(isset($_SESSION["id_persona"])){
                                                                                echo $_SESSION["id_persona"];
                                                                        }else{
                                                                            0;} ?>">
                    <input type="hidden" name="nombreConstruccion" id="nombreConstruccion" value="Casa">
                    <input type="hidden" name="presupuestoRapido" id="presupuestoRapido" value="SI">
                    <div class="row">
                        <div class="col-lg-12" name="div_medidas" id="div_medidas">
                            <table class="table table-bordered">
                                <tr class="active"><th colspan="2">Unidad de Medida</th></tr>
                                <tr>
                                    <td colspan="2" style="text-align: center">
                                        <input type="radio" name="unidadMedida" id="centimetros" value="C" onClick="activaCampos('casa');" onChange="cambiaUm(this.value,'casa');" required="true">Centimetros
                                        <input type="radio" name="unidadMedida" id="metros"  value="M" onClick="activaCampos('casa');" onChange="cambiaUm(this.value,'casa');">Metros
                                    </td>
                                </tr>
                                <tr class="active"><th colspan="2">Medidas</th></tr>
                                <tr>
                                    <td>Alto: </td>
                                    <td><input type="text" placeholder="Alto" maxlength="4" class="form-control" name="alto" id="alto_casa" onkeypress="soloNumeros(event);" disabled required="true"/></td>
                                </tr>
                                <tr>
                                    <td>Ancho: </td>
                                    <td><input type="text" placeholder="Ancho" maxlength="4" class="form-control" name="ancho" id="ancho_casa" onkeypress="soloNumeros(event);" disabled required="true"/></td>
                                </tr>
                                <tr>
                                    <td>Largo: </td>
                                    <td><input type="text" placeholder="Largo" maxlength="4" class="form-control" name="largo" id="largo_casa" onkeypress="soloNumeros(event);" disabled required="true"/></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="submit" class="btn btn-block btn-primary" value="Calcular"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
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

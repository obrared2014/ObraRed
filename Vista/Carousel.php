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
                                        <select class="form-control" required="true" name="zona_geografica" id="zona_geografica">
                                            <option value="">Seleccione</option>
                                            <option value="Norte">Zona Norte</option>
                                            <option value="Centro">Zona Centro</option>
                                            <option value="Sur">Zona Sur</option>
                                        </select>
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
                                        <input type="text" placeholder="Alto" maxlength="4" class="form-control" name="alto" id="alto_radier" onkeypress="soloNumeros(event);" disabled required="true"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ancho: </td>
                                    <td>
                                        <input type="text" placeholder="Ancho" maxlength="4" class="form-control" name="ancho" id="ancho_radier" onkeypress="soloNumeros(event);" disabled required="true"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Largo: </td>
                                    <td>
                                        <input type="text" placeholder="Largo" maxlength="4" class="form-control" name="largo" id="largo_radier" onkeypress="soloNumeros(event);" disabled required="true"/>
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
                <form class="form-horizontal" action="./Modelo/Presupuestos/obtenerPresupuestos.php" method="POST" name="form_presupuesto_medidas_muro">
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
                                    <th colspan="2">Tipo de Muro</th>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <select class="form-control" required="true" name="tipo_muro" id="tipo_muro" onChange="actvaAnchoMuro()">
                                            <option value="">Seleccione</option>
                                            <option value="muroCasa">Perimetro Casa</option>
                                            <option value="Pandereta">Pandereta</option>
                                        </select>
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
                                        <input type="text" placeholder="Alto" maxlength="4" class="form-control" name="alto" id="alto_muro" onkeypress="soloNumeros(event);" disabled required="true"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ancho: </td>
                                    <td>
                                        <input type="text" placeholder="Ancho" maxlength="4" class="form-control" name="ancho" id="ancho_muro" onkeypress="soloNumeros(event);" disabled required="true"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Largo: </td>
                                    <td>
                                        <input type="text" placeholder="Largo" maxlength="4" class="form-control" name="largo" id="largo_muro" onkeypress="soloNumeros(event);" disabled required="true"/>
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
                                        <select class="form-control" required="true" name="zona_geografica" id="zona_geografica">
                                            <option value="">Seleccione</option>
                                            <option value="Norte">Zona Norte</option>
                                            <option value="Centro">Zona Centro</option>
                                            <option value="Sur">Zona Sur</option>
                                        </select>
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
                                        <select name="aguas" id="aguas_techo"  class="form-control" required="true">
                                            <option value="">Cantidad de Aguas</option>
                                            <option value="1">1 Aguas</option>
                                            <option value="2">2 Aguas</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ancho: </td>
                                    <td>
                                        <input type="text" placeholder="Ancho" maxlength="4" class="form-control" name="ancho" id="ancho_techo" onkeypress="soloNumeros(event);" disabled required="true"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Largo: </td>
                                    <td>
                                        <input type="text" placeholder="Largo" maxlength="4" class="form-control" name="largo" id="largo_techo" onkeypress="soloNumeros(event);" disabled required="true"/>
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
                <form class="form-horizontal" action="./Modelo/Presupuestos/obtenerPresupuestos.php" method="POST" name="form_presupuesto_medidas_casa">
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
                                        <select class="form-control" required="true" name="zona_geografica" id="zona_geografica">
                                            <option value="">Seleccione</option>
                                            <option value="Norte">Zona Norte</option>
                                            <option value="Centro">Zona Centro</option>
                                            <option value="Sur">Zona Sur</option>
                                        </select>
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
                                        <input type="text" placeholder="Alto" maxlength="4" class="form-control" name="alto" id="alto_casa" onkeypress="soloNumeros(event);" disabled required="true"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ancho: </td>
                                    <td>
                                        <input type="text" placeholder="Ancho" maxlength="4" class="form-control" name="ancho" id="ancho_casa" onkeypress="soloNumeros(event);" disabled required="true"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Largo: </td>
                                    <td>
                                        <input type="text" placeholder="Largo" maxlength="4" class="form-control" name="largo" id="largo_casa" onkeypress="soloNumeros(event);" disabled required="true"/>
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
    <div class="col-lg-8">
        <div class="row">
            <div class="col-lg-3"><img src="img/caricatura_001.png" class="img-responsive"/></div>
            <div class="col-lg-9">
                <h4><span class="glyphicon glyphicon-star-empty"></span>Gratis</h4>
                <h4><small>&nbsp;- Realiza varios presupuestos de construcción de forma gratuita.</small></h4>
                
                <h4><span class="glyphicon glyphicon-time"></span> Ahorra Tiempo</h4>
                <h4><small>&nbsp;- No pierdas tiempo realiza tus presupuesto de construcción en segundos.</small></h4>
                
                <h4><span class="glyphicon glyphicon-usd"></span> Ahorra Dinero</h4>
                <h4><small>&nbsp;- Tienes más de un presupuesto de construcción para comparar.</small></h4>
                
                <h4><span class="glyphicon glyphicon-thumbs-up"></span> Registrate</h4>
                <h4><small>&nbsp;- Registrate en ObraRed y forma parte de nuestra red.</small></h4>
            </div>
        </div>          
    </div>
    <div class="col-lg-4 col-lg-offset-2">
        <br/><br/>
        <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active"><img src="img/Ferreteria/Ferreterias001.jpg" class="img-responsive"></div>
                <div class="item"><img src="img/Ferreteria/Ferreterias008.jpg" class="img-responsive"></div>
                <div class="item"><img src="img/Barracas/Barraca_001.jpg" class="img-responsive"></div>
                <div class="item"><img src="img/Ferreteria/Ferreterias004.jpg" class="img-responsive"></div>
                <div class="item"><img src="img/Transportes/Transporte_001.jpg" class="img-responsive"></div>
                <div class="item"><img src="img/Ferreteria/Ferreterias002.jpg" class="img-responsive"></div>
                <div class="item"><img src="img/Barracas/Barraca_002.jpg" class="img-responsive"></div>
                <div class="item"><img src="img/Ferreteria/Ferreterias005.jpg" class="img-responsive"></div>
                <div class="item"><img src="img/Transportes/Transporte_002.jpg" class="img-responsive"></div>
                <div class="item"><img src="img/Ferreteria/Ferreterias003.jpg" class="img-responsive"></div>
                <div class="item"><img src="img/Barracas/Barraca_003.jpg" class="img-responsive"></div>
                <div class="item"><img src="img/Ferreteria/Ferreterias006.jpg" class="img-responsive"></div>
                <div class="item"><img src="img/Transportes/Transporte_003.jpg" class="img-responsive"></div>
                <div class="item"><img src="img/Ferreteria/Ferreterias007.jpg" class="img-responsive"></div>
            </div>
        </div>
    </div>
</div>
<!--<a href="Vista/PDF.php">PDF</a>-->
<script type="text/javascript">
    (function($){$('.loading').click(function() {var btn = $(this);btn.button('loading');setTimeout(function() {btn.button('reset');},2000);});})(jQuery);
</script>

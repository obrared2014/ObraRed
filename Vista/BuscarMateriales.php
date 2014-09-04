
        <div class="container">

            <div class="page-header">
                <h4><span class="glyphicon glyphicon-search"></span></h4>
            </div>                
            <div class="row">            
                <div class="col-lg-3">
                    <div class="panel panel-default">                        
                        <div class="panel-body">
                            <form class=""  action="Index.php?sec=ResBuscar" method="post" >        
                                <!--<div class="btn-group-vertical "> btn-group-justified -->
                                <div class="form-group">
                                    <select name="comuna" id="comuna" class="form-control" required="true">
                                        <option value="" >Seleccione Comuna</option>
                                        <option value="todas" >Todas</option>
                                        <option value="santiago" >Santiago</option>
                                        <option value="estacion" >Estacion Central</option>
                                        <option value="maipu" >Maipu</option>
                                        <option value="loespejo">Lo Espejo</option>
                                        <option value="lagranja">La Granja</option>
                                        <option value="providencia">Providencia</option>
                                        <option value="loprado"> Lo Prado</option>
                                    </select>
                                </div>   
                                <div class="form-group">
                                    <select name="busq_mat" id="materia" class="form-control" required="true">
                                        <option value="" >Seleccione Tipo Material</option>
                                        <option value="ceramica" >Ceramicas</option>
                                        <option value="madera" >Maderas</option>
                                        <option value="cemento" >Cementos</option>
                                        <option value="fierro" >Fierros</option>
                                        <option value="vulcometal">Vulcometal</option>
                                        <option value="ladrillo">Ladrillos</option>
                                        <option value="aislacion"> Aislacion</option>
                                        <option value="ventanas">Ventanas</option>
                                        <option value="cemento">Cementos</option>
                                        <option value="piscinas">Piscinas</option>
                                    </select>
                                </div>  
                                <div class="form-group">
                                    <!--<button type="submit" class="btn btn-primary btn-large"  name="mat">Buscar</button>-->
                                    <input type="submit" class="btn btn-block btn-primary btn-large" name="mat" value="Buscar">
                                </div>
                            </form>          
                            <!--<div class="btn-group">-->
                            <!--                <button type="button" class="btn btn-info dropdown-toggle " data-toggle="dropdown" id="materiales" >
                                                &nbsp;&nbsp;&nbsp;&nbsp;Buscar Materiales &nbsp;&nbsp;&nbsp;&nbsp;
                                                <span class="caret"></span>
                                            </button>-->
                            <!--                <ul class="dropdown-menu " aria-labelledby ="materiales">                         
                                                <li><a href="#">Ceramica</a></li>
                                                <li><a href="#">Madera</a></li>
                                                <li><a href="#">Fierros</a></li>
                                                <li><a href="#">Cemento</a></li>
                                                <li><a href="#">Vulcanita</a></li>
                                                <li><a href="#">Tornillos</a></li>
                                                <li><a href="#">Plumavit</a></li>
                                                <li><a href="#">Puertas</a></li>
                                                <li><a href="#">Zinc</a></li>
                                                <li><a href="#">Lana mineral</a></li>
                                                <li><a href="#">Viga estructural</a></li>
                                                <li><a href="#">Fieltro</a></li>
                                                <li><a href="#">Cemento</a></li>
                                                <li><a href="#">Vulcometal</a></li> 
                                                <li class="divider"></li>
                                                <li><a href="#">Otros</a></li>
                                            </ul>-->
                            <!--</div>-->
                            <!--            <div class="btn-group">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                                 &nbsp;&nbsp;&nbsp;&nbsp;Empresas &nbsp;&nbsp;&nbsp;&nbsp;
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Ferreteria</a></li>
                                                <li><a href="#">Maestro</a></li>
                                                <li><a href="#">Barraca</a></li>
                                                <li><a href="#">homcvnter</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">otros</a></li>
                                            </ul>
                                        </div>  -->
                            <!--</div>-->
                            <!--boton buscar -->

                        </div>
                    </div>   
                        <div class="panel panel-default">                        
                        <div class="panel-body">
                            <form class=""  action="Index.php?sec=ResBuscar" method="post" >        
                                <!--<div class="btn-group-vertical "> btn-group-justified -->
                                <div class="form-group">
                                    <select name="comuna" id="comuna" class="form-control" required="true">
                                        <option value="" >Seleccione Comuna</option>
                                        <option value="todas" >Todas</option>
                                        <option value="estacion" >Estacion Central</option>
                                        <option value="loespejo">Lo Espejo</option>
                                        <option value="lagranja">La Granja</option>
                                        <option value="loprado"> Lo Prado</option>                                         
                                        <option value="maipu" >Maipu</option>
                                        <option value="providencia">Providencia</option>                                         
                                        <option value="santiago" >Santiago</option>                                       
                                    </select>
                                </div>   
                                <div class="form-group">
                                    <select name="empresa" id="empresas" class="form-control" required="true">
                                        <option value="" >Seleccione Tipo Construccion</option>
                                        <option value="todas" >Todas</option>
                                        <option value="pisos" >Pisos</option>
                                        <option value="ampliacion" >Ampliacion</option>
                                        <option value="techos" >Techos</option>
                                        <option value="panderetas">Panderetas</option>
                                        <option value="muros">Muros</option>
                                        <option value="rejas"> Rejas</option>
                                        <option value="ventanas">Ventanas</option>
                                        <option value="piscinas">Piscinas</option>
                                    </select>
                                </div>  
                                <div class="form-group">
                                    <!--<button type="submit" class="btn btn-primary btn-large"  name="mat">Buscar</button>-->
                                    <input type="submit" class="btn btn-block btn-primary btn-large" name="emp" value="Buscar">
                                </div>
                            </form>          
                        </div>
                    </div>                 
                </div>
                <div class="col-lg-9">
                    <?php // include 'MenuBuscar.php'; ?> 
                </div>

            </div>
        </div>



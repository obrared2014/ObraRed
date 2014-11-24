<script>
function myFunction(str)
{
loadDoc("q="+str,"Vista/proc.php",function()
  {
  if (xmlhttp.readyState===4 && xmlhttp.status===200)
    {
    document.getElementById("myDiv2").innerHTML=xmlhttp.responseText;
    }
  });
}

function myFunction2(str)
{
loadDoc("r="+str,"Vista/proc2.php",function()
  {
  if (xmlhttp.readyState===4 && xmlhttp.status===200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  });
}

function myFunction3(str)
{
loadDoc("k="+str,"Vista/proc3.php",function()
  {
  if (xmlhttp.readyState===4 && xmlhttp.status===200)
    {
    document.getElementById("myDiv3").innerHTML=xmlhttp.responseText;
    }
  });
}
</script>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="?sec=Inicio">Inicio</a></li>
            <li class="active">Buscar</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h2><b class="glyphicon glyphicon-search"></b> Buscar</h2>
        </div>
        <form class="form" method="post" action="Index.php?sec=ResBuscar" name="buscar_materiales">
            <div class="panel panel-default">
            
                <div class="panel-heading">Busqueda </div>
                <div class="panel-body">
                    <?php
                    include_once './Controlador/Busqueda_P/Busqueda_Principal.php';
                    $res=  Traer_Regiones();
                    $res2=  Traer_Tipo_Busqueda();
                    ?>
                    <div class="form-group">
                        <select  name="elegir" class="form-control" onchange="myFunction3(this.value)" required="true">
                            <option value="" class="form-control">Seleccione tipo de Busqueda</option>
                            <?php while ($fila = mysql_fetch_array($res2)) { ?>
                                <option  value="<?php echo $fila['id_tipo_b']; ?>" ><?php echo $fila['nombre']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="form-group" id="myDiv3"></div>
                    
                    <div class="form-group">                       
                        <select name="region" id="region" onchange="myFunction(this.value)" class="form-control" required="true">
                            <option value="" class="form-control">Seleccione Region</option>
                            <?php while ($fila = mysql_fetch_array($res)) { ?>
                                <option  value="<?php echo $fila['region_id']; ?>" ><?php echo $fila['region_nombre']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="form-group" id="myDiv2"  ></div><!-- provincia -->
                    
                    <div class="form-group" id="myDiv"></div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <!--<button type="button" class="btn btn-block btn-primary" data-dismiss="modal" onclick="buscar_materiales.submit()">Buscar <span class="glyphicon glyphicon-ok"></span></button>-->
                    <button type="submit" class="btn btn-block btn-primary">Buscar</button>
                </div>
            </div>
        </form>
    </div>
</div>

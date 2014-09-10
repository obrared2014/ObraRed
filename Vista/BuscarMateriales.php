<?php include("conexion_busqueda.php");?>  

<script>
function myFunction(str)
{
loadDoc("q="+str,"Vista/proc.php",function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  });
}

function myFunction2(str)
{
loadDoc("r="+str,"Vista/proc2.php",function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv2").innerHTML=xmlhttp.responseText;
    }
  });
}

function myFunction3(str)
{
loadDoc("k="+str,"Vista/proc3.php",function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv3").innerHTML=xmlhttp.responseText;
    }
  });
}
</script>
<div class="container">
    <div class="page-header">
        <h4><span class="glyphicon glyphicon-search">  Buscar </span></h4>
    </div> 
    <div class="panel panel-default">
        <div class="panel-heading">Busqueda </div>
        <div class="panel-body">
            <form class="form" method="post" action="Index.php?sec=ResBuscar"> 
                <?php
                $con = conexion();
                $res = mysql_query("select * from regionm", $con);
                $res2 = mysql_query("select * from tipo_busqueda", $con);
                ?>            
                <select name="elegir" class="form-control" onchange="myFunction3(this.value)" required="true">
                    <option value="" class="form-control">Seleccione tipo de Busqueda</option>
                    <?php while ($fila = mysql_fetch_array($res2)) { ?>
                        <option  value="<?php echo $fila['id_tipo_b']; ?>" ><?php echo $fila['nombre']; ?></option>
                    <?php } ?>
                </select>

                <div id="myDiv3"></div>

                <select name="region" id="region" onchange="myFunction(this.value)" class="form-control" required="true">
                    <option value="" class="form-control">Seleccione region</option>
                    <?php while ($fila = mysql_fetch_array($res)) { ?>
                        <option  value="<?php echo $fila['id_region']; ?>" ><?php echo $fila['nombre']; ?></option>
                    <?php } ?>
                </select>

                <div id="myDiv"></div><!--div donde aparecen comuna-->

                <div id="myDiv2"  ></div><!--div locales -->

                <div >
                    <button type="submit" class="btn btn-large btn-block btn-primary " >Buscar</button>
                </div>
            </form>
        </div>
    </div>
</div>

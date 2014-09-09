
<script src="bootstrap/js/ajax.js"></script>

<script>
function myFunction(str)
{
loadDoc("q="+str,"proc.php",function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  });
}

function myFunction2(str)
{
loadDoc("r="+str,"proc2.php",function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv2").innerHTML=xmlhttp.responseText;
    }
  });
}

function myFunction3(str)
{
loadDoc("k="+str,"proc3.php",function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv3").innerHTML=xmlhttp.responseText;
    }
  });
}
</script>
</head>
<body>
    

<?php
  require_once 'Modelo/Conexion.php';
  echo 'conexion ='.$con;
$res2=mysql_query("select * from tipo_busqueda",$con);
//  require_once 'Modelo/Conexion.php';
//$res=mysql_query("select * from regionm",$con);
//$res2=mysql_query("select * from tipo_busqueda",$con);
?>

<div class="container">
    <div class="page-header">
        <h4><span class="glyphicon glyphicon-search">  Buscar </span></h4>
    </div> 
<div class="panel panel-default">
    <div class="panel-heading">Busqueda </div>
    <div class="panel-body">
        <form class="form" method="post" action="result.php"> 
            
            <select name="elegir" class="form-control" onchange="myFunction3(this.value)" required="true">
                <option value="" class="form-control">Seleccione tipo de Busqueda</option>
                <?php
  require_once 'Modelo/Conexion.php';
$res2=mysql_query("select * from tipo_busqueda",$con);                
                
                
                while ($fila = mysql_fetch_array($res2)) {
                    ?>
                    <option  value="<?php echo $fila['id_tipo_b']; ?>" ><?php echo $fila['nombre']; ?></option>
                <?php } ?>
            </select>
            
            <div id="myDiv3"></div>
            
         
            
            <select name="region" id="region" onchange="myFunction(this.value)" class="form-control" required="true">
                <option value="" class="form-control">Seleccione region</option>
                <?php
  require_once 'Modelo/Conexion.php';
$res=mysql_query("select * from regionm",$con); 

                while ($fila = mysql_fetch_array($res)) {
                    ?>
                    <option  value="<?php echo $fila['id_region']; ?>" ><?php echo $fila['nombre']; ?></option>
                <?php } ?>
            </select>

             <!--<br></br>-->
             <div id="myDiv"></div><!--div donde aparecen comuna-->
             <!--<br></br>-->
             <div id="myDiv2"  ></div><!--div locales -->
                    <div >
                        <button type="submit" class="btn btn-large btn-block btn-primary " >Buscar</button>
                    </div>
         </form>
    </div>
</div>
</div>

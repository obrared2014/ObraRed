<!-- cotización -->
<div style="overflow: auto;">
<h4>Nos es grato entregarle la cotización para la construcci&oacute;n de un Cobertizo de 12 m2 con los materiales seleccionados</h4>
<br/>
<table class="table table-striped">
    <?php echo "PRESUPUESTO Nº".$_SESSION['id_presupuesto']?>
    
        <thead>
          <tr>
            <th>Item</th>
            <th>Material</th>
            <th>Descripci&oacute;n</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Precio Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Perfil de Acero</td>
            <td>Perfil Rectangular de 50x10x2.0mm (6m)</td>
            <td>2</td>
            <td>$9.750</td>
            <td>$19.500</td>            
          </tr>
          <tr>
            <td>2</td>
            <td>Perfil de Acero</td>
            <td>Perfil Rectangular de 20x20x2.0mm (6m)</td>
            <td>4</td>
            <td>$4.750</td>
            <td>$19.000</td>            
          </tr>
          <tr>
            <td>3</td>
            <td>Soldaduras</td>
            <td>Soldaduras para acero</td>
            <td>20</td>
            <td>$1.500</td>
            <td>$30.000</td>            
          </tr>
          <tr>
            <td>4</td>
            <td>Base para poste</td>
            <td>Base para poste de Acero</td>
            <td>6</td>
            <td>$12.500</td>
            <td>$75.000</td>            
          </tr>
          <tr>
            <td>5</td>
            <td>Plancha de Zinc</td>
            <td>Plancha de 0,6x1,22x2,44 mts</td>
            <td>5</td>
            <td>$6.000</td>
            <td>$30.000</td>            
          </tr>          
          <tr>
            <td colspan="6">&nbsp;</td>      
          </tr>  
          <tr>
            <td colspan="6">&nbsp;</td>      
          </tr>  
          <tr>
            <td colspan="4">&nbsp;</td>   
            <td>Total</td>
            <td>$173.500</td>  
          </tr>  
          <tr>
            <td colspan="6">Cabe destacar que los valores presentados incluyen iva y se obtienen en base al promedio del precio en 3 empresas del rubro de la construcción.</td>   
          </tr>   
          <tr>
              <td colspan="4">&nbsp;</td>
              <td colspan="1"><input type="button" value="Enviar a E-Mail" class="btn-success"/></td> 
              <td colspan="1"><input type="button" value="Imprimir" class="btn-success"/></td>   
          </tr>  
        </tbody>
      </table>
</div>

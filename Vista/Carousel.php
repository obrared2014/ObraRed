<!--Carousel.php -->
<div class="row">&nbsp;</div>
<div class="row">&nbsp;</div>
<div class="row">
    <div class="col-lg-4">
         <!--Nav tabs--> 
        <ul class="nav nav-tabs" role="tablist">
            <li class="active "><a class="btn-primary" href="#home" role="tab" data-toggle="tab">Radier</a></li>
            <li><a class="btn-primary"  href="#profile" role="tab" data-toggle="tab">Muro</a></li>
          <li><a class="btn-primary" href="#messages" role="tab" data-toggle="tab">Techumbre</a></li>
          <li><a class="btn-primary" href="#settings" role="tab" data-toggle="tab">Casa</a></li>
        </ul>
         <!--Tab panes--> 
        <div class="tab-content">
          <div class="tab-pane active" id="home">Radier</div>
          <div class="tab-pane" id="profile">Muro</div>
          <div class="tab-pane" id="messages">Techumbre</div>
          <div class="tab-pane" id="settings">Casa</div>
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

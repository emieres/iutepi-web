<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "cabecera.php"; ?>  
</head>
<body>

<?php include "menu_p.php"; ?>
  
<div class="container-fluid text-center">    
  <div class="row content">

    <?php include "menu_l.php"; ?>

    <div class="col-sm-9 text-left">
      <br>
      <h4 class="titulo">IUTEPI</h4><hr>
      <p class="parrafo">El Instituto Universitario de Tecnología para la Informática IUTEPI, es una Institucón Privada de estudios a nivel superior con Sedes en los Estados Carabobo y Portuguesa, cuyo objetivo primordial es preparar profesionales capacitados para desempe&ntilde;arse en el mercado en las áreas de su competencia dando solución a la problemática institucional, social y educativa de su entorno, profundizando el conocimiento que fundamenta su razón de ser, estando a la vanguardia de los cambios en las ciencias y de las necesidades más sentidas de la sociedad.</p>
      <br>

      <div class="row">
        <div class="col-sm-4">
          <a data-toggle="modal" data-target="#wifi" href=""><img src="img/wifi1.jpg" width="50" height="50">IUTEPI WIFI</a>
        </div>
        <div class="col-sm-6">
          <a data-toggle="modal" data-target="#carnet" href=""><img src="img/carnetestud.jpg" width="80" height="50">CARNET ESTUDIANTIL</a>
        </div>
      </div>
      <br>
      <!-- Modal wifi -->
      <div id="wifi" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal wifi-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">CONFIGURACIÓN RED INALÁMBRICA IUTEPI</h4>
            </div>
            <div class="modal-body">
              <div class="titulo3">
            <p>Esta red permite acceder al servicio inalámbrico de Internet IUTEPI, mediante computadoras portátiles o dispositivos de mano que permitan la configuración de servidores proxy.</p>

            <p>Bajo un sencillo procedimiento de configuración, donde cada estudiante debe verificar que su dispositivo detecte la red inalámbrica IUTEPI1, IUTEPI2 ó IUTEPI3, deberá configurar la conexión de internet al servidor proxy.</p>

            <p>Para esto debe configurar el servidor proxy de la siguiente manera: </p>

            <ul>
              <li><a class="titulo4" href="wifi/configurar.pdf" target="_blank">Configurar Red WIFI IUTEPI <img src="img/pdflogo.jpg" width="30"></a></li>
            </ul>
          </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
          </div>

        </div>
      </div>

      <!-- Modal carnet -->
      <div id="carnet" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">CARNET ESTUDIANTIL</h4>
            </div>
            <div class="modal-body">
              <img class="img-responsive" src="img/carnet.jpg" width="570">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
          </div>

        </div>
      </div>
      <hr>
      <div align="center">
        <a href="https://www.portaldepagosmercantil.com/" target="_blank"><img class="img-responsive" src="img/portal_merc.jpg"></a>
        <br><br>
        <p class="titulo4"><a href="mercantil/instructivo.pdf" target="_blank">INSTRUCTIVO PARA EL USO DEL PORTAL DE PAGO MERCANTIL <img src="img/pdflogo.jpg" width="40"></a></p>
      </div>

      <hr><h4 class="titulo">NOTICIAS</h4><hr>
      <a href="https://twitter.com/iutepi_edu" class="twitter-follow-button" data-show-count="false">Sigue a @iutepi_edu</a>
      <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
      <br>
      <a class="twitter-timeline" data-height="600" data-width="700" href="https://twitter.com/iutepi_edu">Tweets by iutepi_edu</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
      <br>
      <br>
    </div><!--col-9-->

  </div><!--row-content-->

</div> <!--container-fluid-->

<?php include "pie.php"; ?>

</body>
</html>

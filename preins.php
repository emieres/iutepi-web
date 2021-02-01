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
        <ul class="breadcrumb">
		  <li>IUTEPI</li>
		  <li>ESPECIALIZACIONES PARA TSU</li>
		  <li>GERENCIA DE SERVICIOS</li>
		  <li class="active">Formulario de preinscripción</li>
		</ul>
		<?php
			include("dns.php");
			echo '<iframe src="'.$dns.'/cid/preins.php" frameborder="0" style="width: 570px; height: 1000px;"></iframe>';
		?>


    </div><!--col-9-->

  </div><!--row-content-->

</div> <!--container-fluid-->

<?php include "pie.php"; ?>

</body>
</html>

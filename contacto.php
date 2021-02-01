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
  		  <li class="active">Contactos</li>
  		</ul>

  		<h4 class="titulo">CONTACTOS</h4> <hr>

  			<p class="titulo4">SEDE PRINCIPAL IUTEPI VALENCIA</p>

  			<div class="titulo3">
  				<p>C.C Save, Av. Industrial, Zona Industrial y Comercial La Isabelica.</p>
  				<p>Teléfonos: (0241) 833.95.64, 834.22.49 Fax: (0241) 834.15.82</p>
  				<p>Correo: iutepi@iutepi.edu</p>
  				<p class="titulo4"><a href="https://www.google.co.ve/maps/place/Instituto+Universitario+de+Tecnologia+Para+la+Informatica/@10.1677658,-67.9636122,19z/data=!4m2!3m1!1s0x0000000000000000:0x783e395a11392382" target="_blank">VER MAPA</a></p>
  			</div>

  			<p class="titulo4">SEDE IUTEPI ACARIGUA</p>

  			<div class="titulo3">
  				<p>C.C. Páez, Av. 35 con calle 30</p>
  				<p>Teléfonos: (0255) 623.77.70, 623.51.60</p>
  				<p>Correo: acarigua@iutepi.edu</p>
  				<p class="titulo4"><a href="https://www.google.co.ve/maps/place/Instituto+Universitario+de+Tecnologia+Para+la+Informatica/@9.554436,-69.2064115,19z/data=!4m2!3m1!1s0x0000000000000000:0xb40160751e334ce2!6m1!1e1" target="_blank">VER MAPA</a></p>
  			</div>

  			<p class="titulo4">SEDE IUTEPI GUANARE</p>

  			<div class="titulo3">
  				<p>Edif. Hermanos Paternos, Av. Sucre con Carrera 5ta.</p>
  				<p>Teléfonos: (0257) 251.17.36, 251.18.43</p>
  				<p>Correo: guanare@iutepi.edu</p>
  				<p class="titulo4"><a href="https://www.google.co.ve/maps/place/IUTEPI/@9.0425872,-69.7550044,19z/data=!4m2!3m1!1s0x0000000000000000:0x7b2ea5e3e986c363!6m1!1e1" target="_blank">VER MAPA</a></p>
  			</div>

  			<br>

  		<h4 class="titulo">CORREO</h4> <hr>

  			<form id="formu" method="post" action="enviar.php" autocomplete="off">

  		              <div class="modal-body">
  		                <label>
  		                
  		                <?php 
  		                  $miip = $_SERVER["REMOTE_ADDR"];
  		                  echo 'Su IP es: '.$miip;   
  		                ?>
  		                
  		                </label>
  		                <div class="form-group" align="left">
  		                  <label for="nombre">Nombres:</label>
  		                  <input type="text" class="form-control" id="nombre" name="nombre" required="required" autofocus>
  		                  <label for="email">Email:</label>
  		                  <input type="email" class="form-control" id="email" name="email" required="required">
  		                  <label for="ciudad">Ciudad:</label>
  		                  <input type="text" class="form-control" id="ciudad" name="ciudad" required="required">
  		                  <label for="telefono">Telefono:</label>
  		                  <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ej.:00000000000" maxlength="11">
  		                  <label for="asunto">Asunto:</label>
  		                  <input type="text" class="form-control" id="asunto" name="asunto" required="required">
  		                  <label for="msj">Mensaje:</label>
  		                  <textarea class="form-control" rows="5" id="msj" name="msj" placeholder="Escriba su Mensaje..." required="required"></textarea> <br>
  		                  <div class="g-recaptcha" data-sitekey="6LesjCkTAAAAABEcTj8rKkYDKgitU-WDgq0CEWHp"></div>
  		                </div>
  		              </div>

  		              <div class="modal-footer">
  		                <button type="submit" class="btn btn-danger" id="submit" name="submit">Enviar</button>
  		              </div>

  		            </form>

  			<br><br>
    </div><!--col-9-->

  </div><!--row-content-->

</div> <!--container-fluid-->

<?php include "pie.php"; ?>

</body>
</html>

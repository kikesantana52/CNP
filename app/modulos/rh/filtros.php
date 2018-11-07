<?php include ($_SERVER['DOCUMENT_ROOT']).'/CNP/app/enviroment.php'; ?>
<?php include "../main/conexion.php";
$sql= "select * from employees where id = ".$_GET["id"];
$query = $con->query($sql);
?>
<html>
<head>
	<title>Candidatos - filtro 1</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>css/main.css">
	<script src="<?php echo $base_url; ?>js/jquery.min.js"></script>
</head>
<body>
	<?php include "../main/navbar.php"; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
        <?php
        if($query->num_rows>0):
          $r=$query->fetch_array();
          echo "<h3>".$r["name"]." ".$r["ap_p"]." ".$r["ap_m"]."</h3>";
         ?>
         <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="#">Checklist</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Disabled</a>
          </li>
        </ul>

        <!-- CHECKLIST -->
        <section id="checlist">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-sm-12">
                <img src="<?php echo $base_url; ?>img/checklist.png" alt="" class="img-fluid">
              </div>
              <div class="col-md-8 col-sm-12">
                <div class="pt-3">
                  Al presentarse el precandidato en las instalaciones de la empresa para solicitar trabajo, el Gerente de RR.HH. lo recibe y lleva a cabo según el contenido del formato CHECK LIST, la finalidad será verificar los puntos del precandidato:
                </div>
                <ul>
                  <li>Referente a la presentación personal</li>
                  <li>Edad</li>
                  <li>Que cuente con documentación completa o no tiene problema para conseguirla.</li>
                  <li>No tenga ninguna adicción a drogas o enervantes.</li>
                  <li>Tenga una estabilidad residencial mínima de 1 año en el domicilio actual</li>
                </ul>
                <textarea class="form-control"  name="comentarios" rows="5" ></textarea>
                <span>¿Se desea continuar con el proceso?</span>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="checklist_si" id="checklist_si" value="si" checked>
                  <label class="form-check-label" for="checklist_si">Si</label>
                </div>
                <input class="form-check-input" type="radio" name="checklist_no" id="checklist_no" value="no">
                <label class="form-check-label" for="checklist_no">No</label>
              </div>

            </div>
          </div>
        </section>
        <?php else:?>
        <p class="alert alert-warning">No hay más candidatos en proceso</p>
      <?php endif;?>
			</div>
		</div>
	</div>

	<script src="<?php echo $base_url; ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo $base_url; ?>/js/main.js"></script>
</body>
</html>

<?php include ($_SERVER['DOCUMENT_ROOT']).'/CNP/app/enviroment.php'; ?>
<html>
<head>
	<title>Candidatos</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>css/main.css">
	<script src="<?php echo $base_url; ?>js/jquery.min.js"></script>
</head>
<body>
	<?php include "../main/navbar.php"; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Listado de candidatos</h2>
				<!-- Button trigger modal -->
				<a data-toggle="modal" href="#AddModal" class="btn btn-info">Nuevo candidato</a>
				<br><br>
				<!-- Modal -->
				<div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-indico">
								<h4 class="modal-title">Agregar</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true" class="text-white">&times;</span>
				        </button>
							</div>
							<div class="modal-body">
									<div class="form-group">
										<label for="name">Nombre</label>
										<input type="text" class="form-control" name="name" required>
									</div>
									<div class="form-group">
										<label for="lastname">Apellido Paterno</label>
										<input type="text" class="form-control" name="ap_p" required>
									</div>
									<div class="form-group">
										<label for="address">Apellido Materno</label>
										<input type="text" class="form-control" name="ap_m" required>
									</div>
									<button id="agregarCandidato" type="submit" class="btn bg-indico">Agregar</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->


				<?php include "seleccion/tabla.php"; ?>
			</div>
		</div>
	</div>

	<script src="<?php echo $base_url; ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo $base_url; ?>/js/main.js"></script>
</body>
</html>

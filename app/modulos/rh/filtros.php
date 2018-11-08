<?php include ($_SERVER['DOCUMENT_ROOT']).'/CNP/app/enviroment.php'; ?>
<?php include "../main/conexion.php";
$sql= "select * from employees where id = ".$_GET["id"];
$query = $con->query($sql);
?>
<html>
<head>
	<title>Candidato</title>
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
        <section id="checklist" class="d-none">
          <div class="container">
            <div class="row pt-3">
              <div class="col-md-4 col-sm-12">
                <img src="<?php echo $base_url; ?>img/checklist.png" alt="" class="img-fluid">
              </div>
              <div class="col-md-8 col-sm-12">
                <div >
									<h1>Checklist</h1>
                  Al presentarse el precandidato en las instalaciones de la empresa para solicitar trabajo, el Gerente de RR.HH. lo recibe y lleva a cabo según el contenido del formato CHECK LIST, la finalidad será verificar los puntos del precandidato:
                </div>
                <ul>
                  <li>Referente a la presentación personal</li>
                  <li>Edad</li>
                  <li>Que cuente con documentación completa o no tiene problema para conseguirla.</li>
                  <li>No tenga ninguna adicción a drogas o enervantes.</li>
                  <li>Tenga una estabilidad residencial mínima de 1 año en el domicilio actual</li>
                </ul>
                <textarea class="form-control"  name="checklist_comentarios" rows="5" ></textarea>
                <span>¿Se desea continuar con el proceso?</span>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="checklist_chk" id="checklist_si" value="si">
                  <label class="form-check-label" for="checklist_si">Si</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="checklist_chk" id="checklist_no" value="no" checked>
                  <label class="form-check-label" for="checklist_no">No</label>
                </div>
                <button type="button" name="button" class="btn btn-primary mt-3">Continuar</button>
              </div>

            </div>
          </div>
        </section>
				<!-- SOLICITUD DE TRABAJO -->
				<section id="solicitud" class="d-none">
          <div class="container">
            <div class="row pt-3">
              <div class="col-md-4 col-sm-12">
                <img src="<?php echo $base_url; ?>img/solicitud_empleo.png" alt="" class="img-fluid">
              </div>
              <div class="col-md-8 col-sm-12">
                <div >
									<h1>Solicitud de empleo</h1>
                  Cumpliendo con lo anterior, el gerente de Recursos Humanos dará al precandidato la <strong>SOLICITUD DE EMPLEO</strong>,
                  para que éste realice el llenado de la misma, dando indicaciones que no omita ningún dato, en especial
                  números telefónicos.
                <textarea class="form-control mt-3"  name="solicitud_comentarios" rows="5" ></textarea>
                <span>¿Se desea continuar con el proceso?</span>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="solicitud_chk" id="solicitud_si" value="si">
                  <label class="form-check-label" for="solicitud_si">Si</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="solicitud_chk" id="solicitud_no" value="no" checked>
                  <label class="form-check-label" for="solicitud_no">No</label>
                </div>
                <button type="button" name="button" class="btn btn-primary mt-3">Continuar</button>
              </div>

            </div>
          </div>
        </section>
				<!-- ENTREVISTA -->
				<section id="entrevista" class="d-none">
          <div class="container">
            <div class="row pt-3">
              <div class="col-md-4 col-sm-12">
                <img src="<?php echo $base_url; ?>img/entrevista.png" alt="" class="img-fluid">
              </div>
              <div class="col-md-8 col-sm-12">
                <div >
									<h1>Entrevista</h1>
									El propósito es encontrar patrones de comportamientos del pasado que predisponga un resultado conductual
									en el futuro (mediante preguntas situacionales de hechos en el pasado).<br><br>
									En esta etapa, el trabajador de recursos humanos debe de llevar a cabo una entrevista profunda y con bases
									con el candidato.
                <textarea class="form-control mt-3"  name="entrevista_comentarios" rows="5" ></textarea>
                <span>¿Se desea continuar con el proceso?</span>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="entrevista_chk" id="entrevista_si" value="si" >
                  <label class="form-check-label" for="entrevista_si">Si</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="entrevista_chk" id="entrevista_no" value="no" checked>
                  <label class="form-check-label" for="entrevista_no">No</label>
                </div>
                <button type="button" name="button" class="btn btn-primary mt-3">Continuar</button>
              </div>

            </div>
          </div>
        </section>
				<!-- DOCUMENTOS -->
				<section id="documentos" >
					<div class="container">
						<div class="row pt-3">
							<div class="col-md-4 col-sm-12">
								<img src="<?php echo $base_url; ?>img/documento.png" alt="" class="img-fluid">
							</div>
							<div class="col-md-8 col-sm-12">
								<div>
									<h1>Documentos</h1>
									Para continuar con el proceso sera necesario subir los siguientes documentos.
									<div class="card">
									  <div class="card-body">
											<!-- IFE -->
											<div class="row mt-2">
												<div class="col-5">
													<div class="form-group form-check">
														<input type="checkbox" class="form-check-input" id="ife">
	    											<label class="form-check-label" for="ife">IFE<span class="text-danger">*</span></label>
													</div>
													<input type="file">
												</div>
												<div class="col-3">
													<button type="button" class="btn btn-info">Subir</button>
												</div>
									    </div>
											<hr>
											<!-- CARTILLA -->
											<div class="row mt-2">
												<div class="col-5">
													<div class="form-group form-check">
														<input type="checkbox" class="form-check-input" id="cartilla">
	    											<label class="form-check-label" for="cartilla">CARTILLA<span class="text-danger">*</span></label>
													</div>
													<input type="file">
												</div>
												<div class="col-3">
													<button type="button" class="btn btn-info">Subir</button>
												</div>
									    </div>
											<hr>
											<!-- CURP -->
											<div class="row mt-2">
												<div class="col-5">
													<div class="form-group form-check">
														<input type="checkbox" class="form-check-input" id="curp">
	    											<label class="form-check-label" for="curp">CURP<span class="text-danger">*</span></label>
													</div>
													<input type="file">
												</div>
												<div class="col-3">
													<button type="button" class="btn btn-info">Subir</button>
												</div>
									    </div>
											<hr>
											<!-- ALTA DEL IMSS -->
											<div class="row mt-2">
												<div class="col-5">
													<div class="form-group form-check">
														<input type="checkbox" class="form-check-input" id="imss">
	    											<label class="form-check-label" for="imss">ALTA DEL IMSS<span class="text-danger">*</span></label>
													</div>
													<input type="file">
												</div>
												<div class="col-3">
													<button type="button" class="btn btn-info">Subir</button>
												</div>
									    </div>
											<hr>
											<!-- COMPROBANTE DE ESTUDIOS -->
											<div class="row mt-2">
												<div class="col-5">
													<div class="form-group form-check">
														<input type="checkbox" class="form-check-input" id="estudios">
	    											<label class="form-check-label" for="estudios">COMPROBANTE DE ESTUDIOS<span class="text-danger">*</span></label>
													</div>
													<input type="file">
												</div>
												<div class="col-3">
													<button type="button" class="btn btn-info">Subir</button>
												</div>
									    </div>
											<hr>
											<!-- COMPROBANTE DOMICILIO -->
											<div class="row mt-2">
												<div class="col-5">
													<div class="form-group form-check">
														<input type="checkbox" class="form-check-input" id="domicilio">
	    											<label class="form-check-label" for="domicilio">COMPROBANTE DE DOMICILIO<span class="text-danger">*</span></label>
													</div>
													<input type="file">
												</div>
												<div class="col-3">
													<button type="button" class="btn btn-info">Subir</button>
												</div>
									    </div>
											<hr>
											<!-- CARTA POLICIA -->
											<div class="row mt-2">
												<div class="col-5">
													<div class="form-group form-check">
														<input type="checkbox" class="form-check-input" id="policia">
	    											<label class="form-check-label" for="policia">CARTA POLICIA<span class="text-danger">*</span></label>
													</div>
													<input type="file">
												</div>
												<div class="col-3">
													<button type="button" class="btn btn-info">Subir</button>
												</div>
									    </div>
											<hr>
											<!-- ACTA DE NACIMIENTO -->
											<div class="row mt-2">
												<div class="col-5">
													<div class="form-group form-check">
														<input type="checkbox" class="form-check-input" id="acta">
	    											<label class="form-check-label" for="acta">ACTA DE NACIMIENTO<span class="text-danger">*</span></label>
													</div>
													<input type="file">
												</div>
												<div class="col-3">
													<button type="button" class="btn btn-info">Subir</button>
												</div>
									    </div>
											<hr>
											<!-- CARTAS DE RECOMENDACION -->
											<div class="row mt-2">
												<div class="col-5">
													<div class="form-group form-check">
														<input type="checkbox" class="form-check-input" id="cartas">
	    											<label class="form-check-label" for="cartas">CARTAS DE RECOMENDACION<span class="text-danger">*</span></label>
													</div>
													<input type="file">
												</div>
												<div class="col-3">
													<button type="button" class="btn btn-info">Subir</button>
												</div>
									    </div>

									  </div>
									</div>



									</div>
								<textarea class="form-control mt-3"  name="entrevista_comentarios" rows="5" ></textarea>
								<span>¿Se desea continuar con el proceso?</span>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="entrevista_chk" id="entrevista_si" value="si" >
									<label class="form-check-label" for="entrevista_si">Si</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="entrevista_chk" id="entrevista_no" value="no" checked>
									<label class="form-check-label" for="entrevista_no">No</label>
								</div>
								<button type="button" name="button" class="btn btn-primary my-3">Continuar</button>
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

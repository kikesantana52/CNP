<?php
include "../../enviroment.php";
include ($_SERVER['DOCUMENT_ROOT']).$base_url."/modulos/main/conexion.php";

$user_id=null;
$sql= "select * from employees";
$query = $con->query($sql);
?>
<?php if($query->num_rows>0):?>


<table class="table table-hover">
<thead class="bg-indico ">
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Proceso</th>
	<th>Acciones</th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["name"]; ?></td>
	<td><?php echo $r["ap_p"]; ?> <?php echo $r["ap_m"]; ?></td>
	<td>Filtros concluidos <span class="badge badge-pill  badge-info">2</span></h1></td>
	<td>
		<button type="button" class="btn btn-info">Continuar</button>
		<button type="button" class="btn btn-warning">Ver registro</button>
		<button type="button" class="btn btn-danger">Eliminar</button>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay más candidatos en proceso</p>
<?php endif;?>

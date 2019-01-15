<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from prog_mantenimiento";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>

<?php while ($r=$query->fetch_array()):?>

	<div class="parte">
	<h3>ID: <?php echo $r["id"]; ?></h3>
	<p>PLANTA: <?php echo $r["planta"]; ?></p>
	<p>SISTEMA: <?php echo $r["sistema"]; ?></p>
	<p>CODIGO DE EQUIPO: <?php echo $r["codigo_equipo"]; ?></p>
	<p>PARTE DE EQUIPO:<?php echo $r["parte_equipo"]; ?></p>
	<p>EQUIPO: <?php echo $r["equipo"]; ?></p>
	<p>DENOMINACION: <?php echo $r["denominacion"]; ?></p>
	<p>ORDEN: <?php echo $r["orden"]; ?></p>
	<p>OPERACION<?php echo $r["operacion"]; ?></p>
	<p>FRECUENCIA: <?php echo $r["frecuencia"]; ?></p>
	<p>ACTIVIDADES<?php echo $r["actividades"]; ?></p>
	<p>CONTROL: <?php echo $r["t_control"]; ?></p>
	<p>FECHA DE INICIO: <?php echo $r["fecha_ini_mas_tmp"]; ?></p>
	<p>FECHA DE FIN: <?php echo $r["fecha_fin_mas_tmpr"]; ?></p>
	<p>PRIORIDAD: <?php echo $r["prioridad"]; ?></p>
	<p>TIEMPO ESTIMADO EN HORAS: <?php echo $r["tiempo_est_hrs"]; ?></p>
	<p>TIEMPO REAL ESTIMADO EN HORAS: <?php echo $r["tiempo_est_r_hrs"]; ?></p>
	<p>NOMBRES Y APELLIDOS: <?php echo $r["nombres_apellidos"]; ?></p>
	<p>PUESTO TRABAJO: <?php echo $r["puesto_trabajo"]; ?></p>
	<p>TURNO: <?php echo $r["turno"]; ?></p>
	<p>EMPLAZAMINETO:<?php echo $r["emplazamiento"]; ?></p>
	<p>N° HOJA DE RUTA: <?php echo $r["nro_h_ruta_ope"]; ?></p>
	<p>GRUPO PLANIFICACION: <?php echo $r["grupo_planif"]; ?></p>
	<p>PRECIO: <?php echo $r["precio"]; ?></p>
	<p>TEXTO ESPL: <?php echo $r["texto_expl"]; ?></p>
	<p>ACREEDOR: <?php echo $r["acreedor"]; ?></p>
	<p>ESTADO DE SISTEMA: <?php echo $r["status_sistema"]; ?></p>

		<a href="./editar1.php?id=<?php echo $r["id"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["id"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminar.php?id="+<?php echo $r["id"];?>;

			}

		});
		</script>
		</div>

<?php endwhile;?>

<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>

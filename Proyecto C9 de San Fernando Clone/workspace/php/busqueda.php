<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from prog_mantenimiento where
	planta like '%$_GET[s]%' or
	sistema like '%$_GET[s]%' or
	codigo_equipo like '%$_GET[s]%' or
	parte_equipo like '%$_GET[s]%' or
	equipo like '%$_GET[s]%' or
	denominacion like '%$_GET[s]%' or
	orden like '%$_GET[s]%' or
	operacion like '%$_GET[s]%' or
	frecuencia like '%$_GET[s]%' or
	actividades like '%$_GET[s]%' or
	t_control like '%$_GET[s]%' or
	fecha_ini_mas_tmp like '%$_GET[s]%' or
	fecha_fin_mas_tmpr like '%$_GET[s]%' or
	prioridad like '%$_GET[s]%' or
	tiempo_est_hrs like '%$_GET[s]%' or
	tiempo_est_r_hrs like '%$_GET[s]%' or
	nombres_apellidos like '%$_GET[s]%' or
	puesto_trabajo like '%$_GET[s]%' or
	turno like '%$_GET[s]%' or
	emplazamiento like '%$_GET[s]%' or
	nro_h_ruta_ope like '%$_GET[s]%' or
	grupo_planif like '%$_GET[s]%' or
	precio like '%$_GET[s]%' or
	texto_expl like '%$_GET[s]%' or
	acreedor like '%$_GET[s]%' or
	status_sistema like '%$_GET[s]%' ";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Planta</th>
	<th>Sistema</th>
	<th>Codigo del Equipo</th>
	<th>Parte del Equipo</th>
	<th>Equipo</th>
	<th>Denominacion</th>
	<th>Orden</th>
	<th>Operacion</th>
	<th>Frecuencia</th>
	<th>Actividades</th>
	<th>Control</th>
	<th>Fecha de Inicio</th>
	<th>Fecha de Finalizacion</th>
	<th>Prioridad</th>
	<th>Tiempo Estimado en Horas</th>
	<th>Tiempo Estimado Real en Horas</th>
	<th>Nombres y Apellidos</th>
	<th>Puesto de Trabajo</th>
	<th>Turno</th>
	<th>Emplazamiento</th>
	<th>Número Hoja de Ruta Operacion</th>
	<th>Grupo de Planificacion</th>
	<th>Precio</th>
	<th>Texto Expl</th>
	<th>Acreedor</th>
	<th>Status del Sistema</th>
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["planta"]; ?></td>
	<td><?php echo $r["sistema"]; ?></td>
	<td><?php echo $r["codigo_equipo"]; ?></td>
	<td><?php echo $r["parte_equipo"]; ?></td>
	<td><?php echo $r["equipo"]; ?></td>
	<td><?php echo $r["denominacion"]; ?></td>
	<td><?php echo $r["orden"]; ?></td>
	<td><?php echo $r["operacion"]; ?></td>
	<td><?php echo $r["frecuencia"]; ?></td>
	<td><?php echo $r["actividades"]; ?></td>
	<td><?php echo $r["t_control"]; ?></td>
	<td><?php echo $r["fecha_ini_mas_tmp"]; ?></td>
	<td><?php echo $r["fecha_fin_mas_tmpr"]; ?></td>
	<td><?php echo $r["prioridad"]; ?></td>
	<td><?php echo $r["tiempo_est_hrs"]; ?></td>
	<td><?php echo $r["tiempo_est_r_hrs"]; ?></td>
	<td><?php echo $r["nombres_apellidos"]; ?></td>
	<td><?php echo $r["puesto_trabajo"]; ?></td>
	<td><?php echo $r["turno"]; ?></td>
	<td><?php echo $r["emplazamiento"]; ?></td>
	<td><?php echo $r["nro_h_ruta_ope"]; ?></td>
	<td><?php echo $r["grupo_planif"]; ?></td>
	<td><?php echo $r["precio"]; ?></td>
	<td><?php echo $r["texto_expl"]; ?></td>
	<td><?php echo $r["acreedor"]; ?></td>
	<td><?php echo $r["status_sistema"]; ?></td>
	
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>

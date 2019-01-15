<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from prog_mantenimiento where id = ".$_GET["id"];
$query = $con->query($sql1);
$prog_mantenimiento = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $prog_mantenimiento=$r;
  break;
}

  }
?>

<?php if($prog_mantenimiento!=null):?>

<form role="form" method="post" action="php/actualizar.php">
  
  <div class="form-group">
    <label for="planta">Planta:</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->planta; ?>" name="planta">
  </div>
  
  <div class="form-group">
    <label for="sistema">Sistema:</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->sistema; ?>" name="sistema">
  </div>
  
  <div class="form-group">
    <label for="codigo_equipo">Codigo del Equipo:</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->codigo_equipo; ?>" name="codigo_equipo">
  </div>
  
  <div class="form-group">
    <label for="parte_equipo">Parte del Equipo:</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->parte_equipo; ?>" name="parte_equipo">
  </div>
  
  <div class="form-group">
    <label for="equipo">Equipo:</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->equipo; ?>" name="equipo">
  </div>
  
  <div class="form-group">
    <label for="denominacion">Denominacion:</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->denominacion; ?>" name="denominacion">
  </div>
  
  <div class="form-group">
    <label for="orden">Orden:</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->orden; ?>" name="orden">
  </div>
  
  <div class="form-group">
    <label for="operacion">Operacion:</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->operacion; ?>" name="operacion">
  </div>
  
  <div class="form-group">
    <label for="frecuencia">Frecuencia:</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->frecuencia; ?>" name="frecuencia">
  </div>
  
  <div class="form-group">
    <label for="actividades">Actividades:</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->actividades; ?>" name="actividades">
  </div>
  
  <div class="form-group">
    <label for="t_control">Control:</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->t_control; ?>" name="t_control">
  </div>
  
  <div class="form-group">
    <label for="fecha_ini_mas_tmp">Fecha de Inicio:</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->fecha_ini_mas_tmp; ?>" name="fecha_ini_mas_tmp">
  </div>
  
  <div class="form-group">
    <label for="fecha_fin_mas_tmpr">Fecha de Finalizacion</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->fecha_fin_mas_tmpr; ?>" name="fecha_fin_mas_tmpr">
  </div>
  
  <div class="form-group">
    <label for="prioridad">Prioridad</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->prioridad; ?>" name="prioridad">
  </div>
  
  <div class="form-group">
    <label for="tiempo_est_hrs">Tiempo Estimado en Horas</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->tiempo_est_hrs; ?>" name="tiempo_est_hrs">
  </div>
  
  <div class="form-group">
    <label for="tiempo_est_r_hrs">Tiempo Estimado Real en Horas</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->tiempo_est_r_hrs; ?>" name="tiempo_est_r_hrs">
  </div>
  
  <div class="form-group">
    <label for="nombres_apellidos">Nombres y Apellidos</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->nombres_apellidos; ?>" name="nombres_apellidos">
  </div>
  
  <div class="form-group">
    <label for="puesto_trabajo">Puesto de Trabajo</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->puesto_trabajo; ?>" name="puesto_trabajo">
  </div>
  
  <div class="form-group">
    <label for="turno">Turno</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->turno; ?>" name="turno">
  </div>
  
  <div class="form-group">
    <label for="emplazamiento">Emplazamiento</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->emplazamiento; ?>" name="emplazamiento">
  </div>
  
  <div class="form-group">
    <label for="nro_h_ruta_ope">Número Hoja de Ruta Operacion</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->nro_h_ruta_ope; ?>" name="nro_h_ruta_ope">
  </div>
  
  <div class="form-group">
    <label for="grupo_planif">Grupo de Planificacion</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->grupo_planif; ?>" name="grupo_planif">
  </div>
  
  <div class="form-group">
    <label for="precio">Precio</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->precio; ?>" name="precio">
  </div>
  
  <div class="form-group">
    <label for="texto_expl">Texto Expl</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->texto_expl; ?>" name="texto_expl">
  </div>
  
  <div class="form-group">
    <label for="acreedor">Acreedor</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->acreedor; ?>" name="acreedor">
  </div>
  
  <div class="form-group">
    <label for="status_sistema">Status del Sistema</label>
    <input type="text" class="form-control" value="<?php echo $prog_mantenimiento->status_sistema; ?>" name="status_sistema">
  </div>

<input type="hidden" name="id" value="<?php echo $prog_mantenimiento->id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>
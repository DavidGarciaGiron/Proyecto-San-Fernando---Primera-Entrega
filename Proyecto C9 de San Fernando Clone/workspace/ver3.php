<html>
	<head>
		<title>Cronogramas de Mantenimiento</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
	</head>
	<body>
	<?php include "php/navbar3.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>Cronogramas de Mantenimiento</h2>
<!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal" class="btn btn-default">Insertar Nuevo Registro</a>
<br><br>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <link rel="stylesheet" type="text/css" media="screen" href="css/estilos1.css" />
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
          <h4 class="modal-title">Insertar Nuevo Registro</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="php/agregar2.php">
  <div class="form-group">
    <label for="planta">Planta</label>
    <input type="text" class="form-control" name="planta">
  </div>
  <div class="form-group">
    <label for="sistema">Sistema</label>
    <input type="text" class="form-control" name="sistema">
  </div>
  <div class="form-group">
    <label for="codigo_equipo">Codigo de Equipo</label>
    <input type="text" class="form-control" name="codigo_equipo">
  </div>
  <div class="form-group">
    <label for="parte_equipo">Parte de Equipo</label>
    <input type="text" class="form-control" name="parte_equipo">
  </div>
  <div class="form-group">
    <label for="equipo">Equipo</label>
    <input type="text" class="form-control" name="equipo">
  </div>
  <div class="form-group">
    <label for="denominacion">Denominacion</label>
    <input type="text" class="form-control" name="denominacion">
  </div>
  <div class="form-group">
    <label for="orden">Orden</label>
    <input type="text" class="form-control" name="orden">
  </div>
  <div class="form-group">
    <label for="operacion">Operación</label>
    <input type="text" class="form-control" name="operacion">
  </div>
  <div class="form-group">
    <label for="frecuencia">Frecuencia</label>
    <input type="text" class="form-control" name="frecuencia">
  </div>
  <div class="form-group">
    <label for="actividades">Actividades</label>
    <input type="text" class="form-control" name="actividades">
  </div>
  <div class="form-group">
    <label for="t_control">Control</label>
    <input type="text" class="form-control" name="t_control">
  </div>
  <div class="form-group">
    <label for="equipo">Fecha de Inicio</label>
    <input type="fecha_ini_mas_tmp" class="form-control" name="fecha_ini_mas_tmp">
  </div>
  <div class="form-group">
    <label for="fecha_fin_mas_tmpr">Fecha de Culminacion</label>
    <input type="text" class="form-control" name="fecha_fin_mas_tmpr">
  </div>
  <div class="form-group">
    <label for="prioridad">Prioridad</label>
    <input type="text" class="form-control" name="prioridad">
  </div>
  <div class="form-group">
    <label for="tiempo_est_hrs">Tiempo Estimado en Horas</label>
    <input type="text" class="form-control" name="tiempo_est_hrs">
  </div>
  <div class="form-group">
    <label for="tiempo_est_r_hrs">Tiempo Real Estimado en Horas</label>
    <input type="text" class="form-control" name="tiempo_est_r_hrs">
  </div>
  <div class="form-group">
    <label for="nombres_apellidos">Nombres y Apellidos</label>
    <input type="text" class="form-control" name="nombres_apellidos">
  </div>
  <div class="form-group">
    <label for="puesto_trabajo">Puesto de Trabajo</label>
    <input type="text" class="form-control" name="puesto_trabajo">
  </div>
  <div class="form-group">
    <label for="turno">turno</label>
    <input type="text" class="form-control" name="turno">
  </div>
  <div class="form-group">
    <label for="emplazamiento">Emplazamiento</label>
    <input type="text" class="form-control" name="emplazamiento">
  </div>
  <div class="form-group">
    <label for="nro_h_ruta_ope">Numero de Hoja de Ruta - Operacion</label>
    <input type="text" class="form-control" name="nro_h_ruta_ope">
  </div>
  <div class="form-group">
    <label for="grupo_planif">Grupo de Planificación</label>
    <input type="text" class="form-control" name="grupo_planif">
  </div>
  <div class="form-group">
    <label for="precio">Precio</label>
    <input type="text" class="form-control" name="precio">
  </div>
  <div class="form-group">
    <label for="texto_expl">Texto Expl</label>
    <input type="text" class="form-control" name="texto_expl">
  </div>
  <div class="form-group">
    <label for="acreedor">Acreedor</label>
    <input type="text" class="form-control" name="acreedor">
  </div>
  <div class="form-group">
    <label for="status_sistema">Estado del Sistema</label>
    <input type="text" class="form-control" name="status_sistema">
  </div>
  

  <button type="submit" class="btn btn-default">Insertar Nuevo Registro</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->



</div>
</div>
<?php include "php/tabla.php"; ?>
</div>



<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
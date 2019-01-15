<?php include 'partials/head.php';?>
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 1) {
        header("location:admin.php");
    }else if($_SESSION["usuario"]["privilegio"] == 2){
		header("location:usuario.php");
	}
} else {
    header("location:login.php");
}
?>
<?php include '../php/navbar3.php';?>
<div class="container">
	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="jumbotron">
			<div class="container text-center">
				<h1><strong>Bienvenido</strong> Ingeniero</h1>
				<p>Panel de control | <span class="label label-info">Ingeniero</span></p>
				<p>
					<a href="cerrar-sesion.php" class="btn btn-primary btn-lg">Cerrar sesión</a>
				</p>
			</div>
		</div>
	</div>
</div><!-- /.container -->
<?php include 'partials/footer.php';?>
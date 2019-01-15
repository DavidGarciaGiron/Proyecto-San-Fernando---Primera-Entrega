<?php include 'partials/head.php';?>
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 2) {
        header("location:usuario.php");
    }else if($_SESSION["usuario"]["privilegio"] == 3){
		header("location:tecnico.php");
	}
} else {
    header("location:login.php");
}
?>
<?php include '../php/navbar.php';?>
<div class="container">
	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="jumbotron">
			<div class="container text-center">
				<h1><strong>Bienvenido</strong>Tecnico</h1>
				<p>Panel de control | <span class="label label-info">Tecnico</span></p>
				<p>
					
				</p>
			</div>
		</div>
	</div>
</div><!-- /.container -->
<?php include 'partials/footer.php';?>
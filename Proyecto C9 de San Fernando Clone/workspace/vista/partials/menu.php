<nav class="navbar navbar-inverse">
  
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
		<link rel="stylesheet" type="text/css" media="screen" href="../../css/main2.css" />
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php"><b>SAN FERNANDO</b></b></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            
            <?php if (!isset($_SESSION["usuario"])) {?>
            <li><a href="vista/login.php">INICIAR SESION</a></li>
            <?php } else {
    ?>
              <?php if ($_SESSION["usuario"]["privilegio"] == 1) {?>
              <li><a href="vista/admin.php">INGENIERO</a></li>
              <?php } else if($_SESSION["usuario"]["privilegio"] == 2){?>
              <li><a href="vista/usuario.php">LIDER</a></li>
              <?php }else if($_SESSION["usuario"]["privilegio"] == 3){?>
              <li><a href="vista/tecnico.php">TECNICO</a></li>              
              <?php         }

}?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<?php
include("databasecine.php");
$cines="select * from cine"

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/varios/favicon.ico">
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
    <title>Multicines Cinestar</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
</head>

<body>

    <header>
        <nav class="nav-sec">
            <a href="index.jsp">Inicio</a>&nbsp;&nbsp;l&nbsp;&nbsp;
            <a href="http://www.cinestar.com.pe/quienes_somos">Quiénes somos</a>&nbsp;&nbsp;l&nbsp;&nbsp;
            <a href="http://www.cinestar.com.pe/trabaja_con_nosotros">Trabaja con nosotros</a>&nbsp;&nbsp;l&nbsp;&nbsp;
            <a href="https://www.efact.pe/consult.html" target="_blank">Consulta tu comprobante de pago
            </a>&nbsp;&nbsp;l&nbsp;&nbsp;
            <a href="http://www.cinestar.com.pe/contactenos/#contenido_titulo" class="anchorLink">Contáctenos</a>
        </nav>
        <div class="area-logo">
            <a href="index.jsp"><img src="img/varios/logo-cinestar.png"></a>
        </div>
        <nav class="menu">
            <span class="img-social">
                <a href="http://www.facebook.com/multicinestar" target="_blank"><img src="img/varios/ico-face.png"></a>
                <a href="http://www.twitter.com/multicinestar" target="_blank"><img
                        src="img/varios/ico-twitter.png"></a>
            </span>
            <span class="social">Síguenos en: </span>
            <ul class="menu-principal">
                <li class="menu-item"><a href="svlPelicula?id=1">Cartelera</a></li>
                <li class="menu-item"><a href="svlPelicula?id=2">Próximos estrenos</a></li>
                <li class="menu-item"><a href="http://www.cinestar.com.pe/starcard">Star Card</a></li>
                <li class="menu-item"><a href="svlCine">Nuestros Cines</a></li>
                <li class="menu-item"><a href="http://www.cinestar.com.pe/ventas_corporativas">Ventas Corporativas</a>
                </li>
                <li class="menu-item"><a href="http://www.cinestar.com.pe/promociones">Promociones</a></li>
                <li class="menu-item"><a href="http://www.cinestar.com.pe/cinefilo_star">Blog</a></li>
            </ul>
        </nav>
        <div class="slider">

        </div>
        <div class="papaya">
            <a href="http://www.cinepapaya.com/pe/cinestar" target="_blank"><img src="img/varios/bg-papaya.jpg"></a>
        </div>
    </header>
    <div class="contenido">
        <div class="publicidad">
            <a href="http://www.cinestar.com.pe/starcard/"><img src="img/varios/starcard.jpg"></a>
            <a href="http://www.cinestar.com.pe/cinefilo_star/"><img src="img/varios/cinefilo-star.jpg"></a>
        </div>
        <div class="contenido-interno">

           <!-- NAVIGATION  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Tasks App</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <form class="form-inline my-2 my-lg-0">
            <input name="search" id="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
          </form>
      </div>
    </nav>

    <div class="container">
      <div class="row p-4">
        <div class="col-md-5">
          <div class="card">
            <div class="card-body">
              <!-- FORM TO ADD TASKS -->
              <form id="task-form">
                <div class="form-group">
                  <input type="text" id="name" placeholder="Task Name" class="form-control">
                </div>
                <div class="form-group">
                  <textarea id="description" cols="30" rows="10" class="form-control" placeholder="Task Description"></textarea>
                </div>
                <input type="hidden" id="taskId">
                <button type="submit" class="btn btn-primary btn-block text-center">
                  Save Task
                </button>
              </form>
            </div>
          </div>
        </div>

        <!-- TABLE  -->
        <div class="col-md-7">
          <div class="card my-4" id="task-result">
            <div class="card-body">
              <!-- SEARCH -->
              <ul id="container"></ul>
            </div>
          </div>

          <table class="table table-bordered table-sm">
            <thead>
              <tr>
                <td>idPelicula</td>
                <td>Titulo</td>
                <td>FechaEstreno</td>
              </tr>
            </thead>
            <tbody id="tasks"></tbody>
          </table>
        </div>
      </div>
    </div>

            <br><h1>Nuestros Cines</h1><br>
            <?php
            $resultado = mysqli_query($conexion,$cines);

            while($row=mysqli_fetch_assoc($resultado))
            { ?>
				<div class="contenido-cine">
	        	    <img src="img/cine/<?php echo $row["idCine"] ?>.1.jpg" width="227" height="170">
            	   	<div class="datos-cine">
       				   	<h4><?php echo $row["RazonSocial"] ?></h4><br>
                		<span><?php echo $row["idCine"] ?> .Lima <br> <?php echo $row["Direccion"] ?><br><br>Teléfono: <?php echo $row["Telefonos"] ?> </span>
                        
                	</div>
                	<br>
                	<a href="http://www.cinestar.com.pe/multicines/cine/Cinestar-Excelsior">
                		<img src="img/varios/ico-info2.png" width="150" height="40">
                	</a>
                   
				</div>
                <?php }?>










        </div>
    </div>
    <div class="clearbox"><br></div>


    <footer>
        <div class="contenido-footer">
            <p>Copyright © 2016 ® Multicines CINESTAR - Todos los Derechos Reservados</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- Frontend Logic -->
    <script src="app.js"></script>
</body>

</html>
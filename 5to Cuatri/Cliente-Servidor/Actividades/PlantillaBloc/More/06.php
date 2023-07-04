<?php
require 'Consulta06.php';
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Sistemas Con Arquitectura Cliente-Servidor</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a class="logo"><strong>Programación</strong> Cliente-Servidor</a>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Content -->
								<section>

									<span class="image main"><img src="https://sites.google.com/site/dap4gen/_/rsrc/1357764876947/home/estructura-clienteservidor/Cliente-servidor%5B1%5D.jpg" alt="" /></span>

                                    <header class="main">
                                        <h1>Sistemas Con Arquitectura Cliente-Servidor</h1>
                                    </header>

                                    <p>Esta arquitectura consiste básicamente en un cliente que realiza peticiones a otro programa (el servidor) que le da respuesta. Aunque esta idea se puede aplicar a programas que se ejecutan sobre una sola computadora es más ventajosa en un sistema operativo multiusuario distribuido a través de una red de computadoras. La interacción cliente-servidor es el soporte de la mayor parte de la comunicación por redes. Ayuda a comprender las bases sobre las que están construidos los algoritmos distribuidos.</p>
                                    <hr class="major" />

                                    <?php
                                    foreach ($query as $item){
                                        ?>
                                        <h2><?php echo $item['Nombre'] ?></h2>
                                        <p><?php echo $item['Post'] ?></p>
                                        <?php
                                    }
                                    ?>

								</section>

                            <section>
                                <form method="post" action="Guardar06.php">
                                    <center><h3>Puedes Escribir Tu Aportacion!</h3></center>
                                    <div class="row gtr-uniform">
                                        <div class="col-4">
                                        </div>
                                        <div class="col-4">
                                            <input type="text" name="nombre" id="nombre" value="" placeholder="Nombre" />
                                        </div>
                                        <div class="col-4">
                                        </div>
                                        <div class="col-4">
                                        </div>
                                        <div class="col-4">
                                            <textarea name="post" id="post" placeholder="Escribe Tu Post" rows="6"></textarea>
                                        </div>

                                        <div class="col-4">
                                        </div>

                                        <div class="col-5">
                                        </div>

                                        <div class="col-4">
                                            <ul class="actions">
                                                <li><input type="submit" value="Listo" class="primary" /></li>
                                                <li><input type="reset" value="Eliminar" /></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="../index.php">Inicio</a></li>
										<li><a href="01.php">Concepto De Información</a></li>
										<li><a href="02.php">Evolución De Los Sistemas De Información</a></li>
										<li><a href="03.php">Cliente-Servidor</a></li>
										<li><a href="04.php">Sistemas De Computadoras Centrales Y Dedicadas</a></li>
										<li><a href="05.php">Sistemas De Conexión Libre Y A Través De Redes</a></li>
										<li><a href="06.php">Sistemas Con Arquitectura Cliente-Servidor</a></li>
										<li><a href="07.php">Computo En La Nube</a></li>
										<li>
											<span class="opener">Más</span>
											<ul>
												<li><a href="#">Acerca De</a></li>
												<li><a href="#">Contactanos</a></li>
											</ul>
									</ul>
								</nav>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>
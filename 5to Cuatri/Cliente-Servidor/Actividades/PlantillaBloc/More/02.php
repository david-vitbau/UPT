<?php
require 'Consulta02.php';
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Evolución De Los Sistemas De Información</title>
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

									<span class="image main"><img src="https://gamerpc.es/wp-content/uploads/2021/10/sistema-de-informacion-770x445.jpeg" alt="" /></span>

                                    <header class="main">
                                        <h1>Evolución De Los Sistemas De Información</h1>
                                    </header>
                                    <center>
									<p>La evolución de la función del sistema de información se puede resumir de la siguiente manera:</p>
                                    <p>Procesamiento de datos: 1950 - 1960<br>Recopila, almacena, modifica y recupera transacciones cotidianas de una organización-Ayuda a los trabajadores</p>
                                    <p>Informes de gestión: 1960 – 1970<br>Informes y pantallas preespecificados para apoyar la toma de decisiones empresariales - Ayuda a los gerentes intermedios</p>
                                    <p>Apoyo a las decisiones: 1970 – 1980<br>Soporte ad-hoc interactivo para el proceso de toma de decisiones -Ayuda a los gerentes senior</p>
                                    <p>Apoyo Ejecutivo: 1980 – 1990<br>Proporcione información interna y externa relevante para los objetivos estratégicos de la organización - Ayuda a los ejecutivos</p>
                                    <p>Conocimiento administrativo: 1990 - 2000<br>Apoya la creación, organización y diseminación del conocimiento empresarial - Ayuda disponible para toda la empresa</p>
                                    <p>E-Business: 2000 – presente<br>Mayor conectividad, mayor nivel de integración en todas las aplicaciones - Ayuda al comercio electrónico global</p>
                                    <hr class="major" />
                                    </center>

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
                                <form method="post" action="Guardar02.php">
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
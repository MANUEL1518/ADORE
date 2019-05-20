<?php
	include("med/consulta.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ADORE - Oficial</title>
	<link rel="stylesheet" type="text/css" href="med/style.css">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Lobster|Pacifico|Rubik|Varela+Round&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="med/icon.png">
</head>
<body>
	<main>
		<header>
			<h1>ADORE - Sitio Oficial</h1>
			<img src="med/more_icon.jpg">
			<nav>
				<a href="#">Inicio</a> |
				<a href="#">Ofertas</a> |
				<a href="#">Contacto</a> |
				<a href="#">Publicaciones</a>
			</nav>
		</header>
		<div id="principal">
			<section id="bienvenida">
				<div style="width: 100%;">
					<h1>Bienvenido a ADORE!!! 😊</h1>
					<p>
						Te ofrecemos hermosos arreglos florales.<br>
						¿Un Bautizo? ¿Una boda? ¿Un cumpleaños?<br>
						Tu solo pide te aseguro que tenemos lo ideal para ti
					</p>
				</div>
				<img src="med/muestra_bienvenida.jpg" width="50%">
			</section>
			<section id="header_foto">
				<div style="width: 100%;">
					<h1>Sonrie, Difruta, Enamorate Con <a title="Adore facebook" href="https://www.facebook.com/Adore.floreria" class="hashtag">#ADORE</a> 💜
					</h1>
					<div class="barra_inferior"></div>
					<p>
						Los mejores y mas hermosos arreglos florales.<br> Ven si quieres te prometemos que solo con<br> verlos quedaras maravillado!!!
					</p>
				</div>
			</section>
			<section id="ofertas">
				<div style="width: 100%;">
					<center><h1>❤️ Aqui Algunos de Nuestros Mejores Arreglos en Excibición ❤️</h1>
						<div class="barra_inferior" style="background: #333; width: 50%; margin: 20px auto;"></div></center>
					<div id="arreglos_oferta">
						<!-- Esta parte es para los arrelos en la tabla de "ofertas" -->
							<?php
								mostrar_ofertas();
							?>
						<!-- End -->
					</div>
				</div>
			</section>
			<section id="contacto">
				<div style="width: 100%;">
					<h1 style="color: #333;">Recuerda visitarnos en Facebook</h1>
					<h2>Subimos publicaciones que pueden interesarte 😊</h2>
				</div>
				<iframe style="width: 600px; padding: 0px 100px" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAdore.floreria%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
			</section>
			<section>
			<center>
				<h1 style="color: #333; font-size: 35px; padding: 50px 0px; font-family: cursive;">Algunas de nuestras publicaciones 😜😎😍</h1>
				<div class="barra_inferior" style="background: #333;"></div>

				<div style="margin: 20px auto;"></div>
				<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FAdore.floreria%2Fphotos%2Fa.478760758893345%2F1667984579970951%2F%3Ftype%3D3%26theater&width=500&show_text=true&height=461&appId" width="400" height="461" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

				<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FAdore.floreria%2Fphotos%2Fa.478760758893345%2F1666446573458085%2F%3Ftype%3D3%26theater&width=500&show_text=true&height=474&appId" width="400" height="461" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

				<iframe src="https://www.facebook.com/plugins/post.php?href=https://www.facebook.com/Adore.floreria/photos/a.478760758893345/1665120010257408/?type=3&theater&width=500&show_text=true&height=474&appId" width="400" height="461" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
			</center>
			</section>
		</div>
	</main>
	<footer style="padding: 30px; box-sizing: border-box; border-top: 5px #222 solid;">
		<p style="font-size: 18px; color: #fff;">
			©Copyright - <a title="Adore facebook" href="https://www.facebook.com/Adore.floreria" class="hashtag">#ADORE Floreria</a>
		</p>
	</footer>
</body>
</html>
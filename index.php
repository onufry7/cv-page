<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Stworzę dla Ciebie wyjątkową stronę www! Zatrudnij programistę webowego" />
	<meta name="keywords" content="zamów stronę, burnejko portfolio, programista webowy, tworzenie, burnejko cv" />		
	<!--[if lte IE 8]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/lightbox.css" />
	<link rel="stylesheet" href="fontello/css/fontello.css" />
	<link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700%7cLato:400,700&subset=latin-ext" />
	<script src="js/timer.js"></script>
	<title>Burnejko - CV</title>
</head>
<body onload="czas();">
<div id="container">

	<header class="rectangle">
		<div id="logo">
			<a href="zatrudnij-programiste-webowego" class="logolink">Szymon Burnejko</a>
		</div>
		<div id="zegar"></div>
		<div style="clear: both"></div>
	</header>

	<div class="square tooltip">	
		<nav class="tile2">
			<a href="kim-jestem" class="tilelink" data-tooltip="Kilka słów o mnie.">
				<i class="icon-user"></i><br />Kim jestem?
			</a>
		</nav>
		<nav class="tile1">
			<a href="oferta-tworzenie-stron-www" class="tilelink" data-tooltip="Co mogę wykonać.">
				<i class="icon-laptop"></i><br />Co oferuję?
			</a>
		</nav>
		<div style="clear: both"></div>

		<nav class="tile1">
			<a href="burnejko-portfolio" class="tilelink" data-tooltip="Przykładowe projekty.">
				<i class="icon-briefcase"></i><br />Portfolio
			</a>
		</nav>
		<nav class="tile3">
			<a href="cv-programista-html-css-php" class="tilelink" data-tooltip="Czym się zajmuję.">
				<i class="icon-graduation-cap"></i><br />Curriculum vitae
			</a>
		</nav>
		<div style="clear: both"></div>

		<aside class="tile4">
			<i>Talk is cheap. Show me the code!</i><br />Linus Torvalds, twórca Linuxa
		</aside>	
	</div>

	<div class="square">
		<article class="tile5">
			<?php @include_once('podstrona.php'); ?>
		</article>

		<nav class="tile3 tooltip">
			<a href="kontakt-programista-html-css" class="tilelink" data-tooltip="Namiary na mnie.">
				<i class="icon-mail"></i><br />Kontakt ze mną
			</a>
		</nav>

		<aside class="tile6 tooltip tooltip2">
			<a href="download/burnejko-cv.pdf" download="Burnejko-CV.pdf" class="medialink" data-tooltip="Pobierz PDF.">
				CV<br /><i class="icon-download"></i>
			</a>
		</aside>

		<aside class="tile7 tooltip tooltip2">
			<a href="http://www.linkedin.com/in/szymon-burnejko" target="_blank" class="medialink" data-tooltip="Mój profil.">
				<i class="icon-linkedin-squared"></i>
			</a>
		</aside>	

	</div>	
	<div style="clear: both"></div>

	<footer class="rectangle">
		2017 &copy; Szymon Burnejko - Portfolio. <i class="icon-mail-alt"></i> szymon&#46;burnejko&#64;gmail&#46;com
	</footer>

</div>	
</body>
</html>
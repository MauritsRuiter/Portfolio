<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/ScrollTrigger.min.js"></script>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style.css">
</head>

<body>
<span id="logo-name">Maurits Ruiter</span>
	<header>
		<div id="page-top" class="header-navbar">
			<div class="menu">
				<a class="head-btn" data-target="page-top"><span>Over mij</span><ion-icon class="arrow-icon" name="arrow-forward-circle"></ion-icon></a>
				<a class="head-btn" data-target="timeline"><span>Tijdlijn</span><ion-icon class="arrow-icon" name="arrow-forward-circle"></ion-icon></a>
				<a class="head-btn" data-target="projects"><span>Projecten</span><ion-icon class="arrow-icon" name="arrow-forward-circle"></ion-icon></a>
				<a class="head-btn" data-target="contact"><span>Contact</span><ion-icon class="arrow-icon" name="arrow-forward-circle"></ion-icon></a>
			</div>
			<div class="mobile-menu">
				<a class="head-btn" data-target="page-top"><span>Over mij</span><ion-icon class="arrow-icon" name="arrow-forward-circle"></ion-icon></a>
				<a class="head-btn" data-target="timeline"><span>Tijdlijn</span><ion-icon class="arrow-icon" name="arrow-forward-circle"></ion-icon></a>
				<a class="head-btn" data-target="projects"><span>Projecten</span><ion-icon class="arrow-icon" name="arrow-forward-circle"></ion-icon></a>
				<a class="head-btn" data-target="contact"><span>Contact</span><ion-icon class="arrow-icon" name="arrow-forward-circle"></ion-icon></a>
			</div>
			<button class="burger">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
	</header>

	<!-- Home Page -->
	<div class="about-me">
		<div class="about-me-text">
			<span id="about-me-name" class="about-me-name">Maurits Ruiter</span>
			<div class="cursor"></div>
		</div>
		<div class="about-me-subtext">
			<span id="subtext">Web Developer & Designer op het Grafisch Lyceum Utrecht</span>
		</div>
	</div>

	<div class="logos">
		<button class="logos-button" data-tooltip='"Al 2 jaar heb ik ervaring met HTML."'><i class='logo-icons bx bxl-html5'></i></button>
		<button class="logos-button" data-tooltip='"Met CSS ben ik een echte pro."'><i class='logo-icons bx bxl-css3'></i></button>
		<button class="logos-button" data-tooltip='"JavaScript is wel lastig en nog niet veel ervaring mee, gelukkig kan Chat-GTP veel voor mij betekenen."'><i class='logo-icons bx bxl-javascript'></i></button>
		<button class="logos-button" data-tooltip='"Een database opzetten en beheren is geen moeite."'><i class='logo-icons bx bxs-data'></i></button>
		<button class="logos-button" data-tooltip='"Php is een hele gave taal met veel mogelijkheden, helaas is php aan de oude kant."'><i class='logo-icons bx bxl-php'></i></button>
	</div>

	<!-- Timeline -->
	<section id="timeline" class="timeline">
	<span class="timeline-title">Mijn Schoolcarrière</span>
		<ul>
			<li>
				<div>
					<time>1934</time> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
				</div>
			</li>
			<li>
				<div>
					<time>1937</time> Proin quam velit, efficitur vel neque vitae, rhoncus commodo mi. Suspendisse finibus mauris et bibendum molestie. Aenean ex augue, varius et pulvinar in, pretium non nisi.
				</div>
			</li>
			<li>
				<div>
					<time>1940</time> Proin iaculis, nibh eget efficitur varius, libero tellus porta dolor, at pulvinar tortor ex eget ligula. Integer eu dapibus arcu, sit amet sollicitudin eros.
				</div>
			</li>
			<li>
				<div>
					<time>1943</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
				</div>
			</li>
			<li>
				<div>
					<time>1946</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
				</div>
			</li>
			<li>
				<div>
					<time>1956</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
				</div>
			</li>
			<li>
				<div>
					<time>1957</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
				</div>
			</li>
			<li>
				<div>
					<time>1967</time> Aenean condimentum odio a bibendum rhoncus. Ut mauris felis, volutpat eget porta faucibus, euismod quis ante.
				</div>
			</li>
			<li>
				<div>
					<time>1977</time> Vestibulum porttitor lorem sed pharetra dignissim. Nulla maximus, dui a tristique iaculis, quam dolor convallis enim, non dignissim ligula ipsum a turpis.
				</div>
			</li>
			<li>
				<div>
					<time>1985</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
				</div>
			</li>
			<li>
				<div>
					<time>2000</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
				</div>
			</li>
			<li>
				<div>
					<time>2005</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
				</div>
			</li>
		</ul>
	</section>

	<!-- Carousel -->
	<?php include_once('connect.php');

	$stmt = $conn->prepare("SELECT * FROM `projects`");
	$stmt->execute();
	$result = $stmt->fetchAll(); ?>
	
	<div id="projects">
		<span class="projects-title">Mijn Projecten</span>
	</div>
	<div class="projects">
		<?php foreach ($result as $row) { ?>
			<div class="project" style="background-image: url('<?php echo $row['img']; ?>');  background-repeat: no-repeat; background-size: cover;">
				<div class="project-text">
					<h1 class="project-heading"><?php echo $row['title']; ?></h1>
					<p class="project-subheading"><?php echo $row['subtextsmall']; ?></p>
				</div>
			</div>
		<?php }; ?>
	</div>


	<!-- Contact -->
	<div id="contact" class="contact">
		<a class="contact-link" href="https://linktr.ee/MauritsRuiter" target="_blank">https://linktr.ee/MauritsRuiter</a>
	</div>

	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
	<script src="scrollTo.js" defer></script>
	<script src="header.js" defer></script>
	<script src="name.js" defer></script>
	<script src="timeline.js" defer></script>
	<!-- <script src="carousel.js" defer></script> -->
</body>

</html>
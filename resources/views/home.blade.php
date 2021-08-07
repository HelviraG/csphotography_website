@extends('app_template')

@section('title')
    Photographe
@endsection
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="referrer" content="strict-origin-when-cross-origin">
		<meta name="robots" content="follow, noarchive, noimageindex">
		<meta name="Googlebot" content="directives pour Google Search">
		<meta name="description" content="">
		<title>CS Photography | @yield('title')</title>
		<link rel="apple-touch-icon" sizes="48x48" href="assets/images/favicon/apple-icon-48x48.png">
		<link rel="apple-touch-icon" sizes="36x36" href="assets/images/favicon/apple-icon-36x36.png">
		<link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="assets/images/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="assets/images/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
		<link type="text/css" rel="stylesheet" href="assets/css/lightgallery.css" /> 
		<link rel="stylesheet" type="text/css" href="assets/css/app.css">
		<link rel="stylesheet" type="text/css" href="assets/css/home.css">
		<script src="https://kit.fontawesome.com/87930e6ec9.js" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		
	</head>

@section('content')
	<div id="home-container">
		<header id="home-header" data-height-onload="66">
			<div class="home-header-container">
				<div class="home-header-title-container">
					<h1>
						<a href="home" title="CS Photography Home Page">CS Photography</a>
					</h1>
				</div>
				<div id="nav-top" data-height="66" data-fixed-height="40">
					<nav id="nav-top-menu">
						<ul id="top-menu" class="nav">
							<li>
								<a class="nav-link active" href="home">Home</a>
							</li>
							<li>
								<a class="nav-link" href="galery">Book</a></li>
							<li>
								<a class="nav-link" href="services">Services</a>
							</li>
							<li>
								<a class="nav-link" href="reservation">Reservation</a>
							</li>
						</ul> 
					</nav>
				</div>
			</div>
		</header>	
	</div>
	<main class="container-fluid">
		<article class="">
			<div class="home-main-layout">
				<div class="main-inner-content">
					<section class="custom-container">
						<div class="custom-row">
							<section class="hero-container">
								<div class="hero-container-title">
									<h1>Votre photographe</h1>
								</div>
								<div class="hero-container-subtitle">
									<h1>Capturer vos instants magiques</h2>
								</div>
								<div class="hero-container-btn">
									<a href="/galery">Découvrir la galerie</a>
								</div>
							</section>
						</div>
					</section>
					<section class="row home_section_container package-container">
						<section class="col package-content-container">
							<div class="package-content">
								<h2 class="package-content-title">Bébé & moi</h2>
								<p class="package-content-txt">
									De la maternité au baptème, la gamme <span class="bold">Bébé & Moi</span> 
									vous permettra d'immortaliser les <span class="bold">premiers pas de bébé</span>.  
								</p>
							</div>
							<div class="package-content-btn">
								<a href="services">En savoir plus</a>
							</div>
						</section>
						<section class="col package-content-container">
							<div class="package-content">
								<h2 class="package-content-title">Mariage</h2>
								<p class="package-content-txt">
									Faites du <span class="bold">plus beau jour</span> de votre vie un <span class="bold">moment 
									d'exception</span> avec la gamme <span class="bold">Mariage</span> adaptable à vos envies.
								</p>
							</div>
							<div class="package-content-btn">
								<a href="services">En savoir plus</a>
							</div>
						</section>
						<section class="col package-content-container">
							<div class="package-content">
								<h2 class="package-content-title">Lifestyle</h2>
								<p class="package-content-txt">
									Pour tous vos <span class="bold">événements particuliers</span> 
									(anniversaires, baby shower...), 
									optez pour la gamme <span class="bold">Lifestyle</span>.
								</p>
							</div>
							<div class="package-content-btn">
								<a href="services">En savoir plus</a>
							</div>
						</section>
						<section class="col package-content-container">
							<div class="package-content">
								<h2 class="package-content-title">Entreprise</h2>
								<p class="package-content-txt">
									La gamme <span class="bold">Entreprise</span> vous permettra de <span class="bold">valoriser votre entreprise</span>, 
									<span class="bold">vos produits</span> ainsi que <span class="bold">vos événements</span>.
								</p>
							</div>
							<div class="package-content-btn">
								<a href="services">En savoir plus</a>
							</div>
						</section>
					</section>
					<section class="row img-bande mix-blend">
						<section class="col img-bande-content item-1"></section>
						<section class="col img-bande-content item-2"></section>
						<section class="col img-bande-content item-3"></section>
						<section class="col img-bande-content item-4"></section>
						<section class="col img-bande-content item-5"></section>
						<section class="col img-bande-content item-6"></section>
					</section>
					<section class="row present-section">
						<div class="present-section-icon">
							<span>
								<img alt title="photographer-gold-icon" src="assets/images/home_icon_photographer.png">
							</span>
						</div>
						<div class="present-section-title">
							<div class="present-section-title-content">
								<p>Hello</p>
							</div>
						</div>
						<div class="present-section-subtitle">
							<div class="">
								<h2>Qui suis-je ?</h2>
							</div>
						</div>
						<div class="present-section-txt">
							<div>
								<h4>Cindy, à votre service</h4>
								<p>Photographe spécialiste du <span class="bold">domicile</span> et en 
								<span class="bold">extérieur</span>, je suis basée à Sarrians (proche Avignon), 
								et me déplace <span class="bold">partout en Provence</span> et même <span class="bold">dans l’Hérault</span>.
								La photographie est depuis toujours mon <span class="bold">univers</span>. 
								Je suis photographe de nouveau-né, grossesse, enfant, famille dans une <span class="bold">atmosphère 
								chaleureuse</span> et <span class="bold">bienveillante</span>.
								</p>
							</div>
						</div>
						<div class="present-section-btn">
							<a>Me contacter</a>
						</div>
					</section>
					<section class="row quote-section">
						<div class="quote-section-content">
							<h2 class="quote-section-title">
								Photographier c’est mettre sur la même ligne de mire la tête, l’oeil et le coeur.
							</h2>
							<p class="quote-section-subtitle">~ Henri Cartier-Bresson</p>
						</div>
					</section>
					<section class="row second-img-bande mix-blend">
						<div class="second-img-bande-inner">
							<div class="col first-band-col">
								<div class="first-band-col-img-1">
									<span class="first-band-col-span-1">
										<img loading="lazy" src="assets/images/home/home_8.jpg">
									</span>
								</div>
								<div class="first-band-col-img-2">
									<span class="first-band-col-span-2">
										<img loading="lazy" src="assets/images/home/home_30.jpg">
									</span>
								</div>
								<div class="first-band-col-img-3">
									<span class="first-band-col-span-3">
										<img loading="lazy" src="assets/images/home/home_33.jpg">
									</span>
								</div>
							</div>
							<div class="col second-band-col">
								<span class="second-band-col-span">
									<img loading="lazy" src="assets/images/home/home_32.jpg">
								</span>
							</div>
							<div class="row second-img-bande-inner-text">
								<a href="galery">
									<h2>Découvrir la galerie <i class="fas fa-angle-double-right"></i></h2>
								</a>
							</div>
						</div>
						
						<div class="second-img-bande-inner">
							<div class="col first-col">
								<span class="first-col-span">
									<img loading="lazy" src="assets/images/home/home_2.jpg">
								</span>
							</div>
							<div class="col second-col">
								<div class="second-col-img-1">
									<span class="second-col-span-1">
										<img loading="lazy" src="assets/images/home/home_28.jpg">
									</span>
								</div>
								<div class="second-col-img-2">
									<span class="second-col-span-2">
										<img loading="lazy" src="assets/images/home/home_29.jpg">
									</span>
								</div>
								<div class="second-col-img-3">
									<span class="second-col-span-3">
										<img loading="lazy" src="assets/images/home/home_27.jpg">
									</span>
								</div>
							</div>
						</div>
					</section>
					<section class="row testimony-section">
						<div class="testimony-section-inner">
							<div class="testimony-section-header">
								<div class="testimony-section-icon">
									<span>
										<img alt title="photographer-gold-icon" src="assets/images/home_icon_testimony.png">
									</span>
								</div>
								<div class="testimony-section-title">
									<div class="testimony-section-title-content">
										<p>Livre d'or</p>
									</div>
								</div>
							</div>
							<div class="testimony-section-content">
								<div class="row testimony-block">
									<!-- Blockquote 1 -->
									<blockquote class="row blockquote blockquote-custom bg-white p-5 shadow rounded">
										<div class="blockquote-custom-icon shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
										<p class="mb-0 mt-2 font-italic">"Cindy est <span class="bold">à l’écoute de ses clients</span>, elle sait conseiller et mettre à l’aise. Je vous recommande vivement de la convier à vos événements pour avoir de <span class="bold">jolis souvenirs</span>."</p>
										<footer class="blockquote-footer pt-4 mt-4 border-top"><span class="bold">Marine</span> sur
											<cite title="Source Title">Facebook</cite>
										</footer>
									</blockquote>
									<blockquote class="row blockquote blockquote-custom bg-white p-5 shadow rounded">
										<div class="blockquote-custom-icon shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
										<p class="mb-0 mt-2 font-italic">"Merci pour votre <span class="bold">professionnalisme</span>. Nous vous avons sollicité au dernier moment pour <span class="bold">immortaliser notre mariage</span> en petit comité, nous sommes ravis du résultat !"</p>
										<footer class="blockquote-footer pt-4 mt-4 border-top"><span class="bold">Pierre</span> sur
											<cite title="Source Title">Facebook</cite>
										</footer>
									</blockquote>
									<blockquote class="row blockquote blockquote-custom bg-white p-5 shadow rounded">
										<div class="blockquote-custom-icon shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
										<p class="mb-0 mt-2 font-italic">"Un moment <span class="bold">formidable</span>, merci pour les belles photos. Photographe <span class="bold">au top</span>."</p>
										<footer class="blockquote-footer pt-4 mt-4 border-top"><span class="bold">Émilie</span> sur
											<cite title="Source Title">Facebook</cite>
										</footer>
									</blockquote>
									<blockquote class="row blockquote blockquote-custom bg-white p-5 shadow rounded">
										<div class="blockquote-custom-icon shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
										<p class="mb-0 mt-2 font-italic">"Excellente photographe, <span class="bold">très pro</span>, <span class="bold">très arrangeante</span>, souriante et surtout, fait de <span class="bold">très belles photos</span> !"</p>
										<footer class="blockquote-footer pt-4 mt-4 border-top"><span class="bold">Hadrien</span> sur
											<cite title="Source Title">Facebook</cite>
										</footer>
									</blockquote>
								</div>

								<div class="row testimony-block">
									<!-- Blockquote 2 -->
									<blockquote class="row blockquote blockquote-custom bg-white p-5 shadow rounded">
										<div class="blockquote-custom-icon shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
										<p class="mb-0 mt-2 font-italic">"Super séance photo ! Cindy est <span class="bold">très professionnelle</span> et très a l'aise avec les petits. A refaire 😀."</p>
										<footer class="blockquote-footer pt-4 mt-4 border-top"><span class="bold">Nelly</span> sur
											<cite title="Source Title">Facebook</cite>
										</footer>
									</blockquote>
									<blockquote class="row blockquote blockquote-custom bg-white p-5 shadow rounded">
										<div class="blockquote-custom-icon shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
										<p class="mb-0 mt-2 font-italic">"Photographe d’une grande gentillesse qui sait nous mettre à l’aise tout de suite. <span class="bold">Résultat final magnifique</span>."</p>
										<footer class="blockquote-footer pt-4 mt-4 border-top"><span class="bold">Angèle</span> sur
											<cite title="Source Title">Facebook</cite>
										</footer>
									</blockquote>
									<blockquote class="row blockquote blockquote-custom bg-white p-5 shadow rounded">
										<div class="blockquote-custom-icon shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
										<p class="mb-0 mt-2 font-italic">"Photographe <span class="bold">très professionnelle</span>, <span class="bold">impliquée</span> et <span class="bold">à l'écoute</span>, je recommande très fortement."</p>
										<footer class="blockquote-footer pt-4 mt-4 border-top"><span class="bold">Dylan</span> sur
											<cite title="Source Title">Facebook</cite>
										</footer>
									</blockquote>
									<blockquote class="row blockquote blockquote-custom bg-white p-5 shadow rounded">
										<div class="blockquote-custom-icon shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
										<p class="mb-0 mt-2 font-italic">"Photographe <span class="bold">sérieuse</span>, qui met à l’aise. Très <span class="bold">à l’écoute</span> et gentille. je recommande à 100%😍"</p>
										<footer class="blockquote-footer pt-4 mt-4 border-top"><span class="bold">Cristina</span> sur
											<cite title="Source Title">Facebook</cite>
										</footer>
									</blockquote>
								</div>

								<div class="row testimony-block">
									<!-- Blockquote 3 -->
									<blockquote class="row blockquote blockquote-custom bg-white p-5 shadow rounded">
										<div class="blockquote-custom-icon shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
										<p class="mb-0 mt-2 font-italic">"Travail de <span class="bold">qualité</span>, une <span class="bold">disponibilité</span> et une jeune femme agréable."</p>
										<footer class="blockquote-footer pt-4 mt-4 border-top"><span class="bold">Christine</span> sur
											<cite title="Source Title">Facebook</cite>
										</footer>
									</blockquote>
									<blockquote class="row blockquote blockquote-custom bg-white p-5 shadow rounded">
										<div class="blockquote-custom-icon shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
										<p class="mb-0 mt-2 font-italic">"Un beau <span class="bold">travail de qualité</span> et tout en simplicité."</p>
										<footer class="blockquote-footer pt-4 mt-4 border-top"><span class="bold">Sophie</span> sur
											<cite title="Source Title">Facebook</cite>
										</footer>
									</blockquote>
									<blockquote class="row blockquote blockquote-custom bg-white p-5 shadow rounded">
										<div class="blockquote-custom-icon shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
										<p class="mb-0 mt-2 font-italic">"Un <span class="bold">très bon contact</span> avec les enfants nous avons hâte de voir les photos !"</p>
										<footer class="blockquote-footer pt-4 mt-4 border-top"><span class="bold">Aurélie</span> sur
											<cite title="Source Title">Facebook</cite>
										</footer>
									</blockquote>
									<blockquote class="row blockquote blockquote-custom bg-white p-5 shadow rounded">
										<div class="blockquote-custom-icon shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
										<p class="mb-0 mt-2 font-italic">"Photographe <span class="bold">au top</span>, <span class="bold">très professionnelle</span> et <span class="bold">sérieuse</span> ! Très douce avec les bébés. Je recommande 🙂"</p>
										<footer class="blockquote-footer pt-4 mt-4 border-top"><span class="bold">Oriane</span> sur
											<cite title="Source Title">Facebook</cite>
										</footer>
									</blockquote>
								</div>
							</div>
							
					</section>
					<section class="row contact-section">
						<div class="contact-section-inner">
							<div class="contact-section-title">
								<div class="contact-section-icon">
									<span>
										<img alt title="photographer-gold-icon" src="assets/images/home_icon_contact.png">
									</span>
								</div>
								<div class="contact-section-title">
									<div class="contact-section-title-content">
										<p>Message</p>
									</div>
								</div>
							</div>
							<div class="contact-section-form-inner">
								<h2 class="contact-section-subtitle">Me contacter</h2>
								<form class="contact-section-form">
									<div class="form-row">
										<div class="col contact-section-form-name">
											<input type="text" class="form-control" name="contact_name" id="contact_name" placeholder="Nom">
										</div>
										<div class="col contact-section-form-name">
											<input type="text" class="form-control" name="contact_surname" id="contact_name" placeholder="Prénom">
										</div>
									</div>
									<div class="form-row">
										<div class="col contact-section-infos">
											<label class="sr-only" for="contact_email">Adresse E-mail</label>
											<div class="input-group mb-2">
												<div class="input-group-prepend">
												<div class="input-group-text">@</div>
												</div>
												<input type="text" name="contact_email" class="form-control" id="contact_email" placeholder="Adresse E-mail">
											</div>
										</div>
										<div class="col contact-section-infos">
											<label class="sr-only" for="contact_phone">Télephone</label>
											<div class="input-group mb-2">
												<div class="input-group-prepend">
												<div class="input-group-text"><i class="fas fa-phone fa-rotate-90"></i></div>
												</div>
												<input type="text" name="contact_phone" class="form-control" id="contact_phone" placeholder="Télephone">
											</div>
										</div>
									</div>
									<div class="form-row">
										<input type="text" name="contact_objet" class="form-control" id="contact_objet" placeholder="Sujet">
									</div>
									<div class="form-row">
										<textarea class="form-control" name="contact_message" placeholder="Votre Message" class="form-control" id="contact_message" rows="6"></textarea>
									</div>
									<div class="form-row">
										<button type="submit" class="btn rounded-pill submit-btn">Envoyer</button>
									</div>
								</form>
							</div>
						</div>
						<!-- <div class="contact-section-social-media">
							<ul class="contact-social-media-list">
								<li>
									<a class="facebook" href="">
										<i class="fa fa-facebook"></i>
										<span>Facebook</span>
									</a>
								</li>	
								<li>
									<a class="instagram" href="">
										<i class="fab fa-instagram"></i>
										<span>Instagram</span>
									</a>
								</li>		
							</ul>
						</div> -->
					</section>
				</div>
			</div>
		</article>
	</main>
	
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/f0755877ac.js" crossorigin="anonymous"></script>



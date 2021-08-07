@extends('app_template')

@section('title')
    Services
@endsection

<head>
	<link rel="stylesheet" type="text/css" href="assets/css/services.css">
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
								<a class="nav-link" href="home">Home</a>
							</li>
							<li>
								<a class="nav-link" href="galery">Book</a></li>
							<li>
								<a class="nav-link active" href="services">Services</a>
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
									<h1>Votre Photographe</h1>
								</div>
								<div class="hero-container-subtitle">
									<h1>Une photo aujourd'hui, un souvenir pour la vie</h1>
								</div>
								<div class="hero-container-btn">
									<a href="/galery">Découvrir la galerie</a>
								</div>
							</section>
						</div>
					</section>
                </div>
            </div>
        </article>
    </main>
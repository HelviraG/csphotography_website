<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	
    <body>
        @yield('content')
        <footer>
			<div class="row mentions-bande">
				<button type="button" class="modal-btn" data-toggle="modal" data-target="#modal-mentions">
					Mentions Légales
				</button>
				<button type="button" class="modal-btn" data-toggle="modal" data-target="#modal-cgv">
					CGV
				</button>
			</div>
			<div class="col copywrite-bande">
				<p>Les photographies présentes sur tout le site www.   sont la propriété de Cindy SERHANE, toute reproduction même partielle des images est interdite sans l’autorisation du photographe.</p>
				<p>
					® CS Photography - June 2020 developed by Helvira Goma
				</p>
			</div>
			
			@extends('app_modals')

	    </footer>

		<script src="assets/js/app.js"></script>

        <!-- A jQuery plugin that adds cross-browser mouse wheel support. (Optional) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>

		<script src="assets/bootstrap/js/bootstrap.js"></script>


    </body>
</html>
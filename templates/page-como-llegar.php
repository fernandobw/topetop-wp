<?php
/*
Template Name: Cómo llegar
*/

get_header();

?>

<style>

.map-topetop{
	border-radius:20px;
}

.iframe-data{

	margin-top:24px;

	.icon-area{

		margin-right:12px;

		i{
			color:rgba(0, 165, 155, 1);
		}
	}
}

</style>

<div class="no-banner"></div>

<section class="page-como-llegar py-40">
	<div class="container">
		
		<div class="section-head text-center mb-5">

			<img src="https://topetop.devberrywhale.com/wp-content/uploads/2026/01/aeropark-logo.png" alt="Logo Aeropark" class="img-fluid mb-4">

			<h1 class="section-title fw-bold text-uppercase">Encuéntranos en Aeropark Punta del Este</h1>
			<p class="text-dark">Aeródromo Aeropark del Este quien opera el Club Ultraligeros del Caribe (avalado por el IDAC)</p>
		</div>

		<iframe class="map-topetop img-lazy w-100" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4175.260155225163!2d-68.47649867143747!3d18.691798017128058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ea8eb005a1501c7%3A0xe53b51853575f19c!2sAeroPark%20Punta%20Del%20Este!5e1!3m2!1ses-419!2sdo!4v1766163558572!5m2!1ses-419!2sdo"></iframe>

		<div class="iframe-data d-flex">
			<div class="icon-area">
				<i class="bi bi-geo-alt-fill"></i>
			</div>
			<div class="caption-area">
				Nuestro aeródromo se encuentra frente al Hard Rock Hotel & Casino Punta Cana, con transporte incluido desde puntos estratégicos de la zona.
			</div>
		</div>


	</div>
</section>

<?php get_template_part('parts/part', 'banner.reserva.giro'); ?>

<?php get_footer(); ?>
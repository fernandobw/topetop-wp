<?php
/*
Template Name: Punta Cana GyroFly
*/

get_header();

get_template_part('parts/header/page', 'header', array('centered' => false));

$galeria = get_field('galeria_experiencia', get_the_ID());

// Preguntas (halarlas usando la página de faqs)
$faqs = get_field( 'topetop-faqs', 9 );

// Asignar ID a las faqs
$render_faqs = [];

$i_faq = 1; foreach( $faqs as $faq ){

	$faq['id'] = $i_faq;

	$render_faqs[] = $faq;

	$i_faq++;
}

?>

<style>
	.pgf-head {

		.pgf-head-wrapper {
			border-radius: 40px;
			overflow: hidden;
		}

		.main-img {
			height: 540px;
			width: 100%;
			max-width: 100%;
			object-fit: cover;
		}

		.expand-image {
			position: absolute;
			color: #fff;
			top: 36px;
			right: 36px;
			font-size: 1.5em;
			background: rgba(255, 255, 255, 0.1);
			backdrop-filter: blur(13.399999618530273px);
			width: 43px;
			height: 43px;
			display: flex;
			align-items: center;
			justify-content: center;
			border-radius: 5px;
			z-index:11;

			&:focus{
				border:0;
				box-shadow:none;
				outline:none;
			}
		}

		.punta-cana-gyrofly {

			position: relative;

			.swiper-slide{


				&::before {
					position: absolute;
					height: 100%;
					width: 100%;
					background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.46) 100%);
					display: block;
					content: '';
					z-index: 10;
				}
			}
		}

		.controls-area {

			position: absolute;
			bottom: 40px;
			left: 43px;

			&>button {

				background: rgba(255, 255, 255, 0.1);
				width: 39px;
				height: 39px;
				z-index: 10;
				color: #fff;
				border: 0;
				border-radius: 5px;
				backdrop-filter: blur(13px);
				font-size: 1.08em;

				&:first-child {
					margin-right: 18px;
				}

				&:last-child {
					margin-left: 5px;
				}

				&.swiper-button-disabled{
					opacity:0.4;
				}
			}
		}

		.punta-cana-gyrofly-thumbs {

			max-width: 300px;

			/*.swiper-slide{
				width: fit-content !important;
			}*/

			.swiper-slide {

				img {
					width: 59px;
					height: 55px;
					border: 2px solid transparent;
					border-radius: 10px;
					transition: all 0.3s ease;
				}

				&.custom-active {

					img {
						border-color: #fff;
					}
				}
			}
		}
	}

	.form-aside{

		position:sticky;
		top:100px;

		.girocoptero{
			margin:0px 0px -97px 100px;
		}
	}

	.form-area{
		padding-top: 35px;
		border:1px solid rgba(236, 236, 236, 1);
		border-radius:39px;

		& > span{
			color:rgba(0, 0, 0, 1);
		}

		.desde{
			font-size:1.1em;
		}

		.precio{
			font-size:2.1em;
		}
	}
</style>

<div class="pgf-head mt-4">
	<div class="container">

		<?php if ($galeria): ?>

			<div class="pgf-head-wrapper position-relative">

				<div class="swiper punta-cana-gyrofly">
					<div class="swiper-wrapper">

						<?php $i = 0; foreach ($galeria as $galeria_item): $i++; ?>

							<div class="swiper-slide" data-o="<?php echo $i; ?>">

								<a href="<?php echo wp_get_attachment_image_url($galeria_item['galeria-imagen']['ID'], 'full', false); ?>" class="expand-image swiper-no-swiping" data-fancybox="galeria-experiencia">
									<i class="bi bi-arrows-angle-expand"></i>
								</a>

								<img
									<?php if( $i == 1 ): ?>
										class="main-img"
										src="<?php echo wp_get_attachment_image_url($galeria_item['galeria-imagen']['ID'], '1296x540', false); ?>"
										alt="<?php echo get_the_title(); ?>"
									<?php else: ?>
										class="main-img img-lazy"
										data-src="<?php echo wp_get_attachment_image_url($galeria_item['galeria-imagen']['ID'], '1296x540', false); ?>"
										alt="<?php echo get_the_title(); ?>"
										loading="lazy"
									<?php endif; ?>
								>
							</div>
						<?php endforeach; ?>

					</div>

				</div>

				<div class="controls-area d-flex align-items-center">

					<button class="prev">
						<i class="bi bi-chevron-left"></i>
					</button>

					<div thumbsSlider="" class="swiper punta-cana-gyrofly-thumbs">
						<div class="swiper-wrapper">

							<?php $i = 0;
							foreach ($galeria as $galeria_item): ?>
								<div class="swiper-slide" data-index="<?php echo $i; ?>">
									<img class="img-lazy" data-src="<?php echo wp_get_attachment_image_url($galeria_item['galeria-imagen']['ID'], 'thumbnail', false); ?>" alt="">
								</div>
							<?php $i++;
							endforeach; ?>

						</div>
					</div>

					<button class="next">
						<i class="bi bi-chevron-right"></i>
					</button>
				</div>

			</div>

		<?php endif; ?>

	</div>
</div>

<div class="py-50 overflow-hidden">
	<div class="container">

		<div class="row">
			<div class="col-lg-7 order-2 order-lg-1">
				
				<div class="the-content">
					
					<p>Este vuelo en girocóptero ofrece una experiencia aérea única sobre el litoral y los ecosistemas más espectaculares de Punta Cana. Pensado para aquellos que buscan una aventura emocionante, este recorrido panorámico revela la belleza de playas mundialmente famosas, a alturas entre 200 y 300 pies. La sensación de libertad al volar sobre este paraíso caribeño, sintiendo el viento en tu rostro, te brindará una experiencia inolvidable: "volando sobre el paraíso y tocando el cielo".</p>


					<h5 class="text-uppercase fw-bold mt-4 mb-3">Qué incluye</h5>
					<ul class="bullets mb-4">
						<li class="position-relative">Disfruta de una experiencia única desde el cielo con nuestros girocopteros.</li>
						<li class="position-relative">Vuelo de 15-20 minutos en autogiro, con sensación de libertad y emoción total.</li>
						<li class="position-relative">Pilotos certificados con experiencia en vuelos turísticos y mantenimiento profesional de las aeronaves.</li>
					</ul>

					<hr>

					<h5 class="text-uppercase fw-bold mt-4 mb-3">Qué no incluye</h5>
					<ul class="bullets mb-4">
						<li class="position-relative">Video y fotografías de la experiencia.</li>
						<li class="position-relative">Merchandising (camisetas, gorras, etc).</li>
					</ul>

					<hr>

					<h5 class="text-uppercase fw-bold mt-4 mb-3">No apto para</h5>
					<ul class="bullets mb-4">
						<li class="position-relative">Mujeres embarazadas.</li>
						<li class="position-relative">Menores de 17 años.</li>
						<li class="position-relative">Personas que pesen más de 104 kg.</li>
					</ul>

					<hr>

					<h5 class="text-uppercase fw-bold mt-4 mb-3">Información importante</h5>
					<ul class="bullets mb-4">
						<li class="position-relative">Mujeres y hombres con cabello recogido.</li>
						<li class="position-relative">El vuelo depende de condiciones meteorológicas; se reprogramará si el clima no lo permite.</li>
						<li class="position-relative">Se recomienda llevar ropa cómoda y gafas de sol para la mejor experiencia.</li>
						<li class="position-relative">Las fotos y videos oficiales pueden adquirirse como servicio adicional.</li>
						<li class="position-relative">Todos los pasajeros deben respetar las instrucciones del piloto para garantizar la seguridad.</li>
					</ul>

				</div>
			</div>

			<div class="col-lg-4 offset-lg-1 order-1 order-lg-2 form-aside mb-5 mb-lg-0">

				<img data-src="https://topetop.com.do/wp-content/uploads/2025/12/rsz_dc2587ca6c2d2699795fd559f1aa8d22643bd926.png" alt="" class="girocoptero img-fluid img-lazy">
				
				<div class="form-area bg-transparent text-dark">
					<span class="desde d-block">Desde</span>
					<span class="precio fw-bold">USD 180</span>
					<span class="por-persona">por persona</span>

					<a href="" class="btn btn-secondary btn-book fw-bold text-uppercase btn-border-radius w-100 mt-4">
						<span class="spinner-border spinner-border-sm color-white invisible" aria-hidden="true"></span> Ver disponibilidad
					</a>

					<div class="orioly-booknow d-none" data="eyJrZXkiOiJORE5pT1dFeE1UUTFObUpoTTJWbFpUZ3daakZsTnpVMlpEbGtOelprWmpnNE16QmhZek5qWlE9PSIsIndpZGdldFJlZiI6IjgzOGYwYjEyLTMyZDItNGNmYS04MDMxLTg0YmQwZmVmNjcyZiJ9"></div>
         			<script type="text/javascript" src="https://book-now.orioly.com/scripts/book.js" async></script>
				</div>
			</div>

		</div>

		<div class="py-50 pb-0">
			
			<div class="section-head text-center w-lg-60 mx-auto mb-5">
				<h3 class="section-title text-uppercase fw-900">Preguntas frecuentes</h3>
			</div>

			<!-- Faqs -->
			<?php if( $render_faqs ): ?>

				<div class="accordion faqs" id="accordionFaqs">

					<?php $i = 0; foreach( $render_faqs as $faq ): $i++; ?>

						<?php if( $i < 7 ): ?>
					
							<div class="accordion-item position-relative border-0 overflow-hidden" data-id="<?php echo $faq['id']; ?>">
								<h2 class="accordion-header">
									<button class="accordion-button border-0 bg-transparent position-relative fw-semibold collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#panelsStayOpen-collapse<?php echo $i; ?>" aria-expanded="false"
										aria-controls="panelsStayOpen-collapse<?php echo $i; ?>">
										<?php echo $faq['faq-titulo']; ?>
									</button>
								</h2>
								<div id="panelsStayOpen-collapse<?php echo $i; ?>" class="accordion-collapse collapse">
									<div class="accordion-body pt-0">

										<?php if( $faq['faq-respuesta'] ): ?>

											<?php echo $faq['faq-respuesta']; ?>

										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php endif; ?>

					<?php endforeach; ?>

				</div>
			<?php endif; ?>

			<div class="pt-5 text-center">
				<a href="<?php echo get_home_url(); ?>/preguntas-frecuentes" class="btn anchor-link btn-primary text-small wide btn-border-radius fw-bold text-uppercase w-lg-fit-content">
					Ver todas las preguntas frecuentes
				</a>
			</div>
		</div>

	</div>
</div>

<script>

document.addEventListener("DOMContentLoaded", () => {

	jQuery('.btn-book').click(function(e){

		e.preventDefault();

		jQuery(this).find('span').removeClass('invisible');

		// Simular click
		jQuery('.orioly-booknow button').trigger('click');

		// Quitar loading
		setTimeout(() => {
			jQuery(this).find('span').addClass('invisible');
		}, "3000");
	})
});

</script>


<?php get_footer(); ?>
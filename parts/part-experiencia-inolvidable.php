<?php

$images = get_field( 'descubre-pc-galeria' );

?>

<div class="part-experiencia-inolvidable py-60">
	<div class="container">
		<div class="section-head text-center w-lg-60 mx-auto">
			<h3 class="section-title text-uppercase fw-900">
				Experiencia inolvidable en la costa este de República Dominicana
			</h3>
			<p>
				¿Cansado de las mismas excursiones turísticas? Haz un sobrevuelo panorámico sobre las playas más
				hermosas de Punta Cana.
			</p>
		</div>

		<?php if( $images ): ?>

			<div class="swipper-container">
				<div class="swiper experiencias">
					<div class="swiper-wrapper">

						<?php foreach( $images as $image ): ?>

							<div class="swiper-slide">
								<a
								class="swiper-no-swiping"
								href="<?php echo wp_get_attachment_image_url( $image['galeria-imagen']['id'], 'full', false ); ?>"
								data-fancybox="galeria-home"
								>
									<img width="359" height="291" class="img-lazy img-fluid" data-src="<?php echo wp_get_attachment_image_url( $image['galeria-imagen']['id'], '600x399', false ); ?>" alt="">
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		<?php endif; ?>
	</div>
</div>
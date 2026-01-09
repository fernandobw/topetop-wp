<?php
/*
Template Name: Contacto
*/

get_header();

get_template_part('parts/header/page', 'header');

?>

<style>
	.contact-ways {

		li {

			&:not(:last-child) {
				margin-bottom: 20px;
			}

			span {
				color: rgba(44, 44, 44, 1);
			}
		}
	}

	.topetop-redes {

		li {
			a {
				color: rgba(0, 92, 170, 1);

				:not(:last-child) & {
					margin-right: 19px;
				}
			}
		}
	}

	.map-topetop {
		width: 100%;
		height: 443px;
		margin: 17px 0px -8px 0px;
	}

	@media screen and (min-width:992px) {

		section.page-contacto {

			.row>.caption-area {
				margin-top: 123px;
			}
		}
	}

	@media screen and (max-width:992px) {

		section.page-contacto {

			.row>.caption-area {
				margin-bottom: 160px;
			}
		}
	}
</style>

<section class="page-contacto py-50">
	<div class="container">

		<div class="row mt-4">
			<div class="col-lg-5 caption-area">

				<div class="the-content mb-3">
					Nuestro equipo está aquí para ayudarte con cualquier consulta, información sobre vuelos, reservas grupales o experiencias personalizadas.
				</div>

				<ul class="contact-ways list-unstyled mt-4">
					<li class="d-flex">
						<div class="icon-area me-3">
							<i class="bi bi-geo-alt-fill"></i>
						</div>
						<div class="caption-area">
							<label class="fw-bold d-block" for="">Dirección</label>
							<span class="fw-light">Aeródromo Aeropark del Este</span>
						</div>
					</li>
					<li class="d-flex mb-3">
						<div class="icon-area me-3">
							<i class="bi bi-telephone-fill"></i>
						</div>
						<div class="caption-area">
							<label class="fw-bold d-block" for="">Teléfono</label>
							<span class="fw-light">+1 (809) 555 - 5555</span>
						</div>
					</li>
				</ul>

				<h6 class="mt-4 color-primary fw-bold mb-3">Redes sociales</h6>

				<ul class="list-unstyled d-flex align-items-center topetop-redes">
					<li><a target="_blank" href="https://www.tiktok.com/@topetopdo"><i class="bi bi-tiktok"></i></a></li>
					<li><a target="_blank" href="https://www.instagram.com/topetopdo/"><i class="bi bi-instagram"></i></a></li>
					<li><a target="_blank" href=""><i class="bi bi-facebook"></i></a></li>
				</ul>

			</div>

			<div class="col-lg-6 offset-lg-1">

				<div class="form-area form-area-contacto form-area-blue position-relative">

					<img src="https://topetop.com.do/wp-content/themes/topetop/assets/images/tmp/girocoptero-sombra.png" alt="Girocóptero" class="girocoptero floating">

					<div class="form-area-head text-center w-lg-90 mx-auto mb-4">
						<h3 class="text-uppercase fw-900">¡No esperes más para volar sobre el paraíso!</h3>
						<p class="fw-light">Completa el formulario o contáctanos directamente para reservar tu vuelo en girocóptero con Topetop</p>
					</div>

					<?php echo do_shortcode('[contact-form-7 id="41d685f" title="Contacto"]'); ?>

					<div class="wpcf7 js" id="wpcf7-f87-o1" lang="es-MX" dir="ltr" data-wpcf7-id="87">
						<div class="screen-reader-response">
							<p role="status" aria-live="polite" aria-atomic="true"></p>
							<ul></ul>
						</div>
						<form action="/contacto/#wpcf7-f87-o1" method="post" class="wpcf7-form init" aria-label="Formulario de contacto" novalidate="novalidate" data-status="init">
							<fieldset class="hidden-fields-container"><input type="hidden" name="_wpcf7" value="87"><input type="hidden" name="_wpcf7_version" value="6.1.4"><input type="hidden" name="_wpcf7_locale" value="es_MX"><input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f87-o1"><input type="hidden" name="_wpcf7_container_post" value="0"><input type="hidden" name="_wpcf7_posted_data_hash" value="">
							</fieldset>
							<div class="form-row two d-flex justify-content-between">
								<div class="form-group">
									<p><label for="contacto-nombre">Nombre</label><br>
										<span class="wpcf7-form-control-wrap" data-name="nombre"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="contacto-nombre" autocomplete="name" aria-required="true" aria-invalid="false" placeholder="Nombre" value="" type="text" name="nombre"></span>
									</p>
								</div>
								<div class="form-group">
									<p><label for="contacto-apellido">Apellido</label><br>
										<span class="wpcf7-form-control-wrap" data-name="apellido"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="contacto-apellido" aria-required="true" aria-invalid="false" placeholder="Apellido" value="" type="text" name="apellido"></span>
									</p>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<p><label for="contacto-correo">Ingresa tu correo electrónico</label><br>
										<span class="wpcf7-form-control-wrap" data-name="email-182"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form-control" id="contacto-correo" autocomplete="email" aria-required="true" aria-invalid="false" placeholder="Ingresa tu correo electrónico" value="" type="email" name="email-182"></span>
									</p>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<p><label for="contacto-telefono">Ingresa tu correo teléfono</label><br>
										<span class="wpcf7-form-control-wrap" data-name="telefono"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="contacto-telefono" aria-required="true" aria-invalid="false" placeholder="Ingresa tu correo teléfono" value="" type="text" name="telefono"></span>
									</p>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<p><label for="contacto-mensaje">Mensaje</label><br>
										<span class="wpcf7-form-control-wrap" data-name="mensaje"><textarea cols="40" rows="10" maxlength="2000" class="wpcf7-form-control wpcf7-textarea form-control" id="contacto-mensaje" aria-invalid="false" placeholder="Escribe aquí tu mensaje" name="mensaje"></textarea></span>
									</p>
								</div>
							</div>
							<p><input class="wpcf7-form-control wpcf7-submit has-spinner btn btn-secondary text-center btn-border-radius w-100 small" type="submit" value="Enviar mensaje"><span class="wpcf7-spinner"></span>
							</p>
							<div class="wpcf7-response-output" aria-hidden="true"></div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>

</section>

<iframe class="map-topetop img-lazy" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4175.260155225163!2d-68.47649867143747!3d18.691798017128058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ea8eb005a1501c7%3A0xe53b51853575f19c!2sAeroPark%20Punta%20Del%20Este!5e1!3m2!1ses-419!2sdo!4v1766163558572!5m2!1ses-419!2sdo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<?php get_footer(); ?>
<?php
/*
Template Name: Private Flight
*/

get_header();

get_template_part('parts/header/page', 'header', array('centered' => false));

?>

<style>
	.form-area-wrapper {

		background: rgb(243, 243, 243);
		border-radius: 30px;

		.form-container {
			width: 55%;
			padding: 20px 0px;
		}

		.image-area {
			width: 45%;

			img {
				height: 100%;
				width: 100%;
				object-fit: cover;
			}
		}
	}

	.blue-circles {

		display: grid;
		column-gap: 25px;
		margin-top: 61px;

		li {

			background: rgba(249, 249, 249, 1);
			border-radius: 20px;
			padding: 28px 20px;

			.icon-area {
				background: linear-gradient(180deg, #005CAB 0%, #005FAA 27%, #0069A8 49%, #007AA4 69%, #00929F 88%, #00A69C 100%);
				width: 70px;
				height: 70px;
				border-radius: 50%;

				svg {
					width: 32px;
					height: auto;
				}
			}

			&:last-child .icon-area svg {
				width: 28px;
			}
		}
	}

	@media screen and (min-width:992px) {
		. .form-area-wrapper {

			.image-area {

				img {
					position: absolute;
				}
			}

		}

		.blue-circles {
			grid-template-columns: repeat(3, 1fr);
		}
	}

	@media screen and (max-width:992px) {

		.form-area-wrapper {

			flex-wrap: wrap;

			.form-container {
				width: 100%;
				order: 2;
			}

			.image-area {
				width: 100%;
				order: 1;

				img {
					object-position: 0px calc(50% + 74px);
					max-height: 300px;
				}
			}

		}

		.blue-circles {
			grid-template-columns: repeat(1, 1fr);
			row-gap: 20px;
		}
	}
</style>

<section class="page-private-flight py-50">
	<div class="container">

		<div class="section-head text-center w-lg-60 mx-auto mb-5">
			<p>Todos nuestros vuelos son operados por pilotos expertos certificados internacionalmente, bajo estrictos protocolos de mantenimiento diario.</p>
		</div>

		<div class="form-area-wrapper d-flex overflow-hidden">

			<div class="form-container">

				<div class="form-area form-area-gray">

					<div class="form-area-head w-lg-90 mx-auto text-center mb-4">
						<h3 class="text-uppercase fw-900 title-blue">Optimice su tiempo y viaje con total libertad</h3>
						<p class="text-bg-gray">Completa tus datos y nuestro equipo de operaciones se encargará de coordinar cada detalle de tu vuelo.</p>
					</div>

					<?php echo do_shortcode('[contact-form-7 id="01f2273" title="Private flight"]'); ?>

					<div class="wpcf7 js" id="wpcf7-f115-o1" lang="es-MX" dir="ltr" data-wpcf7-id="115">
						<div class="screen-reader-response">
							<p role="status" aria-live="polite" aria-atomic="true"></p>
							<ul></ul>
						</div>
						<form action="/vuelos-privados/#wpcf7-f115-o1" method="post" class="wpcf7-form init" aria-label="Formulario de contacto" novalidate="novalidate" data-status="init">
							<fieldset class="hidden-fields-container"><input type="hidden" name="_wpcf7" value="115"><input type="hidden" name="_wpcf7_version" value="6.1.4"><input type="hidden" name="_wpcf7_locale" value="es_MX"><input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f115-o1"><input type="hidden" name="_wpcf7_container_post" value="0"><input type="hidden" name="_wpcf7_posted_data_hash" value="">
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
									<p><label for="contacto-telefono">Ingresa tu correo teléfono</label><br>
										<span class="wpcf7-form-control-wrap" data-name="telefono"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="contacto-telefono" aria-required="true" aria-invalid="false" placeholder="Ingresa tu correo teléfono" value="" type="text" name="telefono"></span>
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
									<p><label for="contacto-telefono">Punto de origen</label><br>
										<span class="wpcf7-form-control-wrap" data-name="punto-origen"><select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-select" id="punto-origen" aria-required="true" aria-invalid="false" name="punto-origen">
												<option value="">Seleccione una opción...</option>
												<option value="Samaná">Samaná</option>
												<option value="Punta Cana">Punta Cana</option>
											</select></span>
									</p>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<p><label for="contacto-telefono">Punto de destino</label><br>
										<span class="wpcf7-form-control-wrap" data-name="punto-destino"><select class="wpcf7-form-control wpcf7-select form-select" id="punto-destino" aria-invalid="false" name="punto-destino">
												<option value="">Seleccione una opción...</option>
												<option value="Samaná">Samaná</option>
												<option value="Punta Cana">Punta Cana</option>
											</select></span>
									</p>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<p><label for="contacto-mensaje">Fecha</label><br>
										<span class="wpcf7-form-control-wrap" data-name="fecha"><input class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date form-control" aria-required="true" aria-invalid="false" value="" type="date" name="fecha"></span>
									</p>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<p><label for="contacto-mensaje">Motivo del viaje</label><br>
										<span class="wpcf7-form-control-wrap" data-name="motivo"><select class="wpcf7-form-control wpcf7-select form-select" aria-invalid="false" name="motivo">
												<option value="">Seleccione una opción</option>
												<option value="Ocio">Ocio</option>
												<option value="Negocio">Negocio</option>
												<option value="Otro motivo">Otro motivo</option>
											</select></span>
									</p>
								</div>
							</div>
							<p><input class="wpcf7-form-control wpcf7-submit has-spinner btn btn-secondary text-center btn-border-radius w-100 small" type="submit" value="Solicitar disponibilidad y tarifas"><span class="wpcf7-spinner"></span>
							</p>
							<div class="wpcf7-response-output" aria-hidden="true"></div>
						</form>
					</div>
				</div>

			</div>

			<div class="image-area position-relative">
				<img class="img-fluid img-lazy" data-src="https://topetop.devberrywhale.com/wp-content/uploads/2026/01/rsz_d25a560f46ffc727919a46cc2bff97ba3c5ebe29.jpg" loading="lazy" alt="Imagen formulario">
			</div>

		</div>

		<ul class="list-unstyled blue-circles w-lg-90 mx-auto">
			<li class="text-center">
				<div class="icon-area d-flex align-items-center justify-content-center mx-auto mb-3">
					<svg fill=none height=41 viewBox="0 0 37 41" width=37 xmlns=http://www.w3.org/2000/svg>
						<path d="M1.5 17.2819C1.5 11.2856 1.5 8.2875 2.20875 7.27875C2.91563 6.27187 5.73375 5.30625 11.3719 3.37687L12.4463 3.00938C15.3844 2.0025 16.8525 1.5 18.375 1.5C19.8975 1.5 21.3656 2.0025 24.3037 3.00938L25.3781 3.37687C31.0162 5.30625 33.8344 6.27187 34.5412 7.27875C35.25 8.2875 35.25 11.2875 35.25 17.2819V20.2331C35.25 30.8044 27.3019 35.9363 22.3144 38.1131C20.9625 38.7038 20.2875 39 18.375 39C16.4625 39 15.7875 38.7038 14.4356 38.1131C9.44813 35.9344 1.5 30.8063 1.5 20.2331V17.2819Z" stroke=white stroke-width=3 />
						<path d="M1.5 18.375L18.375 12.75L35.25 18.375M18.375 1.5V38.0625" stroke=white stroke-width=3 />
					</svg>
				</div>
				<div class="caption-area">
					Operaciones 100% seguras bajo normativas de aviación civil de la República Dominicana.
				</div>
			</li>
			<li class="text-center">
				<div class="icon-area d-flex align-items-center justify-content-center mx-auto mb-3">
					<svg fill=none height=37 viewBox="0 0 37 37" width=37 xmlns=http://www.w3.org/2000/svg>
						<path d="M18.375 35.25C27.6948 35.25 35.25 27.6948 35.25 18.375C35.25 9.05519 27.6948 1.5 18.375 1.5C9.05519 1.5 1.5 9.05519 1.5 18.375C1.5 27.6948 9.05519 35.25 18.375 35.25Z" stroke=white stroke-linecap=round stroke-linejoin=round stroke-width=3 />
						<path d="M18.375 9V16.0575C18.375 16.7541 18.569 17.4368 18.9353 18.0293C19.3016 18.6218 19.8257 19.1005 20.4487 19.4119L25.875 22.125" stroke=white stroke-linecap=round stroke-linejoin=round stroke-width=3 />
					</svg>
				</div>
				<div class="caption-area">
					Ahorre hasta un 70% de tiempo en comparación con el transporte terrestre.
				</div>
			</li>
			<li class="text-center">
				<div class="icon-area d-flex align-items-center justify-content-center mx-auto mb-3">
					<svg fill=none height=37 viewBox="0 0 30 37" width=30 xmlns=http://www.w3.org/2000/svg>
						<path d="M7.125 14.625V9C7.125 4.85625 10.4812 1.5 14.625 1.5C18.7688 1.5 22.125 4.85625 22.125 9V14.625M14.625 24C15.1223 24 15.5992 23.8025 15.9508 23.4508C16.3025 23.0992 16.5 22.6223 16.5 22.125C16.5 21.6277 16.3025 21.1508 15.9508 20.7992C15.5992 20.4475 15.1223 20.25 14.625 20.25C14.1277 20.25 13.6508 20.4475 13.2992 20.7992C12.9475 21.1508 12.75 21.6277 12.75 22.125C12.75 22.6223 12.9475 23.0992 13.2992 23.4508C13.6508 23.8025 14.1277 24 14.625 24ZM14.625 24V29.625M4.5 14.625H24.75C26.4 14.625 27.75 15.975 27.75 17.625V30.75C27.75 33.225 25.725 35.25 23.25 35.25H6C3.525 35.25 1.5 33.225 1.5 30.75V17.625C1.5 15.975 2.85 14.625 4.5 14.625Z" stroke=white stroke-linecap=round stroke-linejoin=round stroke-miterlimit=10 stroke-width=3 />
					</svg>
				</div>
				<div class="caption-area">
					Sus datos están protegidos y su solicitud es privada.
				</div>
			</li>
		</ul>

	</div>
</section>

<script>
	document.addEventListener("DOMContentLoaded", () => {

		const originSelect = document.querySelector("#punto-origen");
		const destinationSelect = document.querySelector("#punto-destino");

		function disableMatchingOption(sourceSelect, targetSelect) {

			const selectedValue = sourceSelect.value;

			// Habilitar todas las opciones antes de aplicar el nuevo disabled
			targetSelect.querySelectorAll("option").forEach(option => {
				option.disabled = false;
			});

			// Deshabilitar la opción que coincida con el valor seleccionado
			const optionToDisable = targetSelect.querySelector(`option[value="${selectedValue}"]`);
			if (optionToDisable) {
				optionToDisable.disabled = true;
			}
		}

		// Origen → Destino
		originSelect.addEventListener("change", () => {
			disableMatchingOption(originSelect, destinationSelect);
		});

		// Destino → Origen (inverso)
		destinationSelect.addEventListener("change", () => {
			disableMatchingOption(destinationSelect, originSelect);
		});

	});
</script>

<?php get_footer(); ?>
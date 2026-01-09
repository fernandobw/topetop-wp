<?php

/*
Template Name: Descubre Punta Cana
*/

get_header();

get_template_part('parts/header/page', 'header');

$images = get_field( 'descubre-pc-galeria' );

?>

<style>

@media screen and (min-width:992px){

	.parent {

	    display: grid;
	    grid-template-columns: repeat(6, 1fr);
	    grid-template-rows: repeat(5, 1fr);
	    gap: 20px;
	    margin-bottom:20px;
	    min-height:600px;

	    img{
	    	height:100%;
	    	width:100%;
	    	object-fit:cover;
	    	object-position: center;
	    	border-radius:30px;
	    }
	}
	    
	.div1 {
	    grid-column: span 2 / span 2;
	    grid-row: span 3 / span 3;
	}

	.div2 {
	    grid-column: span 2 / span 2;
	    grid-row: span 3 / span 3;
	    grid-column-start: 5;
	    grid-row-start: 1;
	}

	.div3 {
	    grid-column: span 2 / span 2;
	    grid-row: span 2 / span 2;
	    grid-column-start: 3;
	    grid-row-start: 1;
	}

	.div4 {
	    grid-column: span 2 / span 2;
	    grid-row: span 3 / span 3;
	    grid-column-start: 3;
	    grid-row-start: 3;
	}

	.div5 {
	    grid-column: span 2 / span 2;
	    grid-row: span 2 / span 2;
	    grid-row-start: 4;
	}

	.div6 {
	    grid-column: span 2 / span 2;
	    grid-row: span 2 / span 2;
	    grid-column-start: 5;
	    grid-row-start: 4;
	}
}

@media screen and (max-width:992px){

	.parent{

		img{
			margin-bottom:20px;
			border-radius:30px;
		}
	}
}



</style>

<section class="page-descubre-punta-cana py-50">
	<div class="container">

		<div class="section-head text-center mb-5">
			<p class="w-lg-70 mx-auto">Revive los momentos de bienvenida y recepción en el aeródromo, la entrega de souvenirs conmemorativos y los inolvidables paisajes de arrecifes de coral, manglares y ecosistemas protegidos.</p>
		</div>

		<?php

		// cantidad de divs por parent
		$per_parent = 6;

		// dividimos el array en bloques
		$chunks = array_chunk($images, $per_parent);

		foreach ($chunks as $group) :
		?>
			<div class="parent">
				<?php foreach ( $group as $index => $img ) : ?>
					<div class="div<?php echo $index + 1; ?>">
						<a
						href="<?php echo wp_get_attachment_image_url( $img['galeria-imagen']['id'], 'full', false ); ?>"
						data-fancybox="descubre-punta-cana"
						>
							<img class="img-lazy img-fluid" data-src="<?php echo wp_get_attachment_image_url( $img['galeria-imagen']['id'], '600x399', false ); ?>" alt="">
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endforeach; ?>

	</div>
</section>

<?php get_footer(); ?>
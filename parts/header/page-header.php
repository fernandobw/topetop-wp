<?php

$has_page_bg = has_post_thumbnail();

$manual_excerpt = get_post_field('post_excerpt', get_the_ID());

?>

<style>

.page-header{

	padding-top: <?php echo ( is_page('punta-cana-gyrofly') ) ? '113px' : '133px'; ?>;

	h1{
		color:rgba(0, 92, 170, 1);
	}

	&.has-header-bg{

		padding:205px 0px 115px 0px;
		color:#fff;
		background:url(<?php echo ( $has_page_bg ) ? get_the_post_thumbnail_url( get_the_ID(), 'full' ) : ''; ?>);
		background-size: cover;
        background-position: center;
        border-bottom-right-radius:131px;

		&::before{
			top:0;
			bottom:0;
			content:'';
			display:block;
			position:absolute;
			height:100%;
			width:100%;
			background:rgba(0, 0, 0, 0.58);
		}
		
		h1{
			color:#fff;
		}
	}

	.share-button{
		border: 1px solid rgba(44, 44, 44, 1);
		border-radius: 33px;
		padding: 6px 21px;
		color:rgba(44, 44, 44, 1);
		background:transparent;

		&:hover, &:focus{
			background:rgba(44, 44, 44, 1);
			color:#fff;
		}
	}
}


.faq-search{

    width: fit-content;
    margin: 31px auto 0 auto;
    background: rgba(248, 248, 248, 1);
    padding: 12px 33px;
    border: 1px solid rgba(230, 230, 230, 1);
    border-radius: 37px;

    input{
    	outline:none;
    	min-width: 349px;

    	&::placeholder{
    		color:rgba(44, 44, 44, 1);
    	}
    }

    .buttons{

    	button{

    		background:transparent;
		    width: 24px;
		    height: 24px;
		    border-radius: 50%;
		    display: flex;
		    align-items: center;
		    justify-content: center;

		    &:hover{
		    	background: #f3f0f0;
		    }

		    i{
		    	position: relative;
		    	top: 1px;
		    }
    	}
    }
}
</style>


<div class="page-header <?php echo ( $has_page_bg ) ? 'has-header-bg position-relative overflow-hidden' : ( isset( $args['centered'] ) && !$args['centered'] ? '' : 'text-center' ); ?>">
	<div class="container position-relative <?php echo ( is_page( 'punta-cana-gyrofly' ) ) ? 'mb-5' : ''; ?>">

		<?php if( is_page( 'punta-cana-gyrofly' ) ): ?>

			<div class="row">
				<div class="col-lg-8">
					<?php if( get_field('page-supra-titulo') ): ?>
						<div class="fw-light mb-3">
							<?php echo get_field('page-supra-titulo'); ?>
						</div>
					<?php endif; ?>

					<h1 class="page-title text-uppercase fw-normal mb-3">
						<?php echo ( get_field( 'page-titulo' ) ) ? get_field( 'page-titulo' ) : get_the_title(); ?>
					</h1>

					<div class="fw-light">
						<?php if ( ! empty( get_post_field('post_excerpt', get_the_ID()) ) ): ?>
						    <?php echo esc_html( get_post_field('post_excerpt', get_the_ID()) ); ?>
						<?php endif; ?>
					</div>
				</div>

				<div class="col-lg-4 d-flex align-items-end justify-content-end">

					<button title="Compartir" class="share-button text-uppercase" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasShare" aria-controls="offcanvasShare">
						<i class="bi bi-box-arrow-up-right me-1"></i> Compartir
					</button>
				</div>
			</div>

		<?php else: ?>

			<div class="w-lg-60 <?php echo ( $has_page_bg ) ? '' : ( isset( $args['centered'] ) && !$args['centered'] ? '' : 'mx-auto' ); ?>">

				<?php if( get_field('page-supra-titulo') ): ?>
					<div class="fw-light mb-3">
						<?php echo get_field('page-supra-titulo'); ?>
					</div>
				<?php endif; ?>

				<h1 class="page-title text-uppercase fw-normal mb-3">
					<?php echo ( get_field( 'page-titulo' ) ) ? get_field( 'page-titulo' ) : get_the_title(); ?>
				</h1>

				<div class="fw-light">
					<?php if ( ! empty( get_post_field('post_excerpt', get_the_ID()) ) ): ?>
					    <?php echo esc_html( get_post_field('post_excerpt', get_the_ID()) ); ?>
					<?php endif; ?>
				</div>

			</div>

		<?php endif; ?>

		<?php if( is_page('preguntas-frecuentes') ): ?>

			<div class="faq-search d-flex align-items-center">
				<input class="outline-none bg-transparent border-0" id="faq-search-field" type="text" placeholder="Buscar pregunta...">
				<div class="buttons">
					<button title="Buscar" type="button" class="search border-0 "><i class="bi bi-search"></i></button>
					<button title="Resetear" type="button" class="reset border-0 d-none"><i class="bi bi-x-lg"></i></button>
				</div>
			</div>

		<?php endif; ?>

	</div>
</div>
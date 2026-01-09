<?php

get_header();

get_template_part('parts/header/page', 'header');

?>

<section class="single-page py-50">
	<div class="container">
		
		<div class="the-content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
				endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
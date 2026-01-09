

	<footer>
		<div class="container">

			<?php get_template_part('parts/footer/widgets', 'area'); ?>

			<?php get_template_part('parts/footer/info', 'area'); ?>
			
		</div>
		<div class="under-footer text-center">
			<p class="mb-0 fw-light">© 2025 Topetop. Todos los derechos reservados.</p>
		</div>
	</footer>

	<?php wp_footer(); ?>
	
	<?php if( IS_DEV ): ?>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
    <?php else: ?>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/dist/main.js" defer></script>
    <?php endif; ?>

</body>
</html>
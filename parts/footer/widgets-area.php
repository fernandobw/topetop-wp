
<div class="widgets-area d-flex py-40 pb-4 justify-content-between">

	<?php if ( is_active_sidebar( 'widget-1' ) ) : ?>
		<div class="widget-item logo-area">
			<?php dynamic_sidebar( 'widget-1' ); ?>
		</div>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'widget-2' ) ) : ?>
		<div class="widget-item">
			<?php dynamic_sidebar( 'widget-2' ); ?>
		</div>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'widget-3' ) ) : ?>
		<div class="widget-item">
			<?php dynamic_sidebar( 'widget-3' ); ?>
		</div>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'widget-4' ) ) : ?>
		<div class="widget-item">
			<?php dynamic_sidebar( 'widget-4' ); ?>
		</div>
	<?php endif; ?>
</div>
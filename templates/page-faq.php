<?php

/*
Template Name: Faq
*/

get_header();

$faqs = get_field( 'topetop-faqs' );

// Asignar ID a las faqs
$render_faqs = [];

$i_faq = 1; foreach( $faqs as $faq ){

	$faq['id'] = $i_faq;

	$render_faqs[] = $faq;

	$i_faq++;
}

get_template_part('parts/header/page', 'header', array( 'faqs'=> $render_faqs ) );

?>

<section class="page-faqs py-50">
	<div class="container">

		<?php if( $render_faqs ): ?>

			<div class="accordion faqs" id="accordionFaqs">

				<?php $i = 0; foreach( $render_faqs as $faq ): $i++; ?>
				
					<div class="accordion-item position-relative border-0 overflow-hidden" data-id="<?php echo $faq['id']; ?>">
						<h2 class="accordion-header">
							<button class="accordion-button border-0 bg-transparent position-relative fw-semibold <?php echo ( $i == 1 ) ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse"
								data-bs-target="#panelsStayOpen-collapse<?php echo $i; ?>" aria-expanded="<?php echo ( $i == 1 ) ? 'true' : 'false'; ?>"
								aria-controls="panelsStayOpen-collapse<?php echo $i; ?>">
								<?php echo $faq['faq-titulo']; ?>
							</button>
						</h2>
						<div id="panelsStayOpen-collapse<?php echo $i; ?>" class="accordion-collapse collapse <?php echo ( $i == 1 ) ? 'show' : ''; ?>">
							<div class="accordion-body pt-0">

								<?php if( $faq['faq-respuesta'] ): ?>

									<?php echo $faq['faq-respuesta']; ?>
								<?php else: ?>

									<strong>This is the first item’s accordion body.</strong> It is shown by default, until the collapse
									plugin adds
									the appropriate classes that we use to style each element. These classes control the overall appearance,
									as well
									as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding
									our
									default variables. It’s also worth noting that just about any HTML can go within the
									<code>.accordion-body</code>, though the transition does limit overflow.

								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>

			</div>
		<?php endif; ?>


	</div>
</section>

<script>

document.addEventListener("DOMContentLoaded", function() {
	
    const $input  = jQuery('#faq-search-field');
    const $reset  = jQuery('.faq-search .buttons .reset');
    const $search = jQuery('.faq-search .buttons .search');
    const $items  = jQuery('#accordionFaqs .accordion-item');

    // FAQs (se cargan una sola vez)
    const faqs = <?php echo json_encode(
        $render_faqs,
        JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE
    ); ?>;

    const cleanText = function (text = '') {
        return text
            .toLowerCase()
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '');
    };

    $input.on('input', function () {
        const value = jQuery(this).val().trim();

        toggleButtons(value !== '');
        faqFilter(value);
    });

    $reset.on('click', function () {
        $input.val('');
        toggleButtons(false);
        $items.removeClass('d-none');
        resetOpenedItems();
    });

    function toggleButtons(isSearching) {
        $reset.toggleClass('d-none', !isSearching);
        $search.toggleClass('d-none', isSearching);
    }

    function faqFilter(term) {

        if (!term) {
            $items.removeClass('d-none');
            return;
        }

        const cleanTerm = cleanText(term);

        const filteredIDs = faqs
            .filter(function (faq) {
                return (
                    cleanText(faq['faq-titulo']).includes(cleanTerm) ||
                    cleanText(faq['faq-respuesta']).includes(cleanTerm)
                );
            })
            .map(function (faq) {
                return faq.id;
            });

        $items.addClass('d-none');

        filteredIDs.forEach(function (id) {
            $items
                .filter('[data-id="' + id + '"]')
                .removeClass('d-none');
        });
    }

    function resetOpenedItems() {
        $items.each(function () {

            const id = jQuery(this).data('id');

            if (id !== 1) {
                jQuery(this)
                    .find('button')
                    .addClass('collapsed')
                    .attr('aria-expanded', 'false');

                jQuery(this)
                    .find('.accordion-collapse')
                    .removeClass('show');
            }
        });
    }

});


</script>

<?php get_footer(); ?>
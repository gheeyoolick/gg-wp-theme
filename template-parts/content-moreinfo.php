<?php
/**
 * The template part for the more info modal form
 */

$button = get_field( 'info_button', 'option' );
$formId = get_field( 'info_form', 'option' );

?>

<!-- Modal -->
<div class="modal fade" id="moreInfoModal" tabindex="-1" role="dialog" aria-labelledby="moreInfoModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="moreInfoModalTitle"><?php echo $button; ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"><i class="far fa-times"></i></span>
				</button>
			</div>
			<div class="modal-body">
				<?php
				// local test - contact form 7
				echo do_shortcode( '[contact-form-7 id="587" title="Contact form 1"]' );
				
				// live site - gravity forms
				//gravity_form( $formId, false, true, false, '', true );
				?>
			</div>
		</div>
	</div>
</div>

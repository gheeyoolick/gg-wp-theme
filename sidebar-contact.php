<?php
/**
 * Template for contact sidebar
 */

$phone = get_field( 'contact_phone' );
$email = get_field( 'contact_email' );
$contact_details = get_field( 'contact_details' );

if ($phone || $email) {
?>
<div class="sidebar">
	<h4>Contact Us</h4>
	<?php if( $phone ) {
		echo '<p class="callout icon-phone">' . $phone . '</p>';
	}
	if( $email ) {
		echo '<p class="callout icon-email"><a href="mailto:' . $email . '">Email Us</a></p>';
	}
	if( $contact_details ) {
		echo wpautop( $contact_details );
	} ?>
</div>
<?php } ?>

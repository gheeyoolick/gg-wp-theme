<?php
/*
The theme footer file.
*/
?>

	<!-- End Page Content -->
	</main>
	<footer id="footer-site" class="footer-site">
		<section class="footer-nav">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-xl-2 order-md-2 footer-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/GulickGroup-logo.svg" alt="Gulick Group" class="img-fluid"></a>
					</div>
					<div class="col-md order-md-1 footer-utility">
						<?php wp_nav_menu( array( 
							'theme_location' => 'footer',
							'menu_class'     => '',
							'container'      => false,
							'depth'          => 1)
						); ?>
					</div>
					<div class="col-md order-md-3 footer-social">
						<?php
						
						if( have_rows('social_set', 'option') ):
						
							$social_label = get_field('social_label', 'option');
							echo $social_label;
						
							while ( have_rows('social_set', 'option') ) : the_row();
						
							$social_link = get_sub_field('social_link', 'option');
							$social_icon = get_sub_field('social_icon', 'option');
						
							echo '<a href="' . $social_link['url'] . '" target="' . $social_link['target'] . '" class="social-link"><i class="'. $social_icon.'"></i></a>';

							endwhile;
						endif;
						
						?>
					</div>
				</div>
			</div>
		</section>
		<section class="footer-company">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<?php
						$address = get_field( 'co_address', 'option' );
						$phone = get_field( 'co_phone', 'option' );
						
						if ( $address ) {
							echo $address;
						}
						if ( $phone ) {
							echo '<span class="phone"><a href="tel:'.$phone.'">'.$phone.'</a></span>';
						}
						
						?>
					</div>
					<div class="col-md-6 copyright">
						&copy; Copyright <?php echo date('Y'); ?> gulick group. all rights reserved. <span class="eho">equal housing opportunity</span>
					</div>
				</div>
			</div>
		</section>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>
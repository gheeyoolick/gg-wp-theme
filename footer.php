	<!-- End Page Content -->
	</main>
	<footer class="footer-site">
		<div class="container">
			<div class="row">
				<nav class="footer-links">
					 <div class="text">
						 
						 <?php wp_nav_menu( array( 
							'theme_location' => 'footer',
							'menu_class'     => '',
							'container'      => false,
							'depth'          => 1)
						); ?>
						<p class="address">11790 Sunrise Valley Drive, Suite 225<br>Reston, Virginia 20191<br>703.674.0330</p>
						<p class="copyright">&copy; Copyright <?php echo date('Y'); ?> Gulick Group. All Rights Reserved. <span class="eho">Equal Housing Opportunity</span></p>
					
						<div class="social-links">
							<p>Find Us On:</p>
							<?php wp_nav_menu( array( 
								'theme_location' => 'social',
								'menu_class'     => '',
								'container'      => false,
								'link_before'    => '<span class="text">',
								'link_after'     => '</span>',
								'depth'          => 1)
							); ?>
						</div>
						 
					</div>
				</nav>
				<div class="footer-script">
					<img src="<?php echo get_template_directory_uri(); ?>/images/gulick.png" alt="Gulick" class="script-img">
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>
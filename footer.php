	<!-- End Page Content -->
	</main>
	<footer class="footer-site">
		<div class="container">
			<div class="row">
				<nav class="footer-links">
					 <?php wp_nav_menu( array( 
						'theme_location' => 'footer',
						'menu_class'     => '',
						'container'      => false,
						'depth'          => 1)
					); ?>
					<p class="copyright">&copy; Copyright <?php echo date('Y'); ?> Gulick Group. All Rights Reserved. <span class="eho">Equal Housing Opportunity</span></p>
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
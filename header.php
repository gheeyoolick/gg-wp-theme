<?php
/*
The theme header file.
*/
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="<?php bloginfo('pingback_url'); ?>" rel="pingback">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicons/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicons/safari-pinned-tab.svg" color="#83716b">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/favicon.ico">
	<meta name="msapplication-TileColor" content="#83716b">
	<meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>	
</head>
<body <?php body_class(); ?>>
	<a href="#main-content" class="sr-only sr-only-focusable skip-link">Skip to main content</a>
	<?php
	$button = get_field( 'info_button', 'option' );
	if ( $button ) { get_template_part( 'template-parts/content', 'moreinfo' ); }
	?>
	<header id="header-site" class="header-site">
			
		<nav class="navbar navbar-expand-lg navbar-light" role="navigation">
			<div class="container">

				<?php // Nav button for mobile ?>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarGlobal" aria-controls="navbarGlobal" aria-expanded="false" aria-label="Toggle navigation">
					<i aria-hidden class="far fa-bars" title="Toggle navigation?"></i>
				</button>
				
				<?php // Logo ?>
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Gulick Group" aria-label="Gulick Group Logo"></a>
				
				<?php // Search button for mobile ?>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
					<i aria-hidden class="far fa-search" title="Toggle search?"></i>
				</button>

				<div class="collapse navbar-collapse" id="navbarGlobal">
					
					<?php
					// More Information button
					if ( $button ) { ?>
					<button type="button" id="btnMoreInfo" class="btn btn-success" data-toggle="modal" data-target="#moreInfoModal">
						<i class="fas fa-arrow-circle-right"></i><?php echo $button; ?>
					</button>
					<?php	
					}
					
					// Social Links
					if( have_rows('social_set', 'option') ):
					
						echo '<ul class="navbar-nav navbar-nav-social">';

						$social_label = get_field('social_label', 'option');
						echo '<span class="navbar-text">' . $social_label . '</span>';

						while ( have_rows('social_set', 'option') ) : the_row();

						$social_link = get_sub_field('social_link', 'option');
						$social_icon = get_sub_field('social_icon', 'option');

						echo '<li class="nav-item"><a href="' . $social_link['url'] . '" target="' . $social_link['target'] . '" class="nav-link"><i class="'. $social_icon.'"></i></a></li>';

						endwhile;
					
						echo '</ul>';
					
					endif;
					
					// Global links
					wp_nav_menu( array( 	
						'theme_location'  => 'primary',
						'depth'	          => 4,
						'container'       => false,
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
						'walker' 		  => new wp_bootstrap_navwalker(),
					));
					
					// Search for desktop
					?>
					<ul class="navbar-nav navbar-nav-search">
						<li class="nav-item dropdown nav-item-search"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-label="Search"><i aria-hidden class="far fa-search" title="Search"></i></a>
							<?php get_template_part( 'searchform', 'header' ); ?>
						</li>
					</ul>
					
				</div>
				
				<?php // Search for mobile ?>
				<div class="collapse navbar-collapse" id="navbarSearch">
					<?php get_template_part( 'searchform' ); ?>
				</div>

			</div>
		</nav>
		
	</header>
	<header id="header-site-print">
		<div class="container">
			<img src="<?php echo get_template_directory_uri(); ?>/images/GulickGroup-logo.svg" alt="Gulick Group" class="logo">
		</div>
	</header>
	<!-- Begin Page Content -->
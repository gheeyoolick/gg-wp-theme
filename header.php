<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
<link href="<?php bloginfo('pingback_url'); ?>" rel="pingback">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-194x194.png" sizes="194x194">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicons/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicons/manifest.json">
<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicons/safari-pinned-tab.svg" color="#483637">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/favicons/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">
<?php wp_head(); ?>	
</head>
<body <?php body_class(); ?>>
	<header id="header-site" class="header-site">
		<div class="header-secondary">
			<div class="container">
				<div class="row">
					<nav class="header-section nav-social">
						<?php wp_nav_menu( array( 
							'theme_location' => 'social',
							'menu_class'     => '',
							'container'      => false,
							'link_before'    => '<span class="text">',
							'link_after'     => '</span>',
							'depth'          => 1)
						); ?>
					</nav>
					<article class="header-section nav-news">
						<span class="remove">Latest </span>News:
						<?php $menuParameters = array(
							'theme_location'  => 'news',
							'container'       => false,
							'echo'            => false,
							'items_wrap'      => '%3$s',
							'depth'           => 0,
						); ?>
						<?php echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); ?>
					</article>
					<nav class="header-section nav-utility">
						<?php wp_nav_menu( array( 
							'theme_location' => 'utility',
							'menu_class'     => '',
							'container'      => false,
							'link_before'    => '<span class="text">',
							'link_after'     => '</span>',
							'depth'          => 1)
						); ?>
					</nav>
				</div>
			</div>
		</div>
		<div class="header-primary">
			<div class="container">
				<div class="row">
					<nav class="navbar navbar-inverse" role="navigation">
						<div class="container navbar-container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/gulickgroup-logo.png" alt="<?php bloginfo('name');?>" class="logo"></a>
							</div>
							<div class="collapse navbar-collapse" id="navbar-collapse">
								<div class="navbar-wrapper">
									<?php wp_nav_menu( array( 
										'theme_location' => 'primary',
										'menu_class'     => 'nav navbar-nav',
										'container'      => false,
										'depth'          => 3,
										'fallback_cb'    => 'wp_bootstrap_navwalker::fallback',
										'walker'         => new wp_bootstrap_navwalker())
									); ?>
									<ul class="nav navbar-nav">
										<li class="nav-search"><a href="#" class="icon-search" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
											<?php get_template_part( 'searchform', 'header' ); ?>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Begin Page Content -->
<?php
/**
 * Homepage
 */

get_header();

$bg_image = get_field( 'homepage_background_image' ); ?>

<div class="hero-homepage"
<?php if( $bg_image ) { ?>
	style="background: url(<?php echo $bg_image; ?>) no-repeat; background-size: cover;"
<?php } ?>
>
	<div class="content-homepage">
		<div class="container">
			<div class="row">
				<?php $tagline = get_field( 'tagline' ); ?>
				<?php if( $tagline ) { ?>
					<h1><?php echo $tagline; ?></h1>
				<?php } ?>
			</div>
			<div class="row">
				
				<?php $features = get_field( 'homepage_feature' );
				if( $features ) {
				
					foreach($features as $feature) {
					
					if ( isset( $feature['homepage_feature_title'] ) )
						$title = ( $feature['homepage_feature_title'] );
					if ( isset( $feature['homepage_feature_text'] ) )
						$desc = ( $feature['homepage_feature_text'] );
					if ( isset( $feature['homepage_feature_image'] ) )
						$img = wp_get_attachment_image_url( $feature['homepage_feature_image'], 'full', false );
						$img_srcset = wp_get_attachment_image_srcset( $feature['homepage_feature_image'], 'full', false );
						$img_alt = get_post_meta( $feature['homepage_feature_image'],'_wp_attachment_image_alt', true );
					if ( isset( $feature['homepage_feature_link'] ) )
						$link = ( $feature['homepage_feature_link'] );
					?>
				
					<article class="module-wrapper">
						<figure class="module">
							<img src="<?php echo $img; ?>"
							 srcset="<?php echo $img_srcset; ?>"
							 sizes="(max-width: 786px) calc(100vw - 60px), 33.33vw" alt="<?php echo $img_alt; ?>">
							<figcaption class="module-text">
								<h3><a href="<?php echo $link; ?>"><?php echo $title; ?></a></h3>
								<div class="module-details">
									<p><?php echo $desc; ?></p>
									<p class="more"><a href="<?php echo $link; ?>">Learn More</a></p>
								</div>
							</figcaption>
						</figure>
					</article>
				
				<?php }
				
				} ?>
				
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>


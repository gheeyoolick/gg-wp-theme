<?php
/**
 * Homepage
 */

get_header();

get_template_part( 'template-parts/content', 'header' );

$news = get_field( 'latest_news' );
$promo_text = get_field( 'promo_text' );
if ($news) { ?>
<div class="latest-news">
	<div class="container">
		<div class="row">
			<div class="col col-md-auto">
				<span>latest news:</span>
				<?php echo '<a href="' . $news['url'] . '" target="' . $news['target'] . '">' . $news['title'] . '</a>'; ?>
			</div>
			<div class="col col-btn <?php if( $promo_text ) { echo 'col-btn-left'; } ?>">
				<a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="btn btn-primary">see all news</a>
			</div>
		</div>
	</div>
</div>
<?php	
}
?>

<main id="main-content" class="main-homepage">
	
	<section class="section-intro-homepage">
		<div class="container">
			<div class="row justify-content-center">
				<?php
				
				$tagline = get_field( 'intro_tagline' );
				$details = get_field( 'intro_text' );
				
				if( $tagline ) {
					echo '<div class="col-12"><h1>' . $tagline . '</h1></div>';
				}
				if( $details ) {
					echo '<div class="col-lg-9">' . $details . '</div>';
				}
				
				?>
			</div>
		</div>
	</section>
	
	<?php
	
	// Get content collections
	get_template_part( 'template-parts/content', 'collections' );
	
	// Get featured section
	get_template_part( 'template-parts/content', 'featured-section' );
	
	?>
	
</main>

<?php get_footer(); ?>


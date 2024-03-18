<?php
/**
 * The template for case studies
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				$services = get_field('services');
				$client = get_field('client');
				$site_link = get_field('site_link');
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				$image_3 = get_field('image_3');
				<article class="case-study">
					<aside class="case-study-sidebar">
						<h2><?php the_title(); ?></h2>
						<h4><?php echo $services; ?></h4>
						<h4><span>Client: <?php echo $client; ?></span></h4>
						<p><?php the_content(); ?></p>
						<p class="read-more-link"><a href="<?php echo $link; ?>">Live Site</a></p>
					</aside>
					<div class="case-study-images">
						<img src="<?php echo $image_1; ?>" alt="" width="300" height="221" class="alignnone size-medium wp-image-47339" />
						<img src="<?php echo $image_2; ?>" alt="" width="223" height="300" class="alignnone size-medium wp-image-47340" />
						<img src="<?php echo $image_3; ?>" alt="" width="150" height="300" class="alignnone size-medium wp-image-47341" />
					</div>
				</article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
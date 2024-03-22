<?php
/**
 * The template for displaying the case study archive
 *
 * It will overwrite the default archive template.
 * The name of the template file pulls in the case study posts.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); 
                $services = get_field("services");
				$image_1 = get_field("image_1");
				$size = "full";
            ?>
                <article class="case-study">
					<aside class="case-study-sidebar">
						<h2><?php the_title(); ?></h2>
						<h4><?php echo $services; ?></h4>

						<?php the_exerpt(); ?>

						<p><a href="<?php the_permalink(); ?>">Live Site</a></p>
					</aside>

					<div class="case-study-images">
						<?php if ($image_1) { 
							echo wp_get_attachment_image( $image_1, $size );
						} ?>
					</div>
				</article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
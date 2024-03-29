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

 /* TO DO:
 * fix margin for archive images but keep other pages spaced
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="case-archive main-content" role="main">
			<?php while ( have_posts() ) : the_post(); 
                $services = get_field("services");
				$image_1 = get_field("image_1");
				$size = "full";
            ?>
                <article class="case-study-archive">
					<aside class="case-study-sidebar">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<h3><?php echo $services; ?></h3>

						<?php the_excerpt(); ?>

						<p><strong><a class="read-more-link" href="<?php the_permalink(); ?>">View Project ></a></strong></p>
					</aside>

					<div class="case-study-images archive-images">
                        <a href="<?php the_permalink(); ?>">
                            <?php if ($image_1) { 
                                echo wp_get_attachment_image( $image_1, $size );
                            } ?>
                        </a>
					</div>
				</article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
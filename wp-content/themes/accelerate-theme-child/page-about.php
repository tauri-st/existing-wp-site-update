<?php /* Template Name: About Page */ ?>

<?php
/**
 * The template for displaying the About page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
                $icon = get_field("service_icon");
				$size = "medium"; ?>
                <h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
                <article class="services-content">
                    <div class="service-single">
                        <figure class="service-icon">
                            <img src="<?php echo $icon; ?>" />
                        </figure>
                    </div>
                </article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
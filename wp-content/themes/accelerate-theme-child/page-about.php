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
                $service_title = get_field("services");
                $service_description = get_field("service_description");
				$icon_1 = get_field("icon_1");
				$icon_2 = get_field("icon_2");
				$icon_3 = get_field("icon_3");
                $icon_4 = get_field("icon_4");
                $icon_5 = get_field("icon_5");
				$size = "medium"; ?>
                <h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
                <article class="services-content">
                    <img src="<?php echo $icon_1; ?>" />
                    <div class="service-text">
                        <h3><?php echo $service_title; ?></h3>
                        <p><?php echo $service_description; ?></p>
                    </div>
                </article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
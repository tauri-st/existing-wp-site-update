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
                $service_title_1 = get_field("service_title_1");
                $service_description_1 = get_field("service_description_1");
                $service_title_2 = get_field("service_title_2");
                $service_description_2 = get_field("service_description_2");
                $service_title_3 = get_field("service_title_3");
                $service_description_3 = get_field("service_description_3");
                $service_title_4 = get_field("service_title_4");
                $service_description_4 = get_field("service_description_4");
				$icon_1 = get_field("icon_1");
				$icon_2 = get_field("icon_2");
				$icon_3 = get_field("icon_3");
                $icon_4 = get_field("icon_4");
				$size = "medium"; ?>
                <h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
                <article class="services-content">
                    <div class="service-single">
                        <figure class="service-icon">
                            <img src="<?php echo $icon_1; ?>" />
                        </figure>
                        <div class="service-text">
                            <h3><?php echo $service_title_1; ?></h3>
                            <p><?php echo $service_description_1; ?></p>
                        </div>
                    </div>
                    <div class="service-single reverse-wrap">
                        <figure class="service-icon">
                            <img src="<?php echo $icon_2; ?>" />
                        </figure>
                        <div class="service-text">
                            <h3><?php echo $service_title_2; ?></h3>
                            <p><?php echo $service_description_2; ?></p>
                        </div>
                    </div>
                    <div class="service-single">
                        <figure class="service-icon">
                            <img src="<?php echo $icon_3; ?>" />
                        </figure>
                        <div class="service-text">
                            <h3><?php echo $service_title_3; ?></h3>
                            <p><?php echo $service_description_3; ?></p>
                        </div>
                    </div>
                    <div class="service-single reverse wrap">
                        <figure class="service-icon">
                            <img src="<?php echo $icon_4; ?>" />
                        </figure>
                        <div class="service-text">
                            <h3><?php echo $service_title_4; ?></h3>
                            <p><?php echo $service_description_4; ?></p>
                        </div>
                    </div>
                </article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
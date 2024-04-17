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
			<?php
                $icon_1 = get_field("service_1_icon");
                $service_1_headline = get_field("service_1_headline");
                $service_1_description = get_field("service_1_description");
				$size = "medium"; ?>
                <h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
                <section class="services-content">
                    <article class="service-single">
                        <figure class="service-icon">
                            <?php if($icon_1){
                                echo wp_get_attachment_image( $icon_1, $size );
                            }?>
                        </figure>
                        <h3><?php echo $service_1_headline; ?></h3>
                        <p><?php echo $service_1_description; ?></p>
                    </article>
                </section>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
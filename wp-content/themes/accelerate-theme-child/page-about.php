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
                $icon_1 = get_field("service_1_icon");
                $service_1_headline = get_field("service_1_headline");
                $service_1_description = get_field("service_1_description");
                $icon_2 = get_field("service_2_icon");
                $service_2_headline = get_field("service_2_headline");
                $service_2_description = get_field("service_2_description");
                $icon_3 = get_field("service_3_icon");
                $service_3_headline = get_field("service_3_headline");
                $service_3_description = get_field("service_3_description");
                $icon_4 = get_field("service_4_icon");
                $service_4_headline = get_field("service_4_headline");
                $service_4_description = get_field("service_4_description");
				$size = "medium"; ?>
                <div class="services-intro-container">
                    <section class="services-intro">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                    </section>
                </div>
                <section class="services-content">
                    <article class="service-single">
                        <figure class="service-icon">
                            <?php if($icon_1){
                                echo wp_get_attachment_image( $icon_1, $size );
                            }?>
                        </figure>
                        <div class="service-info">
                            <h3><?php echo $service_1_headline; ?></h3>
                            <p><?php echo $service_1_description; ?></p>
                        </div>
                    </article>
                    <article class="service-single reverse-wrap">
                        <figure class="service-icon">
                            <?php if($icon_2){
                                echo wp_get_attachment_image( $icon_2, $size );
                            }?>
                        </figure>
                        <div class="service-info">
                            <h3><?php echo $service_2_headline; ?></h3>
                            <p><?php echo $service_2_description; ?></p>
                        </div>
                    </article>
                    <article class="service-single">
                        <figure class="service-icon">
                            <?php if($icon_3){
                                echo wp_get_attachment_image( $icon_3, $size );
                            }?>
                        </figure>
                        <div class="service-info">
                            <h3><?php echo $service_3_headline; ?></h3>
                            <p><?php echo $service_3_description; ?></p>
                        </div>
                    </article>
                    <article class="service-single reverse-wrap">
                        <figure class="service-icon">
                            <?php if($icon_4){
                                echo wp_get_attachment_image( $icon_4, $size );
                            }?>
                        </figure>
                        <div class="service-info">
                            <h3><?php echo $service_4_headline; ?></h3>
                            <p><?php echo $service_4_description; ?></p>
                        </div>
                    </article>
                </section>
                <section class="services-cta">
                    <!-- <div class="services-cta-container"> -->
                        <h3>Interested in working with us?</h3>
                        <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
                    <!-- </div> -->
                </section>
            <?php endwhile; ?> 
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
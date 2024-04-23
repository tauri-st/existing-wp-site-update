<?php
/**
 * The template for a 404 Site Not Found error
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

    <div id="primary" class="site-content">
		<div class="main-content" role="main">
           <div class="404-error-container">
                <div class="error-image">
                    <figure>
                    <?php
                        // query an image attachment by its filename
                        $attachment = get_posts(
                            array(
                                'post_type'      => 'attachment',
                                'post_mime_type' => 'image',
                                'name'           => '404-map', // Replace with your image filename without extension
                                'posts_per_page' => 1,
                            )
                        );

                        if ( $attachment ) {
                            $attachment_id = $attachment[0]->ID;
                            echo wp_get_attachment_image( $attachment_id, 'full' );
                        }
                    ?>

                    </figure>
                </div>
                <div class="error-message">
                    <h1>Whoops, Took a Wrong Turn...</h1>
                    <p>Sorry, this page no longer exists, never existed, or has been moved.
                        We feel like complete jerks for totally misleading you.</p>
                    <p>Feel free to take a look around our blog or some our featured work.</p>
                </div>
            </div> 
        </div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
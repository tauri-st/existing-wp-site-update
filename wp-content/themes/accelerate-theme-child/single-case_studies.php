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
				<article class="case-study">
					<aside class="case-study-sidebar">
						<h2>MailChimp Campaign</h2>
						<h4>Content Strategy, Design and Development</h4>
						<h4><span>Client: MailChimp</span></h4>
						<p>This is a project I made for this company. Here is the early stage startup that I helped design and do front-end and back-end dev for</p>
						<p class="read-more-link"><a href="#">Visit Live Site</a></p>
					</aside>
					<div class="case-study-images">
						<img src="http://localhost/accelerate/wp-content/uploads/2024/03/mc-thumbnail-1-300x221.png" alt="" width="300" height="221" class="alignnone size-medium wp-image-47339" />
						<img src="http://localhost/accelerate/wp-content/uploads/2024/03/mc-thumbnail-2-223x300.png" alt="" width="223" height="300" class="alignnone size-medium wp-image-47340" />
						<img src="http://localhost/accelerate/wp-content/uploads/2024/03/mc-thumbnail-3-150x300.png" alt="" width="150" height="300" class="alignnone size-medium wp-image-47341" />
					</div>
				</article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
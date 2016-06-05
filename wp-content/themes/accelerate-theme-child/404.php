<?php
/**
 * The template for displaying 404 page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<!-- Stuff not constrained in boundaries, goes to page edge -->

	<div id="primary" class="site-content">
<!-- stuff that is constrained in middle boundaries; normal width -->


<!-- Show default map 404 design if noscript -->
<noscript>
	<section class="notfound-container">
		<div class="site-content">
			<section class="notfound-content">
				<div class="notfound-content-container">
					<figure class="fig-notfound"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/map404.png" alt="map" /></figure>
					<div class="txt-notfound">
						<h3>Whoops, Took a Wrong Turn…</h3>
						<p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.</p>
						<p>Feel free to take a look around our <a href="blog">blog</a> or some of our featured <a href="case-studies">work</a>.</p>
					</div>
				</div>
	  	</section>
		</div><!-- .site-content -->
	</section>
</noscript>


<!-- Matrix Rain effect, jQuery plugin -->
<div id="matrix" class="matrix-container" style="color:white;"> <!-- style color text white so it is not visible on white bg if noscript -->
  <span>404 Not Found</span>
  <span>00110100 00110000 00110100</span>
  <span>404 Not Found 404 Not Found 404 Not Found</span>
  <span>00110100 00110000 00110100</span>
  <span>404 Not Found 404 Not Found</span>
  <span>00110100 00110000 00110100</span>
  <span>404 Not Found</span>
  <span>00110100 00110000 00110100</span>
</div>
<!-- END Matrix Rain effect, jQuery plugin -->


	</div><!-- #primary -->

<?php get_footer(); ?>

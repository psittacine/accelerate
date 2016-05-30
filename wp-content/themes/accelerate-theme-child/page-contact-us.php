<?php
/**
 * The template for displaying Contact Us page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<!-- If form submitted, show success message & hide header/body text -->
				<?php if ($_SERVER['REQUEST_METHOD'] == 'POST'){ ?>

					<!-- Placeholder for form title/body text after submit -->
					<div class="contact-form-title-body-submitted">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div>

					<h2 class="contact-form-success-msg-header">Thanks for Your Message!</h2>
					<p class="contact-form-success-msg-body">We'll get back to you shortly.</p>

				<?php } else { ?>

					<!-- Else form not submitted, show header/body text -->
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>

				<?php } ?>

		  <?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>

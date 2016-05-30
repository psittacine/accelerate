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

			<?php
				$confirmation_message_title = get_field('confirmation_message_title');
				$confirmation_message_body = get_field('confirmation_message_body');
			?>

			<?php while ( have_posts() ) : the_post(); ?>

				<!-- If form submitted, show success message & hide header/body text -->
				<?php if ($_SERVER['REQUEST_METHOD'] == 'POST'){ ?>

					<!-- Placeholder for hidden form title/body text after submit -->
					<div class="contact-form-title-body-submitted">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div>

					<!-- Confirmation message shown after form is submitted -->
					<h2 class="contact-form-success-msg-header"><?php echo $confirmation_message_title; ?></h2>
					<p class="contact-form-success-msg-body"><?php echo $confirmation_message_body; ?></p>

				<?php } else { ?>

					<!-- Else if form not submitted, show header/body text & form fields -->
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>

				<?php } ?>

		  <?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>

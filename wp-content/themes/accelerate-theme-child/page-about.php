<?php
/**
 * The template for displaying About page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="about-page">
	<div class="site-content">
		<div class='homepage-hero'>
			<section class="about-hero-text">
				<h3><span class="hero-body-first-word"><?php $hero_body_first_word = the_field('hero_body_first_word'); ?></span> <?php $hero_body_remainder_text = the_field('hero_body_remainder_text'); ?></h3>
			</section>
		</div><!-- homepage-hero -->
	</div><!-- .site-content -->
</section><!-- .about-page -->

<section class="our-services">
	<div class="site-content">
		<div class="our-services-text">
			<h5 class="our-services-title"><?php $intro_title = the_field('intro_title'); ?></h5>
			<p><?php $intro_body_text = the_field('intro_body_text'); ?></p>
		</div>
	</div><!-- .site-content -->
</section>

<section class="services-container">
	<div class="site-content">

		<section class="services-content">
			<div class="services-content-container">
				<figure class="fig-odd"><?php $item_1_image = get_field("item_1_image"); $size = "full"; ?><?php echo wp_get_attachment_image($item_1_image, $size); ?></figure>
				<div class="txt-odd">
					<h3><?php $item_1_title = the_field('item_1_title'); ?></h3>
					<p><?php $item_1_body = the_field('item_1_body'); ?></p>
				</div>
			</div>
  	</section>

		<section class="services-content">
			<div class="services-content-container">
				<figure class="fig-even"><?php $item_2_image = get_field("item_2_image"); $size = "full"; ?><?php echo wp_get_attachment_image($item_2_image, $size); ?></figure>
				<div class="txt-even">
					<h3><?php $item_2_title = the_field('item_2_title'); ?></h3>
					<p><?php $item_2_body = the_field('item_2_body'); ?></p>
				</div>
			</div>
  	</section>

		<section class="services-content">
			<div class="services-content-container">
				<figure class="fig-odd"><?php $item_3_image = get_field("item_3_image"); $size = "full"; ?><?php echo wp_get_attachment_image($item_3_image, $size); ?></figure>
				<div class="txt-odd">
					<h3><?php $item_3_title = the_field('item_3_title'); ?></h3>
					<p><?php $item_3_body = the_field('item_3_body'); ?></p>
				</div>
			</div>
  	</section>

		<section class="services-content">
			<div class="services-content-container">
				<figure class="fig-even"><?php $item_4_image = get_field("item_4_image"); $size = "full"; ?><?php echo wp_get_attachment_image($item_4_image, $size); ?></figure>
				<div class="txt-even">
					<h3><?php $item_4_title = the_field('item_4_title'); ?></h3>
					<p><?php $item_4_body = the_field('item_4_body'); ?></p>
				</div>
			</div>
  	</section>

	</div><!-- .site-content -->
</section>

<!-- Contact Us button section -->
<div class="site-content divider-line"> </div>

<section class="contact-us-container">
	<div class="site-content">
		<div class="contact-us-content">
			<p>Interested in working with us?<a class="about-button" href="contact-us">Contact Us</a></p>
		</div>
	</div><!-- .site-content -->
</section>

<?php get_footer(); ?>

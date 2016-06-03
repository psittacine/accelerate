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

<div class="matrix-container">
<!-- Matrix Rain effect, jQuery plugin -->
<div id="matrix">

  <span>404 Not Found</span>

  <span>00110100 00110000 00110100</span>

  <span>404 Not Found 404 Not Found 404 Not Found</span>

  <span>00110100 00110000 00110100</span>

  <span>404 Not Found 404 Not Found</span>

  <span>00110100 00110000 00110100</span>

  <span>404 Not Found</span>

  <span>00110100 00110000 00110100</span>

</div>

<script>
jQuery( document ).ready( function( $ ) {
    // $() will work as an alias for jQuery() inside of this function

		$.fn.Matrix = function (options) {
		    var container = $(this);
		    container.addClass("matrix");
		    container.children().each(function () {
		        $(this).css("-webkit-animation-duration", Math.floor((Math.random() * 20) + 3) + "s").css("animation-duration", Math.floor((Math.random() * 20) + 3) + "s").css("-ms-animation-duration", Math.floor((Math.random() * 20) + 3) + "s").css("-moz-animation-duration", Math.floor((Math.random() * 20) + 3) + "s").css("left", Math.floor((Math.random() * parseInt($(container).width())) + 10)).css("font-size", Math.floor((Math.random() * 20) + 10) + "px");
		    });
		};

		jQuery(function ($) {
		    $("#matrix").Matrix();
		});

} );
</script>
<!-- END Matrix Rain effect, jQuery plugin -->
</div>


	</div><!-- #primary -->

<?php get_footer(); ?>

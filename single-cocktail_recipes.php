<?php
/**
 * Template Name: Cocktail Recipes Template
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package The_Hungry_Hapa
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-recipe', get_post_type() );
			// get_template_part( 'template-parts/content-recipe-gallery', get_post_type() );


		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer(); ?>
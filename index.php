<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Hungry_Hapa
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
 

			<?php get_template_part('template-parts/content-home-bg'); ?>  

			<?php get_template_part('template-parts/content-latest-posts'); ?>

			<?php get_template_part('template-parts/content-home-about'); ?>

		

			<?php get_template_part('template-parts/content-latest-cocktail'); ?> 

			<?php get_template_part('template-parts/content-latest-reviews'); ?>

			<?php get_template_part('template-parts/content-latest-blog'); ?>

			<?php get_template_part('template-parts/subscribe-form-black'); ?>

			<?php get_template_part('template-parts/instafeed'); ?>


		</main>
	</div>	
	
<?php
get_footer();


// test for git
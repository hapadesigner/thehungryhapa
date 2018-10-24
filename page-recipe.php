<?php
/**
 * Template Name: Recipes Main
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Hungry_Hapa
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<div class="recipes-bg">
			<div class="recipes-hero-box center tc">
				<h1 class="karla text-headline ttu mb0 tracked opensans text-dark">RECIPES</h1>
				<p class="opensans text-dark mt0 f4-l f5 karla"><span></span>A Collection of Recipes from My Kitchen<span></span></p>
			</div>
		</div>	


		<div class="recipe-tabs">

			<ul class="tab-links">
				<li class="active"><a class="tab-control" href="#tab1">All</a></li>
				<li><a class="tab-control" href="#tab2">Cocktails</a></li>
				<li><a class="tab-control" href="#tab3">Desserts</a></li>
				<li><a class="tab-control" href="#tab4">Snacks/Apps</a></li>
			</ul>

			<div class="tab-content">
				<div id="tab1" class="tab-panel active">
					<?php get_template_part('template-parts/main-recipes-all'); ?>
				</div>

				<div id="tab2" class="tab-panel">
					<?php get_template_part('template-parts/main-recipes-cocktail'); ?>
				</div>

				<div id="tab3" class="tab-panel">
					<?php get_template_part('template-parts/main-recipes-dessert'); ?>
				</div>

				<div id="tab4" class="tab-panel">
					<?php get_template_part('template-parts/main-recipes-apps'); ?>
				</div>
			</div>

		</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();

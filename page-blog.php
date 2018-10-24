<?php
/**
 * Template Name: Blog Main
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

		<div class="reviews-bg">
			<div class="reviews-hero-box tc">
				<h1 class="karla text-headline text-dark ttu mb0 tracked opensans">Blog</h1>
				<p class="opensans text-dark mt0 f4-l f5 karla"><span></span>Everything Else<span></span></p>
			</div>
		</div>	
			
	<div class="main-recipes-container flex flex-wrap">
        <?php 

            $args = array(
                'post_type' => 'blog_posts',
                'posts_per_page' => '9',
                'orderby' => 'date'
                );              

            $the_query = new WP_Query( $args );
            if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <?php $background = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small' );?>

			
                <a class="card db link" href="<?php the_permalink();?>">
                    
                <div class="card-image shadow-6 cover bg-center flex items-center justify-center" style="background: url('<?php echo $background[0]; ?>') no-repeat;"></div>
                    

                    <div class="card-text">
                        <p class="card-category-titles ttu">
                            <?php the_field('recipe_category'); ?> 
                        </p>

                        <p class="main-posts-titles tracked ttu">
                            <?php the_title(); ?>
						</p>
						
						<p class="post-card-intro karla">
                            <?php the_field('post_intro'); ?>
                        </p>

                        <button class="card-button ttu opensans"><span>See Post &rarr;</span></button>
                    </div>

                </a>

           
                           
                
        <?php endwhile; endif; ?>

    </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();

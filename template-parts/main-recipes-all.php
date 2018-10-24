<div class="main-recipes-container">
        <?php 

            $args = array(
                'post_type' => array('cocktail_recipes', 'dessert_recipes', 'snack_recipes'),
                'posts_per_page' => '9',
                'orderby' => 'rand'
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
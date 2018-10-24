<section class="recent-posts-container pv1">

<div class="latest-container pv2-l pv2">
    <div class="tc">
        <h2 class="home-section-header karla mv4">Recent Posts</h2>
    </div>

    <div class="flex flex-wrap justify-between">
        <?php 

            $args = array(
                'post_type' => array('cocktail_recipes', 'reviews', 'dessert_recipes'),
                'posts_per_page' => '3',
                'orderby' => 'rand'
                );              

            $the_query = new WP_Query( $args );
            if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <?php $background = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small' );?>

                 <a class="circle db link center" href="<?php the_permalink();?>">
                    
                        <div class="circle-image shadow-3 cover bg-center flex items-center justify-center" style="background: url('<?php echo $background[0]; ?>') no-repeat;"></div>
                    

                    <div class="circle-text mv3 ph2 tc">
                        <p class="circle-category-titles ttu">
                            <?php the_field('recipe_category'); ?> 
                        </p>

                        <p class="recent-posts-titles tracked ttu">
                            <?php the_title(); ?>
                        </p>

                        <button class="circle-button ttu karla"><span>See Post &rarr;</span></button>
                    </div>




                </a>
                           
                
        <?php endwhile; endif; ?>

    </div>
</div>

</section>








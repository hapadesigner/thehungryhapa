<h2 class="ph4 tc ttu">More Recipes</h2>
<div class="more-cocktails-container flex flex-wrap center mw8">
        <?php 

            $args = array(
                'post_type' => 'cocktail_recipes',
                'posts_per_page' => '3',
                'post_not_in' => array($post->ID),
                'orderby' => 'rand'
                );              

            $the_query = new WP_Query( $args );
            if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <?php $background = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small' );?>

                 <a class="db link center w-70 w-25-ns mb4 mh1" href="<?php the_permalink();?>">
                    <div class="aspect-ratio aspect-ratio--1x1">
                        <div class="aspect-ratio--object cover bg-center flex items-center justify-center br-100 shadow-1" style="background: url('<?php echo $background[0]; ?>') no-repeat;"></div>
                    </div>

                    <p class="recent-cocktails-titles black mv3 ttu tracked ph4-l ph3 tc lh-title">
                        <?php the_title(); ?>
                    </p>

                </a>
                           
                
        <?php endwhile; endif; ?>

</div>
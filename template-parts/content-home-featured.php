<section class="mv4-l mv3">

<div class="featured-container shadow-2 flex flex-wrap flex-wrap-reverse-l center mt5 br2">
        <?php 

            $args = array(
                'post_type' => 'cocktail_recipe',
                'posts_per_page' => '1',
                'post_not_in' => array($post->ID),
                'orderby' => 'post_date'
                );              

            $the_query = new WP_Query( $args );
            if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <?php $background = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small' );?>
                    
                    <div class="featured-bg w-60-ns w-100 cover bg-center br2" style="background: url('<?php echo $background[0]; ?>') no-repeat;"></div>

                    <div class="w-40-ns w-100 pv4-l pv3">
                        <div class="black mv3 ttu tracked f5-l f6 ph2 tc lh-title-l">
                            <h5>Featured Post</h5>
                            <span class=""></span>
                            <?php the_title(); ?>

                        </div>
                    </div>

                    
                
        <?php endwhile; endif; ?>

    </div>
</div>

</section>
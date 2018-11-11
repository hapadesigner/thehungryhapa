
<section class="latest-reviews-container">

<div class="latest-reviews pv5-l pv3">
    <div class="home-section-title flex mv1 justify-between items-center">
        <h2 class="latest-header-lg karla mv4">Latest Reviews</h2>
        <button class="custom-btn btn-2 db link ttu"><span>See More &rarr;</span>
    </div>

    <div class="flex flex-wrap justify-between">
        <?php 

            $args = array(
                'post_type' => 'reviews',
                'posts_per_page' => '3',
                'orderby' => 'post_date'
                );              

            $the_query = new WP_Query( $args );
            if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <?php $background = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small' );?>

                 <a class="latest-item-width db link mb4" href="<?php the_permalink();?>">
                    <div class="latest-items-container shadow-7 aspect-ratio aspect-ratio--16x9">
                        <div class="latest-item-bg br1 aspect-ratio--object cover bg-center flex items-center justify-center" style="background: url('<?php echo $background[0]; ?>') no-repeat;"></div>
                    </div>

                    <p class="circle-category-titles ph2 tc ttu">
                        <?php the_field('recipe_category'); ?> 
                    </p>

                    <p class="recent-posts-titles mv3 ttu tracked tc lh-title-l">
                        <?php the_title(); ?>
                    </p>

                </a>
                           
                
        <?php endwhile; endif; ?>

    </div>
</div>

</section>
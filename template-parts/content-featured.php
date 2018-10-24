<section class="featured ph6 bg-yellow">


	<?php if( have_rows('featured_content') ): 

	while( have_rows('featured_content') ): the_row(); ?>


        <div class="flex flex-wrap">

                    <div class="featured-left w-40 bg-green">
                        <?php the_sub_field('featured_title'); ?>
                        <?php the_sub_field('featured_text'); ?>
                    </div>

                    
                    <div class="featured-right w-60 bg-blue">
                        <?php the_post_thumbnail('thumbnail'); ?> 
                    </div>    

            <?php endwhile; endif; ?>

        </div>

</section>





 

    
   





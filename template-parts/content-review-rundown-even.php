<div class="items-container center">

    <h1>
        <?php the_sub_field('review_rundown_title'); ?>
    </h1>

     <?php

        // check if the repeater field has rows of data
        if( have_rows('review_rundown_item') ):

            // loop through the rows of data
            while ( have_rows('review_rundown_item') ) : the_row(); ?>

            <div class="items-container-content karla center flex flex-wrap justify-between items-center">

                <div class="item-text">
                    <h2>
                        <?php the_sub_field('review_rundown_title'); ?> 
                    </h2>

                    <p>
                        <?php the_sub_field('review_rundown_description'); ?>        
                    </p>
                </div>  

                <div class="item-image">
                    <img class="br3" src="<?php the_sub_field('review_rundown_image'); ?>" alt="" />
                </div>

            </div>
            <?php
    endwhile; endif; ?>

</div>








                
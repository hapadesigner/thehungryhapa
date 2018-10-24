<div class="review-hero-container mb0">

    <div class="review-hero review-hero-image bg-center cover" style="<?php if(get_field('hero_image') ): ?>
    background-image: url(<?php the_field('hero_image'); ?>);
    <?php endif; ?>">

    </div>

    <div class="review-hero-content flex items-center justify-center relative">

        <div class="tc">

            <h5 class="opensans category-heading f4-ns f6 tracked">
                <?php the_field('recipe_category'); ?>  

                <span class="line mt2-l mt1"></span> 
            </h5>

            <?php if( get_field('date') ): ?>

                <p class="review-date karla ttu">
                    <?php
                         echo date("F Y", strtotime(get_field('date')));
                    ?>
                </p>

            <?php endif; ?>


            <?php if( get_field('review_title') ): ?>
                <h1 class="review-title ttu mt0 mb3"><?php the_field('review_title'); ?></h1>
            <?php endif; ?>


            <?php if( get_field('review_intro') ): ?>
                <p class="review-intro opensans i ph2-l ph1 pv2"><?php the_field('review_intro'); ?></p>
            <?php endif; ?>
        </div>


    </div>

</div>
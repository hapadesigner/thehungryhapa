<section class="recipe-hero">
    <div class="recipe-hero-content tc flex-column items-center w-75-l w-100 center">
        <h5 class="opensans cocktail-heading f4-ns f6 ttu mt0 mb4 tracked w-100-l pt5">
            <?php the_field('recipe_category'); ?>  

            <span class="line-recipe mt1"></span>
        </h5>

        <h2 class="montserrat center b mb3">
            <?php the_field('recipe_title'); ?> 
        </h2>

        <p class="recipe-intro-text opensans mt1 ph2 center">
            <?php the_field('recipe_intro'); ?> 
        </p>
    </div>
</section>


<div class="yield-container mv5-l mv4 center justify-around">

    <div class="tc">
        <p class="yield-categories ttu b">Yield:</p>
        <?php if( get_field('yield') ): ?>
            <p class="yield-text"><?php the_field('yield'); ?></p>
        <?php endif; ?>
    </div>

    <div class="tc">
        <p class="yield-categories ttu b">Active Time:</p>
        <?php if( get_field('active_time') ): ?>
            <p class="yield-text"><?php the_field('active_time'); ?></p>
        <?php endif; ?>
    </div>

    <div class="tc">
        <p class="yield-categories ttu b">Total Time:</p>
        <?php if( get_field('total_time') ): ?>
            <p class="yield-text"><?php the_field('total_time'); ?></p>
        <?php endif; ?>
    </div>

</div>





<?php get_template_part('template-parts/recipe-hero'); ?> 


<?php get_template_part('template-parts/content-recipe-about'); ?>











<?php if (have_rows('content')) : while (have_rows('content')) : the_row();

    if(get_row_layout() == 'text_block') : ?>
        <?php get_template_part('template-parts/content-recipe-text'); ?>

    <?php elseif(get_row_layout() == 'gallery') : ?>
        <?php get_template_part('template-parts/content-recipe-gallery'); ?>                

        <?php endif;
endwhile; endif; ?>








<?php get_template_part('template-parts/content-recipe-directions'); ?> 






<div class="message-box tc mh2 pa2 mv4 center">
    <div class="message-box-content">
        <h3 class="mb1">Did you try this recipe?</h3>
        <p class="mt1 i">Please let me know what you think!</p>
        <p><a>Leave a comment</a> below or share a photo on <a>instagram</a> with the hashtag #thehungryhapa.</p>
    </div>
</div>


<div class="mv5">
    <?php get_template_part('template-parts/content-cocktail-more'); ?> 
</div>





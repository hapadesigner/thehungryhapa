<div class="blog-hero-container center tc">

    <h5 class="opensans category-heading f4-ns f6 ttu mt0 tracked w-100-l">
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

  
    <?php if( get_field('blog_title') ): ?>
        <h1 class="blog-title ttu ma0"><?php the_field('blog_title'); ?></h1>
    <?php endif; ?>

    
    <?php if( get_field('blog_subhead') ): ?>
        <h4 class="blog-subhead karla"><?php the_field('blog_subhead'); ?></h4>
    <?php endif; ?>
   




</div>








<div class="blog-hero-image">

    <?php 

    $image = get_field('blog_hero_image');

    if( !empty($image) ): ?>
        
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />   

        

    <?php endif; ?>



</div>
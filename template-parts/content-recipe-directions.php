<section class="recipe-directions-section">

    

    <h2 class="recipe-directions-title montserrat center tc">
        <?php the_title(); ?>
    </h2>
    <p class="center tc mt0">(Makes: <?php the_field('yield'); ?>)</p>

    <?php get_template_part('template-parts/social-share'); ?>
    
<div class="recipe-directions-container flex flex-wrap justify-between center">


    <div class="lists-ingredients-container">

        <div class="lists-ingredients">
            <h2>Ingredients</h2>

            <?php if(have_rows('ingredients') ): 

                while(have_rows('ingredients') ) : the_row();


                    if(have_rows('ingredient_lists') ) :
                        
                        while(have_rows('ingredient_lists') ) : the_row();

                            if(get_sub_field('ingredient_list_title')) : ?>
                                <h4 class="">
                                    <?php the_sub_field('ingredient_list_title'); ?>
                                </h4>

                            <?php endif; ?>

                            <?php if(get_sub_field('ingredient_list')) : ?>
                                
                                    <?php the_sub_field('ingredient_list'); ?>
                               
                            <?php endif; ?>

                        <?php endwhile; ?>

                    <?php endif ?>
                
                <?php endwhile; ?>

            <?php endif; ?>
        </div>

    </div>


    <div class="lists-steps-container">

    <div class="lists-steps">
      
        <h2>Directions</h2>
        
        <?php if(have_rows('recipe_steps') ): 

            while(have_rows('recipe_steps') ) : the_row();


                if(have_rows('recipe_step') ) :
                    
                    while(have_rows('recipe_step') ) : the_row();

                        if(get_sub_field('step_title')) : ?>
                            <h4 class="">
                                <?php the_sub_field('step_title'); ?>
                            </h4>

                        <?php endif; ?>


                    
                    <div class="recipe-direction-step">
                        <?php if(get_sub_field('step_number')) : ?>

                        <div class="recipe-directions-circle">
                            <span class="mb0 karla step-number">
                                <?php the_sub_field('step_number'); ?>
                            </span>
                        </div>
                        
                            
            
                        <?php endif; ?>

                        <?php if(get_sub_field('step_text')) : ?>
                            
                                <?php the_sub_field('step_text'); ?>
                            
                        <?php endif; ?>
                    </div>


                    <?php endwhile; ?>

                <?php endif ?>

            <?php endwhile; ?>

        <?php endif; ?>


    </div>

</div>

<div class="tc mt5 center">
        <button class="stp-btn"><a class="opensans b ttu link" href="">Step-By-Step</a></button>
</div>

</section>













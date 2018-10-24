<div class="recipe-hero-image">

  <?php 
  
    $image = get_field('recipe_hero');

    if( !empty($image) ): ?>
        
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />   

        

  <?php endif; ?>



</div>












<?php get_template_part('template-parts/content-review-hero'); ?>



<?php if (have_rows('flexible_content')) : while (have_rows('flexible_content')) : the_row();

    if(get_row_layout() == 'text_block') : ?>

        <?php get_template_part('template-parts/content-review-text'); ?>

    <?php elseif(get_row_layout() == 'gallery') : ?>

        <?php get_template_part('template-parts/content-review-gallery'); ?>                

    <?php elseif(get_row_layout() == 'photo_then_text') : ?>

        <?php get_template_part('template-parts/photo-then-text'); ?>

    <?php elseif(get_row_layout() == 'text_then_photo') : ?>

        <?php get_template_part('template-parts/text-then-photo'); ?>

    <?php elseif(get_row_layout() == 'section_title_left') : ?>

        <?php get_template_part('template-parts/section-title-left'); ?>

    <?php endif;

    
    
endwhile; endif; ?>





 


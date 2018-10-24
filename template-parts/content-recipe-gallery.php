

<div class="container flex flex-wrap center ph4-l ph3">

    <?php $images = get_sub_field('gallery'); ?>

        <?php foreach($images as $image) : ?>
                        
            <!-- picks up image class names for different widths -->
            <div class="recipe-image ph3 mb4 center <?php the_field('image_width', $image['id']); ?>">
                <?php echo wp_get_attachment_image($image['id'], 'full'); ?>
                            
                    <!-- assign caption to variable called caption -->
                    <?php $caption = wp_get_attachment_caption($image['id']); ?>
                            
                    <!-- if caption is not empty, render it onto the page -->
                    <?php if(!empty($caption)) : ?>
                        <p class="caption f5-l f7 i o-80 pt1 mv0">
                            <?php echo $caption; ?>
                        </p> 
                    <?php endif; ?>
                        </div>                    

    <?php endforeach; ?>

</div>

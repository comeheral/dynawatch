<?php

// Check rows exists.
    if( have_rows('description_sections') ):

        // Loop through rows.
        while( have_rows('description_sections') ) : the_row();

            // Load sub field value.
            $title = get_sub_field('description_section_title');
            $subtitle = get_sub_field('description_section_subtitle');
            $text = get_sub_field('description_section_text');
            $image = get_sub_field('description_section_image');
            $type = get_sub_field('description_section_type');
            $order = get_sub_field('description_section_order');
            $backgroundimage = get_sub_field('description_section_background_image');
            $color = get_sub_field('description_section_background_color');
            $color2 = get_sub_field('description_section_background_color2');
            $image2 = get_sub_field('description_section_image_2');
            $button = get_sub_field('description_section_button');
            $mobileOrder = get_sub_field('description_mobile_order');

            

            ?>


            <?php if($type === 'basic') : ?>
                <div class="row description-section section-basic"  <?php if($order === 'right') : ?>style="flex-direction: row-reverse"<?php endif; ?>>
                    <div class="half-col v-centered">
                        <img class="section-image" src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo $image['alt'] ?>">
                    </div>

                    <div class="half-col v-centered">
                        <h2 class="title -secondary"><?php echo $title ?></h2>
                        <h3 class="title -secondary -orange"><?php echo $subtitle ?></h3>
                        <p class="text"><?php echo $text ?></p>
                    </div>
                </div>


            <?php elseif($type === 'backgroundcolor') : ?>

            
            <div class="section-background" style="background-color: <?php echo $color ?>">
                <div class="row description-section <?php if($mobileOrder === 'haut') : ?>img-mobile<?php endif; ?>" >

                    <div class="half-col v-centered txt-description">
                        <div class="background-content">
                            <h2 class="title -secondary -white"><?php echo $title ?></h2>
                            <h3 class="title -secondary -white"><?php echo $subtitle ?></h3>
                            <p class="text -white"><?php echo $text?></p>
                        </div>
                    </div>

                    <div class="half-col v-centered img-description">
                        <img class="section-image" src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo $image['alt'] ?>">
                    </div>

                </div>
            </div>


            <?php elseif($type === 'backgroundcolor2') : ?>

            <div class="section-background2" style="background-color: <?php echo $color2 ?>">
                <div class="row description-section">

                <div class="background-content">
                    <h2 class="title-background2 title -secondary -white"><?php echo $title ?></h2>
                    <h3 class="subtitle-background2 title -white"><?php echo $subtitle ?></h3>
                    <a class="button burger__button -gradient" href="<?php echo $button['url'] ?>">
                        <?php echo $button['title'] ?>
                    </a>
                </div>

                </div>
            </div>

            <?php elseif($type === 'banner') : ?>

                <div class="section-banner">
                    <h2 class="banner-title title -primary -white"><?php echo $title ?></h2>
                    <h3 class="banner-subtitle title -secondary -white"><?php echo $subtitle ?></h3>

                    <img class="section-image-background" src="<?php echo $backgroundimage['sizes']['large'] ?>" alt="<?php echo $backgroundimage['alt'] ?>">
    

                </div>


            <?php elseif($type === 'txtImage') : ?>

                <div class="section-txtImage">
                    <p class="text"><?php echo $text ?></p>

                    <div class="section-images">
                        <img class="image1" src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo $image['alt'] ?>">
                        <img class="image1" src="<?php echo $image2['sizes']['large'] ?>" alt="<?php echo $image['alt'] ?>">
                    </div>
                </div>
                

            <?php endif ; ?>


            <?php

        // End loop.
        endwhile;

    // Do something...
    endif;

    
?>

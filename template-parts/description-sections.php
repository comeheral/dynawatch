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
            $backgroundcolor = get_sub_field('description_section_background_color');
            // Do something...

            /* echo '<p>';
            echo $title;
            echo '</p>';

            echo '<p>';
            echo $description;
            echo '</p>'; */

            /* echo '<pre>';
            print_r($order);
            echo '</pre>'; */

            /* echo '<pre>';
            print_r($link);
            echo '</pre>'; */

            ?>

            <?php if($type === 'basic') : ?>

                <div class="row description-section section-basic"  <?php if($order === 'right') : ?>style="flex-direction: row-reverse"<?php endif; ?>>
                    <div class="half-col v-centered">
                        <img class="section-image" src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo $image['alt'] ?>">
                    </div>

                    <div class="half-col v-centered">
                        <h2 class="title -secondary"><?php echo $title; ?></h2>
                        <p class="text"><?php echo $description ?></p>
                        <a class="arrowlink" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?><?php get_template_part('icons/gradient-arrow') ?></a>
                    </div>
                </div>

            <?php elseif($type === 'background') : ?>

            <div class="section-background" style="background-color: <?php echo $color ?>"
                <div class=" row description-section" <?php if($order === 'right') : ?>flex-direction: row-reverse<?php endif; ?>">
                    <div class="half-col v-centered">
                        <img class="section-image" src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo $image['alt'] ?>">
                    </div>

                    <div class="half-col v-centered">
                        <div class="background-content">
                            <p class="text"><?php echo $description ?></p>
                            <a class="arrowlink" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?><?php get_template_part('icons/gradient-arrow') ?></a>
                        </div>
                    </div>
                </div>
            </div>

            <?php elseif($type === 'features') : ?>

                <div class="row description-section">
                    <?php
                    if( have_rows('home_sections_features') ):
                        while( have_rows('home_sections_features') ) : the_row();
                        
                        $features_title = get_sub_field('home_sections_features_title');
                        $features_text = get_sub_field('home_sections_features_text');
                        $features_icon = get_sub_field('home_sections_features_icon');
                    ?>
                    
                    <div class="quarter-col features-item">
                        <?php echo $features_icon ?>
                        <h3 class="title -gradient"><?php echo $features_title ?></h3>
                        <p class="text"><?php echo $features_text ?></p>
                    </div>

                    <?php
                        endwhile;
                    endif;
                    ?>
                
                </div>

            <?php endif ; ?>


            <?php

        // End loop.
        endwhile;

    // Do something...
    endif;

    
?>

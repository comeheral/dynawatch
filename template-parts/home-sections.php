<?php

// Check rows exists.
    if( have_rows('home_sections') ):

        // Loop through rows.
        while( have_rows('home_sections') ) : the_row();

            // Load sub field value.
            $title = get_sub_field('home_sections_title');
            $description = get_sub_field('home_sections_description');
            $link = get_sub_field('home_sections_link');
            $image = get_sub_field('home_sections_image');
            $order = get_sub_field('home_sections_order');
            $type = get_sub_field('home_sections_type');
            $color = get_sub_field('home_sections_color');
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

                <div class="row home-section section-basic"  <?php if($order === 'right') : ?>style="flex-direction: row-reverse"<?php endif; ?>>
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

                <div class="row home-section section-background"  style="background-color: <?php echo $color ?>; <?php if($order === 'right') : ?>flex-direction: row-reverse<?php endif; ?>">
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

            <?php elseif($type === 'features') : ?>

                <div class="row home-section section-features">
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

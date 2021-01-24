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

                <div class="row-test home-section section-basic"  <?php if($order === 'right') : ?>style="flex-direction: row-reverse"<?php endif; ?>>
                    <div class="col-test v-centered">
                        <img class="section-image" src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo $image['alt'] ?>">
                    </div>

                    <div class="col-test v-centered">
                        <h2 class="title -secondary"><?php echo $title; ?></h2>
                        <p class="text"><?php echo $description ?></p>
                        <a class="arrowlink" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?><?php get_template_part('icons/gradient-arrow') ?></a>
                    </div>
                </div>

            <?php elseif($type === 'background') : ?>

                <div class="row home-section section-background"  <?php if($order === 'right') : ?>style="flex-direction: row-reverse"<?php endif; ?>>
                    <div class="col-12 col-md-6 v-centered">
                        <img class="section-image" src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo $image['alt'] ?>">
                    </div>

                    <div class="col-12 col-md-6 v-centered">
                        <div class="bg"></div>
                        <h2 class="title -secondary"><?php echo $title; ?></h2>
                        <p class="text"><?php echo $description ?></p>
                        <a class="arrowlink" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?><?php get_template_part('icons/gradient-arrow') ?></a>
                    </div>
                </div>

            <?php endif; ?>


            <?php

        // End loop.
        endwhile;

    // Do something...
    endif;

    
?>

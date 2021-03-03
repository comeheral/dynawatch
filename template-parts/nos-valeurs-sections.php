<?php

// Check rows exists.
    if( have_rows('nos_valeurs_sections') ):

        // Loop through rows.
        while( have_rows('nos_valeurs_sections') ) : the_row();

            // Load sub field value.
            $subtitle = get_sub_field('nos_valeurs_sections_subtitle'); //CHAMP ACF
            $title = get_sub_field('nos_valeurs_sections_title');
            $text = get_sub_field('nos_valeurs_sections_text');
            $image = get_sub_field('nos_valeurs_sections_images');
            $quote = get_sub_field('nos_valeurs_sections_quotes');
            $type = get_sub_field('nos_valeurs_sections_type');
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

                <div class="row nos-valeurs-section section-basic">
                    <div class="half-col v-centered">
                        <img class="section-image" src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo $image['alt'] ?>">
                    </div>

                    <div class="half-col v-centered">
                        <h3 class="title -orange"><?php echo $subtitle ?></h3>
                        <h2 class="title -secondary"><?php echo $title; ?></h2>
                        <p class="text"><?php echo $description ?></p>
                        <p class="text"><?php echo $text ?></p>
                    </div>
                </div>

            <?php elseif($type === 'quotes') : ?>

                <div class="row nos-valeurs-section section-quotes">
                    <div class="half-col v-centered">
                        <img class="section-image" src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo $image['alt'] ?>">
                    </div>

                    <div class="half-col v-centered">
                        <div class="background-content">
                            <p class="text"><?php echo $description ?></p>
                        </div>
                    </div>
                </div>

            <?php endif ; ?>


            <?php

        // End loop.
        endwhile;

    // Do something...
    endif;

    
?>
<?php
// Check rows exists.
if( have_rows('home_caracteristiques') ):

    // Loop through rows.
    while( have_rows('home_caracteristiques') ) : the_row();

        // Load sub field value.
        $title = get_sub_field('home_caracteristiques_title');
        $description = get_sub_field('home_caracteristiques_description');
        $image = get_sub_field('home_caracteristiques_image');
        $type = get_sub_field('home_caracteristiques_type');
        // Do something...

        /* echo '<p>';
        echo $title;
        echo '</p>';

        echo '<p>';
        echo $description;
        echo '</p>';

        echo '<pre>';
        print_r($image);
        echo '</pre>'; */

        echo '<p>';
        echo $type;
        echo '</p>';

        ?>

        <h2><?php echo $title; ?></h2>
        <p><?php echo $description ?></p>

        <?php if($type === 'basic') : ?>

            <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>">

        <?php endif; ?>

        <?php

        echo wp_get_attachment_image( $image['ID'], 'medium' ); // Deuxième option

    // End loop.
    endwhile;

// Do something...
endif;
?>
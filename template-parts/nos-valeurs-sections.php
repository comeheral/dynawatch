<?php

$upload_dir = wp_get_upload_dir()["baseurl"] . "/" . $prefix /* . "-" */;

// Check rows exists.
    if( have_rows('nos_valeurs_sections') ):

        // Loop through rows.
        while( have_rows('nos_valeurs_sections') ) : the_row();

            // Load sub field value.
            $subtitle = get_sub_field('nos_valeurs_sections_subtitle');
            $title = get_sub_field('nos_valeurs_sections_title');
            $text = get_sub_field('nos_valeurs_sections_text');
            $image = get_sub_field('nos_valeurs_sections_images');
            $type = get_sub_field('nos_valeurs_sections_type');
            $quoteText = get_sub_field('nos_valeurs_sections_quote_text');
            $quoteImgG = get_sub_field('nos_valeurs_sections_quote_img_g');
            $quoteImgD = get_sub_field('nos_valeurs_sections_quote_img_d');
            $color = get_sub_field('nos_valeurs_sections_color');
            $colorText = get_sub_field('nos_valeurs_color_text');




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
            <div class="section-background" style="background-color: <?php echo $color ?>">
                <div class="row nos-valeurs-section section-basic">
                    <div class="half-col v-centered img">
                        <img class="section-image" src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo $image['alt'] ?>">
                    </div>

                    <div class="half-col v-centered description">
                        <h3 class="title -orange subtitle"><?php echo $subtitle ?></h3>
                        <h2 class="title -secondary <?php if($colorText === 'blanc') : ?>-white<?php endif ?>"><?php echo $title; ?></h2>
                        <p class="text <?php if($colorText === 'blanc') : ?>-white<?php endif ?>"><?php echo $text ?></p>
                    </div>
                </div>
            </div>


            <?php elseif($type === 'center') : ?>
                <div class="row nos-valeurs-section section-center">
                    <div class="centered-title">
                        <h3 class="title -orange"><?php echo $subtitle ?></h3>
                        <h2 class="title -secondary title-confidentiality"><?php echo $title; ?></h2>
                    </div>
                    <div class="half-col v-centered">
                        <img class="section-image" src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo $image['alt'] ?>">
                    </div>

                    <div class="half-col v-centered section-center-text">
                        <p class="text"><?php echo $text ?></p>
                    </div>
                </div>
                <div class="banner-blob-2">                
                    <img class="blob-2" src="<?php echo($upload_dir); ?>/nos-valeurs-blob-2.png" alt="Blob">
                </div>
        
            

            <?php elseif($type === 'quotes') : ?>

                <div class="row nos-valeurs-section section-quotes">
                    <img class="section-image img-quote quote1" src="<?php echo $quoteImgG['sizes']['large'] ?>" alt="<?php echo $quoteImgG['alt'] ?>">
                    <p class="text title -quote text-quote"><?php echo $quoteText ?></p>
                    <img class="section-image img-quote quote2" src="<?php echo $quoteImgD['sizes']['large'] ?>" alt="<?php echo $quoteImgD['alt'] ?>">
                </div>

            <?php endif ; ?>


            <?php

        // End loop.
        endwhile;

    // Do something...
    endif;

    
?>
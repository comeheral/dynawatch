<?php
    $upload_dir = wp_get_upload_dir()["baseurl"] . "/" . $prefix /* . "-" */;

    $title = get_field('description_title');
    $subtitle = get_field('description_subtitle');
    $text = get_field('description_text');
    $price = get_field('description-price');
    $button = get_field('description-button');
    $sections = get_field('description-sections');



    /* echo '<pre>';
    print_r($image);
    echo '</pre>'; */

?>


<h1 class="banner-title title -primary -white"><?php echo $title ?></h1>
<h2 class="title -primary -gradient"><?php echo $subtitle ?></h2>
<p class="description-text text -white"><?php echo $text ?></p>

<a class="arrowlink text -white" href="<?php echo $link['url'] ?>"><p class="text-arrow">À partir de</p><strong><?php echo $price ?></strong><?php get_template_part('icons/gradient-arrow') ?></a>

<img class="description-banner-image" src="<?php echo($upload_dir); ?>/description-banner.png" alt="banner">
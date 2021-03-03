<?php
    $upload_dir = wp_get_upload_dir()["baseurl"] . "/" . $prefix /* . "-" */;

    $title = get_field('nos_valeurs_title');
    $minisubtitle = get_field('nos_valeurs_mini_subtitle');
    $subtitle = get_field('nos_valeurs_subtitle');
    $description = get_field('nos_valeurs_description');
    $image = get_field('nos_valeurs_image');
    $sections = get_field('nos_valeurs_sections');




    /* echo '<pre>';
    print_r($image);
    echo '</pre>'; */

?>

<h1 class="banner-title title -primary"><?php echo $title ?></h1>
<h2 class="banner-mini-subtitle  title -orange"><?php echo $minisubtitle ?></h2>
<h3 class="banner-subtitle title -black"><?php echo $subtitle ?></h3>
<p class="description text"><?php echo $description ?></p>
<img class="banner-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">



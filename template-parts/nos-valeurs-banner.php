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

<div class="row nos-valeurs-banner">
    <h1 class="banner-title title -primary" style="width:100%"><?php echo $title ?></h1>       
    <div class="half-col v-centered banner">
        <h2 class="banner-mini-subtitle title -orange"><?php echo $minisubtitle ?></h2>
        <h3 class="banner-subtitle title -primary"><?php echo $subtitle ?></h3>
        <p class="description text"><?php echo $description ?></p>
    </div>
    <div class="half-col v-centered">
       <!--<h2 class="banner-mini-subtitle title -orange"><?php echo $minisubtitle ?></h2>
        <h3 class="banner-subtitle title -black"><?php echo $subtitle ?></h3>
        <p class="description text"><?php echo $description ?></p>-->
    </div>

</div>

<img class="banner-blob blob-1" src="<?php echo($upload_dir); ?>/nos-valeurs-1.png" alt="Blob">
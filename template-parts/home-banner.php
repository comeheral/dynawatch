<?php
    $upload_dir = wp_get_upload_dir()["baseurl"] . "/" . $prefix /* . "-" */;

    $title = get_field('home_title');
    $image = get_field('home_image');
    $price = get_field('home_price');
    $button = get_field('home_button');

    /* echo '<pre>';
    print_r($image);
    echo '</pre>'; */

?>


<h1 class="banner-title title -primary"><?php echo $title ?></h1>
<img class="banner-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">

<p class="banner-price">À partir de <strong><?php echo $price ?></strong></p>

<a class="button burger__button -gradient" href="<?php echo $button['url'] ?>">
    <?php get_template_part('icons/cart');
    echo $button['title'] ?>
</a>

<img class="banner-blob blob-1" src="<?php echo($upload_dir); ?>/home-blob-1.png" alt="Blob">
<img class="banner-blob blob-2" src="<?php echo($upload_dir); ?>/home-blob-2.png" alt="Blob">
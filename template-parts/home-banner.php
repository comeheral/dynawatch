<?php
    $title = get_field('home_title');
    $image = get_field('home_image');
    $price = get_field('home_price');
    $button = get_field('home_button');

?>

<p><?php echo $title ?></p>
<p><?php echo $price ?></p>
<p><?php echo $button['url'] ?></p>
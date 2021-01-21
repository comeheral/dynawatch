<?php

get_header();

if( have_posts() ):
    while( have_posts() ): the_post();

        $postId = get_the_ID();
        $postData = get_post($postID);

        $tagline = get_field('home_tagline');

        echo "<div class='container'>";

        get_template_part('template-parts/home-sections');

        echo "</div>";

        ?>

        <?php

    endwhile;
endif;


get_footer();

?>




<?php /*
// AUTRE FAÇON DE FAIRE - Séparer le php du html
$caracteristiquesArr = get_field('home_caracteristiques');
$myCaracteristiques = []

if( $caracteristiquesArr ){
    foreach($caracteristiquesArr as $caracteristique) {
        $title = $caracteristique['home_caracteristiques_title'];
        $description = $caracteristique['home_caracteristiques_description'];
        $image = $caracteristique['home_caracteristiques_image'];
    }
} */
?>
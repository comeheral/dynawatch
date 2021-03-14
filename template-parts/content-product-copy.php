<?php
if (have_rows('fonctions')) :
    while (hav_rows('fonctions')) : the_row();
        $soustitre = get_sub_field('fonctions_sous-titre');
        $description = get_sub_field('fonctions_description');
        $image = get_sub_field('fonctions_image');
        $isLeft = get_sub_field('fonctions_gauche');
        echo "<p>".$idLeft."</p>";
        ?>

        <section>
        </section>
        
        
<?php endif; endwhile; ?>
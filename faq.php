<?php
/*
Template Name: FAQ
*/
?>

<?php get_header(); ?>

<div class="faq">
    <h1 class="faq__title"><?php the_title() ?></h1>
    <div class="faq__content">
        <?php the_content(); ?>
    </div>
    <div class="faq__contact">
        Nous n'avons pas répondu à votre question ?<br/> Alors <a href="mailto:support@dynawatch.fr">contactez-nous</a> !
    </div>
</div>




<?php get_footer(); ?>
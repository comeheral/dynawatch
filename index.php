<?php get_header() ?>

    <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part('template-parts/content', get_post_type() ); ?>

    <?php endwhile; else: ?>

        <?php get_template_parts('template-parts/content', 'none' ); ?>

    <?php endif; ?>
    
<?php get_footer() ?>
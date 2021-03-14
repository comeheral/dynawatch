    <div class="footer">
        <div class="footer__line"></div>

        <div class="footer__logo">
            <?php get_template_part('icons/logo-full') ?>
        </div>

        <div class="footer__row">

            <div class="footer__details">
                <strong>Dynawatch</strong><br/>
                27 rue des Lilas<br/>
                68000 Colmar<br/>
                +33 (0)3 89 79 71 13<br/>
                support@dynawatch.fr<br/>
            </div>

            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'menu_class' => 'footer__menu',
            )); ?>

            <div class="footer__description">
                Dynawatch est une start-up française qui met tous ses moyens en oeuvre pour proposer une montre connectée de la meilleure qualité possible aux consommateurs.
            </div>

        </div>

    </div>

    <?php wp_footer(); ?>
</body>

</html>
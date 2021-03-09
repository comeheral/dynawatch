<?php $upload_dir = wp_get_upload_dir()["baseurl"] . "/" . $prefix /* . "-" */; ?>

<div class="error404-container">
<?php get_header() ?>

    <div class="error404">
        <h1 class="error404__title">404</h1>
        <p class="error404__text">Page introuvable.</p>
        <a class="error404__link" href="<?php bloginfo("url"); ?>">Retourner à la page d'accueil</a>

        <img class="error404__blob-1" src="<?php echo($upload_dir); ?>/blob-404-1.png" alt="Blob">
        <img class="error404__blob-2" src="<?php echo($upload_dir); ?>/blob-404-2.png" alt="Blob">
    </div>

<?php get_footer() ?>
</div>
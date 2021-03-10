<?php
/*
Template Name: Accessoires
*/
$upload_dir = wp_get_upload_dir()["baseurl"] . "/" . $prefix /* . "-" */;

get_header();
?>

<div class="accessoires">

    <h1 class="title -primary -dark accessoires__title">Accessoires</h1>
    <p class="text accessoires__text">Personnalisez votre montre avec de nouveaux bracelets, devenez propriétaire d’une station de charge, protégez votre montre avec une coque… Découvrez tous nos accessoires pour Dynawatch !</p>

    <div class="row product-container">

        <div class="product third-col">
            <img class="product__image" src="<?php echo($upload_dir); ?>/accessoire.png" alt="Accessoire">
            <h2 class="product__title">Câble de charge magnétique vers USB-C pour Dynawatch (1m)</h2>
            <span class="product__price">35,00€</span>
        </div>

        <div class="product third-col">
            <img class="product__image" src="<?php echo($upload_dir); ?>/accessoire.png" alt="Accessoire">
            <h2 class="product__title">Chargeur double MagSafe</h2>
            <span class="product__price">149,00€</span>
        </div>

        <div class="product third-col">
            <img class="product__image" src="<?php echo($upload_dir); ?>/accessoire.png" alt="Accessoire">
            <h2 class="product__title">Coque Otterbox Exo Edge</h2>
            <span class="product__price">19,95€</span>
        </div>

        <div class="product third-col">
            <img class="product__image" src="<?php echo($upload_dir); ?>/accessoire.png" alt="Accessoire">
            <h2 class="product__title">Ecouteurs Powerbeats Pro sans fils</h2>
            <span class="product__price">1249,95€</span>
        </div>
    </div>

</div>

<?php get_footer(); ?>
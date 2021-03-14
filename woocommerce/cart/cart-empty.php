<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;?>

<div class="cart">
    <div class="cart__header">
        <h1 class="cart__title">Mon panier</h1>
    </div>
    <div class="cart__empty row">
        <p>Votre panier est actuellement vide.</p>
    <?php 
    /*
    * @hooked wc_empty_cart_message - 10
    */

    if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
        <p class="return-to-shop">
        <a class="button -dark wc-backward" href="<?php echo get_home_url(); ?>">Retour à l'accueil</a>
           
        </p>
    <?php endif; ?>
    </div>
</div>
<?php
    $prefix = get_field("prefix-img"); // ACF champ prefixe image en fonction des produits
    
    $upload_dir =           wp_get_upload_dir()["baseurl"] . "/" . $prefix /* . "-" */;
    $idProduct =            get_the_ID();
    $product =              wc_get_product($idProduct);
    $image =                wp_get_attachment_url( $product->get_image_id() );
    $price =                $product->price;
    $description =          $product->description;
    $attributes =           $product->attributes;
    $default_attributes =   $product->default_attributes;
    $attribute_case_style = "style-du-boitier";
    $attribute_case_size =  "taille-du-boitier";
    $attribute_case_color = "couleur-du-boitier";
    $attribute_band_style = "style-du-bracelet";
    $attribute_band_size =  "taille-du-bracelet";
    $attribute_band_color = "couleur-du-bracelet";
    $case_styles =           $attributes[$attribute_case_style]["options"];
    $case_colors =          $attributes[$attribute_case_color]["options"];
    $case_sizes =           $attributes[$attribute_case_size]["options"];
    $band_styles =          $attributes[$attribute_band_style]["options"];
    $band_colors =          $attributes[$attribute_band_color]["options"];
    $band_sizes =          $attributes[$attribute_band_size]["options"];

    /* echo "<pre style='margin-top: 100px;'>";
        print_r($product);
    echo "</pre>"; */
?>

<main id="product">
    <div class="edition product-step step-1 -activeStep" data-step="1">
            <div class="row">
                <h2 class="title -primary edition__title -mobile">Édition</h2>
                <div class="half-col">
                    <img class="image" src="<?php echo $image ?>" alt="Édition">
                </div>

                <div class="half-col">
                    <h2 class="title -primary edition__title -desktop">Édition</h2>
                    <div class="steps"></div>
                    <div class="toggle">
                        <?php
                        // Check rows exists.
                        if( have_rows('product_edition') ):
                            // Loop through rows.
                            while( have_rows('product_edition') ) : the_row();

                                // Load sub field value.
                                $name = get_sub_field('product_edition_name');
                                $link = get_sub_field('product_edition_link');
                                $current = get_sub_field('product_edition_current');

                                $isActive = ($current == true) ? "-active" : "";

                        ?>

                        <a href="<?php echo $link['url'] ?>" class="toggle__title title -custom <?php echo $isActive ?>"><?php echo $name ?></a>
                        
                        <?php endwhile; endif ;?>

                    </div>
                    <p class="text -small"><?php echo $description ?></p>
                    <span class="price">À partir de <strong><?php echo $price ?>€</strong></span>

                    <a class="arrowlink -custom js-next-step -desktopFlex">Suivant
                        <?php get_template_part('icons/next-arrow') ?>
                    </a>

                    <a class="button -dark next-bt js-next-step -mobileFlex">Suivant</a>
                </div>
            </div>
    </div>


    <div class="style product-step step-2 -afterStep" data-step="2">
        <div class="row">
            <a class="arrowlink -custom -back js-prev-step"><?php get_template_part('icons/prev-arrow') ?><span>Retour</span></a>
            <h2 class="title -primary style__title -mobile">Style</h2>
            <div class="half-col">
                <div class="image-wrapper">
                    <img class="image case-image style-du-boitier -absolute" data-source="<?php echo($upload_dir); ?>case-style-{value}.png" src="<?php echo($upload_dir); ?>case-style-<?php echo $default_attributes[$attribute_case_style] ?>.png" alt="Style">
                    <img class="image band-image style-du-bracelet" data-source="<?php echo($upload_dir); ?>band-style-{value}.png" src="<?php echo($upload_dir); ?>band-style-<?php echo $default_attributes[$attribute_band_style] ?>.png" alt="Style">
                </div>
            </div>

            <div class="half-col">
                <h2 class="title -primary style__title -desktop">Style</h2>
                <div class="steps"></div>

                <div class="style__container">
                    <div class="style__case">
                        <h3 class="title -custom">Boitier</h3>

                        <?php foreach($case_styles as $case_style) : ?>
                            <?php
                                $isActive = ($default_attributes[$attribute_case_style] == $case_style) ? "-active" : "";
                                $className = strtolower($case_style);
                            ?>
                            <div class="case-item style-item variant-item <?php echo $attribute_case_style ?> <?php echo $isActive; ?>" data-attribute="<?php echo $attribute_case_style; ?>" data-value="<?php echo $case_style; ?>">
                                <div class="case-select <?php echo $className ?>"></div>
                            </div>
                        <?php endforeach; ?>

                    </div>

                    <div class="style__band">
                        <h3 class="title -custom">Bracelet</h3>
                        <div class="variants-container">

                        <?php foreach($band_styles as $band_style) : ?>
                            <?php
                                $isActive = ($default_attributes[$attribute_band_style] == $band_style) ? "-active" : "";
                                $className = strtolower($band_style);
                            ?>
                            <div class="band-item style-item variant-item <?php echo $isActive; ?>" data-attribute="<?php echo $attribute_band_style; ?>" data-value="<?php echo $band_style; ?>">
                                <div class="band-select <?php echo $className ?>" style="background: center url('<?php echo($upload_dir); ?>/<?php echo $className ?>-variant.jpg');"></div>
                            </div>
                        <?php endforeach; ?>

                        </div>
                    </div>
                </div>

                <?php
                // Check rows exists.
                if( have_rows('product_style') ):

                    // Loop through rows.
                    while( have_rows('product_style') ) : the_row();

                        // Load sub field value.
                        $item = get_sub_field('product_style_item');
                        $handle = get_sub_field('product_style_handle');
                        $name = get_sub_field('product_style_name');
                        $description = get_sub_field('product_style_description');

                        if($item == "case") : $className = "case-desc"; elseif($item == "band") : $className = "band-desc"; endif;

                ?>

                <div class="<?php echo $className ?> <?php echo $handle ?>">
                    <h3 class="title -custom"><?php echo $name ?></h3>
                    <p class="text -small"><?php echo $description ?></p>
                </div>

                    <?php
                    endwhile;
                endif;
                ?>
                
                <span class="price js-price">À partir de <strong><?php echo $price ?>€</strong></span>

                <a class="arrowlink -custom js-next-step -desktopFlex">Suivant
                    <?php get_template_part('icons/next-arrow') ?>
                </a>

                <a class="button -dark next-bt js-next-step -mobileFlex">Suivant</a>
            </div>
        </div>
    </div>


    <div class="color product-step step-3 -afterStep" data-step="3">
        <div class="row">
            <a class="arrowlink -custom -back js-prev-step"><?php get_template_part('icons/prev-arrow') ?><span>Retour</span></a>
            <h2 class="title -primary color__title -mobile">Couleurs</h2>
            <div class="half-col">
                <div class="image-wrapper">
                    <img class="image case-image couleur-du-boitier -absolute" data-source="<?php echo($upload_dir); ?>case-color-{attribute}-{value}.png" src="<?php echo($upload_dir); ?>case-color-<?php echo $default_attributes[$attribute_case_style] ?>-<?php echo $default_attributes[$attribute_case_color] ?>.png" alt="Couleurs">
                    <img class="image band-image couleur-du-bracelet" data-source="<?php echo($upload_dir); ?>band-color-{attribute}-{value}.png" src="<?php echo($upload_dir); ?>band-color-<?php echo $default_attributes[$attribute_band_style] ?>-<?php echo $default_attributes[$attribute_band_color] ?>.png" alt="Couleurs">
                </div>
            </div>

            <div class="half-col">
                <h2 class="title -primary color__title -desktop">Couleurs</h2>
                <div class="steps"></div>

                <?php if($case_colors) : ?>
                <div class="color__case">
                    <h3 class="title -custom">Boitier</h3>
                    <div class="variants-container">

                    <?php foreach($case_colors as $case_color) : ?>
                        <?php
                            $isActive = ($default_attributes[$attribute_case_color] == $case_color) ? "-active" : "";
                            $className = strtolower($case_color);
                        ?>
                        <div class="color-item case-item variant-item <?php echo $attribute_case_color; ?> <?php echo $isActive; ?>" data-attribute="<?php echo $attribute_case_color ?>" data-value="<?php echo $case_color ?>">
                            <div class="color-select <?php echo $className ?>"></div>
                        </div>
                    <?php endforeach; ?>

                    </div>
                </div>
                <?php endif; ?>

                <div class="color__band">
                    <h3 class="title -custom">Bracelet</h3>
                    <div class="variants-container">

                    <?php foreach($band_colors as $band_color) : ?>
                        <?php
                            $isActive = ($default_attributes[$attribute_band_color] == $band_color) ? "-active" : "";
                            $className = strtolower($band_color);
                        ?>
                        <div class="color-item band-item variant-item <?php echo $attribute_band_color; ?> <?php echo $isActive ?>" data-attribute="<?php echo $attribute_band_color ?>" data-value="<?php echo $band_color ?>">
                            <div class="color-select <?php echo $className ?>"></div>
                        </div>
                    <?php endforeach; ?>

                    </div>
                    
                </div>

                <span class="price js-price">À partir de <strong><?php echo $price ?>€</strong></span>

                <a class="arrowlink -custom js-next-step -desktopFlex">Suivant
                    <?php get_template_part('icons/next-arrow') ?>
                </a>

                <a class="button -dark next-bt js-next-step -mobileFlex">Suivant</a>
            </div>
        </div>
    </div>


    <div class="size product-step step-4 -afterStep" data-step="4">
        <div class="row">
            <a class="arrowlink -custom -back js-prev-step"><?php get_template_part('icons/prev-arrow') ?><span>Retour</span></a>
            <h2 class="title -primary size__title -mobile">Taille</h2>
            <div class="half-col">
            <div class="image-wrapper">
                    <img class="image case-image couleur-du-boitier -absolute" data-source="<?php echo($upload_dir); ?>case-color-{attribute}-{value}.png" src="<?php echo($upload_dir); ?>case-color-<?php echo $default_attributes[$attribute_case_style] ?>-<?php echo $default_attributes[$attribute_case_color] ?>.png" alt="Taille">
                    <img class="image band-image couleur-du-bracelet" data-source="<?php echo($upload_dir); ?>band-color-{attribute}-{value}.png" src="<?php echo($upload_dir); ?>band-color-<?php echo $default_attributes[$attribute_band_style] ?>-<?php echo $default_attributes[$attribute_band_color] ?>.png" alt="Taille">
                </div>
            </div>

            <div class="half-col">
                <h2 class="title -primary size__title -desktop">Taille</h2>
                <div class="steps"></div>

                <div class="size__case">
                    <h3 class="title -custom">Boitier</h3>
                    <div class="variants-container">
                    <?php foreach($case_sizes as $case_size) : ?>
                        <?php
                            $isActive = ($default_attributes[$attribute_case_size] == $case_size) ? "-active" : "";
                        ?>
                        <div class="size-item case-size variant-item <?php echo $isActive ?>"><span><?php echo $case_size ?></span></div>
                    <?php endforeach; ?>
                    </div>
                </div>

                <div class="size__band">
                    <h3 class="title -custom">Bracelet</h3>
                    <div class="variants-container">
                    <?php foreach($band_sizes as $band_size) : ?>
                        <?php
                            $isActive = ($default_attributes[$attribute_band_size] == $band_size) ? "-active" : "";
                        ?>
                        <div class="size-item band-size variant-item <?php echo $isActive ?>"><span><?php echo $band_size ?></span></div>
                    <?php endforeach; ?>
                    </div>
                </div>

                <!-- <p class="text -small">Vous ne savez pas quelle taille de bracelet vous correspond ?<br/>
                    Déterminez la taille de votre poignet grâce à notre outil de mesure que vous pouvez imprimer.</p> -->

                <span class="price js-price">À partir de <strong><?php echo $price ?>€</strong></span>

                
                <a class="button -gradient add-to-cart-bt js-add-to-cart -desktopFlex"><?php get_template_part('icons/cart') ?>Ajouter au panier</a>

                <a class="button -gradient next-bt js-add-to-cart -mobileFlex">Ajouter au panier</a>
            </div>
        </div>
    </div>
</main>

<div class="summary entry-summary">
    <?php
    /**
     * Hook: woocommerce_single_product_summary.
     *
     * @hooked woocommerce_template_single_title - 5
     * @hooked woocommerce_template_single_rating - 10
     * @hooked woocommerce_template_single_price - 10
     * @hooked woocommerce_template_single_excerpt - 20
     * @hooked woocommerce_template_single_add_to_cart - 30
     * @hooked woocommerce_template_single_meta - 40
     * @hooked woocommerce_template_single_sharing - 50
     * @hooked WC_Structured_Data::generate_product_data() - 60
     */
    do_action( 'woocommerce_single_product_summary' );
    ?>
</div>
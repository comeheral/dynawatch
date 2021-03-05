<?php
    $prefix = get_field("prefix-img"); // ACF champ prefixe image en fonction des produits
    
    $upload_dir =           wp_get_upload_dir()["baseurl"] . "/" . $prefix /* . "-" */;
    $idProduct =            get_the_ID();
    $product =              wc_get_product($idProduct);
    $price =                $product->price;
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

    echo "<pre style='margin: 0;'>";
        print_r($case_styles);
    echo "</pre>";

    echo "<pre style='margin: 0;'>";
        print_r($case_colors);
    echo "</pre>";

    echo "<pre style='margin: 0;'>";
        print_r($case_sizes);
    echo "</pre>";

    echo "<pre style='margin: 0;'>";
        print_r($band_styles);
    echo "</pre>";
?>

<main id="product">
    <div class="edition product-step">
            <div class="row">
                <div class="half-col">
                    <img class="image" src="<?php echo($upload_dir); ?>/hermes.jpg" alt="Édition">
                </div>

                <div class="half-col">
                    <h2 class="title -primary edition__title">Édition</h2>
                    <div class="steps"></div>
                    <div class="toggle">
                        <h3 class="toggle__title title -custom">Originale</h3>
                        <h3 class="toggle__title title -custom">Nike edition</h3>
                        <h3 class="toggle__title title -custom -active">Hermes edition</h3>
                    </div>
                    <p class="text -small">Grâce à notre collaboration avec Hermès, vous pouvez profiter de bracelets exclusifs plus luxueux les uns que 
                        les autres. Les cadrans exclusifs, tournés vers l’avenir, sont toujours plus personnalisables. Le style intemporel 
                        d’Hermès se manifeste dans l’élégance des bracelets et de la nouvelle barrette de fixation subtilement repensée. 
                        Soyez à la pointe de la mode avec la Dynawatch édition Hermès.</p>
                    <span class="price">À partir de <strong><?php echo $price ?>€</strong></span>

                    <a class="arrowlink -custom" href="#">Suivant
                        <svg width="21" height="8" viewBox="0 0 21 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.3536 4.35355C20.5488 4.15829 20.5488 3.84171 20.3536 3.64645L17.1716 0.464466C16.9763 0.269204 16.6597 0.269204 16.4645 0.464466C16.2692 0.659728 16.2692 0.976311 16.4645 1.17157L19.2929 4L16.4645 6.82843C16.2692 7.02369 16.2692 7.34027 16.4645 7.53553C16.6597 7.7308 16.9763 7.7308 17.1716 7.53553L20.3536 4.35355ZM0 4.5H20V3.5H0V4.5Z" fill="#000000"/>
                        </svg>
                    </a>
                </div>
            </div>
    </div>


    <div class="style product-step">
        <div class="row">
            <div class="half-col">
                <img class="image" src="<?php echo($upload_dir); ?>/style.jpg" alt="Style">
            </div>

            <div class="half-col">
                <h2 class="title -primary style__title">Style</h2>
                <div class="steps"></div>

                <div class="style__container">
                    <div class="style__case">
                        <h3 class="title -custom">Boitier</h3>

                        <?php foreach($case_styles as $case_style) : ?>
                            <?php
                                $isActive = ($default_attributes[$attribute_case_style] == $case_style) ? "-active" : "";
                                $className = strtolower($case_style);
                            ?>
                            <div class="case-item variant-item <?php echo $attribute_case_style ?> <?php echo $isActive; ?>" data-attribute="<?php echo $attribute_case_style; ?>" data-value="<?php echo $case_style; ?>">
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
                            <div class="band-item variant-item <?php echo $isActive; ?>" data-attribute="<?php echo $attribute_band_style; ?>" data-value="<?php echo $band_style; ?>">
                                <div class="band-select <?php echo $className ?>" style="background: url('<?php echo($upload_dir); ?>/<?php echo $className ?>-variant.jpg');"></div>
                            </div>
                        <?php endforeach; ?>

                        </div>
                    </div>
                </div>

                <div class="case-desc aluminium">
                    <h3 class="title -custom">Boîtier aluminium</h3>
                    <p class="text -small">Extrêmement léger, le boîtier en aluminium est constitué d’un alliage de qualité aérospatiale 100% 
                        recyclé.</p>
                </div>
                <div class="case-desc acier">
                    <h3 class="title -custom">Boîtier acier</h3>
                    <p class="text -small">Très résistant, le boîtier en acier inoxydable est poli avec soin pour un fini étincelant.</p>
                </div>

                <div class="band-desc boucle-unique-tressee">
                    <h3 class="title -custom">Bracelet boucle unique tressée</h3>
                    <p class="text -small">Le bracelet Boucle unique tressée est constitué de filaments recyclés entrecroisés avec des fils de 
                        silicone pour un design extensible offrant un maximum de confort, sans fermoir ni attache.</p>
                </div>

                <div class="band-desc boucle-unique">
                    <h3 class="title -custom">Bracelet boucle unique</h3>
                    <p class="text -small">Constitué d’un silicone extensible et doux, le bracelet Boucle unique est conçu pour offrir un maximum 
                        de confort, sans fermoir ni attache.</p>
                </div>

                <div class="band-desc sport">
                    <h3 class="title -custom">Bracelet sport</h3>
                    <p class="text -small">Composé d’un fluoroélastomère de haute qualité à la fois résistant et étonnamment doux, le Bracelet Sport 
                        est doté d’un système innovant de fermeture à clou et passant.</p>
                </div>

                <div class="band-desc boucle-sport">
                    <h3 class="title -custom">Bracelet boucle sport</h3>
                    <p class="text -small">La Boucle Sport est constituée d’un nylon tissé double épaisseur doux et respirant, avec un système de rabat 
                        à scratch qui s’ajuste facilement.</p>
                </div>

                <div class="band-desc maillons-cuir">
                    <h3 class="title -custom">Bracelet à maillons cuir</h3>
                    <p class="text -small">Constitué de cuir Roux Granada travaillé à la main, le Bracelet à maillons cuir, sans boucle ni fermoir, se 
                        fixe à l’aide d’aimants intégrés pour un maintien sûr et ajustable.</p>
                </div>

                <div class="band-desc boucle-moderne">
                    <h3 class="title -custom">Bracelet boucle moderne</h3>
                    <p class="text -small">Le bracelet Boucle moderne est constitué de cuir Granada souple renforcé par une couche intérieure 
                        indéformable. Il est doté d’un fermoir magnétique en deux parties qui s’attache très facilement.</p>
                </div>

                <div class="band-desc milanais">
                    <h3 class="title -custom">Bracelet Milanais</h3>
                    <p class="text -small">Le Bracelet Milanais est constitué de mailles en acier inoxydable douces au toucher. Et comme il est entièrement 
                        magnétique, il est ajustable à l’infini, pour assurer un maintien parfait.</p>
                </div>
                
                <span class="price">À partir de <strong>429€</strong></span>

                <a class="arrowlink -custom" href="#">Suivant
                    <svg width="21" height="8" viewBox="0 0 21 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.3536 4.35355C20.5488 4.15829 20.5488 3.84171 20.3536 3.64645L17.1716 0.464466C16.9763 0.269204 16.6597 0.269204 16.4645 0.464466C16.2692 0.659728 16.2692 0.976311 16.4645 1.17157L19.2929 4L16.4645 6.82843C16.2692 7.02369 16.2692 7.34027 16.4645 7.53553C16.6597 7.7308 16.9763 7.7308 17.1716 7.53553L20.3536 4.35355ZM0 4.5H20V3.5H0V4.5Z" fill="#000000"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>


    <div class="color product-step">
        <div class="row">
            <div class="half-col">
                <img class="image" data-src="<?php echo($upload_dir); ?>/watch-{color}.jpg" src="<?php echo($upload_dir); ?>/colors.jpg" alt="Couleurs">
            </div>

            <div class="half-col">
                <h2 class="title -primary color__title">Couleurs</h2>
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

                <span class="price">À partir de <strong>429€</strong></span>

                <a class="arrowlink -custom" href="#">Suivant
                    <svg width="21" height="8" viewBox="0 0 21 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.3536 4.35355C20.5488 4.15829 20.5488 3.84171 20.3536 3.64645L17.1716 0.464466C16.9763 0.269204 16.6597 0.269204 16.4645 0.464466C16.2692 0.659728 16.2692 0.976311 16.4645 1.17157L19.2929 4L16.4645 6.82843C16.2692 7.02369 16.2692 7.34027 16.4645 7.53553C16.6597 7.7308 16.9763 7.7308 17.1716 7.53553L20.3536 4.35355ZM0 4.5H20V3.5H0V4.5Z" fill="#000000"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>


    <div class="size product-step">
        <div class="row">
            <div class="half-col">
                <img class="image" src="<?php echo($upload_dir); ?>/colors.jpg" alt="taille">
            </div>

            <div class="half-col">
                <h2 class="title -primary size__title">Taille</h2>
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

                <p class="text -small">Vous ne savez pas quelle taille de bracelet vous correspond ?<br/>
                    Déterminez la taille de votre poignet grâce à notre outil de mesure que vous pouvez imprimer.</p>

                <span class="price">À partir de <strong>429€</strong></span>

                <a class="button -gradient">Ajouter au panier</a>
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
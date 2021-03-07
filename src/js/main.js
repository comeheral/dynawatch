// Mettre taille du conteneur à la taille de l'étape
function calculateHeight(){
    let stepHeight = jQuery('#product .-activeStep').outerHeight();
    jQuery('#product').height(stepHeight);
}

// Reload
jQuery(document).ready(function(){
    jQuery('html').scrollLeft(0);
    jQuery('#product').css('opacity', 1);

    calculateHeight();
})

// On resize
jQuery(window).resize(function(){
    calculateHeight();
})

let url = window.location.href;
window.onpopstate = function(){
    jQuery('.product-step.-activeStep .js-prev-step').click();
}

// Burger menu
jQuery('.burger-toggle').click(function(){
    jQuery('.burger').toggleClass('-open');
    jQuery('.burger-toggle').toggleClass('-active');
    jQuery('body').toggleClass('-noscroll');
})

// Descriptions style affichées par défaut
let activeCaseValue = jQuery('.case-item.-active').data('value');
let activeBandValue = jQuery('.band-item.-active').data('value');
jQuery('.case-desc.'+activeCaseValue).show();
jQuery('.band-desc.'+activeBandValue).show();


// Clic sur variante
jQuery('.variant-item').click(function(){
    jQuery(this).parent().find('.variant-item').removeClass('-active');
    jQuery(this).addClass('-active');
    calculateHeight();
    

    if (jQuery(this).hasClass('case-item') && jQuery(this).hasClass('style-item')){ // Si sélection du style du boitier
        jQuery('.case-desc').hide();
        let caseValue = jQuery(this).data('value');
        jQuery('.case-desc.'+ caseValue).show();

        // Changement de l'image
        let caseAttribute = jQuery(this).data('attribute');
        let $image = jQuery('.case-image'); // Selectionner toutes les images de boitier
        let src = $image.data('source');
        src = src.replace('{value}', caseValue);
        $image.attr('src', src);

    }else if (jQuery(this).hasClass('band-item') && jQuery(this).hasClass('style-item')){ // Si sélection du style du bracelet
        jQuery('.band-desc').hide();
        let bandValue = jQuery(this).data('value');
        jQuery('.band-desc.'+ bandValue).show();

        // Changement de l'image
        let bandAttribute = jQuery(this).data('attribute');
        let $image = jQuery('.band-image'); // Selectionner toutes les images de bracelet
        let src = $image.data('source');
        src = src.replace('{value}', bandValue);
        $image.attr('src', src);

    }else if (jQuery(this).hasClass('case-item') && jQuery(this).hasClass('color-item')){

        // Changement de l'image
        let caseValue = jQuery(this).data('value');
        let caseAttribute = jQuery(this).data('attribute');
        let $image = jQuery('.case-image.' + caseAttribute);
        let src = $image.data('source');
        let styleValue = jQuery('.case-item.style-item.-active').data('value');

        src = src.replace('{value}', caseValue).replace('{attribute}', styleValue);
        $image.attr('src', src);
    }

    // Sélectionne le select par défaut pour changer sa valeur
    let attribute = jQuery(this).data('attribute');
    let value = jQuery(this).data('value');
    let $select = document.getElementById(attribute);
    $select.value = value;
    jQuery($select).trigger("change.wc-variation-form");

    // Mise à jour du prix
    let price = jQuery('.woocommerce-variation-price bdi').text();
    price = price.split(',')[0] + '€'; // Retirer à partir de la virgue puis ajoute le sigle €
    
    jQuery('.js-price strong').text(price);
})

jQuery('.js-add-to-cart').click(function(e){
    e.preventDefault();
    jQuery('.variations_form').submit();
    /* window.location.href = url + '/panier'; */
})


// ÉTAPES PRODUIT
// Étape suivante
jQuery('.js-next-step').click(function(e){
    e.preventDefault();
    jQuery('html,body').delay(300).animate({scrollTop:0}, '300');

    var activeValue = jQuery(this).closest('.product-step').data('step');
    var nextValue = activeValue + 1;

    jQuery(this).closest('.product-step').removeClass('-activeStep').addClass('-beforeStep'); // Set active step to previous step
    jQuery('.step-' + nextValue).removeClass('-afterStep').addClass('-activeStep'); // Set next step to active step

    window.history.pushState('', '', url);

    calculateHeight();
})

// Prix affiché par défaut pour le style et les couleurs
jQuery('.edition .js-next-step').click(function(){
    let price = jQuery('.woocommerce-variation-price bdi').text();
    price = price.split(',')[0] + '€'; // Retirer à partir de la virgue puis ajoute le sigle €
    jQuery('.js-price strong').text(price);
})

// Étape précédente
jQuery('.js-prev-step').click(function(e){
    e.preventDefault();
    jQuery('html,body').delay(300).animate({scrollTop:0}, '300');

    var activeValue = jQuery(this).closest('.product-step').data('step');
    var prevValue = activeValue - 1;

    jQuery(this).closest('.product-step').removeClass('-activeStep').addClass('-afterStep'); // Set active step to next step
    jQuery('.step-' + prevValue).removeClass('-beforeStep').addClass('-activeStep'); // Set previous step to active step
    window.history.pushState('', '', url);

    calculateHeight();
})

// CACHER LES VARIANTES QUI N'EXISTENT PAS
jQuery('.variations_form').on("woocommerce_update_variation_values", function(){

    let $form = jQuery(this);

    // Styles du boîtier
    let $caseStyle = jQuery('.style .case-item');
    $caseStyle.show();
    $caseStyle.each(function(){
        let attribute = jQuery(this).data('attribute');
        let value = jQuery(this).data('value');

        let selectValue = $form.find('select#' + attribute).find('option[value="'+ value +'"]');

        if (!selectValue.length > 0){
            jQuery(this).hide();
        }
    })

    // Styles du bracelet
    let $bandStyle = jQuery('.style .band-item');
    $bandStyle.show();
    $bandStyle.each(function(){
        let attribute = jQuery(this).data('attribute');
        let value = jQuery(this).data('value');

        let selectValue = $form.find('select#' + attribute).find('option[value="'+ value +'"]');

        if (!selectValue.length > 0){
            jQuery(this).hide();
        }
    })
});
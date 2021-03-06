// Reload
jQuery(document).ready(function(){
    window.location.hash = '';
    jQuery('html').scrollLeft(0);
    jQuery('#product').css('opacity', 1);
    window.location.hash = 'step-1';
})

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


    if (jQuery(this).hasClass('case-item')){ // Si sélection du style du boitier
        jQuery('.case-desc').hide();
        let caseValue = jQuery(this).data('value');
        jQuery('.case-desc.'+caseValue).show();

    }else if (jQuery(this).hasClass('band-item')){ // Si sélection du style du bracelet
        jQuery('.band-desc').hide();
        let bandValue = jQuery(this).data('value');
        jQuery('.band-desc.'+bandValue).show();

    }

    let attribute = jQuery(this).data('attribute');
    let value = jQuery(this).data('value');

    // Sélectionne le select par défaut pour changer sa valeur
    let $select = document.getElementById(attribute);
    $select.value = value;

    jQuery($select).trigger("change.wc-variation-form");
})

jQuery('.js-add-to-cart').click(function(e){
    e.preventDefault();
    jQuery('.variations_form').submit();
})


// ÉTAPES PRODUIT
// Étape suivante
jQuery('.js-next-step').click(function(e){
    e.preventDefault();

    var activeValue = jQuery(this).closest('.product-step').data('step');
    var nextValue = activeValue + 1;

    jQuery(this).closest('.product-step').removeClass('-activeStep').addClass('-beforeStep'); // Set active step to previous step
    jQuery('.step-' + nextValue).removeClass('-afterStep').addClass('-activeStep'); // Set next step to active step
    window.location.hash = 'step-' + nextValue;
})

// Étape précédente
jQuery('.js-prev-step').click(function(e){
    e.preventDefault();

    var activeValue = jQuery(this).closest('.product-step').data('step');
    var prevValue = activeValue - 1;

    jQuery(this).closest('.product-step').removeClass('-activeStep').addClass('-afterStep'); // Set active step to next step
    jQuery('.step-' + prevValue).removeClass('-beforeStep').addClass('-activeStep'); // Set previous step to active step
    window.location.hash = 'step-' + prevValue;
})

/* window.onhashchange = function() {
    //blah blah blah
} */
// Burger menu
jQuery('.burger-toggle').click(function(){
    jQuery('.burger').toggleClass('-open');
    jQuery('.burger-toggle').toggleClass('-active');
    jQuery('body').toggleClass('-noscroll');
})

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
    console.log(value);
    $select.value = value;

    jQuery($select).trigger("change.wc-variation-form");
})
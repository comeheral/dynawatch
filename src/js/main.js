// Burger menu
jQuery('.burger-toggle').click(function(){
    jQuery('.burger').toggleClass('-open');
    jQuery('.burger-toggle').toggleClass('-active');
    jQuery('body').toggleClass('-noscroll');
})

// Clic sur variante
jQuery('.variant-item').click(function(){
    jQuery(this).parent().find('.variant-item').removeClass('-active');
    jQuery(this).addClass('-active');

    let attribute = jQuery(this).data('attribute');
    let value = jQuery(this).data('value');

    // Sélectionne le select par défaut pour changer sa valeur
    let $select = document.getElementById(attribute);
    console.log(value);
    $select.value = value;

    jQuery($select).trigger("change.wc-variation-form");
})
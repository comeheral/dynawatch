let $swatches = $('.tawcvs-swatches');
$swatches.find('.swatch').removeClass('hidden');

$swatches.each(function(){
let $select = $(this).prev().find('select');

    $(this).find('.swatch').each(function(){
        
        if (!($select.find('option[value="'+ $(this).attr('data-value') +'"]').length > 0)) {
            $(this).addClass('hidden');
        }
    })
})
/* const burgerToggle = document.querySelector('.burger-toggle');
const burger = document.querySelector('.burger');
const body = document.querySelector('body');

burgerToggle.addEventListener('click', function(){
    burger.classList.toggle('-open');
    burgerToggle.classList.toggle('-active');
    body.classList.toggle('-noscroll');
}) */


// Burger menu
jQuery('.burger-toggle').click(function(){
    jQuery('.burger').toggleClass('-open');
    jQuery('.burger-toggle').toggleClass('-active');
    jQuery('body').toggleClass('-noscroll');
})

// Product variants
/* const caseStyle = $('#product .style .case-item');
const strapStyle = $('#product .style .strap-item');
const caseColor = $('#product .color .case-item');
const strapColor = $('#product .color .strap-item');
const caseSize = $('#product .size .case-size');
const strapSize = $('#product .size .strap-size');

caseStyle.click(function(){
    caseStyle.removeClass('-active');
    $(this).addClass('-active');
})

strapStyle.click(function(){
    strapStyle.removeClass('-active');
    $(this).addClass('-active');
})

caseColor.click(function(){
    caseColor.removeClass('-active');
    $(this).addClass('-active');
})

strapColor.click(function(){
    strapColor.removeClass('-active');
    $(this).addClass('-active');
})

caseSize.click(function(){
    caseSize.removeClass('-active');
    $(this).addClass('-active');
})

strapSize.click(function(){
    strapSize.removeClass('-active');
    $(this).addClass('-active');
}) */

jQuery('.variant-item').click(function(){
    jQuery(this).parent().find('.variant-item').removeClass('-active');
    jQuery(this).addClass('-active');
})


/* let filterItemsSelector = ".filterItem";
let filterItems = document.querySelectorAll(filterItemsSelector);

filterItems.forEach(function(item){
    item.addEventListener("click", function(e){
        let attribute = this.dataset.attribute;
        let value = this.dataset.value;


        Array.prototype.slice.call(this.parendNode.children).forEach(function(child){
            child.classList.remove('-active');
        });
        this.classList.add('-active');

        if(attribute === "couleur-du-boitier"){
            changeImage(value, "watch__dial");
        }

        let select = document.getElementById(attribute);
        select.value = value;
    })
})
let changeImage = function(color, selector){
    let image = document.querySelector('.watch__strap');
    let src = image.dataset.source;
    src = src.replace("{color}", color);
    image.src = src;
}

let addToCartSelector = "add-product-to-cart";
let buttonAddToCart = document.getElementById(addToCartSelector);

buttonAddToCart.addEventListener("click", function(){
    document.querySelector('.variations_form').submit();
}) */
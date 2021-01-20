/* const burgerToggle = document.querySelector('.burger-toggle');
const burger = document.querySelector('.burger');
const body = document.querySelector('body');

burgerToggle.addEventListener('click', function(){
    burger.classList.toggle('-open');
    burgerToggle.classList.toggle('-active');
    body.classList.toggle('-noscroll');
}) */


// Burger menu
$('.burger-toggle').click(function(){
    $('.burger').toggleClass('-open');
    $('.burger-toggle').toggleClass('-active');
    $('body').toggleClass('-noscroll');
})

// Product variants
/* const caseStyle = $('#product .style .case-item');
const bandStyle = $('#product .style .band-item');
const caseColor = $('#product .color .case-item');
const bandColor = $('#product .color .band-item');
const caseSize = $('#product .size .case-size');
const bandSize = $('#product .size .band-size');

caseStyle.click(function(){
    caseStyle.removeClass('-active');
    $(this).addClass('-active');
})

bandStyle.click(function(){
    bandStyle.removeClass('-active');
    $(this).addClass('-active');
})

caseColor.click(function(){
    caseColor.removeClass('-active');
    $(this).addClass('-active');
})

bandColor.click(function(){
    bandColor.removeClass('-active');
    $(this).addClass('-active');
})

caseSize.click(function(){
    caseSize.removeClass('-active');
    $(this).addClass('-active');
})

bandSize.click(function(){
    bandSize.removeClass('-active');
    $(this).addClass('-active');
}) */

$('.variant-item').click(function(){
    $(this).parent().find('.variant-item').removeClass('-active');
    $(this).addClass('-active');
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
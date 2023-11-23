( function( $ ) {

    $( '.js-mainFirstSlider' ).slick( {
        fade: false,
        dots: true,
        arrows: false,
        infinite: true,
        speed: 700,
        slidesToShow: 1,
        draggable: false,
        variableWidth: false,
        autoplay: true,
        autoplaySpeed: 5000,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
    } );

    $( '.js-mainProdSlider' ).slick( {
        fade: false,
        dots: false,
        arrows: true,
        infinite: true,
        speed: 700,
        slidesToShow: 5,
        draggable: false,
        variableWidth: false,
        autoplay: false,
        autoplaySpeed: 5000,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        prevArrow: '<button class="arrow prev-arrow"><svg width="17" height="29" viewBox="0 0 17 29" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.7635 29C15.6088 28.7121 16.1237 28.0172 16.6745 27.387C17.124 26.8716 17.0785 26.036 16.6503 25.4993C16.548 25.376 16.4391 25.2583 16.3242 25.1467C12.8722 21.685 9.41879 18.2248 5.96388 14.7661C5.87402 14.6883 5.77825 14.6177 5.67743 14.5548C5.80597 14.4194 5.88015 14.3376 5.958 14.2603C9.4369 10.7687 12.9163 7.27885 16.3962 3.79068C17.0168 3.16564 17.2056 2.40145 16.7421 1.77862C16.3053 1.20244 15.7921 0.688728 15.2166 0.251718C14.6842 -0.158351 13.968 -0.0376124 13.4385 0.39896C13.3587 0.464747 13.2822 0.53453 13.2093 0.608044C9.00382 4.82015 4.79853 9.03471 0.593485 13.2517C-0.0359497 13.8827 -0.173294 14.6189 0.222582 15.2999C0.326632 15.4681 0.451777 15.6222 0.594954 15.7585C4.79755 19.977 9.00431 24.1896 13.2152 28.3963C13.4708 28.651 13.8307 28.8012 14.1421 29H14.7635Z" fill="#090909"/> </svg></button>"',
        nextArrow: '<button class="arrow next-arrow"><svg width="17" height="29" viewBox="0 0 17 29" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M2.23653 29C1.39116 28.7121 0.876302 28.0172 0.325455 27.387C-0.124036 26.8716 -0.0784991 26.036 0.349693 25.4993C0.452012 25.376 0.56087 25.2583 0.675794 25.1467C4.12777 21.685 7.58121 18.2248 11.0361 14.7661C11.126 14.6883 11.2217 14.6177 11.3226 14.5548C11.194 14.4194 11.1199 14.3376 11.042 14.2603C7.5631 10.7687 4.0837 7.27885 0.603817 3.79068C-0.0168043 3.16564 -0.205561 2.40145 0.257885 1.77862C0.694688 1.20244 1.20792 0.688728 1.78336 0.251718C2.31585 -0.158351 3.03195 -0.0376124 3.5615 0.39896C3.64134 0.464747 3.71782 0.53453 3.79065 0.608044C7.99618 4.82015 12.2015 9.03471 16.4065 13.2517C17.0359 13.8827 17.1733 14.6189 16.7774 15.2999C16.6734 15.4681 16.5482 15.6222 16.405 15.7585C12.2025 19.977 7.99569 24.1896 3.78477 28.3963C3.52918 28.651 3.16929 28.8012 2.85788 29H2.23653Z" fill="#090909"/> </svg></button>',
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                    touchMove: true
                }
            }
        ]

    } );

    $('.js-hLangCur').click(function() {
        $('.js-hLangList').toggleClass('active');
    });

    $('.js-subMenuArr').click(function() {
        if ($(window).width() <= 767) {
            $(this).closest('li').toggleClass('active');
        }
    });

    document.querySelector('body').addEventListener('mousedown', plLangFuncClose);
    function plLangFuncClose(e){
        if (!e.target.classList.contains('js-hLangList') && !e.target.closest('.js-hLangList')) {
            $('.js-hLangList').removeClass('active');
        }
    }

    $('.js-hMenuBtn').click(function() {
        $('.js-hMenu').addClass('active');
    });
    $('.js-hMenuCls').click(function() {
        $('.js-hMenu').removeClass('active');
    });

    // $('body').click(function () {
    //     // var $new_totals = $( '.cart_totals', $html );
    //     // var update_cart_totals_div = function( html_str ) {
    //     //     $( '.cart_totals' ).replaceWith( html_str );
    //     //     $( document.body ).trigger( 'updated_cart_totals' );
    //     // };
    //     // update_cart_totals_div( $new_totals );
    //     $('[name="update_cart"]').trigger('click')
    // })

    $('body').on('click', '.js-cartProdCountPrev', function() {
        var sibl = $(this).siblings('.js-cartProdCount');
        var val = sibl.val();
        var min = (!sibl.attr('min') || sibl.attr('min') === '') ? 0 : sibl.attr('min');
        if (
            val > min
        ) {
            sibl.val(parseInt(val)-1);
            $('[name="update_cart"]').prop('disabled', false);
            $('[name="update_cart"]').trigger('click')
        }
    });

    $('body').on('click', '.js-cartProdCountNext', function() {
        var sibl = $(this).siblings('.js-cartProdCount');
        var val = sibl.val();
        if (
            !sibl.attr('max') ||
            sibl.attr('max') === '' ||
            val < sibl.attr('max')
        ) {
            sibl.val(parseInt(val)+1);
            $('[name="update_cart"]').prop('disabled', false);
            $('[name="update_cart"]').trigger('click');
        }
    });

    /*product page*/
    jQuery(function($){
        setTimeout(function(){
            var variat = $('.variations_form.cart').data('product_variations');
            if (variat && variat.length > 0) {

                /*def vals*/
                variat.forEach(function(el) {
                    if (el.variation_id == $('.variation_id').val()) {
                        var variatKeys = Object.keys(el.attributes);
                        var variatValues = Object.values(el.attributes);
                        $('.js-prodVariationRadio').removeAttr('checked');
                        variatKeys.forEach(function(el, i){
                            $('.js-prodVariationRadio[name="'+el+'"][value="'+variatValues[i]+'"]').prop('checked', true);
                        });
                    }
                });
                /*def vals*/

            }
            $(".single_add_to_cart_button").removeClass("disabled")
            $(".disabled-add-wishlist").removeClass("disabled-add-wishlist")
        }, 500);

        $('.js-prodVariationRadio').change(function (){
            var radVariat = $('.js-prodVariationRadio:checked');
            var newVariats = [];
            radVariat.each(function(){
                newVariats.push({'name': $(this).attr('name'), 'value': $(this).val()});
            });
            var variats = $('.variations_form.cart').data('product_variations');
            var variatsNew = false;
            variats.forEach(function(el){
                var parEl = el;
                if (Object.keys(parEl.attributes).length == newVariats.length) {
                    variatsNew = true;
                    newVariats.forEach(function(el, i){
                        if (
                            parEl.attributes[el.name] === undefined ||
                            parEl.attributes[el.name] != el.value
                        ) {
                            variatsNew = false;
                        }
                    });
                    if (variatsNew) {
                        $('.variation_id').val(parEl.variation_id);
                        $('.js-prodPrice').html(parEl.price_html);
                        return;
                    }
                }
            });
        });

    });
    /*product page*/

    /*product archive page*/

    $('.js-filterMobBtn').click(function() {
        $('.js-filter').addClass('active');
    });
    $('.js-filterMobCls').click(function() {
        $('.js-filter').removeClass('active');
    });
    /*product archive page*/

    $('body').on('', 'click', function(){
        location = 'https://www.google.com/maps/dir//Eleftheriou+Venizelou+59+Paphos+8021+%D0%9A%D0%B8%D0%BF%D1%80/@34.7819652,32.4377662,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x14e7067b02750fa7:0xd8a6dd34936cb659!2m2!1d32.4377662!2d34.7819652?entry=ttu';
    })

}( jQuery ) );

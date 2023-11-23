( function( $ ) {

    var configurator = {
        step1: 'rectangle',
        step3: {
            reindeer: 0, // %
            bool: 0, // %
            flat: 0, // %
            has_green: 0
        },
        step4: ''
    };

    var thirdTypesChecked = {moss: false, green: false, logo_back: false};

    /*choose actions*/
    $('.js-confFirstType').click(function(){
        $('.js-confFirstTypeCanv div').addClass('d-none');
        $('.js-confFirstTypeCanv div[data-first="' + $(this).data('first') + '"]').removeClass('d-none');
        $('.js-confFirstType').removeClass('active');
        $(this).addClass('active');
        configurator.step1 = $(this).data('first');
        $('.js-confAppCont').removeClass(['chosen-rectangle', 'chosen-circle', 'chosen-square', 'chosen-hexagon']);
        $('.js-confAppCont').addClass('chosen-' + $(this).data('first'));

        if (configurator.step1 !== 'circle') {
            mode = 'input';
        } else {
            mode = 'circle';
        }

        if ($(this).data('first') === 'circle' || $(this).data('first') === 'hexagon') {
            $('.js-confItemNeedHid').addClass('d-none');
        }

        $('.js-fifthType > *').removeClass('current');
        $('.js-fifthType [data-type="' + configurator.step1 + '"]').addClass('current');

        $('.js-confFormType').val($(this).data('choose-name'));

        resetAll();
    });

    $('.js-confThirdChoose').click(function(){
        $(this).toggleClass('active');
        checkTypesChecked();
        calculateMaterialsRatio();
        setImageByMoss();
        setNamesByMoss();
        calculatePrice();
    });

    $('.js-confFourthChoose').click(function(){
        // $('.js-confFourthImgChosen').attr('src', $(this).data('choose-img'));
        $('.js-confFourthChoose').removeClass('active');
        $(this).addClass('active');
        configurator.step4 = $(this).data('choose-type');
        $('.js-confFormFrame').val($(this).data('choose-name'));
        calculatePrice();
    });
    /*choose actions*/

    /*area_calculating*/
    $('input.js-confSetValue').keyup(function() {
        var type = $(this).data('type');
        area = 0;
        perim = 0;
        if (type === 'width') {
            var width = parseInt($(this).val());
            var height = parseInt(($('.js-confSetValue[data-type="height"]').val() !== '') ? $('.js-confSetValue[data-type="height"]').val() : 0);
            area = width * height;
            perim = (width + height) * 2;
            $('.textAreaCalc').html('ширина * высота = ' + width + ' * ' + height + ' = ' + area + ' см = ' + (area / 10000) + ' м<sup>2</sup>');
            $('.textPerimCalc').html('(ширина + высота) * 2 = (' + width + ' + ' + height + ') * 2 = ' + perim + ' см = ' + (perim / 100) + ' м');
        } else if (type === 'height') {
            var height = parseInt($(this).val());
            var width = parseInt(($('.js-confSetValue[data-type="width"]').val() !== '') ? $('.js-confSetValue[data-type="width"]').val() : 0);
            area = width * height;
            perim = (width + height) * 2;
            $('.textAreaCalc').html('ширина * высота = ' + width + ' * ' + height + ' = ' + area + ' см = ' + (area / 10000) + ' м<sup>2</sup>');
            $('.textPerimCalc').html('(ширина + высота) * 2 = (' + width + ' + ' + height + ') * 2 = ' + perim + ' см = ' + (perim / 100) + ' м');
        } else if (type === "diam") {
            var diam = parseInt($(this).val());
            area = (1 / 4) * 3.1415926535 * Math.pow(diam, 2);
            perim = 2 * 3.1415926535 * (diam / 2);
            $('.textAreaCalc').html('(1 / 4) * 3.1415926535 * диаметр<sup>2</sup> = (1 / 4) * 3.1415926535 * ' + diam + '<sup>2</sup> = ' + area + ' см = ' + (area / 10000) + ' м<sup>2</sup>');
            $('.textPerimCalc').html('2 * 3.1415926535 * (диаметр / 2) = 2 * 3.1415926535 * (' + diam + ' / 2) = ' + perim + ' см = ' + (perim / 100) + ' м');
        } else if (type === "side") {
            var side = parseInt($(this).val());
            area = Math.pow(side, 2);
            perim = side * 4;
            $('.textAreaCalc').html('сторона<sup>2</sup> = ' + side + '<sup>2</sup> = ' + area + ' см = ' + (area / 10000) + ' м<sup>2</sup>');
            $('.textPerimCalc').html('сторона * 4 = ' + side + ' * 4 = ' + perim + ' см = ' + (perim / 100) + ' м');
        } else if (type === "edge") {
            var edge = parseInt($(this).val());
            area = (3 * Math.sqrt(3) * Math.pow(edge, 2)) / 2;
            perim = edge * 6;
            $('.textAreaCalc').html('(3 * квадр_корень 3 * ребро<sup>2</sup>) / 2 = (3 * квадр_корень 3 * ' + edge + '<sup>2</sup>) / 2 = ' + area + ' см = ' + (area / 10000) + ' м<sup>2</sup>');
            $('.textPerimCalc').html('ребро * 6 = ' + edge + ' * 6 = ' + perim + ' см = ' + (perim / 100) + ' м');
        }
        calculatePrice();
    });
    $('select.js-confSetValue').change(function() {
        var type = $(this).data('type');
        area = 0;
        perim = 0;
        if (type === "diam") {
            var diam = parseInt($(this).val());
            area = (1 / 4) * 3.1415926535 * Math.pow(diam, 2);
            perim = 2 * 3.1415926535 * (diam / 2);
            $('.textAreaCalc').html('(1 / 4) * 3.1415926535 * диаметр<sup>2</sup> = (1 / 4) * 3.1415926535 * ' + diam + '<sup>2</sup> = ' + area + ' см = ' + (area / 10000) + ' м<sup>2</sup>');
            $('.textPerimCalc').html('2 * 3.1415926535 * (диаметр / 2) = 2 * 3.1415926535 * (' + diam + ' / 2) = ' + perim + ' см = ' + (perim / 100) + ' м');

            $('.js-confFourthChoose').each(function(){
                $(this).closest('div').removeClass('d-none');
                var dat = $(this).data('choose-type');
                if (dat !== 'none') {
                    if (confPrices.circle.frame[dat][diam] === 0) {
                        $(this).closest('div').addClass('d-none');
                    }
                }
            });
        }
        calculatePrice();
    });
    /*area_calculating*/

    /*first_step_reset_all*/
    function resetAll() {
        $('input.js-confSetValue').val(''); // reset area values
        $('select.js-confSetValue').val("").change(); // reset area values
        $('.js-confFourthChoose').each(function(){
            $(this).closest('div').removeClass('d-none');
        }); // reset area values
        area = 0;
        $('.js-confThirdChoose').removeClass('active');
        configurator.step3 = {
            reindeer: 0,
            bool: 0,
            flat: 0,
            has_green: 0
        }
        $('.js-confFourthChoose').removeClass('active');
        $('.configurator-wsldr-slide:first-child .js-confFourthChoose').addClass('active');

        $('.js-confThirdImgChosen').attr('src', '');
        $('.js-confFourthImgChosen').attr('src', '');

        $('.js-confCost').html(0);

        $('.js-confFormPrice').val(0);
        $('.js-confFormMoss').val('');
        $('.js-confFormSizes').val('');
        $('.js-confFormFrame').val('');
    }
    /*first_step_reset_all*/

    /*third_step_check_types_checked*/
    function checkTypesChecked() {
        var materials = $('.js-confThirdChoose.active');
        thirdTypesChecked = {moss: false, green: false, logo_back: false}
        materials.each(function() {
            if (
                $(this).data('choose-type') === 'reindeer' ||
                $(this).data('choose-type') === 'bool' ||
                $(this).data('choose-type') === 'flat'
            ) {
                thirdTypesChecked['moss'] = true;
            }
            if (
                $(this).data('choose-type') === 'green'
            ) {
                thirdTypesChecked['green'] = true;
            }
            if (
                $(this).data('choose-type') === 'logo' ||
                $(this).data('choose-type') === 'backlight'
            ) {
                thirdTypesChecked['logo_back'] = true;
            }
        });
    }
    /*third_step_check_types_checked*/

    /*third_step_calculate_materials_ratio*/
    function calculateMaterialsRatio() {
        var materials = $('.js-confThirdChooseMain.active');
        var ratio = 100;
        configurator.step3 = {
            reindeer: 0,
            bool: 0,
            flat: 0,
            has_green: 0
        }
        if (materials.length > 0)  {
            ratio = ratio / materials.length;
            materials.each(function () {
                configurator.step3[$(this).data('choose-type')+''] = ratio;
            })
        }
        if ($('.js-confThirdChooseGreen.active') && $('.js-confThirdChooseGreen.active').length > 0) {
            configurator.step3.has_green = 1;
        } else {
            configurator.step3.has_green = 0;
        }
    }
    /*third_step_calculate_materials_ratio*/

    /*third_step_set_image*/
    function setImageByMoss() {
        var keys = Object.keys(configurator.step3);
        var values = Object.values(configurator.step3);
        var string = '';
        var setSome = false;
        keys.forEach(function(el, i) {
            if (values[i] > 0 && el !== 'has_green') {
                if (!setSome) {
                    setSome = true;
                } else {
                    string += '_';
                }
                string += el;
            }
            if (values[i] > 0 && el === 'has_green') {
                if (!setSome) {
                    setSome = true;
                } else {
                    string += '_';
                }
                string += 'green';
            }
        })
        if (string === '') {
            $('.js-confThirdImgChosen').attr('src', '');
            $('.js-confFormMoss').val('');
        } else {
            if (mossImages[string] === undefined) {
                $('.js-confThirdImgChosen').attr('src', '');
                $('.js-confFormMoss').val('');
            } else {
                $('.js-confThirdImgChosen').attr('src', mossImages[string]);
                $('.js-confFormMoss').val(string);
            }
        }

        $('.js-confThirdImgWrapType').removeClass(['rectangle', 'circle', 'square', 'hexagon']);
        $('.js-confThirdImgWrapType').addClass(configurator.step1);
    }
    /*third_step_set_image*/

    /*third_step_set_names*/
    function setNamesByMoss() {
        var els = $('.js-confThirdChoose.active');
        var string = '';
        var setSome = false;
        if (els.length > 0) {
            els.each(function() {
                if (!setSome) {
                    setSome = true;
                } else {
                    string += ', ';
                }
                string += $(this).data('choose-name');
            })
        }
        if (string === '') {
            $('.js-confFormMoss').val('');
        } else {
            $('.js-confFormMoss').val(string);
        }
    }
    /*third_step_set_names*/

    /*calculate price by all getted data*/
    function calculatePrice() {
        var area_mt = area / 10000; // sm to m
        var perim_mt = perim / 100; // sm to m
        var moss = calculateMoss(area_mt);
        var frame = calculateFrame(perim_mt);

        var mdf = area_mt * confPrices.mdf;
        var glue = area_mt * confPrices.glue;
        var summ = moss + frame + mdf + glue;
        $('.textMdfCalc').html('Площадь м<sup>2</sup> * МДФ за м<sup>2</sup> = ' + area_mt + ' * ' + confPrices.mdf + ' = ' + mdf + '€');
        $('.textGlueCalc').html('Площадь м<sup>2</sup> * клей за м<sup>2</sup> = ' + area_mt + ' * ' + confPrices.glue + ' = ' + glue + '€');
        $('.textTotalCalc').html('Мох + Рамка + МДФ + клей = ' + moss + ' + ' + frame + ' + ' + mdf + ' + ' + glue + ' = ' + summ + '€');

        if (!thirdTypesChecked.moss && thirdTypesChecked.green) {
            $('.js-confCost').html('<span class="alert_mess">' + strings.green_alert + '</span>');
            $('.js-confFormPrice').val(0 + ' €');
        }
        else {
            var end_str = ' + VAT';
            if (thirdTypesChecked.logo_back) {
                end_str = end_str + '. <span class="alert_mess">' + strings.logo_blacklight_alert + '</span>';
            }
            if (confPrices.discount > 0) {
                var summ_disc = summ - (summ * (confPrices.discount / 100));
                $('.textTotalDiscCalc').html('Итог - 20% = ' + summ + ' - ' + (summ * (confPrices.discount / 100)) + ' = ' + summ_disc + '€');
                $('.js-confCost').html('<span class="old">' + Math.trunc(summ) + ' €' + ' </span>' + Math.trunc(summ_disc) + ' €' + end_str);
                $('.js-confFormPrice').val(Math.trunc(summ_disc) + ' €');
            }
            else {
                $('.js-confCost').html(Math.trunc(summ) + ' €' + end_str);
                $('.js-confFormPrice').val(Math.trunc(summ) + ' €');
            }
        }
    }
    function calculateMoss(area_mt) {
        var step3Keys = Object.keys(configurator.step3);
        var step3Vals = Object.values(configurator.step3);
        var summ = 0;
        var perc = 0;
        var test_str = '';
        var test_str_formula = '';
        var test_str_parts = '';
        var test_transl = {reindeer: 'Ягель', bool: 'Пластовой', flat: 'Кочковой'};
        step3Vals.forEach(function(el, i) {
            perc = 0;
            if (el > 0) {
                if (step3Keys[i] === 'has_green') {
                    perc = 0.2;
                    summ += area_mt * confPrices.green * perc;
                    if (i !== 0)
                        test_str_formula += ' + ';
                    test_str_formula += '(Площадь м<sup>2</sup> * Зелень * 20%)';

                    if (i !== 0)
                        test_str += ' + ';
                    test_str += '(' + area_mt + ' * ' + confPrices.green + ' * ' + (perc) + ')';

                    if (i !== 0)
                        test_str_parts += ' + ';
                    test_str_parts += (area_mt * confPrices.green * perc);
                } else {
                    perc = el / 100;
                    summ += area_mt * confPrices.moss[step3Keys[i]] * perc;

                    if (i !== 0)
                        test_str_formula += ' + ';
                    test_str_formula += '(Площадь м<sup>2</sup> * ' + test_transl[step3Keys[i]] + ' * ' + (el) + '%)';

                    if (i !== 0)
                        test_str += ' + ';
                    test_str += '(' + area_mt + ' * ' + confPrices.moss[step3Keys[i]] + ' * ' + (perc) + ')';

                    if (i !== 0)
                        test_str_parts += ' + ';
                    test_str_parts += (area_mt * confPrices.moss[step3Keys[i]] * perc);
                }
            }
        });
        summ = summ * confPrices.coefficient;
        $('.textMossCalc').html('(' + test_str_formula + ') * коэфициент = ' + '(' + test_str + ') * ' + confPrices.coefficient + ' = (' + test_str_parts + ') * ' + confPrices.coefficient + ' = ' + summ + '€');
        return summ;
    }
    function calculateFrame(perim_mt) {
        var summ = 0;
        var test_transl = {none: 'Без рамки', moss: 'Из мха', wooden: 'Деревянная', aluminum: 'Алюминиевая'};
        if (mode !== 'circle') {
            if (configurator.step4 !== '') {
                summ = perim_mt * confPrices.frame[configurator.step4];
            }
            $('.textFrameCalc').html('Периметр м * ' + test_transl[configurator.step4] + ' = ' + perim_mt + ' * ' + confPrices.frame[configurator.step4] + ' = ' + summ + '€');
        } else {
            if (configurator.step4 !== '') {
                if ($('select.js-confSetValue').val() === '')
                    return summ;
                if (confPrices.circle.frame[configurator.step4][$('select.js-confSetValue').val()] === 0)
                    return summ;

                summ = confPrices.circle.frame[configurator.step4][$('select.js-confSetValue').val()];
                $('.textFrameCalc').html('Фикс цена ' + test_transl[configurator.step4] + ' = ' + confPrices.circle.frame[configurator.step4][$('select.js-confSetValue').val()] + ' = ' + summ + '€');
            }
        }

        return summ;
    }
    /*calculate price by all getted data*/

    /*navigation*/
    $('.js-confNext, .js-confTopBtns').click(function() {
        var number = $(this).data('step');
        $('.js-confContScreens').removeClass('current');
        if (number === 1) {
            $('.js-confContScreens[data-screen="1"]').addClass('current');
        } else if (number === 2) {
            $('.js-confContScreens[data-screen="' + number + '-' + configurator.step1 + '"]').addClass('current');
        } else {
            $('.js-confContScreens[data-screen="' + number + '"]').addClass('current');
        }
        configTopMark(number);
        // var confWrap = document.querySelector('.page-configurator-app');
        // window.scrollTo(0, confWrap.offsetTop);
    });

    function configTopMark(step) {
        $('.js-confTopBtns').each(function(i, el){
            if (i+1 <= step) {
                $('.js-confTopBtns[data-step="' + (i+1) + '"]').addClass('current');
            } else {
                $('.js-confTopBtns[data-step="' + (i+1) + '"]').removeClass('current');
            }
        });
    }
    /*navigation*/


}( jQuery ) );
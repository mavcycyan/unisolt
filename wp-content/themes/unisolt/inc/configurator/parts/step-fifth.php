<div class="configurator-fifth">
    <div class="configurator-fifth-row">
        <div class="configurator-ttl configurator-second-ttl"><?php the_field('conf-message-step4'); ?></div>
        <div class="configurator-fifth-left">
<!--            <div class="configurator-fifth-canv js-fifthType">-->
<!--                <div class="rectangle current" data-type="rectangle"></div>-->
<!--                <div class="circle" data-type="circle"></div>-->
<!--                <div class="square" data-type="square"></div>-->
<!--                <div class="hexagon" data-type="hexagon"></div>-->
<!--            </div>-->
            <div class="configurator-wsldr-img">
                <span class="js-confThirdImgWrapType rectangle"><img src="" alt="" class="js-confThirdImgChosen"></span>
            </div>
        </div>
        <div class="configurator-fifth-right">
            <div class="configurator-fifth-inputs">
                <?php 
					if (pll_current_language() === 'ru') {
						echo do_shortcode('[contact-form-7 id="4b764a5" title="Форма конфигуратора"]');
					}
					elseif (pll_current_language() === 'el') {
						echo do_shortcode('[contact-form-7 id="ba1cb72" title="Форма конфигуратора EL"]');
					}
					else {
						echo do_shortcode('[contact-form-7 id="b0483b5" title="Форма конфигуратора EN"]');
					}
				?>
            </div>
        </div>
        <div class="configurator-navs">
            <div class="configurator-navs-prev"><button type="button" class="js-confNext" data-step="4"><?php pll_e('Prev') ?></button></div>

        </div>
    </div>
</div>

<div class="container">

    <?php $user = wp_get_current_user(); ?>
    <?php $can_see = false; ?>
    <?php if ($user->caps): ?>
        <?php foreach ($user->caps as $key => $caps): ?>
            <?php if ($key === 'administrator' && $caps === true) $can_see = true; ?>
        <?php endforeach; ?>
        <?php if ($caps) : ?>
            <p>Клей за м<sup>2</sup> - <?php echo ($glue = get_field('conf-price-glue')) ? $glue : '0'; ?> €</p>
            <p>МДФ за м<sup>2</sup> - <?php echo ($mdf = get_field('conf-price-mdf')) ? $mdf : '0'; ?> €</p>
            <p>Коэфициент - <?php echo ($coef = get_field('conf-price-coef')) ? $coef : '0'; ?></p>
            <p>Скидка - <?php echo ($discount = get_field('conf-price-discount')) ? $discount : 0; ?></p>
            <br>
            <br>
            <p class="mb-2">Площадь - <span class="textAreaCalc"></span></p>
            <p class="mb-2">Периметр - <span class="textPerimCalc"></span></p>
            <p class="mb-2">Мох - <span class="textMossCalc"></span></p>
            <p class="mb-2">Рамка - <span class="textFrameCalc"></span></p>
            <p class="mb-2">Клей - <span class="textGlueCalc"></span></p>
            <p class="mb-2">МДФ - <span class="textMdfCalc"></span></p>
            <p class="mb-2">Итог - <span class="textTotalCalc"></span></p>
            <?php if ($discount > 0) : ?><p class="mb-2">Со скидкой - <span class="textTotalDiscCalc"></span></p><?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
</div>

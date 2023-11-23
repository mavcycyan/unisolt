<div class="configurator-wsldr third_step">
    <div class="configurator-wsldr-row js-confImg" data-choose-step="step3">
        <div class="configurator-wsldr-left">
            <div class="configurator-ttl d-none d-lg-block"><?php the_field('conf-message-step3'); ?></div>
            <div class="configurator-wsldr-img">
                <span class="js-confThirdImgWrapType rectangle"><img src="" alt="" class="js-confThirdImgChosen"></span>
            </div>
        </div>
        <div class="configurator-wsldr-right">
            <div class="configurator-ttl d-block d-lg-none"><?php the_field('conf-message-step3'); ?></div>
            <div class="configurator-wsldr-slider">
                <div class="configurator-wsldr-slide">
                    <button type="button" class="js-confThirdChoose js-confThirdChooseMain" data-choose-type="reindeer" data-choose-name="<?php pll_e('Reindeer'); ?>">
                        <span class="configurator-wsldr-slide-txt"><?php pll_e('Reindeer'); ?></span>
                        <span class="configurator-wsldr-slide-img">
                            <?php $img = get_field('conf-step3-img-reindeer');  ?>
                            <?php $img = ($img) ? $img['sizes']['conf-mini'] : '';  ?>
                            <img src="<?php echo $img; ?>" alt="">
                        </span>
                    </button>
                </div>
                <div class="configurator-wsldr-slide">
                    <button type="button" class="js-confThirdChoose js-confThirdChooseMain" data-choose-type="bool" data-choose-name="<?php pll_e('Boll'); ?>">
                        <span class="configurator-wsldr-slide-txt"><?php pll_e('Boll'); ?></span>
                        <span class="configurator-wsldr-slide-img">
                            <?php $img = get_field('conf-step3-img-bool');  ?>
                            <?php $img = ($img) ? $img['sizes']['conf-mini'] : '';  ?>
                            <img src="<?php echo $img; ?>" alt="">
                        </span>
                    </button>
                </div>
                <div class="configurator-wsldr-slide">
                    <button type="button" class="js-confThirdChoose js-confThirdChooseMain" data-choose-type="flat" data-choose-name="<?php pll_e('Flat'); ?>">
                        <span class="configurator-wsldr-slide-txt"><?php pll_e('Flat'); ?></span>
                        <span class="configurator-wsldr-slide-img">
                            <?php $img = get_field('conf-step3-img-flat');  ?>
                            <?php $img = ($img) ? $img['sizes']['conf-mini'] : '';  ?>
                            <img src="<?php echo $img; ?>" alt="">
                        </span>
                    </button>
                </div>
                <div class="configurator-wsldr-slide">
                    <button type="button" class="js-confThirdChoose js-confThirdChooseGreen" data-choose-type="green" data-choose-name="<?php pll_e('Green'); ?>">
                        <span class="configurator-wsldr-slide-txt"><?php pll_e('Green'); ?></span>
                        <span class="configurator-wsldr-slide-img">
                            <?php $img = get_field('conf-step3-img-green');  ?>
                            <?php $img = ($img) ? $img['sizes']['conf-mini'] : '';  ?>
                            <img src="<?php echo $img; ?>" alt="">
                        </span>
                    </button>
                </div>
                <div class="configurator-wsldr-slide js-confItemNeedHid">
                    <button type="button" class="js-confThirdChoose" data-choose-type="logo" data-choose-name="<?php pll_e('Logo'); ?>">
                        <span class="configurator-wsldr-slide-txt"><?php pll_e('Logo'); ?></span>
                        <span class="configurator-wsldr-slide-img">
                            <?php $img = get_field('conf-step3-img-logo');  ?>
                            <?php $img = ($img) ? $img['sizes']['conf-mini'] : '';  ?>
                            <img src="<?php echo $img; ?>" alt="">
                        </span>
                    </button>
                </div>
                <div class="configurator-wsldr-slide js-confItemNeedHid">
                    <button type="button" class="js-confThirdChoose" data-choose-type="backlight" data-choose-name="<?php pll_e('Backlight'); ?>">
                        <span class="configurator-wsldr-slide-txt"><?php pll_e('Backlight'); ?></span>
                        <span class="configurator-wsldr-slide-img">
                            <?php $img = get_field('conf-step3-img-backlight');  ?>
                            <?php $img = ($img) ? $img['sizes']['conf-mini'] : '';  ?>
                            <img src="<?php echo $img; ?>" alt="">
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="configurator-navs">
            <div class="configurator-navs-prev"><button type="button" class="js-confNext" data-step="2"><?php pll_e('Prev') ?></button></div>
            <div class="configurator-navs-next"><button type="button" class="js-confNext" data-step="4"><?php pll_e('Next') ?></button></div>
        </div>
    </div>
</div>

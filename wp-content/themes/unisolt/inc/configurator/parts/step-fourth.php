<div class="configurator-wsldr">
    <div class="configurator-wsldr-row js-confImg" data-choose-step="step4">
        <div class="configurator-wsldr-right configurator-wsldr-fourth">
            <div class="configurator-ttl"><?php the_field('conf-message-step4'); ?></div>
            <div class="configurator-wsldr-slider">
                <div class="configurator-wsldr-slide">
                    <button type="button" class="active js-confFourthChoose" data-choose-img="" data-choose-type="none" data-choose-name="<?php pll_e('Without frame'); ?>">
                        <span class="configurator-wsldr-slide-txt"><?php pll_e('Without frame'); ?></span>
                        <span class="configurator-wsldr-slide-img">
                            <span class="without"></span>
                        </span>
                    </button>
                </div>
                <div class="configurator-wsldr-slide">
                    <?php $img = get_field('conf-step4-img-frame-moss'); $img_big = ''; $img_small = ''; ?>
                    <?php $img_big = (isset($img['big'])) ? $img['big']['sizes']['conf-full'] : '';  ?>
                    <button type="button" class="js-confFourthChoose" data-choose-img="<?php echo $img_big; ?>" data-choose-type="moss" data-choose-name="<?php pll_e('Moss'); ?>">
                        <span class="configurator-wsldr-slide-txt"><?php pll_e('Moss'); ?></span>
                        <span class="configurator-wsldr-slide-img">
                            <?php $img_small = (isset($img['small'])) ? $img['small']['sizes']['conf-mini'] : '';  ?>
                            <img src="<?php echo $img_small; ?>" alt="">
                        </span>
                    </button>
                </div>
                <div class="configurator-wsldr-slide">
                    <?php $img = get_field('conf-step4-img-frame-wooden'); $img_big = ''; $img_small = ''; ?>
                    <?php $img_big = (isset($img['big'])) ? $img['big']['sizes']['conf-full'] : '';  ?>
                    <button type="button" class="js-confFourthChoose" data-choose-img="<?php echo $img_big; ?>" data-choose-type="wooden" data-choose-name="<?php pll_e('Wooden'); ?>">
                        <span class="configurator-wsldr-slide-txt"><?php pll_e('Wooden'); ?></span>
                        <span class="configurator-wsldr-slide-img">
                            <?php $img_small = (isset($img['small'])) ? $img['small']['sizes']['conf-mini'] : '';  ?>
                            <img src="<?php echo $img_small; ?>" alt="">
                        </span>
                    </button>
                </div>
                <div class="configurator-wsldr-slide">
                    <?php $img = get_field('conf-step4-img-frame-aluminum'); $img_big = ''; $img_small = ''; ?>
                    <?php $img_big = (isset($img['big'])) ? $img['big']['sizes']['conf-full'] : '';  ?>
                    <button type="button" class="js-confFourthChoose" data-choose-img="<?php echo $img_big; ?>" data-choose-type="aluminum" data-choose-name="<?php pll_e('Aluminium'); ?>">
                        <span class="configurator-wsldr-slide-txt"><?php pll_e('Aluminium'); ?></span>
                        <span class="configurator-wsldr-slide-img">
                            <?php $img_small = (isset($img['small'])) ? $img['small']['sizes']['conf-mini'] : '';  ?>
                            <img src="<?php echo $img_small; ?>" alt="">
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="configurator-navs">
            <div class="configurator-navs-prev"><button type="button" class="js-confNext" data-step="3"><?php pll_e('Prev') ?></button></div>
            <div class="configurator-navs-next"><button type="button" class="js-confNext" data-step="5"><?php pll_e('Next') ?></button></div>
        </div>
    </div>
</div>

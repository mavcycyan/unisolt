<div class="configurator-wsldr first_step">
    <div class="configurator-wsldr-row">
        <div class="configurator-wsldr-left">
            <div class="configurator-ttl"><?php the_field('conf-message-step1'); ?></div>
            <div class="configurator-wsldr-canv js-confFirstTypeCanv">
                <div class="rectangle" data-first="rectangle"></div>
                <div class="circle d-none" data-first="circle"></div>
                <div class="square d-none" data-first="square"></div>
                <div class="hexagon d-none" data-first="hexagon"></div>
            </div>
        </div>
        <div class="configurator-wsldr-right">
            <div class="configurator-wsldr-slider">
                <div class="configurator-wsldr-slide">
                    <button type="button" class="active js-confFirstType" data-first="rectangle" data-choose-name="<?php pll_e('Rectangle'); ?>">
                        <span class="configurator-wsldr-slide-txt"><?php pll_e('Rectangle'); ?></span>
                        <span class="configurator-wsldr-slide-img">
                            <?php $img = get_field('conf-step1-img-rectangle');  ?>
                            <?php $img = ($img) ? $img['sizes']['conf-mini'] : '';  ?>
                            <img src="<?php echo $img; ?>" alt="">
                        </span>
                    </button>
                </div>
                <div class="configurator-wsldr-slide">
                    <button type="button" class="js-confFirstType" data-first="circle" data-choose-name="<?php pll_e('Circle'); ?>">
                        <span class="configurator-wsldr-slide-txt"><?php pll_e('Circle'); ?></span>
                        <span class="configurator-wsldr-slide-img">
                            <?php $img = get_field('conf-step1-img-circle');  ?>
                            <?php $img = ($img) ? $img['sizes']['conf-mini'] : '';  ?>
                            <img src="<?php echo $img; ?>" alt="">
                        </span>
                    </button>
                </div>
                <div class="configurator-wsldr-slide">
                    <button type="button" class="js-confFirstType" data-first="square" data-choose-name="<?php pll_e('Square'); ?>">
                        <span class="configurator-wsldr-slide-txt"><?php pll_e('Square'); ?></span>
                        <span class="configurator-wsldr-slide-img">
                            <?php $img = get_field('conf-step1-img-square');  ?>
                            <?php $img = ($img) ? $img['sizes']['conf-mini'] : '';  ?>
                            <img src="<?php echo $img; ?>" alt="">
                        </span>
                    </button>
                </div>
                <div class="configurator-wsldr-slide">
                    <button type="button" class="js-confFirstType" data-first="hexagon" data-choose-name="<?php pll_e('Hexagon'); ?>">
                        <span class="configurator-wsldr-slide-txt"><?php pll_e('Hexagon'); ?></span>
                        <span class="configurator-wsldr-slide-img">
                            <?php $img = get_field('conf-step1-img-hexagon');  ?>
                            <?php $img = ($img) ? $img['sizes']['conf-mini'] : '';  ?>
                            <img src="<?php echo $img; ?>" alt="">
                        </span>
                    </button>
                </div>
            </div>
            <div class="configurator-wsldr-next"><button type="button" class="js-confNext" data-step="2"><?php pll_e('Next') ?></button></div>
        </div>
    </div>
</div>

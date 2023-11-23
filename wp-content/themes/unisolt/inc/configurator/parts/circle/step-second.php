<div class="configurator-second">
    <div class="configurator-second-row">
        <div class="configurator-ttl configurator-second-ttl"><?php the_field('conf-message-step2'); ?></div>
        <div class="configurator-second-left">
            <div class="configurator-second-canv">
                <div class="circle"></div>
            </div>
        </div>
        <div class="configurator-second-right">
            <div class="configurator-second-inputs">
                <div class="configurator-input">
                    <label for=""><?php pll_e('Diameter') ?></label>
                    <div class="configurator-input-el">
                        <?php /* ?><input type="text"  class="js-confSetValue" data-type="diam"><?php */ ?>
                        <select name="" id="" class="js-confSetValue"  data-type="diam">
                            <option value="" selected>Диаметр</option>
                            <?php $circle_sizes = (isset($args['circle_sizes'])) ? $args['circle_sizes'] : array(); ?>
                            <?php if (count($circle_sizes) > 0) : ?>
                                <?php foreach ($circle_sizes as $size) : ?>
                                    <option value="<?php echo $size; ?>"><?php echo $size; ?>см</option>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="configurator-navs">
            <div class="configurator-navs-prev"><button type="button" class="js-confNext" data-step="1"><?php pll_e('Prev') ?></button></div>
            <div class="configurator-navs-next"><button type="button" class="js-confNext" data-step="3"><?php pll_e('Next') ?></button></div>
        </div>
    </div>
</div>

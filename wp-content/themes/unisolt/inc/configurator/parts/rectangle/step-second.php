<div class="configurator-second">
    <div class="configurator-second-row">
        <div class="configurator-ttl configurator-second-ttl"><?php the_field('conf-message-step2'); ?></div>
        <div class="configurator-second-left">
            <div class="configurator-second-canv">
                <div class="rectangle"></div>
            </div>
        </div>
        <div class="configurator-second-right">
            <div class="configurator-second-inputs">
                <div class="configurator-input">
                    <label for=""><?php pll_e('Height') ?></label>
                    <div class="configurator-input-el">
                        <input type="text"  class="js-confSetValue" data-type="height">
                        <span class="measure">см</span>
                    </div>
                </div>
                <div class="configurator-input">
                    <label for=""><?php pll_e('Width') ?></label>
                    <div class="configurator-input-el">
                        <input type="text"  class="js-confSetValue" data-type="width">
                        <span class="measure">см</span>
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

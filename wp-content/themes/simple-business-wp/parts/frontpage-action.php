<?php
if (simple_business_wp_get_option('action-toggle') == "1") {
    ?>
    <section id="<?php if (simple_business_wp_get_option('fp-action-slug')=='') {echo "action";} else {echo esc_attr(simple_business_wp_get_option('fp-action-slug'));} ?>" class="frontpage-action">
        <div class="row content_squeeze action_row">
            <div class="col-xs-12">
            <?php echo esc_html(simple_business_wp_get_option('action_text_content')); ?>
            </div>
        </div>
    </section>
    <?php
} else if (simple_business_wp_get_option('action-toggle') == "3") {

} else {
?>
    <section id="<?php if (simple_business_wp_get_option('fp-action-slug')=='') {echo "action";} else {echo esc_attr(simple_business_wp_get_option('fp-action-slug'));} ?>" class="frontpage-action">
        <div class="row content_squeeze action_row">
            <div class="col-xs-12">
                <div class="text-center action-block" style="padding-bottom:25px;">
                    <div class="action-paragraph">
                        <p class="action-text" data-sr="wait 0.5s and enter right and then ease-in-out 100px">
                            <?php echo simple_business_wp_get_option('fp-action1-text1'); ?>
                        </p>
                    </div>
                    <div class="action-paragraph">
                        <p class="action-text" data-sr="wait 0.5s and enter left and then ease-in-out 100px">
                            <?php echo simple_business_wp_get_option('fp-action1-text2'); ?>
                        </p>
                    </div>
                    <div class="action-paragraph">
                        <p class="action-text" data-sr="wait 0.5s and enter right and then ease-in-out 100px">
                            <?php echo simple_business_wp_get_option('fp-action1-text3'); ?>
                        </p>
                    </div>
                </div>
                <div class="text-center action-button">
                    <div class="action-background"></div>
                    <a href="<?php echo esc_url(simple_business_wp_get_option('fp-action-button-url')); ?>" type="button" class="btn btn-primary text-center">
                        <?php echo esc_html(simple_business_wp_get_option('fp-action-button-text')); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>

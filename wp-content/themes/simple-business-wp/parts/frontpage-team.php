<?php if (simple_business_wp_get_option('fp-team-toggle') == '1') { ?>
    <section id="<?php if (simple_business_wp_get_option('fp-team-slug')=='') {echo "team";} else {echo esc_attr(simple_business_wp_get_option('fp-team-slug'));} ?>" class="frontpage-team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="team-title h1"><?php echo esc_html(simple_business_wp_get_option('fp-team-title')); ?></div>
                    <div class="team-sub-title h4"><?php echo esc_html(simple_business_wp_get_option('fp-team-sub-title')); ?></div>
                </div>
            </div>
        </div>
    </section>
<?php } else if (simple_business_wp_get_option('fp-team-toggle') == '3') {
    // Don't do anything
} else { ?>
    <section id="<?php if (simple_business_wp_get_option('fp-team-slug')=='') {echo "team";} else {echo esc_attr(simple_business_wp_get_option('fp-team-slug'));} ?>" class="frontpage-team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="team-title h1"><?php echo esc_html(simple_business_wp_get_option('fp-team-title')); ?></div>
                    <div class="team-sub-title h4"><?php echo simple_business_wp_get_option('fp-team-sub-title'); ?></div>
                    <div class="centered">
                        <div class="team-item" data-sr="wait 0.3s, enter right and move 50px after 1s">
                            <img class="img-responsive img-circle center-block" src="<?php echo esc_url(simple_business_wp_get_option('fp-team-image')); ?>" />
                            <h4 class="team-item-title"><?php echo simple_business_wp_get_option('fp-team-name'); ?></h4>
                            <h5 class="team-item-sub-title"><?php echo simple_business_wp_get_option('fp-team-job'); ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>


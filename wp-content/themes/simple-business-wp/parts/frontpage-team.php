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
                            <img class="img-responsive img-circle center-block" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/01/Nath2-1-e1546696447730-300x300.jpg" />
                            <h4 class="team-item-title"><?php echo simple_business_wp_get_option('fp-team-name'); ?></h4>
                            <h5 class="team-item-sub-title"><?php echo simple_business_wp_get_option('fp-team-job'); ?></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row link-image-row">
                <a href="http://www.rncp.cncp.gouv.fr/grand-public/visualisationFiche?format=fr&fiche=13375"><img class="img-responsive center-block link-image" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/01/cncp-e1546697437540-300x235.jpg" /></a>
                <a href="https://www.sophrologie-formation.fr"><img class="img-responsive center-block link-image" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/01/aliotta-300x300.jpg" /></a>
                <a href="https://www.chambre-syndicale-sophrologie.fr/titre-rncp/"><img class="img-responsive center-block link-image" src="<?php echo get_home_url(); ?>/wp-content/uploads/2019/01/css-300x295.png" /></a>
            </div>
        </div>
    </section>
<?php } ?>


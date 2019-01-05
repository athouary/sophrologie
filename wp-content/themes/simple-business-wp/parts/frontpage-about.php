<?php if (simple_business_wp_get_option('fp-about-toggle') == '1') { ?>
    <section id="<?php if (simple_business_wp_get_option('fp-about-slug')=='') {echo "about";} else {echo esc_attr(simple_business_wp_get_option('fp-about-slug'));} ?>" class="frontpage-about content_squeeze">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if (simple_business_wp_get_option('fp-about-title') != '') { ?>
                        <div class="about-title h1"><?php echo esc_html(simple_business_wp_get_option('fp-about-title')); ?></div>
                    <?php } ?>
                    <?php if (simple_business_wp_get_option('fp-about-sub-title') != '') { ?>
                        <div class="about-sub-title h4"><?php echo esc_html(simple_business_wp_get_option('fp-about-sub-title')); ?></div>
                    <?php } ?>
                    <?php if (simple_business_wp_get_option('fp-about-description') != '') { ?>
                        <p class="about-desc"><?php echo esc_html(simple_business_wp_get_option('fp-about-description')); ?></p>
                    <?php } ?>
                    <div class="row frontpage-about-row" data-sr="enter left and move 50px after 1s">
                        <div class="col-sm-6 frontpage-about-item">
                            <i class="frontpage-about-icon"><?php echo esc_html(simple_business_wp_get_option('fp-about-icon-1'))?></i>
                            <div class="frontpage-about-column">
                                <h4><?php echo simple_business_wp_get_option('fp-about-title-1')?></h4>
                                <p><?php echo simple_business_wp_get_option('fp-about-text-1')?></p>
                            </div>
                        </div>
                        <div class="col-sm-6 frontpage-about-item">
                            <i class="frontpage-about-icon"><?php echo esc_html(simple_business_wp_get_option('fp-about-icon-2'))?></i>
                            <div class="frontpage-about-column">
                                <h4><?php echo simple_business_wp_get_option('fp-about-title-2')?></h4>
                                <p><?php echo simple_business_wp_get_option('fp-about-text-2')?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row frontpage-about-row"  data-sr="enter left and move 50px after 1s">
                        <div class="col-sm-6 frontpage-about-item">
                            <i class="frontpage-about-icon"><?php echo esc_html(simple_business_wp_get_option('fp-about-icon-3'))?></i>
                            <div class="frontpage-about-column">
                                <h4><?php echo simple_business_wp_get_option('fp-about-title-3')?></h4>
                                <p><?php echo simple_business_wp_get_option('fp-about-text-3')?></p>
                            </div>
                        </div>
                        <div class="col-sm-6 frontpage-about-item">
                            <i class="frontpage-about-icon"><?php echo esc_html(simple_business_wp_get_option('fp-about-icon-4'))?></i>
                            <div class="frontpage-about-column">
                                <h4><?php echo simple_business_wp_get_option('fp-about-title-4')?></h4>
                                <p><?php echo simple_business_wp_get_option('fp-about-text-4')?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 frontpage-about-second">
                    <div class="frontpage-about-frame">
                        <div class="frontpage-about-frameColumn">
                            <h4 class="frontpage-about-frameTitle"><?php echo simple_business_wp_get_option('fp-about-frame-title-1')?></h4>
                            <p class="frontpage-about-frameText"><?php echo simple_business_wp_get_option('fp-about-frame-text-1')?></p>
                        </div>
                        <div class="frontpage-about-frameColumn">
                            <h4 class="frontpage-about-frameTitle"><?php echo simple_business_wp_get_option('fp-about-frame-title-2')?></h4>
                            <p class="frontpage-about-frameText"><?php echo simple_business_wp_get_option('fp-about-frame-text-2')?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
<?php } else if (simple_business_wp_get_option('fp-about-toggle') == '3') {
    // Don't do anything
} else { ?>
    <section id="<?php if (simple_business_wp_get_option('fp-about-slug')=='') {echo "about";} else {echo esc_attr(simple_business_wp_get_option('fp-about-slug'));} ?>" class="frontpage-about content_squeeze">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-title h1">About Us</div>
                    <div class="about-sub-title h4">A little bit of background on our fabulous company.</div>
                    <p class="about-desc">Uenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.Cum sociis natoque penatibus.</p>
                    <div class="row frontpage-about-row" data-sr="enter left and move 50px after 1s">
                        <div class="col-sm-6">
                            <i class="fa fa-bitbucket"></i><h4>BRAND &amp; IDENTITY</h4><p>Praesent faucibus nisl sit amet nulla sollicitudin pretium a sed purus. Nullam bibendum porta magna.</p>
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-bitbucket"></i><h4>BRAND &amp; IDENTITY</h4><p>Praesent faucibus nisl sit amet nulla sollicitudin pretium a sed purus. Nullam bibendum porta magna.</p>
                        </div>
                    </div>
                    <div class="row frontpage-about-row"  data-sr="enter left and move 50px after 1s">
                        <div class="col-sm-6">
                            <i class="fa fa-bitbucket"></i><h4>BRAND &amp; IDENTITY</h4><p>Praesent faucibus nisl sit amet nulla sollicitudin pretium a sed purus. Nullam bibendum porta magna.</p>
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-bitbucket"></i><h4>BRAND &amp; IDENTITY</h4><p>Praesent faucibus nisl sit amet nulla sollicitudin pretium a sed purus. Nullam bibendum porta magna.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
<?php } ?>

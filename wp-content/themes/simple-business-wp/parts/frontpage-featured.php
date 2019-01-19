<?php
// set variables if front-page
$simple_business_wp_first_featured = simple_business_wp_get_option('simple_business_wp_first_featured');
$simple_business_wp_second_featured = simple_business_wp_get_option('simple_business_wp_second_featured');
$simple_business_wp_third_featured = simple_business_wp_get_option('simple_business_wp_third_featured');
$simple_business_wp_fourth_featured = simple_business_wp_get_option('simple_business_wp_fourth_featured');
if (is_front_page()) {
    if (simple_business_wp_get_option('featured-toggle') == "1") {
        $simple_business_wp_featured_1 = array(
            'simple_business_wp_first_featured'              =>  $simple_business_wp_first_featured,
            'simple_business_wp_third_featured'             =>  $simple_business_wp_third_featured,
            );
        $simple_business_wp_featured_2 = array(
          'simple_business_wp_second_featured'            =>  $simple_business_wp_second_featured,
          'simple_business_wp_fourth_featured'             =>  $simple_business_wp_fourth_featured,
    );
    ?>
    <section id="<?php if (simple_business_wp_get_option('fp-featured-slug')=='') {echo "featured";} else {echo esc_attr(simple_business_wp_get_option('fp-featured-slug'));} ?>" class="frontpage-featured">
        <h2 class="features-title h1">
            <?php echo esc_html(simple_business_wp_get_option('simple_business_title_featured')); ?>
        </h2>
        <div class="row frontpage_featured content_squeeze row-centered">
            <div class="col-sm-6 col-centered featured">
                <?php foreach ($simple_business_wp_featured_1 as $key => $featured) {
                    $icon = simple_business_wp_get_option( $key . '_icon');
                    $text = simple_business_wp_get_option( $key . '_text');
                    ?>
                    <div id="<?php echo $key; ?>" class="col-sm-12 col-centered featured frontpage_featured_item <?php echo $key; ?>" data-sr="wait 0.5s and then ease-in-out 100px">
                        <?php
                        if (!empty($featured)) {
                            ?>
                                <i class="fa <?php echo $icon; ?>"></i>
                                <h3 class="text-center"><?php echo $featured; ?></h3>
                                <?php echo $text; ?>
                            <?php
                        }
                        ?>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-sm-6 col-centered featured">
                <?php foreach ($simple_business_wp_featured_2 as $key => $featured) {
                    $icon = simple_business_wp_get_option( $key . '_icon');
                    $text = simple_business_wp_get_option( $key . '_text');
                    ?>
                    <div id="<?php echo $key; ?>" class="col-sm-12 col-centered featured" data-sr="wait 1s and then ease-in-out 100px">
                        <?php
                        if (!empty($featured)) {
                            ?>
                                <div class="frontpage_featured_item">
                                    <i class="fa <?php echo $icon; ?>"></i>
                                    <h3 class="text-center"><?php echo $featured; ?></h3>
                                    <?php echo $text; ?>
                                </div>
                            <?php
                        }
                        ?>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <?php } else if (simple_business_wp_get_option('featured-toggle') == "3") { ?>

    <?php } else { ?>
    <section id="<?php if (simple_business_wp_get_option('fp-featured-slug')=='') {echo "featured";} else {echo esc_attr(simple_business_wp_get_option('fp-featured-slug'));} ?>" class="frontpage-featured">
        <div class="row frontpage_featured content_squeeze row-centered">
            <div id="simple_business_wp_left_featured" class="col-sm-4 col-centered featured">
                <div class="frontpage_featured_item">
                    <i class="fa fa-heart"></i>
                    <h3 class="text-center"><a href="#">Sample Page</a></h3>
                    This is an example page. It's different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most
                </div>
            </div>
            <div id="simple_business_wp_center_featured" class="col-sm-4 col-centered featured">
                <div class="frontpage_featured_item">
                    <i class="fa fa-paper-plane"></i>
                    <h3 class="text-center"><a href="#">Sample Page</a></h3>
                    This is an example page. It's different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most
                </div>
            </div>
            <div id="simple_business_wp_right_featured" class="col-sm-4 col-centered featured">
                <div class="frontpage_featured_item">
                    <i class="fa fa-bolt"></i>
                    <h3 class="text-center"><a href="#">Sample Page</a></h3>
                    This is an example page. It's different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most
                </div>
            </div>
        </div>
    </section>
    <?php }
}
?>

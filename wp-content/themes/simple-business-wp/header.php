<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_home_url(); ?>/wp-content/uploads/2019/01/favicon.png">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php
        wp_head();
        ?>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/solid.css" integrity="sha384-+0VIRx+yz1WBcCTXBkVQYIBVNEFH1eP6Zknm16roZCyeNg2maWEpk/l/KsyFKs7G" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/fontawesome.css" integrity="sha384-jLuaxTTBR42U2qJ/pm4JRouHkEDHkVqH0T1nyQXn1mZ7Snycpf6Rl25VBNthU4z0" crossorigin="anonymous">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script>
          function onSubmit(token) {
            console.log('ON SUBMIT')
            document.getElementById("contact-form").submit();
          }
        </script>
    </head>
    <body <?php body_class(); ?> id="<?php if (simple_business_wp_get_option('home-slug')=='') {echo "home";} else {echo esc_attr(simple_business_wp_get_option('home-slug'));} ?>">
        <div class="container">
            <header>
                <?php
                get_template_part( 'parts/header', 'content');
                get_template_part( 'parts/header', 'menu');
                ?>
            </header>
            <div class="line"></div>


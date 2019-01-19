<?php

// #################################################
// Reg. js / css
// #################################################

function simple_business_wp_customizer_scripts() {
    wp_register_script( 'simple_business_wp_customizer_scripts', get_template_directory_uri() . '/assets/js/customizer.js', array("jquery"), '', true  );
    wp_enqueue_script( 'simple_business_wp_customizer_scripts' );
}
add_action( 'customize_controls_enqueue_scripts', 'simple_business_wp_customizer_scripts' );

function simple_business_wp_customizer_styles() { ?>
	<style type="text/css">
	    .button-simple-business-wp-secondary{width: 80%!important;margin: 5px auto 5px auto!important; display: block!important; text-align: center!important;margin-top:15px!important;margin-bottom:15px!important;}
        .button-nimbus{background: #e92c6a!important; border-color:#e92c6a!important; -webkit-box-shadow: 0 1px 0 #e92c6a!important; box-shadow: 0 1px 0 #e92c6a!important; color: #fff!important; text-decoration: none!important; text-shadow: 0 -1px 1px #e92c6a,1px 0 1px #e92c6a,0 1px 1px #e92c6a,-1px 0 1px #e92c6a!important;width: 80%!important; margin: 5px auto 5px auto!important; display: block!important; text-align: center!important;margin-top:15px!important;margin-bottom:15px!important;}
        .simple-business-wp-hide{display:none!important;}
        #accordion-section-pro_features>h3.accordion-section-title:before,#accordion-section-slideshow-options>h3.accordion-section-title:before { content: "Pro"!important; position: relative!important; top: -1px!important; margin-left: 0px!important; padding: 3px 6px !important; line-height: 1.5 !important; font-size: 9px !important; color: #ffffff !important; background-color: #e92c6a!important; letter-spacing: 1px!important; text-transform: uppercase!important; -webkit-font-smoothing: subpixel-antialiased !important; }
	</style>
<?php }
add_action( 'customize_controls_print_styles', 'simple_business_wp_customizer_styles', 20 );



// #################################################
// Kirki
// #################################################


Kirki::add_config( 'simple-business-wp-config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );


// User Guide

//Kirki::add_section( 'setup', array(
//    'title'          => __( 'Theme Userguide', 'simple-business-wp' ),
//    'description'    => '',
//    'panel'          => '',
//    'priority'    => 1,
//    'capability'     => 'edit_theme_options',
//    'theme_supports' => '',
//) );

//Kirki::add_field( 'simple-business-wp-config', array(
//	'settings' => 'userguide-info',
//	'label'    => __( 'Userguide', 'simple-business-wp' ),
//	'section'  => 'setup',
//	'type'     => 'custom',
//	'priority'    => 5,
//	'description'   => __( 'This theme was designed to be very easy to set up but just in case we\'ve created a userguide to assist: ', 'simple-business-wp' ) . '<a href="https://docs.google.com/document/d/1VGiKw3Z15bHCcsbKRlbzecJ8vRmDwd2_wWnIzR-OtTY/" target="_blank" class="button button-simple-business-wp-secondary">View User Guide</a>',
//) );


// General

Kirki::add_section( 'general', array(
    'title'          => __( 'Préférences générales', 'simple-business-wp' ),
    'description'    => '',
    'panel'          => '',
    'priority'    => 1,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

//Kirki::add_field( 'simple-business-wp-config', array(
//	'settings' => 'logo',
//	'label'    => __( 'Text Logo', 'simple-business-wp' ),
//	'section'  => 'general',
//	'type'     => 'text',
//	'priority'    => 5,
//	'default'  => ''
//) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'copyright',
	'label'    => __( 'Texte du copyright', 'simple-business-wp' ),
	'section'  => 'general',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => get_bloginfo( 'name' )
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'home-slug',
	'label'    => __( 'Identifiant pour URL', 'simple-business-wp' ),
	'section'  => 'general',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => 'home',
) );

// Social Media

//Kirki::add_section( 'fp-social', array(
//    'title'          => __( 'Header Social Media Section', 'simple-business-wp' ),
//    'description'    => '',
//    'panel'          => '',
//    'priority'    => 5,
//    'capability'     => 'edit_theme_options',
//    'theme_supports' => '',
//) );
//
//Kirki::add_field( 'simple-business-wp-config', array(
//	'type'        => 'radio-buttonset',
//	'settings'    => 'social-toggle',
//	'label'       => __( 'Social Status', 'simple-business-wp' ),
//	'section'     => 'fp-social',
//	'default'     => '2',
//	'priority'    => 5,
//	'choices'     => array(
//		'1'   => esc_attr__( 'Show', 'simple-business-wp' ),
//		'2' => esc_attr__( 'Demo', 'simple-business-wp' ),
//		'3'  => esc_attr__( 'Hide', 'simple-business-wp' ),
//	),
//) );
//
//Kirki::add_field( 'simple-business-wp-config', array(
//	'settings' => 'simple_business_wp_facebook_url',
//	'label'    => __( 'Facebook URL', 'simple-business-wp' ),
//	'section'  => 'fp-social',
//	'type'     => 'text',
//	'priority'    => 5,
//	'default'  => '',
//	'sanitize_callback' => 'simple_business_wp_sanitize_url'
//) );
//
//Kirki::add_field( 'simple-business-wp-config', array(
//	'settings' => 'simple_business_wp_linkedin_url',
//	'label'    => __( 'LinkedIn URL', 'simple-business-wp' ),
//	'section'  => 'fp-social',
//	'type'     => 'text',
//	'priority'    => 5,
//	'default'  => '',
//	'sanitize_callback' => 'simple_business_wp_sanitize_url'
//) );
//
//Kirki::add_field( 'simple-business-wp-config', array(
//	'settings' => 'simple_business_wp_twitter_url',
//	'label'    => __( 'Twitter Feed URL', 'simple-business-wp' ),
//	'section'  => 'fp-social',
//	'type'     => 'text',
//	'priority'    => 5,
//	'default'  => '',
//	'sanitize_callback' => 'simple_business_wp_sanitize_url'
//) );
//
//
//Kirki::add_field( 'simple-business-wp-config', array(
//	'settings' => 'simple_business_wp_mail_url',
//	'label'    => __( 'Email Address', 'simple-business-wp' ),
//	'section'  => 'fp-social',
//	'type'     => 'text',
//	'priority'    => 5,
//	'default'  => '',
//	'sanitize_callback' => 'simple_business_wp_sanitize_email'
//) );
//
//Kirki::add_field( 'simple-business-wp-config', array(
//	'type'        => 'checkbox',
//	'settings'    => 'simple_business_wp_hide_rss_icon',
//	'label'       => __( 'Hide RSS Icon', 'simple-business-wp' ),
//	'section'     => 'fp-social',
//	'default'     => '0', // 1 = on | 0 = off
//	'priority'    => 5,
//) );

// Banner Stuff Here

Kirki::add_panel( 'banner_settings', array(
    'priority'    => 5,
    'title'       => __( 'Zone de la bannière', 'simple-business-wp' ),
    'description' => '',
) );


Kirki::add_section( 'fp_banner_options', array(
    'title'          => __( 'Bannière', 'simple-business-wp' ),
    'description'    => '',
    'panel'          => 'banner_settings',
    'priority'    => 5,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );


//Kirki::add_field( 'simple-business-wp-config', array(
//	'type'        => 'radio-buttonset',
//	'settings'    => 'fp-banner-toggle',
//	'label'       => __( 'Frontpage Banner Status', 'simple-business-wp' ),
//	'section'     => 'fp_banner_options',
//	'default'     => '2',
//	'priority'    => 5,
//	'choices'     => array(
//		'1'   => __( 'Show', 'simple-business-wp' ),
//        '2'   => __( 'Demo', 'simple-business-wp' ),
//		'3'   => __( 'Hide', 'simple-business-wp' ),
//	),
//) );



Kirki::add_section( 'fp_static_banner_options', array(
    'title'          => __( 'Image', 'simple-business-wp' ),
    'panel'          => 'banner_settings',
    'priority'    => 5,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );


Kirki::add_field( 'simple-business-wp-config', array(
	'type'        => 'image',
	'settings'    => 'simple_business_wp_content_width_banner',
	'label'       => __( 'Image principale', 'simple-business-wp' ),
	'section'     => 'fp_static_banner_options',
	'default'     => '',
	'priority'    => 5,
) );

// Action 1

Kirki::add_section( 'fp-action1', array(
    'title'          => __( 'Introduction', 'simple-business-wp' ),
    'description'    => '',
    'panel'          => '',
    'priority'    => 5,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

//Kirki::add_field( 'simple-business-wp-config', array(
//	'type'        => 'radio-buttonset',
//	'settings'    => 'action-toggle',
//	'label'       => __( 'Frontpage Action Row Status', 'simple-business-wp' ),
//	'section'     => 'fp-action1',
//	'default'     => '2',
//	'priority'    => 5,
//	'choices'     => array(
//		'1'   => esc_attr__( 'Show', 'simple-business-wp' ),
//		'2' => esc_attr__( 'Demo', 'simple-business-wp' ),
//		'3'  => esc_attr__( 'Hide', 'simple-business-wp' ),
//	),
//) );

Kirki::add_field( 'simple-business-wp-config', array(
	'type'     => 'textarea',
	'settings' => 'fp-action1-text1',
	'label'    => __( 'Texte 1', 'simple-business-wp' ),
	'section'     => 'fp-action1',
	'default'  => 'Default',
	'priority'    => 5,
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'type'     => 'textarea',
	'settings' => 'fp-action1-text2',
	'label'    => __( 'Texte 2', 'simple-business-wp' ),
	'section'     => 'fp-action1',
	'default'  => 'Default',
	'priority'    => 5,
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'type'     => 'textarea',
	'settings' => 'fp-action1-text3',
	'label'    => __( 'Texte 3', 'simple-business-wp' ),
	'section'     => 'fp-action1',
	'default'  => 'Default',
	'priority'    => 5,
) );


//Kirki::add_field( 'simple-business-wp-config', array(
//	'settings' => 'fp-action-slug',
//	'label'    => __( 'Identifiant du bouton', 'simple-business-wp' ),
//	'section'  => 'fp-action1',
//	'type'     => 'text',
//	'priority'    => 5,
//	'default'  => 'action1',
//) );

// Frontpage Featured

Kirki::add_section( 'fp-featured', array(
    'title'          => __( 'Indications', 'simple-business-wp' ),
    'description'    => '',
    'panel'          => '',
    'priority'    => 5,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

//Kirki::add_field( 'simple-business-wp-config', array(
//	'type'        => 'radio-buttonset',
//	'settings'    => 'featured-toggle',
//	'label'       => __( 'Frontpage Featured Status', 'simple-business-wp' ),
//	'section'     => 'fp-featured',
//	'default'     => '1',
//	'priority'    => 5,
//	'choices'     => array(
//		'1'   => esc_attr__( 'Show', 'simple-business-wp' ),
//		'2' => esc_attr__( 'Demo', 'simple-business-wp' ),
//		'3'  => esc_attr__( 'Hide', 'simple-business-wp' ),
//	),
//) );

Kirki::add_field( 'simple-business-wp-config', array(
	'type'        => 'text',
	'settings'    => 'simple_business_title_featured',
	'label'       => __( 'Titre', 'simple-business-wp' ),
	'section'     => 'fp-featured',
	'default'     => 'Titre',
	'priority'    => 5,
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'type'        => 'text',
	'settings'    => 'simple_business_wp_first_featured',
	'label'       => __( 'Sous-titre 1', 'simple-business-wp' ),
	'section'     => 'fp-featured',
	'default'     => 'Titre 1',
	'priority'    => 5,
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'simple_business_wp_first_featured_icon',
	'label'    => __( 'Picto 1', 'simple-business-wp' ),
	'section'  => 'fp-featured',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => 'fa-bomb',
	'description'   => __( 'Entrer une classe fontawesome.', 'simple-business-wp' ),
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'type'        => 'textarea',
	'settings'    => 'simple_business_wp_first_featured_text',
	'label'       => __( 'Texte 1', 'simple-business-wp' ),
	'section'     => 'fp-featured',
	'default'     => 'Add text here',
	'priority'    => 5,
) );


Kirki::add_field( 'simple-business-wp-config', array(
	'type'        => 'text',
	'settings'    => 'simple_business_wp_second_featured',
	'label'       => __( 'Sous-titre 2', 'simple-business-wp' ),
	'section'     => 'fp-featured',
	'default'     => 'Titre 2',
	'priority'    => 5,
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'simple_business_wp_second_featured_icon',
	'label'    => __( 'Picto 2', 'simple-business-wp' ),
	'section'  => 'fp-featured',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => 'fa-bomb',
	'description'   => __( 'Entrer une classe fontawesome.', 'simple-business-wp' ),
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'type'        => 'textarea',
	'settings'    => 'simple_business_wp_second_featured_text',
	'label'       => __( 'Text 2', 'simple-business-wp' ),
	'section'     => 'fp-featured',
	'default'     => 'Add text here',
	'priority'    => 5,
) );


Kirki::add_field( 'simple-business-wp-config', array(
	'type'        => 'text',
	'settings'    => 'simple_business_wp_third_featured',
	'label'       => __( 'Sous-titre 3', 'simple-business-wp' ),
	'section'     => 'fp-featured',
	'default'     => 'Titre 3',
	'priority'    => 5,
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'simple_business_wp_third_featured_icon',
	'label'    => __( 'Picto 3', 'simple-business-wp' ),
	'section'  => 'fp-featured',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => 'fa-bomb',
	'description'   => __( 'Entrer une classe fontawesome.', 'simple-business-wp' ),
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'type'        => 'textarea',
	'settings'    => 'simple_business_wp_third_featured_text',
	'label'       => __( 'Texte 3', 'simple-business-wp' ),
	'section'     => 'fp-featured',
	'default'     => 'Add text here',
	'priority'    => 5,
) );


Kirki::add_field( 'simple-business-wp-config', array(
	'type'        => 'text',
	'settings'    => 'simple_business_wp_fourth_featured',
	'label'       => __( 'Sous-titre 4', 'simple-business-wp' ),
	'section'     => 'fp-featured',
	'default'     => 'Titre 4',
	'priority'    => 5,
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'simple_business_wp_fourth_featured_icon',
	'label'    => __( 'FourtPicto 4', 'simple-business-wp' ),
	'section'  => 'fp-featured',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => 'fa-bomb',
	'description'   => __( 'Entrer une classe fontawesome.', 'simple-business-wp' ),
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'type'        => 'textarea',
	'settings'    => 'simple_business_wp_fourth_featured_text',
	'label'       => __( 'Texte 4', 'simple-business-wp' ),
	'section'     => 'fp-featured',
	'default'     => 'Add text here',
	'priority'    => 5,
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-featured-slug',
	'label'    => __( 'Identifiant pour URL', 'simple-business-wp' ),
	'section'  => 'fp-featured',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => 'featured',
) );


// About

Kirki::add_section( 'fp-about', array(
    'title'          => __( 'Déroulé de séance', 'simple-business-wp' ),
    'description'    => '',
    'panel'          => '',
    'priority'    => 5,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

//Kirki::add_field( 'simple-business-wp-config', array(
//	'type'        => 'radio-buttonset',
//	'settings'    => 'fp-about-toggle',
//	'label'       => __( 'About Status', 'simple-business-wp' ),
//	'section'     => 'fp-about',
//	'default'     => '1',
//	'priority'    => 5,
//	'choices'     => array(
//		'1'   => esc_attr__( 'Show', 'simple-business-wp' ),
//		'2' => esc_attr__( 'Demo', 'simple-business-wp' ),
//		'3'  => esc_attr__( 'Hide', 'simple-business-wp' ),
//	),
//) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-about-title',
	'label'    => __( 'Titre principal', 'simple-business-wp' ),
	'section'  => 'fp-about',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-about-sub-title',
	'label'    => __( 'Sous-titre', 'simple-business-wp' ),
	'section'  => 'fp-about',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-about-description',
	'label'    => __( 'Description', 'simple-business-wp' ),
	'section'  => 'fp-about',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-about-title-1',
	'label'    => __( 'Étape 1 - Titre', 'simple-business-wp' ),
	'section'  => 'fp-about',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-about-text-1',
	'label'    => __( 'Étape 1 - Contenu', 'simple-business-wp' ),
	'section'  => 'fp-about',
	'type'     => 'textarea',
	'priority'    => 5,
	'default'  => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-about-icon-1',
	'label'    => __( 'Étape 1 - Icone', 'simple-business-wp' ),
	'section'  => 'fp-about',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => 'fa-bomb',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-about-title-2',
	'label'    => __( 'Étape 2 - Titre', 'simple-business-wp' ),
	'section'  => 'fp-about',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-about-text-2',
	'label'    => __( 'Étape 2 - Contenu', 'simple-business-wp' ),
	'section'  => 'fp-about',
	'type'     => 'textarea',
	'priority'    => 5,
	'default'  => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-about-icon-2',
	'label'    => __( 'Étape 2 - Icone', 'simple-business-wp' ),
	'section'  => 'fp-about',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => 'fa-bomb',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-about-title-3',
	'label'    => __( 'Étape 3 - Titre', 'simple-business-wp' ),
	'section'  => 'fp-about',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-about-text-3',
	'label'    => __( 'Étape 3 - Contenu', 'simple-business-wp' ),
	'section'  => 'fp-about',
	'type'     => 'textarea',
	'priority'    => 5,
	'default'  => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-about-icon-3',
	'label'    => __( 'Étape 3 - Icone', 'simple-business-wp' ),
	'section'  => 'fp-about',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => 'fa-bomb',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-about-title-4',
	'label'    => __( 'Étape 4 - Titre', 'simple-business-wp' ),
	'section'  => 'fp-about',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-about-text-4',
	'label'    => __( 'Étape 4 - Contenu', 'simple-business-wp' ),
	'section'  => 'fp-about',
	'type'     => 'textarea',
	'priority'    => 5,
	'default'  => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-about-icon-4',
	'label'    => __( 'Étape 4 - Icone', 'simple-business-wp' ),
	'section'  => 'fp-about',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => 'fa-bomb',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-about-frame-title-1',
	'label'    => __( 'Encadré - Premier titre', 'simple-business-wp' ),
	'section'  => 'fp-about',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-about-frame-text-1',
	'label'    => __( 'Encadré - Premier texte', 'simple-business-wp' ),
	'section'  => 'fp-about',
	'type'     => 'textarea',
	'priority'    => 5,
	'default'  => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-about-frame-title-2',
	'label'    => __( 'Encadré - Second titre', 'simple-business-wp' ),
	'section'  => 'fp-about',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-about-frame-text-2',
	'label'    => __( 'Encadré - Second texte', 'simple-business-wp' ),
	'section'  => 'fp-about',
	'type'     => 'textarea',
	'priority'    => 5,
	'default'  => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-about-slug',
	'label'    => __( 'Identifiant pour URL', 'simple-business-wp' ),
	'section'  => 'fp-about',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => 'about',
) );


// Action2

Kirki::add_section( 'fp-action2', array(
    'title'          => __( 'Zone du bouton', 'simple-business-wp' ),
    'description'    => '',
    'panel'          => '',
    'priority'    => 5,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

//Kirki::add_field( 'simple-business-wp-config', array(
//	'type'        => 'radio-buttonset',
//	'settings'    => 'fp-action2-toggle',
//	'label'       => __( 'Frontpage Action Row #2 Status', 'simple-business-wp' ),
//	'section'     => 'fp-action2',
//	'default'     => '1',
//	'priority'    => 5,
//	'choices'     => array(
//		'1'   => esc_attr__( 'Show', 'simple-business-wp' ),
//		'2' => esc_attr__( 'Demo', 'simple-business-wp' ),
//		'3'  => esc_attr__( 'Hide', 'simple-business-wp' ),
//	),
//) );


Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-action2-title',
	'label'    => __( 'Titre', 'simple-business-wp' ),
	'section'  => 'fp-action2',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-action2-button-text',
	'label'    => __( 'Texte du bouton', 'simple-business-wp' ),
	'section'  => 'fp-action2',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-action2-button-url',
	'label'    => __( 'Lien du bouton', 'simple-business-wp' ),
	'section'  => 'fp-action2',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => '',
	'sanitize_callback' => 'simple_business_wp_sanitize_url'
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-action2-slug',
	'label'    => __( 'Identifiant pour URL', 'simple-business-wp' ),
	'section'  => 'fp-action2',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => 'action2',
) );

// Team

Kirki::add_section( 'fp-team', array(
    'title'          => __( 'Bio', 'simple-business-wp' ),
    'description'    => '',
    'panel'          => '',
    'priority'    => 5,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

//Kirki::add_field( 'simple-business-wp-config', array(
//	'type'        => 'radio-buttonset',
//	'settings'    => 'fp-team-toggle',
//	'label'       => __( 'Team Status', 'simple-business-wp' ),
//	'section'     => 'fp-team',
//	'default'     => '2',
//	'priority'    => 5,
//	'choices'     => array(
//		'1'   => esc_attr__( 'Show', 'simple-business-wp' ),
//		'2' => esc_attr__( 'Demo', 'simple-business-wp' ),
//		'3'  => esc_attr__( 'Hide', 'simple-business-wp' ),
//	),
//) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-team-title',
	'label'    => __( 'Titre', 'simple-business-wp' ),
	'section'  => 'fp-team',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-team-sub-title',
	'label'    => __( 'Sous-titre', 'simple-business-wp' ),
	'section'  => 'fp-team',
	'type'     => 'textarea',
	'priority'    => 5,
	'default'  => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings'    => 'fp-team-image',
	'label'       => __( 'Image', 'simple-business-wp' ),
	'section'     => 'fp_team',
	'type'        => 'image',
	'priority'    => 5,
	'default'     => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-team-name',
	'label'    => __( 'Nom', 'simple-business-wp' ),
	'section'  => 'fp-team',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-team-job',
	'label'    => __( 'Profession', 'simple-business-wp' ),
	'section'  => 'fp-team',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-team-slug',
	'label'    => __( 'Identifiant pour URL', 'simple-business-wp' ),
	'section'  => 'fp-team',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => 'team',
) );

// News

//Kirki::add_section( 'fp-news', array(
//    'title'          => __( 'Frontpage Page Content Section', 'simple-business-wp' ),
//    'description'    => '',
//    'panel'          => '',
//    'priority'    => 5,
//    'capability'     => 'edit_theme_options',
//    'theme_supports' => '',
//) );
//
//Kirki::add_field( 'simple-business-wp-config', array(
//	'type'        => 'radio-buttonset',
//	'settings'    => 'fp-news-toggle',
//	'label'       => __( 'Content Row Status', 'simple-business-wp' ),
//	'section'     => 'fp-news',
//	'default'     => '2',
//	'priority'    => 5,
//	'choices'     => array(
//		'1'   => esc_attr__( 'Show', 'simple-business-wp' ),
//		'2'  => esc_attr__( 'Hide', 'simple-business-wp' ),
//	),
//) );
//
//Kirki::add_field( 'simple-business-wp-config', array(
//	'settings' => 'fp-news-title',
//	'label'    => __( 'Content - Main Title', 'simple-business-wp' ),
//	'section'  => 'fp-news',
//	'type'     => 'text',
//	'priority'    => 5,
//	'default'  => '',
//	'description'   => __( 'This is the big text in the news section. Leave blank to hide.', 'simple-business-wp' ),
//) );
//
//Kirki::add_field( 'simple-business-wp-config', array(
//	'settings' => 'fp-news-sub-title',
//	'label'    => __( 'Content - Sub Title', 'simple-business-wp' ),
//	'section'  => 'fp-news',
//	'type'     => 'text',
//	'priority'    => 5,
//	'default'  => '',
//	'description'   => __( 'This is the smaller text in the news section. Leave blank to hide.', 'simple-business-wp' ),
//) );
//
//Kirki::add_field( 'simple-business-wp-config', array(
//	'type'        => 'custom',
//	'settings'    => 'news-note',
//	'label'       => 'About News Section',
//	'section'     => 'fp-news',
//	'default'     => __( 'You can use this section as either a feed that displays your latest blog posts (the # of posts specified in Settings > Reading > #2), or a page. If you want the Blog to be a separate page completely go to Settings > Reading and make sure Frontpage displays... A static page... and select the HOME page (and create a HOME page if you have not already). Then, create a BLOG page and set the BLOG page as the Posts page option in Settings > Reading. If you do not want the blog to be displayed separately, then set Frontpage displays... Your latest posts.', 'simple-business-wp' ),
//	'priority'    => 5,
//) );
//
//Kirki::add_field( 'simple-business-wp-config', array(
//	'type'        => 'radio-buttonset',
//	'settings'    => 'fp-news-thumbs-toggle',
//	'label'       => __( 'Example Images Status', 'simple-business-wp' ),
//	'section'     => 'fp-news',
//	'default'     => '1',
//	'priority'    => 5,
//	'choices'     => array(
//		'1'   => esc_attr__( 'Show', 'simple-business-wp' ),
//		'2'  => esc_attr__( 'Hide', 'simple-business-wp' ),
//	),
//) );
//
//Kirki::add_field( 'simple-business-wp-config', array(
//	'settings' => 'fp-news-slug',
//	'label'    => __( 'Navigation Menu ID', 'simple-business-wp' ),
//	'section'  => 'fp-news',
//	'type'     => 'text',
//	'priority'    => 5,
//	'default'  => 'news',
//	'description'   => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://example.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://example.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'simple-business-wp' ),
//) );

// Contact

Kirki::add_section( 'fp-contact', array(
    'title'          => __( 'Contact', 'simple-business-wp' ),
    'description'    => '',
    'panel'          => '',
    'priority'    => 5,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

//Kirki::add_field( 'simple-business-wp-config', array(
//	'type'        => 'radio-buttonset',
//	'settings'    => 'contact-toggle',
//	'label'       => __( 'Contact Status', 'simple-business-wp' ),
//	'section'     => 'fp-contact',
//	'default'     => '1',
//	'priority'    => 5,
//	'choices'     => array(
//		'1'   => esc_attr__( 'Show', 'simple-business-wp' ),
//		'2' => esc_attr__( 'Demo', 'simple-business-wp' ),
//		'3'  => esc_attr__( 'Hide', 'simple-business-wp' ),
//	),
//) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-contact-title',
	'label'    => __( 'Titre', 'simple-business-wp' ),
	'section'  => 'fp-contact',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => '',
	'description'   => __( 'This is the big text in the team section. Leave blank to hide.', 'simple-business-wp' ),
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-contact-sub-title',
	'label'    => __( 'Sous-titre', 'simple-business-wp' ),
	'section'  => 'fp-contact',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => '',
	'description'   => __( 'This is the smaller text in the team section. Leave blank to hide.', 'simple-business-wp' ),
) );


//Kirki::add_field( 'simple-business-wp-config', array(
//	'settings' => 'contact-mailto',
//	'label'    => __( 'Mailto Email', 'simple-business-wp' ),
//	'section'  => 'fp-contact',
//	'type'     => 'text',
//	'priority'    => 5,
//	'default'  => '',
//	'sanitize_callback' => 'simple_business_wp_sanitize_email'
//) );
//
//Kirki::add_field( 'simple-business-wp-config', array(
//	'settings' => 'contact-mailfrom',
//	'label'    => __( 'Mailfrom Email', 'simple-business-wp' ),
//	'section'  => 'fp-contact',
//	'type'     => 'text',
//	'priority'    => 5,
//	'default'  => '',
//	'sanitize_callback' => 'simple_business_wp_sanitize_email'
//) );

Kirki::add_field( 'simple-business-wp-config', array(
	'settings' => 'fp-contact-slug',
	'label'    => __( 'Identifiant pour URL', 'simple-business-wp' ),
	'section'  => 'fp-contact',
	'type'     => 'text',
	'priority'    => 5,
	'default'  => 'contact',
) );

// Blog settings

Kirki::add_section( 'blog-settings', array(
    'title'          => __( 'Blog Settings', 'simple-business-wp' ),
    'description'    => '',
    'panel'          => '',
    'priority'    => 5,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'simple-business-wp-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'simple_business_wp_blog_sidebar_position',
	'label'       => __( 'Blog Sidebar Position', 'simple-business-wp' ),
	'section'     => 'blog-settings',
	'default'     => 'right',
	'priority'    => 5,
	'choices'     => array(
		'right'   => esc_attr__( 'Right', 'simple-business-wp' ),
		'left'  => esc_attr__( 'Left', 'simple-business-wp' ),
	),
) );















// #################################################
// Some Custom Sanitize Functions
// #################################################

function simple_business_wp_sanitize_url( $value ) {

    $value=esc_url( $value );

    return $value;

}

function simple_business_wp_sanitize_email( $value ) {

    $value=sanitize_email( $value );

    return $value;

}

// #################################################
// Get a Random Page ID
// #################################################

function simple_business_wp_random_page(){
    $get_pages = get_pages();
    if(!empty($get_pages)) {
        shuffle($get_pages);
        $page = $get_pages[0]->ID;
    } else {
        $page = "";
    }
    return $page;
}

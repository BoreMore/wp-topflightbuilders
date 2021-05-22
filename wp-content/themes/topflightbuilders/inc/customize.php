<?php 

function topflightbuilders_header_customization($wp_customize) {
    $wp_customize->add_section('topflightbuilders-header-section', array(
        'title' => 'Header Text'
    ));

    // large (h1) text in header
    $wp_customize->add_setting('topflightbuilders-header-h1', array(
        'default' => "Atlanta's Home Renovation and Repair Experts",
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'topflightbuilders-header-h1-control', array(
        'label' => 'H1 (Large Text)',
        'section' => 'topflightbuilders-header-section',
        'settings' => 'topflightbuilders-header-h1'
    )));

    // small text description in header
    $wp_customize->add_setting('topflightbuilders-header-description', array(
        'default' => "Painting, drywall, decks, fences, flooring, remodeling, and more!",
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'topflightbuilders-header-description-control', array(
        'label' => 'Description (Smaller Header Text)',
        'section' => 'topflightbuilders-header-section',
        'settings' => 'topflightbuilders-header-description'
    )));

    // button text
    $wp_customize->add_setting('topflightbuilders-header-button-text', array(
        'default' => "Get a <strong>FREE</strong> estimate today!",
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'topflightbuilders-header-button-text-control', array(
        'label' => 'Button Text',
        'section' => 'topflightbuilders-header-section',
        'settings' => 'topflightbuilders-header-button-text'
    )));

    // button link
    $wp_customize->add_setting('topflightbuilders-header-link', array(
        'default' => "Painting, drywall, decks, fences, flooring, remodeling, and more!",
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'topflightbuilders-header-link-control', array(
        'label' => 'Button Link',
        'section' => 'topflightbuilders-header-section',
        'settings' => 'topflightbuilders-header-link',
        'type' => 'dropdown-pages'
    )));

    // button color
    $wp_customize->add_setting('topflightbuilders-header-button-color', array(
        'default' => "#dc3545",
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'topflightbuilders-header-button-color-control', array(
        'label' => 'Button Color',
        'section' => 'topflightbuilders-header-section',
        'settings' => 'topflightbuilders-header-button-color',
    )));

    // button border color
    $wp_customize->add_setting('topflightbuilders-header-button-border-color', array(
        'default' => "#dc3545",
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'topflightbuilders-header-button-border-color-control', array(
        'label' => 'Button Border Color',
        'section' => 'topflightbuilders-header-section',
        'settings' => 'topflightbuilders-header-button-border-color',
    )));
}

add_action('customize_register', 'topflightbuilders_header_customization');

?>
<?php

function university_education_hub_remove_customize_register() {
    global $wp_customize;
    $wp_customize->remove_section( 'elearning_education_color_option' );

    $wp_customize->remove_setting( 'elearning_education_login_button' );
    $wp_customize->remove_control( 'elearning_education_login_button' );

    $wp_customize->remove_setting( 'elearning_education_login_button_link' );
    $wp_customize->remove_control( 'elearning_education_login_button_link' );

    $wp_customize->remove_setting( 'elearning_education_header_teacher' );
    $wp_customize->remove_control( 'elearning_education_header_teacher' );

    $wp_customize->remove_setting( 'elearning_education_header_wishlist_url' );
    $wp_customize->remove_control( 'elearning_education_header_wishlist_url' );

    $wp_customize->remove_setting( 'elearning_education_footer_widget_image' );
    $wp_customize->remove_control( 'elearning_education_footer_widget_image' );
}
add_action( 'customize_register', 'university_education_hub_remove_customize_register', 11 );

function university_education_hub_customize_register( $wp_customize ) {

    // Services Section
    $wp_customize->add_section( 'university_education_hub_category_section' , array(
        'title'      => __( 'Services Section Settings', 'university-education-hub' ),
        'priority' => 60,
        'panel' => 'elearning_education_panel_id'
    ) );

    for ($i=1; $i <= 3 ; $i++) {

        $wp_customize->add_setting('university_education_hub_services_box_icon'.$i,array(
            'default'   => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('university_education_hub_services_box_icon'.$i,array(
            'label' => esc_html__('Icon ','university-education-hub').$i,
            'description' => esc_html__('Ex: fab fa-500px','university-education-hub'),
            'section'   => 'university_education_hub_category_section',
            'type'      => 'text'
        ));

        $wp_customize->add_setting('university_education_hub_services_box_title'.$i,array(
            'default'   => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('university_education_hub_services_box_title'.$i,array(
            'label' => esc_html__('Title ','university-education-hub').$i,
            'section'   => 'university_education_hub_category_section',
            'type'      => 'text'
        ));
    }
}
add_action( 'customize_register', 'university_education_hub_customize_register' );

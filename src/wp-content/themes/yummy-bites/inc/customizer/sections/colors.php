<?php
/**
 * Yummy Bites Colors Settings
 *
 * @package Yummy Bites
 */
if ( ! function_exists( 'yummy_bites_customize_register_colors' ) ) : 

function yummy_bites_customize_register_colors( $wp_customize ) {
    
    $defaults = yummy_bites_get_color_defaults();

    /** Primary Color*/
    $wp_customize->add_setting( 
        'primary_color', 
        array(
            'default'           =>  $defaults['primary_color'],
            'sanitize_callback' => 'yummy_bites_sanitize_rgba',
            'transport'         => 'postMessage',
        ) 
    );

    $wp_customize->add_control( 
        new Yummy_Bites_Alpha_Color_Customize_Control( 
            $wp_customize, 
            'primary_color', 
            array(
                'label'    => __( 'Primary Color', 'yummy-bites' ),
                'section'  => 'colors',
                'priority' => 10,
            )
        )
    );

    /** Secondary Color*/
    $wp_customize->add_setting( 
        'secondary_color', 
        array(
            'default'           =>  $defaults['secondary_color'],
            'sanitize_callback' => 'yummy_bites_sanitize_rgba',
            'transport'         => 'postMessage',
        ) 
    );

    $wp_customize->add_control( 
        new Yummy_Bites_Alpha_Color_Customize_Control( 
            $wp_customize, 
            'secondary_color', 
            array(
                'label'    => __( 'Secondary Color', 'yummy-bites' ),
                'section'  => 'colors',
                'priority' => 10,
            )
        )
    );

    /** Body Font Color*/
    $wp_customize->add_setting( 
        'body_font_color', 
        array(
            'default'           =>  $defaults['body_font_color'],
            'sanitize_callback' => 'yummy_bites_sanitize_rgba',
            'transport'         => 'postMessage',
        ) 
    );

    $wp_customize->add_control( 
        new Yummy_Bites_Alpha_Color_Customize_Control( 
            $wp_customize, 
            'body_font_color', 
            array(
                'label'       => __( 'Base Font', 'yummy-bites' ),
                'section'     => 'colors',
                'priority'    => 10,
            )
        )
    );

    /** Heading Color*/
    $wp_customize->add_setting( 
        'heading_color', 
        array(
            'default'           =>  $defaults['heading_color'],
            'sanitize_callback' => 'yummy_bites_sanitize_rgba',
            'transport'         => 'postMessage',
        ) 
    );

    $wp_customize->add_control( 
        new Yummy_Bites_Alpha_Color_Customize_Control( 
            $wp_customize, 
            'heading_color', 
            array(
                'label'       => __( 'Heading', 'yummy-bites' ),
                'section'     => 'colors',
                'priority'    => 10,
            )
        )
    );

    /** Site Background Color*/
    $wp_customize->add_setting( 
        'site_bg_color', 
        array(
            'default'           =>  $defaults['site_bg_color'],
            'sanitize_callback' => 'yummy_bites_sanitize_rgba',
            'transport'         => 'postMessage',
        ) 
    );

    $wp_customize->add_control( 
        new Yummy_Bites_Alpha_Color_Customize_Control( 
            $wp_customize, 
            'site_bg_color', 
            array(
                'label'       => __( 'Site Background', 'yummy-bites' ),
                'section'     => 'colors',
                'priority'    => 10,
            )
        )
    );

    $wp_customize->get_section( 'colors' )->priority   = 7;
    $wp_customize->remove_control( 'background_color' ); //Remove site background color
}
endif;
add_action( 'customize_register', 'yummy_bites_customize_register_colors' );
<?php
/**
 * Customizer Settings Defaults 
 * 
 * @package Yummy Bites
 */

if( ! function_exists( 'yummy_bites_get_site_defaults' ) ) :
/**
 * Site Defaults
 * 
 * @return array
 */
function yummy_bites_get_site_defaults(){

    $defaults = array(
        'hide_title'        => false,
        'hide_tagline'      => true,
        'logo_width'        => '200',
        'tablet_logo_width' => '200',
        'mobile_logo_width' => '200',
    );

    return apply_filters( 'yummy_bites_site_options_defaults', $defaults );
}
endif;

if( ! function_exists( 'yummy_bites_get_typography_defaults' ) ) :
/**
 * Typography Defaults
 * 
 * @return array
 */
function yummy_bites_get_typography_defaults(){
    $defaults = array(   
        'primary_font' => array(
            'family'         => 'Bitter',
            'variants'       => '',
            'category'       => '',
            'weight'         => '400',
            'transform'      => 'none',
            'desktop' => array(
                'font_size'      => 18,
                'line_height'    => 1.75,
                'letter_spacing' => 0,
            ),
            'tablet' => array(
                'font_size'      => 18,
                'line_height'    => 1.75,
                'letter_spacing' => 0,
            ),
            'mobile' => array(
                'font_size'      => 18,
                'line_height'    => 1.75,
                'letter_spacing' => 0,
            )
        ),
        'site_title' => array(
            'family'    => 'Default Family',
            'variants'  => '',
            'category'  => '',
            'weight'    => 'bold',
            'transform' => 'none',
            'desktop' => array(
                'font_size'      => 28,
                'line_height'    => 1.4,
                'letter_spacing' => 0
            ),
            'tablet' => array(
                'font_size'      => 28,
                'line_height'    => 1.4,
                'letter_spacing' => 0,
            ),
            'mobile' => array(
                'font_size'      => 28,
                'line_height'    => 1.4,
                'letter_spacing' => 0,
            )
        ),
        'button' => array(
            'family'         => 'Default Family',
            'variants'       => '',
            'category'       => '',
            'weight'         => '500',
            'transform'      => 'none',
            'desktop' => array(
                'font_size'      => 18,
                'line_height'    => 1.6,
                'letter_spacing' => 0,
            ),
            'tablet' => array(
                'font_size'      => 18,
                'line_height'    => 1.6,
                'letter_spacing' => 0,
            ),
            'mobile' => array(
                'font_size'      => 18,
                'line_height'    => 1.6,
                'letter_spacing' => 0,
            )
        ),
        'heading_one' => array(
            'family'      => 'Domine',
            'variants'    => '',
            'category'    => '',
            'weight'      => '400',
            'transform'   => 'none',
            'desktop' => array(
                'font_size'      => 54,
                'line_height'    => 1.3,
                'letter_spacing' => 0,
            ),
            'tablet' => array(
                'font_size'      => 45,
                'line_height'    => 1.3,
                'letter_spacing' => 0,
            ),
            'mobile' => array(
                'font_size'      => 40.5,
                'line_height'    => 1.3,
                'letter_spacing' => 0,
            )
        ),
        'heading_two' => array(
            'family'      => 'Domine',
            'variants'    => '',
            'category'    => '',
            'weight'      => '400',
            'transform'   => 'none',
            'desktop' => array(
                'font_size'      => 45,
                'line_height'    => 1.3,
                'letter_spacing' => 0,
            ),
            'tablet' => array(
                'font_size'      => 40.5,
                'line_height'    => 1.3,
                'letter_spacing' => 0,
            ),
            'mobile' => array(
                'font_size'      => 32.4,
                'line_height'    => 1.3,
                'letter_spacing' => 0,
            )
        ),
        'heading_three' => array(
            'family'      => 'Domine',
            'variants'    => '',
            'category'    => '',
            'weight'      => '400',
            'transform'   => 'none',
            'desktop' => array(
                'font_size'      => 36,
                'line_height'    => 1.4,
                'letter_spacing' => 0,
            ),
            'tablet' => array(
                'font_size'      => 32.4,
                'line_height'    => 1.4,
                'letter_spacing' => 0,
            ),
            'mobile' => array(
                'font_size'      => 28.8,
                'line_height'    => 1.4,
                'letter_spacing' => 0,
            )
        ),
        'heading_four' => array(
            'family'      => 'Domine',
            'variants'    => '',
            'category'    => '',
            'weight'      => '400',
            'transform'   => 'none',
            'desktop' => array(
                'font_size'      => 31.5,
                'line_height'    => 1.5,
                'letter_spacing' => 0,
            ),
            'tablet' => array(
                'font_size'      => 28.8,
                'line_height'    => 1.5,
                'letter_spacing' => 0,
            ),
            'mobile' => array(
                'font_size'      => 27,
                'line_height'    => 1.5,
                'letter_spacing' => 0,
            )
        ),
        'heading_five' => array(
            'family'      => 'Domine',
            'variants'    => '',
            'category'    => '',
            'weight'      => '400',
            'transform'   => 'none',
            'desktop' => array(
                'font_size'      => 27,
                'line_height'    => 1.5,
                'letter_spacing' => 0,
            ),
            'tablet' => array(
                'font_size'      => 27,
                'line_height'    => 1.5,
                'letter_spacing' => 0,
            ),
            'mobile' => array(
                'font_size'      => 25.2,
                'line_height'    => 1.5,
                'letter_spacing' => 0,
            )
        ),
        'heading_six' => array(
            'family'      => 'Domine',
            'variants'    => '',
            'category'    => '',
            'weight'      => '400',
            'transform'   => 'none',
            'desktop' => array(
                'font_size'      => 19.8,
                'line_height'    => 1.5,
                'letter_spacing' => 0,
            ),
            'tablet' => array(
                'font_size'      => 18,
                'line_height'    => 1.5,
                'letter_spacing' => 0,
            ),
            'mobile' => array(
                'font_size'      => 18,
                'line_height'    => 1.5,
                'letter_spacing' => 0,
            )
        )
    );

    return apply_filters( 'yummy_bites_typography_options_defaults', $defaults ); 
}
endif;

if( ! function_exists( 'yummy_bites_get_color_defaults' ) ) :
/**
 * Color Defaults
 * 
 * @return array
 */
function yummy_bites_get_color_defaults(){
    $defaults = array(
		'primary_color'             => '#EDA602',
		'secondary_color'           => '#227755',
		'body_font_color'           => '#39433F',
		'heading_color'             => '#07120D',
		'site_bg_color'             => '#FFFFFF',
		'site_title_color'          => '#000000',
		'site_tagline_color'        => '#333333',
		'btn_text_color_initial'    => '#ffffff',
		'btn_text_color_hover'      => '#ffffff',
		'btn_bg_color_initial'      => '#EDA602',
		'btn_bg_color_hover'        => '#227755',
		'btn_border_color_initial'  => '#EDA602',
		'btn_border_color_hover'    => '#227755',
		'foot_text_color'           => 'rgba(255,255,255,0.9)',
		'foot_bg_color'             => '#0D0C0C',
		'foot_widget_heading_color' => '#FFFFFF',
		'abt_bg_color'              => '#F4F6F5',
		'abt_title_color'           => '#07120D',
		'abt_desc_color'            => '#39433F',
    );

    return apply_filters( 'yummy_bites_color_options_defaults', $defaults );
}
endif;

if( ! function_exists( 'yummy_bites_get_button_defaults' ) ) :
/**
 * Button Defaults
 * 
 * @return array
 */
function yummy_bites_get_button_defaults(){

    $defaults = array(
        'button_roundness' => array(
            'top'    => 4,
            'right'  => 4,
            'bottom' => 4,
            'left'   => 4,
        ),
        'button_padding'   => array(
            'top'    => 12,
            'right'  => 32,
            'bottom' => 12,
            'left'   => 32,
        )
    );

    return apply_filters( 'yummy_bites_button_options_defaults', $defaults );
}
endif;

if( ! function_exists( 'yummy_bites_get_general_defaults' ) ) :
/**
 * General Defaults
 * 
 * @return array
 */
function yummy_bites_get_general_defaults(){

    $defaults = array(
        'blog_main_title'               => __( 'Recent Recipes', 'yummy-bites' ),
        'blog_main_content'             => '',
        'blog_readmore'                 => __( 'Read More', 'yummy-bites' ),
        'blog_post_per_page'            => 4,
        'container_width'               => 1230,
        'tablet_container_width'        => 992,
        'mobile_container_width'        => 420,
        'fullwidth_centered'            => 750,
        'tablet_fullwidth_centered'     => 750,
        'mobile_fullwidth_centered'     => 750,
        'sidebar_width'                 => 30,
        'widgets_spacing'               => 32,
        'tablet_widgets_spacing'        => 32,
        'mobile_widgets_spacing'        => 20,
        'ed_last_widget_sticky'         => false,
        'ed_scroll_top'                 => true,
        'scroll_top_size'               => 20,
        'tablet_scroll_top_size'        => 20,
        'mobile_scroll_top_size'        => 20,
        'ed_localgoogle_fonts'          => false,
        'ed_preload_local_fonts'        => false,
        'page_sidebar_layout'           => 'right-sidebar',
        'post_sidebar_layout'           => 'right-sidebar',
        'layout_style'                  => 'right-sidebar',
        'abt_bg_image'                  => '',
        'abt_author_image'              => '',
        'abt_title'                     => '',
        'abt_description'               => '',
        'ed_about_social_links'         => false,
        'ed_about_social_links_new_tab' => true,
        'abt_button_label'              => '',
        'abt_button_link'               => '',
        'about_social_media_order'      => array( 'yummy_facebook', 'yummy_twitter', 'yummy_instagram'),
        'feature_recipe_title'          => '',
        'ed_header_search'              => false,
        'ed_woo_cart'                   => true,
        'ed_social_links'               => false,
        'ed_social_links_new_tab'       => true,
        'social_media_order'            => array( 'yummy_facebook', 'yummy_twitter', 'yummy_instagram'),
        'yummy_facebook'                => '#',
        'yummy_twitter'                 => '#',
        'yummy_instagram'               => '#',
        'yummy_pinterest'               => '',
        'yummy_youtube'                 => '',
        'yummy_tiktok'                  => '',
        'yummy_linkedin'                => '',
        'yummy_whatsapp'                => '',
        'yummy_viber'                   => '',
        'yummy_telegram'                => '',
        'footer_copyright'              => '',
        'ed_breadcrumb'                 => true,
        'home_text'                     => __( 'Home', 'yummy-bites' ),
        'separator_icon'                => 'one',
        'ed_post_update_date'           => true,
        'ed_instagram'                  => false,
        'ed_blog_title'                 => true,
        'ed_blog_desc'                  => false,
        'blog_alignment'                => 'left',
        'blog_crop_image'               => true,
        'blog_content'                  => 'excerpt',
        'excerpt_length'                => 20,
        'read_more_text'                => __( 'Read More', 'yummy-bites' ),
        'blog_meta_order'               => array( 'date', 'comment' ),
        'ed_post_featured_image'        => true,
        'post_crop_image'               => true,
        'post_meta_order'               => array( 'date', 'reading-time' ),
        'read_words_per_minute'         => 200,
        'ed_post_tags'                  => true,
        'ed_post_category'              => true,
        'ed_post_pagination'            => true,
        'ed_author'                     => true,
        'author_title'                  => __( 'About Author', 'yummy-bites' ),
        'ed_related'                    => true,
        'related_post_title'            => __( 'You may also like...', 'yummy-bites' ),
        'no_of_posts_rp'                => 4,
        'ed_post_comments'              => true,
        'single_comment_form'           => 'below',
        'toggle_comments'               => 'end-post',
        'ed_page_title'                 => true,
        'pagetitle_alignment'           => 'center',
        'ed_page_featured_image'        => true,
        'ed_page_comments'              => false,
        'ed_archive_title'              => true,
        'ed_archive_desc'               => true,
        'archivetitle_alignment'        => 'left',
        'ed_archive_post_count'         => true,
        'ed_prefix_archive'             => true,
    );
    return apply_filters( 'yummy_bites_general_defaults', $defaults );
}
endif;

if( ! function_exists ( 'yummy_bites_get_banner_defaults') ) :
/**
 * Banner Defaults
 * 
 * @return array
 */
function yummy_bites_get_banner_defaults(){

    $defaults = array(
        'ed_banner_section'        => 'slider_banner',
        'slider_type'              => 'latest_posts',
        'slider_cat'               => '',
        'no_of_slides'             => 6,
        'slider_auto'              => true,
        'slider_loop'              => true,
        'slider_caption'           => true,
        'slider_full_image'        => false,
        'slider_animation'         => '',
        'slider_speed'             => 5000,
        'slider_readmore'           => __('Read More', 'yummy-bites'),

    );

    return apply_filters( 'yummy_bites_get_banner_defaults', $defaults );

}
endif;
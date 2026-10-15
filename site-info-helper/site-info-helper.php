
<?php
/**
 * Plugin Name: Site Info Helper
 * Description: A plugin that displays the website name and tagline.
 * Author: Denise Joseph
 */

function site_info_helper_shortcode() {
    $site_name = get_bloginfo( 'name' );
    $site_description = get_bloginfo( 'description' );

    return '<div class="site-info-helper"><h2>' .
        esc_html( $site_name ) .
        '</h2><p>' .
        esc_html( $site_description ) .
        '</p></div>';
}

add_shortcode( 'site_info', 'site_info_helper_shortcode' );

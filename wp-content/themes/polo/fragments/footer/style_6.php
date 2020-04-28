<?php

$footer_logo_image        = reactor_option( 'footer-logotype-image' );
$footer_logo_image_retina = reactor_option( 'footer-logotype-image-retina' );
$footer_logo_url_target   = reactor_option( 'footer-logotype-url-target' );
$footer_logo_url          = reactor_option( 'footer-logotype-url' );

//footer copyright section
$footer_copyright_enable      = reactor_option( 'footer-copyright-enable' );
$copyright_text               = reactor_option( 'copyright-text' );
$copyright_text               = polo_do_multilang_text( $copyright_text );
$footer_soc_links             = reactor_option( 'footer-soclinks-enable' );
$soc_icons                    = reactor_option( 'top-bar-soc-icons' );
$footer_soc_links_style       = reactor_option( 'footer-social-link-style' );
$footer_soc_links_transparent = reactor_option( 'footer-soclinks-transparency-enable' );


$metabox_source     = polo_get_metabox_source();
$meta_footer_style  = reactor_option( 'meta-footer-color-scheme', '', $metabox_source );
$meta_footer_enable = reactor_option( 'meta-footer-content-enable', '', $metabox_source );

if ( "true" === $meta_footer_enable ) {
    $meta_footer_logo_image        = reactor_option( 'meta-footer-logotype-image', '', $metabox_source );
    $meta_footer_logo_image_retina = reactor_option( 'meta-footer-logotype-image-retina', '', $metabox_source );
    $meta_footer_logo_url_target   = reactor_option( 'meta-footer-logotype-url-target', '', $metabox_source );
    $meta_footer_logo_url          = reactor_option( 'meta-footer-logotype-url', '', $metabox_source );
}

if ( isset( $meta_footer_logo_image ) && !empty( $meta_footer_logo_image ) ) {
    $footer_logo_image = $meta_footer_logo_image;
}

if ( isset( $meta_footer_logo_url ) && !empty( $meta_footer_logo_url ) ) {
    $footer_logo_url = $meta_footer_logo_url;
}

if ( isset( $meta_footer_logo_url_target ) ) {
    $footer_logo_url_target = $meta_footer_logo_url_target;
}
$footer_logo_url_target = $footer_logo_url_target ? '_blank' : '_self';

$output = '';
$output .= '<div class="row text-center">';

if ( !empty( $footer_logo_image ) ) {
    $output .= !empty( $footer_logo_url ) ? '<a href="' . esc_url( $footer_logo_url ) . '" target="' . esc_attr( $footer_logo_url_target ) . '">' : '';
    $output .= polo_do_logo( $footer_logo_image, $footer_logo_image_retina );
    $output .= !empty( $footer_logo_url ) ? '</a>' : '';
}

$output .= '<div class="copyright-text text-center">';
$output .= do_shortcode( $copyright_text );
$output .= '</div>'; /* copyright-text text-center */

$output .= '<div class="social-icons center">';
if ( isset( $soc_icons ) && is_array( $soc_icons ) && !empty( $soc_icons ) ) {
    if ( 'transparent' === $footer_soc_links_style ) {
        foreach ( $soc_icons as $single_socicon ) {
            $output .= '<a class="social-icon transparent social-' . $single_socicon[ 'social-network-icon' ] . '">';
            $output .= '<i class="fa fa-' . $single_socicon[ 'social-network-icon' ] . '"></i>';
            $output .= '</a>';
        }
    } else {
        $output .= '<div class="social-icons">';

        $output .= '<ul>';
        foreach ( $soc_icons as $single_socicon ) {
            $output .= '<li class="social-' . $single_socicon[ 'social-network-icon' ] . '">';
            $output .= '<a href="' . esc_url( $single_socicon[ 'social-network-url' ] ) . '"><i class="fa fa-' . $single_socicon[ 'social-network-icon' ] . '"></i></a>';
            $output .= '</li>';
        }
        $output .= '</ul>';

        $output .= '</div>'; //.social-icons
    }
}
$output .= '</div>'; /* social-icons center */

$output .= '</div>'; //.row

echo apply_filters( 'polo_footer_style_6', $output );

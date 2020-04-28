<?php

$meta_hide_separator   = null;
$meta_footer_text_hide = false;

$footer_style             = reactor_option( 'footer-color-scheme' );
$footer_logo_image        = reactor_option( 'footer-logotype-image' );
$footer_logo_image_retina = reactor_option( 'footer-logotype-image-retina' );
$footer_logo_url          = reactor_option( 'footer-logotype-url' );
$footer_logo_url_target   = reactor_option( 'footer-logotype-url-target' );
$footer_text              = reactor_option( 'footer-text' );
$footer_text              = polo_do_multilang_text( $footer_text );
$hide_separator           = reactor_option( 'hide-footer-text-separator' );
$footer_sidebar_layout    = reactor_option( 'footer-sidebars-layout' );


$metabox_source     = polo_get_metabox_source();
$meta_footer_style  = reactor_option( 'meta-footer-color-scheme', '', $metabox_source );
$meta_footer_enable = reactor_option( 'meta-footer-content-enable', '', $metabox_source );

if ( "true" === $meta_footer_enable ) {
    $meta_footer_logo_image        = reactor_option( 'meta-footer-logotype-image', '', $metabox_source );
    $meta_footer_logo_image_retina = reactor_option( 'meta-footer-logotype-image-retina', '', $metabox_source );
    $meta_footer_logo_url          = reactor_option( 'meta-footer-logotype-url', '', $metabox_source );
    $meta_footer_logo_url_target   = reactor_option( 'meta-footer-logotype-url-target', '', $metabox_source );
    $meta_footer_text              = reactor_option( 'meta-footer-text', '', $metabox_source );
    $meta_footer_text              = polo_do_multilang_text( $meta_footer_text );
    $meta_footer_sidebars_layout   = reactor_option( 'meta-footer-sidebars-layout', '', $metabox_source );
    $meta_footer_text_hide         = reactor_option( 'hide_footer_text', '', $metabox_source );
    $meta_hide_separator           = polo_metaselect_to_switch( reactor_option( 'hide-footer-text-separator', '', $metabox_source ) );
}

if ( isset( $meta_footer_style ) && !empty( $meta_footer_style ) && !( 'default' === $meta_footer_style ) ) {
    $footer_style = $meta_footer_style;
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
if ( isset( $meta_footer_text ) && !empty( $meta_footer_text ) ) {
    $footer_text = $meta_footer_text;
}
if ( isset( $meta_footer_sidebars_layout ) && !empty( $meta_footer_sidebars_layout ) && 'default' !== $meta_footer_sidebars_layout ) {
    $footer_sidebar_layout = $meta_footer_sidebars_layout;
}

if ( 'footer-colored' === $footer_style ) {
    $sep_class = 'seperator-light m-b-20';
} else {
    $sep_class = 'seperator-dark';
}

if ( isset( $meta_hide_separator ) && !( null == $meta_hide_separator ) ) {
    $hide_separator = $meta_hide_separator;
}

$output = '';

$output .= '<div class="row">';

$output .= '<div class="col-md-12">';

if ( !empty( $footer_logo_image ) ) {
    $output .= !empty( $footer_logo_url ) ? '<a href="' . esc_url( $footer_logo_url ) . '" class="footer-logo float-left" target="' . esc_attr( $footer_logo_url_target ) . '">' : '<div class="footer-logo float-left">';
    $output .= polo_do_logo( $footer_logo_image, $footer_logo_image_retina );
    $output .= !empty( $footer_logo_url ) ? '</a>' : '</div>'; //.footer-logo float-left
}

if ( isset( $footer_text ) && !empty( $footer_text ) && !( true === $meta_footer_text_hide ) ) {
    $output .= '<p style="margin-top: 12px;">' . $footer_text . '</p>';
}

$output .= '</div>';

$output .= '</div>'; //.row


if ( true === $hide_separator || true === $meta_footer_text_hide || empty( $footer_text ) ) {
    $separator = '';
} else {
    $separator = '<div class="seperator ' . $sep_class . ' seperator-simple"></div>';
}

$output .= $separator;

$output .= '<div class="row">';

$output .= polo_footer_sidebars( $footer_sidebar_layout );

$output .= '</div>'; //.row

echo apply_filters( 'polo_footer_style_1', $output );

<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up.
 *
 * @package   Polo
 * @subpackge Templates
 * @since     1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php wp_head(); ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164873431-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-164873431-1');
        </script>
        <meta name="google-site-verification" content="4jJoL4UHFuT8qhh-vgPWJYZimbzw99bViYtvxpm9vYo" />
	</head>
<?php
$preloader_data = polo_theme_preloader();
?>

<body <?php body_class(); ?> <?php echo apply_filters( 'polo_preloader_data', $preloader_data ); ?>>
<!-- WRAPPER -->
<div class="wrapper">

<?php
$header_style = reactor_option( 'header_style' );
$metabox_source = is_singular( 'portfolio' ) ? 'meta_portfolio_heading_options' : 'meta_page_options';

$meta_header_style = reactor_option( 'header_style', '', $metabox_source );
if ( isset( $meta_header_style ) && ! empty( $meta_header_style ) && ! ( 'default' === $meta_header_style ) ) {
	$header_style = $meta_header_style;
}
polo_header_before();

if ( 'side' === $header_style ) {
	get_template_part( 'fragments/side-header' );
} else {
	get_template_part( 'fragments/header' );
}

polo_header_after();

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DarkTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
if ( function_exists( "wp_body_open" ) ) {
wp_body_open();
}
?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'DarkTheme' ); ?></a>
<div class="page-wrapper">

<?php get_template_part('template-parts/header'); ?> 

    <!-- Main Header-->
    

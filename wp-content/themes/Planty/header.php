<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
	<?php astra_head_top(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php 
	if ( apply_filters( 'astra_header_profile_gmpg_link', true ) ) {
		?>
	 	<link rel="profile" href="https://gmpg.org/xfn/11"> 
	 	<?php
	} 
	?>
	<?php wp_head(); ?>
	<?php astra_head_bottom(); ?>
</head>

<body
	<?php astra_schema_body(); ?> <?php body_class(); ?>>
	<?php astra_body_top(); ?>
	<?php wp_body_open(); ?>

	<a
		class="skip-link screen-reader-text"
		href="#content"
		role="link"
		title="<?php echo esc_attr( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
			<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
	</a>

	<div
	<?php
		echo astra_attr(
			'site',
			array(
				'id'    => 'page',
				'class' => 'hfeed site',
			)
		);
	?>

	>


	<?php astra_header_before(); ?>

	<?php astra_header(); ?>

	<!-- header menu -->

	<nav id="site-navbar" class="navbar">
		<div class="logo">
			<a href="http://localhost/Planty/">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Logo Planty"></a>
		</div>
		<div class="header_site_menu">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id' => 'primary_menu',
						'container' => 'false',
						'menu_class' => 'header_menu',
					)
				);
			?>
		</div>
	</nav>

	<?php
	astra_header_after();

	astra_content_before();
	?>
	<div id="content" class="site-content">
		<div class="ast-container">
		<?php astra_content_top(); ?>


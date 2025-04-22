<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wheeester
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="header_site" class="fixed-top">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <ul class="fs-40 menu_site">
                    <li><a href="#ss-about">About</a></li>
                    <li><a href="#ss-gallery">Gallery</a></li>
                    <li><a href="#ss-token">Tokenomics</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
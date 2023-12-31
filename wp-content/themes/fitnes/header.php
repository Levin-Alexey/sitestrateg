<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fitnes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Strategy &mdash; Free Portfolio Template by Colorlib</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/aos.min.css">
    <link rel="stylesheet" href="css/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/animsition.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="/assets/css/style.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="js-animsition animsition" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">

    <header class="templateux-navbar" data-aos="fade-down">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-3"><div class="site-logo"><a href="index.html" class="animsition-link">Strategy</a></div></div>
                <div class="col-sm-9 col-9 text-right">

                    <button class="hamburger hamburger--spin toggle-menu ml-auto js-toggle-menu" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
                    </button>

                    <nav class="templateux-menu js-templateux-menu" role="navigation">
                        <ul class="list-unstyled">
                            <li class="d-md-none d-block active"><a href="index.html" class="animsition-link">Home</a></li>
                            <li><a href="work.html" class="animsition-link">Work</a></li>
                            <li><a href="about.html" class="animsition-link">About</a></li>
                            <li><a href="blog.html" class="animsition-link">Blog</a></li>
                            <li><a href="contact.html" class="animsition-link">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

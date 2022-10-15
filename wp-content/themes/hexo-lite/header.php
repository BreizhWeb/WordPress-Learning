<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hexo Lite
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"> 
<?php wp_head(); 
$hexo_lite_options = new Hexo_Lite_Options();
?>
</head>

<body <?php body_class('home1'); ?>>
<div id="page" class="site"> 
        <div class="home-1-wrapper">
            <!-- Header start -->
            <header>
            <!-- Header area start -->
                <div id="header" class="header-area">
                    <div id="sticker" class="header-bottom-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                    <!-- logo start -->
                                    <div class="logo logo-area">
                                        <?php $hexo_lite_options->main_headerLogo(); ?>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                    <!-- menu-area start -->
                                    <div class="main-menu">
                                        <nav>
                                            <?php hexo_lite_main_menu(); ?>
                                        </nav>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="mobile-menu-area">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="mobile-menu">
                          <nav id="dropdown">
                            <?php hexo_lite_mobile_menu(); ?>
                          </nav>
                        </div>          
                      </div>
                    </div>
                  </div>
                </div>
            </header>
            <!-- Header end -->     
 
            <?php hexo_lite_banner_temp(); ?>

    <div id="content" class="site-content">

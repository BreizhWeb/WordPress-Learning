<?php
/**
 * The banner for our theme.
 *
 * This is the template that displays for banner.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hexo_lite
 */ 
function hexo_lite_banner_temp(){
global $hexo_lite;  
?>
    <!-- Page Header Section Start Here -->
    <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header-page">
                        <h1><?php hexo_lite_breadcrumb(); ?></h1>
                        <?php  if (!is_front_page() || !is_home()) { ?>
                        <ul>
                            <li> <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home','hexo-lite'); ?></a> </li>
                            <li><?php hexo_lite_breadcrumb(); ?></li>
                        </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End Here --> 
<?php } ?>
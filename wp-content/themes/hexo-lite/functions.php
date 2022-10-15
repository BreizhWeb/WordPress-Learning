<?php

/**
 * Hexo Directory Url
 */
define("HEXO_LITE_CSS", get_template_directory_uri() . "/css/");
define("HEXO_LITE_INC", get_template_directory_uri() . "/inc/");
define("HEXO_LITE_INCF", get_template_directory() . "/inc/");
define("HEXO_LITE_JS", get_template_directory_uri() . "/js/");
define("HEXO_LITE_URI", get_template_directory_uri()."/");



/**
 * Hexo functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hexo Lite
 */

if ( ! function_exists( 'hexo_lite_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hexo_lite_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Hexo, use a find and replace
     * to change 'hexo-lite' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'hexo-lite', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );


    // image size 
    add_image_size( 'hexo-lite-property-img', 66, 59, true );
    add_image_size( 'hexo-lite-single-img', 848, 'auto', true );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'main_menu' => esc_html__( 'Main Menu', 'hexo-lite' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) ); 
    /*
     * Custom Logo
     */ 
    add_theme_support( 'custom-logo', array(
       'height'      => 39,
       'width'       => 139,
       'flex-width'  => true,
       'flex-height' => true,'header-text' => array( 'logo-area' ),
    ) );

    add_theme_support( 'custom-header', array(
        'flex-width'    => true, 
        'flex-height'    => true, 
        'default-image' => get_template_directory_uri() . '/img/bannar.jpg',
    ) );
    /*
     * This theme styles the visual editor to resemble the theme style,
     * specifically font, colors, icons, and column width.
     */
    add_editor_style( array( 'css/editor-style.css', hexo_lite_fonts_url() ) );

}
endif;
add_action( 'after_setup_theme', 'hexo_lite_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hexo_lite_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'hexo_lite_content_width', 640 );
}
add_action( 'after_setup_theme', 'hexo_lite_content_width', 0 );


/**
 * Register widget area.
 *  
 */
function hexo_lite_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'hexo-lite' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'hexo-lite' ),
        'before_widget' => '<div id="%1$s" class="single-sidebar padding-top %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) ); 
}
add_action( 'widgets_init', 'hexo_lite_widgets_init' );


/**
 * fonts enqueue
 */
function hexo_lite_fonts_url(){
    $hexo_lite_google_fonts_url = add_query_arg( 'family', urlencode( 'Open Sans:400,600,700,300|Raleway:400,800,700,600,500,300' ), "https://fonts.googleapis.com/css" );
    return $hexo_lite_google_fonts_url;
}


/**
 * Enqueue scripts and styles.
 */
function hexo_lite_scripts() { 
    $hexo_lite_option = new Hexo_Lite_Options();

    // LOAD GOOGLE FONTS
    wp_enqueue_style( 'hexo-fonts', hexo_lite_fonts_url(), array(), null );

    // LOAD CSS
    wp_enqueue_style( 'bootstrap', HEXO_LITE_CSS .'bootstrap.css');
    wp_enqueue_style( 'animate', HEXO_LITE_CSS . 'animate.css' ); 
    wp_enqueue_style( 'font-awesome', HEXO_LITE_CSS .'font-awesome.css');
    wp_enqueue_style( 'nivo-slider', HEXO_LITE_CSS . 'nivo-slider.css' );
    wp_enqueue_style( 'nivo-preview', HEXO_LITE_CSS . 'preview.css' );
    wp_enqueue_style( 'meanmenu', HEXO_LITE_CSS .'meanmenu.css');  
    wp_enqueue_style( 'hexo-main', HEXO_LITE_CSS .'main.css');
    wp_enqueue_style( 'hexo-style', get_stylesheet_uri() ); 
    wp_enqueue_style( 'hexo-responsive', HEXO_LITE_CSS .'responsive.css'); 

    // LOAD JS 
    wp_enqueue_script( 'modernizr', HEXO_LITE_JS . 'vendor/modernizr-2.8.3.js', array('jquery','masonry'), '20151215', false );
    wp_enqueue_script( 'bootstrap', HEXO_LITE_JS . 'bootstrap.js', array(), '20151215', true );  
    wp_enqueue_script( 'meanmenu', HEXO_LITE_JS . 'jquery.meanmenu.js', array(), '20151215', true );  
    wp_enqueue_script( 'nivo-slider', HEXO_LITE_JS . 'nivo.slider.js', array(), '20151215', true );
    wp_enqueue_script( 'hexo-lite-scrollUp', HEXO_LITE_JS . 'jquery.scrollUp.js', array(), '20151215', true );    
    wp_enqueue_script( 'hexo-lite-main', HEXO_LITE_JS . 'main.js', array(), '20151215', true );
    wp_enqueue_script( 'hexo-lite-navigation', HEXO_LITE_JS . 'navigation.js', array(), '20151215', true );
    wp_enqueue_script( 'hexo-lite-skip-link-focus-fix', HEXO_LITE_JS . 'skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
 
}
add_action( 'wp_enqueue_scripts', 'hexo_lite_scripts' );
  

/**
 * Included Files
 */  
// require HEXO_LITE_INCF . 'hexo-framework-functions.php';  
//Implement the Custom Header feature.
require HEXO_LITE_INCF . 'custom-header.php';
//Custom template tags for this theme.
require HEXO_LITE_INCF . 'template-tags.php';
//Custom functions that act independently of the theme templates.
require HEXO_LITE_INCF . 'extras.php';
//Customizer additions.
require HEXO_LITE_INCF . 'customizer.php';
// Load Jetpack compatibility file.
require HEXO_LITE_INCF . 'jetpack.php'; 
// Load banner file
require HEXO_LITE_INCF . 'banner.php';
// Load hexo Framework Functions Files. 
require HEXO_LITE_INCF . 'hexo-function.php';   

// main menu
function hexo_lite_main_menu(){
    wp_nav_menu( array(
        'theme_location'    => 'main_menu',
        'depth'             => 4,
        'container'         => false,
        'menu_id'           => 'nav',
        'menu_class'        => '',
        'fallback_cb'       => 'hexo_lite_default_menu' 
    ));
}

function hexo_lite_mobile_menu(){
    wp_nav_menu( array(
        'theme_location'    => 'main_menu',
        'depth'             => 4,
        'container'         => false,
        'menu_id'           => 'a',
        'menu_class'        => 'a',
        'fallback_cb'       => 'hexo_lite_default_menu' 
    ));
}
 

/**
 * menu fallback
 */ 
if(is_user_logged_in()):
    function hexo_lite_default_menu() {
        ?>
        <ul id="nav" class="text-right">                  
            <li><a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>"><?php esc_html_e( 'Add Menu', 'hexo-lite' ); ?></a></li>
        </ul>
        <?php
    }
endif;


// hexo breadcrumb
function hexo_lite_breadcrumb(){
    global $post,$hexo;
      
    $hexo_lite_banr_ttl =  esc_html__('Blog', 'hexo-lite');
     
 
    $params['link_none'] = '';
 
    if (is_archive()) {
        if (is_category()) {
            $hexo_lite_cat_ttl = single_cat_title('', false);
            echo esc_html($hexo_lite_cat_ttl);
        }elseif (is_tax()) {
            $hexo_lite_cat_tzx = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
            $hexo_lite_cat_tzx = $hexo_lite_cat_tzx->name;
            echo esc_html($hexo_lite_cat_tzx);
        }else{
            echo esc_html(get_the_time(get_option( 'date_format' )));
        }
    }

    if (is_home()) { 
        echo esc_html($hexo_lite_banr_ttl);
    }
    if (is_page() && !is_front_page()) { 
        echo esc_html(get_the_title());
    }
    if (is_single() && !is_attachment()) { 
        echo esc_html(get_the_title());
    }
    if (is_tag()) {
        echo esc_html(single_tag_title('', false));
    }
    if (is_404()) {
        echo esc_html__("404 - Not Found", 'hexo-lite');
    }
    if (is_search()) {
        echo esc_html(get_search_query());
    }
    if (is_attachment()) { 
        echo esc_html(get_the_title());
    }
}



/**
 * hexo agents selection 
 */ 
function hexo_lite_cmb2_get_post_options( $query_args ) {

    $args = wp_parse_args( $query_args, array(
        'post_type'   => 'agents',
        'numberposts' => -1,
        'post_status'    => 'publish'
    ) );

    $posts = get_posts( $args );

    $post_options = array();
    if ( $posts ) {
        foreach ( $posts as $post ) {
          $post_options[ $post->ID ] = $post->post_title;
        }
    }

    return $post_options;
}


// custom css
add_action( 'wp_head', 'hexo_lite_add_css' );
function hexo_lite_add_css() {


    if(is_page()){
        global $post;  
        $hexo_lite_hdr_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'full' );
        $hexo_lite_hdr_img = $hexo_lite_hdr_img[0];
        if(empty($hexo_lite_hdr_img)){
            $hexo_lite_hdr_img = get_header_image();
        }
    }else{ 
        $hexo_lite_hdr_img = get_header_image();
    }
 
    $hdrtxt = get_theme_mod( 'header_textcolor' );
    $brand_color = get_theme_mod( 'brand_color' );
    $footer_bg_clr = get_theme_mod( 'footer_bg_color' );
    ?>
    <style type="text/css">
            .page-header-area {
                background: rgba(0, 0, 0, 0) url(<?php echo esc_url($hexo_lite_hdr_img); ?>) no-repeat scroll center center / cover; 
            } 
            footer {
                background: <?php echo esc_attr($footer_bg_clr); ?>; 
            }
        .header-bottom-area button.search-btn,.blog-page-area .all-blog-content-area .single-blog .blog-content-area .informations p,.page-sidebar-area .single-sidebar ul li a:hover,#scrollUp,.logo-area span,#recentcomments li:before, .page-sidebar-area .single-sidebar ul li a:before,.blog-page-area .all-blog-content-area .single-blog .blog-content-area h3 a:hover,.page-sidebar-area .single-sidebar ul li a:hover,.tagcloud a:hover{color:<?php echo esc_attr($brand_color); ?>}.page-sidebar-area .single-sidebar h3:after,#scrollUp:hover,.pagination-area .nav-links span.current, .pagination-area .nav-links a:hover, .pagination-area .nav-links span.current{background:<?php echo esc_attr($brand_color); ?>}#scrollUp,.tagcloud a:hover,.pagination-area .nav-links span.current, .pagination-area .nav-links a:hover, .pagination-area .nav-links span.current,.pagination-area .nav-links span, .pagination-area .nav-links a, .pagination-area ul li a{border-color:<?php echo esc_attr($brand_color); ?>}

    </style>
    <?php 
}
                    
/**
 * hexo comment list modify
 */ 
function hexo_lite_comments($comment, $args, $depth) { ?>
<div <?php comment_class('media main-comments'); ?> id="comment-<?php comment_ID() ?>">
    <a class="pull-left" href="<?php echo esc_url( get_comment_link( $comment, $args ) ); ?>">
        <?php echo get_avatar( $comment, 125 ); ?>
      </a>
      <div class="pull-left comments-body">
        <h4 class="media-heading"><?php comment_author() ?></h4>
        <p><?php 
        /* translators: comment date */
        printf( esc_html__( '%1$s | %2$s','hexo-lite' ), get_comment_date( '', $comment ),  get_comment_time() ); ?></p>
        <?php if ($comment->comment_approved == '0') : ?>
            <p><em><?php esc_html_e('Your comment is awaiting moderation.','hexo-lite'); ?></em></p>
        <?php endif; ?>
        <?php comment_text() ?>   
        <div class="replay-area"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?></div>
    </div>

<?php } 



/**
 * Comment box title change
 */   
add_filter( 'comment_form_defaults', 'hexo_lite_comment_form_allowed_tags' );
function hexo_lite_comment_form_allowed_tags( $defaults ) { 

    $defaults['title_reply'] =  esc_html__( 'Leave Comments','hexo-lite' );
    $defaults['comment_notes_before'] =  '';
    $defaults['title_reply_before'] =  '<h4>';
    $defaults['title_reply_after'] =  '</h4>';
    $defaults['comment_field'] = '';
    $defaults['label_submit'] =  esc_html__( 'Send Message','hexo-lite' ); 
    return $defaults;

}

/**
 * Comment form field order
 */   
add_action( 'comment_form_after_fields', 'hexo_lite_add_textarea' );
add_action( 'comment_form_logged_in_after', 'hexo_lite_add_textarea' );

function hexo_lite_add_textarea()
{
    echo '<p class="comment-form-comment"><textarea id="comment" name="comment" placeholder="'.esc_attr('Your Message','hexo-lite').'" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>';
}

/**
 * remove comment fields
 */  
function hexo_lite_remove_comment_fields($fields) {
    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );

    unset($fields['url']);

    $fields['author'] = '<p class="comment-form-author"> <input id="author" placeholder="'.esc_attr('Name*','hexo-lite').'" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
    '" size="30"' . $aria_req . ' /></p>';
    $fields['email'] = '<p class="comment-form-email"><input id="email" placeholder="'.esc_attr('Email*','hexo-lite').'" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    '" size="30"' . $aria_req . ' /></p>';
    return $fields;
}
add_filter('comment_form_default_fields','hexo_lite_remove_comment_fields');

/**
 * custom excerpt
 */   
function hexo_lite_excerpt_max_charlength($charlength) {
    $excerpt = get_the_excerpt();
    $charlength++;

    if ( mb_strlen( $excerpt ) > $charlength ) {
        $subex = mb_substr( $excerpt, 0, $charlength - 5 );
        $exwords = explode( ' ', $subex );
        $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
        if ( $excut < 0 ) {
            echo esc_textarea(mb_substr( $subex, 0, $excut ));
        } else {
            echo esc_textarea($subex);
        }
        echo '[...]';
    } else {
        echo esc_textarea($excerpt);
    }
}
  
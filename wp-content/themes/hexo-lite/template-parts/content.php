<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hexo Lite
 */

?>
 
  <div id="post-<?php the_ID(); ?>" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pt15 masonry-entry">
    <div class="single-blog">
    	<?php if(has_post_thumbnail()): ?>
	        <div class="blog-image">
	            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?>
	                <i class="fa fa-plus" aria-hidden="true"></i>
	            </a>                             
	        </div>
	    <?php endif; ?>
        <div class="blog-content-area">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="informations">
                <p><?php the_time(get_option( 'date_format' )); ?></p> 
            </div>         
            <p><?php hexo_lite_excerpt_max_charlength(160); ?></p>                                
        </div>
    </div>
  </div>  

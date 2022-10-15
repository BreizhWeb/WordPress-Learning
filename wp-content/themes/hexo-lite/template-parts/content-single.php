<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hexo Lite
 */

?>
 
    <div id="post-<?php the_ID(); ?>" class="news-page-content-section-area pt15">
        <div class="single-news-area">
          <a class="single-a disabled"><?php the_post_thumbnail('hexo-lite-single-img',array('class'=>'media-object')); ?></a>
          <div class="news-body">
            <h3><?php the_title() ?></h3>                            
            <div class="informations">
                <ul>
                    <li><i class="fa fa-calendar" aria-hidden="true"></i><?php the_time(get_option( 'date_format' )); ?></li>
                    <li><i class="fa fa-user" aria-hidden="true"></i><?php esc_html_e('By Admin: ','hexo-lite');  the_author(); ?> </li>
                    <li><i class="fa fa-comments-o" aria-hidden="true"></i> <?php echo esc_html__('Comments','hexo-lite'); ?>: <?php comments_popup_link( esc_html__('00','hexo-lite'), esc_html__('01','hexo-lite'), esc_html__('0%','hexo-lite'), 'comments-link', esc_html__('Comments off','hexo-lite')); ?></li>
                </ul>
            </div>
            <?php the_content('<p class="news-content">','</p>') ?> 
          </div>                                
        </div>
    </div> 
    <?php if(has_tag()): ?>
        <div class="news-page-tag-section-area">
            <h4><?php esc_html_e('Tags','hexo-lite'); ?></h4>
            <ul>
            <?php
                $hexo_lite_posttags = get_the_tags(); 
                $hexo_lite_loop = 1;
                if ($hexo_lite_posttags) {
                  foreach($hexo_lite_posttags as $hexo_lite_posttag) {
                    if($hexo_lite_loop > 1) echo ', '; 
                    echo '<li><a href="'.esc_url(get_tag_link($hexo_lite_posttag->term_id)).'">'.esc_html($hexo_lite_posttag->name) .'</a></li>'; 
                    $hexo_lite_loop ++; 
                  }
                }
            ?> 
            </ul>
        </div> 
    <?php endif; ?>

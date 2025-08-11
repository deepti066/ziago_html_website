<?php
/**
 * Template part for displaying posts
 *
 * @subpackage Expert Blogger
 * @since 1.0
 * @version 1.4
 */
?>

<div class="col-lg-4 col-md-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service grid-layout'); ?>>
    <?php if(has_post_thumbnail()) { ?>
      <?php the_post_thumbnail(); ?>
    <?php }?>
    <div class="article_content">
      <h3><?php the_title(); ?></h3>
      <p class="mb-0">
        <?php $luzuk_expert_blogger_excerpt = get_the_excerpt(); echo esc_html( luzuk_expert_blogger_string_limit_words( $luzuk_expert_blogger_excerpt,55 ) ); ?> <?php esc_html_e('...', 'expert-blogger'); ?>
        <a href="<?php the_permalink(); ?>" class="read-btn"><?php esc_html_e('Read More', 'expert-blogger'); ?><span class="screen-reader-text"><?php esc_html_e('Read More', 'expert-blogger'); ?></span></a>
      </p>
      <div class="clearfix"></div>
    </div>
    <!-- <div class="metabox"> 
      <span class="entry-comments"><i class="fas fa-comments"></i><//?php comments_number( __('0 Comments','expert-blogger'), __('0 Comments','expert-blogger'), __('% Comments','expert-blogger') ); ?></span>
      <span class="entry-date"><span><i class="fas fa-calendar-alt"></i><//?php echo esc_html( get_the_date()); ?></span></span>
    </div> -->
  </article>
</div>
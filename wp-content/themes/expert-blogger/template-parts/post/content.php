<?php
/**
 * Template part for displaying posts
 *
 * @subpackage Expert Blogger
 * @since 1.0
 * @version 1.4
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <?php if(has_post_thumbnail()) { ?>
    <?php the_post_thumbnail(); ?>
  <?php }?>
  <div class="blog-admin">
    <?php
    // Get the author's ID
    $author_id = get_the_author_meta('ID');
    
    // Display the author's Gravatar
    echo get_avatar($author_id, 96, '', get_the_author(), ['class' => 'avatar avatar-96 photo']);

    // Display the author's name
    echo '<span class="author-name">' . esc_html(get_the_author()) . '</span>';
    ?>
  </div>
  <div class="article_content">
    <h3><?php the_title(); ?></h3>
    <p>
      <?php $luzuk_expert_blogger_excerpt = get_the_excerpt(); echo esc_html( luzuk_expert_blogger_string_limit_words( $luzuk_expert_blogger_excerpt,55 ) ); ?> <?php esc_html_e('...', 'expert-blogger'); ?>
    </p>
    <div class="row mr-0">
        <div class="read-btn">
            <a href="<?php the_permalink(); ?>" ><?php esc_html_e('Continue Reading', 'expert-blogger'); ?></a>
        </div>
        <div class="socialMedia">
          <ul>
            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" class="site-button sharp" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>" class="site-button sharp" target="_blank" ><i class="fab fa-linkedin-in"></i></a></li>           
            <li><a href="https://twitter.com/share?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" class="site-button sharp" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink()); ?>&media=<?php echo urlencode(get_the_post_thumbnail_url()); ?>&description=<?php echo urlencode(get_the_title()); ?>" class="site-button sharp" target="_blank" ><i class="fab fa-pinterest-p"></i></a></li>
            <li class="share-button"><a class="site-button sharp"><i class="fas fa-share-alt"></i></a></li>
          </ul>
        </div>
    </div>
    <div class="blog-page-palette">
          <div class="blog-splash"></div>
      </div>
    <div class="clearfix"></div>
  </div>
  <!-- <div class="metabox"> 
    <span class="entry-comments"><i class="fas fa-comments"></i><//?php comments_number( __('0 Comments','expert-blogger'), __('0 Comments','expert-blogger'), __('% Comments','expert-blogger') ); ?></span>
    <span class="entry-date"><span><i class="fas fa-calendar-alt"></i><//?php echo esc_html( get_the_date()); ?></span></span>
  </div> -->
</article>
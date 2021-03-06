<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package SKT Spa
 */
?>
  <h1 class="entry-title">
    <?php _e( 'Nothing Found', 'skt-spa' ); ?>
  </h1>
<div>
<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'skt-spa' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
<?php elseif ( is_search() ) : ?>
<p>
  <?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'skt-spa' ); ?>
</p>
<div class="spacer20"></div>
<?php get_search_form(); ?>
<?php else : ?>
<p>
  <?php _e( 'It seems we can not find what you are looking for. Perhaps searching can help.', 'skt-spa' ); ?>
</p>
<?php get_search_form(); ?>
<?php endif; ?>

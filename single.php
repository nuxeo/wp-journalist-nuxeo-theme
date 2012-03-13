<?php get_header(); ?>

<div id="content" class="group">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
<p class="comments"><a href="<?php comments_link(); ?>"><?php comments_number('without comments','with one comment','with % comments'); ?></a></p>

<div class="main">
	<?php the_content('Read the rest of this entry &raquo;'); ?>
</div>

<div class="meta group">
<div class="signature">
    <p><?php the_time('F jS, Y'); ?> <?php _e("at"); ?> <?php the_time('g:i a'); ?></p>
</div>	
<div class="tags">
    <p>Posted in <?php the_category(',') ?></p>
    <?php if ( the_tags('<p>Tagged with ', ', ', '</p>') ) ?>
</div>
</div>

<?php if ( get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries ?>
    <div id="author-info" class="author-singular">
      <div id="author-avatar">
        <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'journalist_author_bio_avatar_size', 68 )); ?>
      </div><!-- #author-avatar -->
      <div id="author-description">
        <h2><?php printf( esc_attr__( 'About %s', 'journalist' ), get_the_author() ); ?></h2>
        <?php the_author_meta( 'description' ); ?>
        <div id="author-link">
          <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
            <?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'journalist' ), get_the_author() ); ?>
          </a>
      </div><!-- #author-link	-->
    </div><!-- #author-description -->
  </div><!-- #entry-author-info -->
<?php endif; ?>

<!-- Blog-Article-Footer -->
<script type='text/javascript'>
GA_googleFillSlot("Blog-Article-Footer");
</script>

<div class="navigation group">
    <div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
    <div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
</div>

<?php if ( comments_open() ) comments_template(); ?>

<?php endwhile; else: ?>
<div class="warning">
	<p>Sorry, but you are looking for something that isn't here.</p>
</div>
<?php endif; ?>

</div> 

<?php get_sidebar(); ?>

<?php get_footer(); ?>

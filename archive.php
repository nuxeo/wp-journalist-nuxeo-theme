<?php get_header(); ?>

<div id="content">
<?php if (have_posts()) : ?>

<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
<h1 class="archive"><?php single_cat_title(); ?></h1>
<?php /* If this is a tag */ } elseif (is_tag()) { ?>
<h1 class="archive">Archive for the &#8216;<?php single_tag_title(); ?>&#8217; tag</h1>
<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<h1 class="archive">Archive for <?php the_time('F jS, Y'); ?></h1>
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<h1 class="archive">Archive for <?php the_time('F, Y'); ?></h1>
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<h1 class="archive">Archive for <?php the_time('Y'); ?></h1>
<?php /* If this is an author archive */ } elseif (is_author()) { ?>

<?php /* Queue the first post, that way we know what author we're dealing with (if that is the case).
       * We reset this later so we can run the loop properly with a call to rewind_posts().
       */
 the_post();
?>
<h1 class="archive"><?php printf( __( 'Author Archives: %s'), '<span class="vcard"><a class="url fn n author-link" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>

<?php
  /* Since we called the_post() above, we need to rewind the loop back to the beginning that way we can run the loop properly, in full.
   */ rewind_posts();
?>

<?php if ( get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries ?>
    <div id="author-info">
      <div id="author-avatar">
        <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'journalist_author_bio_avatar_size', 68 )); ?>
      </div><!-- #author-avatar -->
      <div id="author-description">
        <h2><?php printf( esc_attr__( 'About %s', 'journalist' ), get_the_author() ); ?></h2>
        <?php the_author_meta( 'description' ); ?>
    </div><!-- #author-description -->
  </div><!-- #entry-author-info -->
<?php endif; ?>

<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<h1 class="archive">Blog Archives</h1>
<?php } ?>

<?php while (have_posts()) : the_post(); ?>

<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<p class="comments"><a href="<?php comments_link(); ?>"><?php comments_number('without comments','with one comment','with % comments'); ?></a></p>

<div class="main">
	<?php the_excerpt('Read the rest of this entry &raquo;'); ?>
</div>

<div class="meta group">
<div class="signature">
    <p>Written by  <a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php the_author() ?> </a><span class="edit"><?php edit_post_link('Edit'); ?></span></p>
    <p><?php the_time('F jS, Y'); ?> <?php _e("at"); ?> <?php the_time('g:i a'); ?></p>
</div>
<div class="tags">
    <p>Posted in <?php the_category(',') ?></p>
    <?php if ( the_tags('<p>Tagged with ', ', ', '</p>') ) ?>
</div>
</div>

<?php if ( comments_open() ) comments_template(); ?>

<?php endwhile; else: ?>
<div class="warning">
	<p>Sorry, but you are looking for something that isn't here.</p>
</div>
<?php endif; ?>

<div class="navigation group">
	<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
	<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
</div>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

<?php

/**
* Template Name: Home-Page
*/

 get_header(); ?>

<div class="bloghome">
 
<div id="content">

<?php query_posts( array ( 'tag' => 'comic', 'posts_per_page' => 1 ) );the_post();
 $my_comic = catch_that_image(true);
 $my_comic_link = get_permalink();
 $my_comic_title = get_the_title();
?>

<?php wp_reset_query(); ?>



<?php query_posts( array ( 'category_name' => 'industry-insight,updates', 'tag__not_in' =>  array('909'), 'posts_per_page' => 4) );the_post();?>

 <div class="spotlight" id="first">
  <h2>Spotlight</h2>
 <div class="date">
<?php the_time('D j F Y'); ?>
  </div>
  <div class="title">
    <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
  </div>


  <div class="summary">
<?php echo catch_that_image(); ?>
<?php echo get_excerpt(450); ?>
  </div>
  <div class="read-more"><a href="<?php the_permalink() ?>">Continue reading &raquo;</a></div>
  <div style="clear:both;"></div>

<div>
<div class="title">
  <h3 class="comic"><a href="<?php echo $my_comic_link ?>" rel="bookmark"><?php echo $my_comic_title ?></a></h3>
</div>
<a href="<?php echo $my_comic_link ?>" ><?php echo $my_comic ?></a>
</div>
<div class="posts-list">
  <h4>Other recent posts</h4>
  <ul>
    <?php while (have_posts()) : the_post(); ?>
    <li><span><?php the_time('D j F Y'); ?></span>
      <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a> Written by  <a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php the_author() ?></a> <p>Posted in <?php the_category(',') ?></p>
    </li>

<?php endwhile; ?>

  </ul>
</div>
  
  
 </div>



<?php wp_reset_query(); ?>

<?php query_posts( array ( 'category_name' => 'development', 'posts_per_page' => 4 ) );the_post();?>

 <div class="spotlight" >
  <h2>News from the Dev Team</h2>

 <div class="date">
<?php the_time('D j F Y'); ?>
  </div>
  <div class="title">
    <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
  </div>


  <div class="summary">
<?php echo catch_that_image(); ?>
<?php echo get_excerpt(450); ?>
  </div>
  <div class="read-more"><a href="<?php the_permalink() ?>">Continue reading &raquo;</a></div>
  <div style="clear:both;"></div>
  
  <div class="posts-list">
  <h4>Other recent posts</h4>
  <ul>
    <?php while (have_posts()) : the_post(); ?>
    <li><span><?php the_time('D j F Y'); ?></span>
      <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a> Written by  <a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php the_author() ?></a>  <p>Posted in <?php the_category(',') ?></p>
    </li>

<?php endwhile; ?>

  </ul>
</div>
  
  
 </div>

</div> 
</div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
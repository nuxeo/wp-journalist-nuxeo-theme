<?php

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  $new_img_tag = "";

  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image with 0 width
  $new_img_tag = "<img src='/images/noimage.jpg' width='0px' class='alignright' />";
  }

  else{
	$new_img_tag = "<img src='" .  $first_img . "' width='150px' class='alignright' />";
	}

  return $new_img_tag;
  }

function get_excerpt($count){

  $excerpt = get_the_content();
  $excerpt = strip_shortcodes($excerpt);
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);

  return $excerpt;
}
?>


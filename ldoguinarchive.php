<?php

/**
* Template Name: ldoguinarchive
*/
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Nuxeo Blog Tutorials</title>
	<meta name="description" content="Nuxeo Blog Tutorials">
	<meta name="author" content="nuxeo">
</head>
<body>
<?php
$tagsToFilter = array('beginner', 'intermediate', 'advanced','Monday Dev Heaven', 'Friday Q&amp;A');
?>

<h2>Nuxeo Blog Tutorials</h2>
<div class="table-wrap">
<table class="confluenceTable tablesorter">
<thead>
  <tr>
    <th class="confluenceTh">Difficulty</th>
    <th class="confluenceTh">Tags</th>
    <th class="confluenceTh">Title</th>
  </tr>
</thead>
<tbody>
<?php query_posts( array ( 'tag' => 'beginner,intermediate,advanced', 'posts_per_page' => 100) );?>
 <?php while (have_posts()) : the_post(); ?>
<tr>
<?php
$pepperLink = '<img src="'.get_stylesheet_directory_uri().'/images/redpepper.png" />';
$difficulty = " ";
$posttags = get_the_tags();
$tagToDisplay = "";
if ($posttags) {
  foreach($posttags as $tag) {
$tagName = $tag->name;
$tagId = $tag->term_id;
if ($tagName == 'beginner' ) {
    $difficulty =  '<span style="visibility:hidden;">a</span><a title="Beginner" href="'.get_tag_link($tagId).'">'.$pepperLink.'</a>';

} else if ($tagName == 'intermediate' ) {
    $difficulty =  '<span style="visibility:hidden;">b</span><a title="Intermediate" href="'.get_tag_link($tagId).'">'.$pepperLink.$pepperLink.'</a>';

} else if ($tagName == 'advanced' ) {
    $difficulty = '<span style="visibility:hidden;">c</span><a title="Advanced" href="'.get_tag_link($tagId).'">'.$pepperLink.$pepperLink.$pepperLink.'</a>';
} 


    if ( ! in_array($tagName, $tagsToFilter)) {
      $tagLink = '<a href="'.get_tag_link($tagId).'">'.$tagName.'</a>';
      $tagToDisplay =  $tagToDisplay.' '.$tagLink;
    }
  }
}
?>
  <td class="confluenceTd"><?php echo $difficulty ?></td>
  <td class="confluenceTd"><?php echo $tagToDisplay ?></td>
  <td class="confluenceTd"><h6><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h6>
<?php 
  foreach(get_post_meta($post->ID, 'githubRepo', false) as $repo) {
    echo '<span style="float: right; padding: 2px 2px 2px 2px;"><a href="'.$repo.'"><img src="'.get_stylesheet_directory_uri().'/images/blacktocat-32.png" /></a></span>';
  }
?>
<?php 
  foreach(get_post_meta($post->ID, 'gist', false) as $gist) {
    echo '<span style="float: right; padding: 2px 2px 2px 2px;"><a href="'.$gist.'"><img src="'.get_stylesheet_directory_uri().'/images/blacktocat-32.png" /></a></span>';
  }
?>
  <p><?php echo get_post_meta($post->ID, '_yoast_wpseo_metadesc', true); ?></p>
</td>
</tr>
<?php endwhile; ?>
</tbody>
</table>
</div>
</body>
</html>


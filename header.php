<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<?php if(is_front_page()) {?>
<title>Nuxeo Blogs</title>
<?php } else { ?>
<title><?php wp_title(' '); ?><?php if(wp_title(' ', false)) { ?> at <?php } ?><?php bloginfo('name'); ?></title>
<?php } ?>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" type="image/x-png" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.png" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>

<!-- DFP begin -->
<script type='text/javascript' src='http://partner.googleadservices.com/gampad/google_service.js'>
</script>
<script type='text/javascript'>
GS_googleAddAdSenseService("ca-pub-1284681875767465");
GS_googleEnableAllServices();
</script>
<script type='text/javascript'>
GA_googleAddSlot("ca-pub-1284681875767465", "Blog-Article-Footer");
</script>
<script type='text/javascript'>
GA_googleFetchAds();
</script>

<!-- DFP end -->

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-81135-9']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<!-- Common header and footer -->
<script type="text/javascript" src="http://www.nuxeo.com/extension/nuxeo_design/design/nuxeo/javascript/xnav_get.js" charset="utf-8"></script>

<script src="http://munchkin.marketo.net/munchkin.js" type="text/javascript"></script> <script>mktoMunchkin("498-JDO-611");</script>
</head>

<body>

<div id="container" class="group">
  <div id="header-container">
    <div id="search-box">
      <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
        <div>
          <input type="text" size="put_a_size_here" name="s" id="s" value="Search" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
          <input type="submit" id="searchsubmit" value="Search" class="btn" />
        </div>
      </form>
    </div>
    <?php if(is_front_page()) {?><h1<?php } else {?><h2<?php } ?> id="site-title">
      <?php if (!is_front_page() ) {?><a href="<?php echo site_url(); ?>"><?php }?><img src="<?php echo get_stylesheet_directory_uri() ?>/images/nuxeo-blogs.png" alt="Nuxeo/Blogs" width="211" height="41" /><?php if (!is_front_page() ) {?></a><?php }?>
    <?php if(is_front_page()) {?></h1><?php } else {?></h2><?php } ?>
    
    <?php if (is_single() ||  is_category() ) {?>
<div id="bubble"><p><?php
 $category = get_the_category(); 
echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a> / ';
echo $category[0]->description;
 ?> </p></div> 
<?php } else if (!is_front_page()) { ?>
<div id="bubble"><p>Industry Insight, Product & Development, Updates.</p></div> 
<?php } ?>
</div>

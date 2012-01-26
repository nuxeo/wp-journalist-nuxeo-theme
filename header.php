<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<title><?php wp_title(' '); ?><?php if(wp_title(' ', false)) { ?> at <?php } ?><?php bloginfo('name'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
<link href="http://www.nuxeo.com/var/storage/community/community_common.css" rel="stylesheet" type="text/css" media="screen" />
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
GA_googleAddSlot("ca-pub-1284681875767465", "Nuxeo-Blogs-Article-Footer");
</script>
<script type='text/javascript'>
GA_googleFetchAds();
</script>
<!-- DFP end -->

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-81135-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<script src="http://munchkin.marketo.net/munchkin.js" type="text/javascript"></script> <script>mktoMunchkin("498-JDO-611");</script>
</head>

<body>

<div class="header">
  <div class="logoHome">
    <a href="http://blogs.nuxeo.com/" title="Home" rel="home"><img width="88" height="36" src="http://www.nuxeo.com/var/storage/community/nuxeo_logo.png" alt="Nuxeo"></a>
  </div>

  <div class="externalLinks">
    <ul>
      <li><a href="http://community.nuxeo.com/">Home</a></li>
      <li><a href="https://answers.nuxeo.com/">Answers</a></li>
      <li><a href="http://forum.nuxeo.com/">Forums</a></li>
      <li><a href="http://doc.nuxeo.com/">Documentation</a></li>
      <li class="active"><a href="http://blogs.nuxeo.com/">Blogs</a></li>
    </ul>
    <ul class="corp">
      <li><a href="http://nuxeo.com/">Nuxeo.com</a></li>
    </ul>
  </div>
</div>

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
    <?php if(is_home()) {?><h1<?php } else {?><h2<?php } ?> id="site-title">
      <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a>
    <?php if(is_home()) {?></h1><?php } else {?></h2><?php } ?>
    <div id="bubble"><p><?php bloginfo('description'); ?></p></div> <!-- erase this line if you want to turn the bubble off -->
  </div>

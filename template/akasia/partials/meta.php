<?php
// clean request uri from xss
$request_uri = urlencode(strip_tags(urldecode($_SERVER['REQUEST_URI'])));
?>
<!-- Page Title
============================================= -->
<title><?php echo $page_title; ?></title>

<!-- Meta
============================================= -->
<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, post-check=0, pre-check=0" />
<meta http-equiv="Expires" content="Sat, 26 Jul 1997 05:00:00 GMT" />

<?php if(isset($_GET['p']) && ($_GET['p'] == 'show_detail')): ?>
<meta name="description" content="<?php echo substr($notes,0,152).'...'; ?>">
<meta name="keywords" content="<?php echo $subject; ?>">
<?php else: ?>
<meta name="description" content="<?php echo $page_title; ?>">
<meta name="keywords" content="<?php echo $sysconf['library_subname']; ?>">
<?php endif; ?>
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
<meta name="generator" content="<?php echo SENAYAN_VERSION ?>">
<meta name="theme-color" content="#000">

<!-- Opengraph
============================================= -->
<meta property="og:locale" content="<?php echo str_replace('-','_',$sysconf['default_lang']); ?>"/>
<meta property="og:type" content="book"/>
<meta property="og:title" content="<?php echo $page_title; ?>"/>
<?php if(isset($_GET['p']) && ($_GET['p'] == 'show_detail')): ?>
<meta property="og:description" content="<?php echo substr($notes,0,152).'...'; ?>"/>
<?php else: ?>
<meta property="og:description" content="<?php echo $sysconf['library_subname']; ?>"/>
<?php endif; ?>
<meta property="og:url" content="//<?php echo $_SERVER["SERVER_NAME"].$request_uri; ?>"/>
<meta property="og:site_name" content="<?php echo $sysconf['library_name']; ?>"/>
<?php if(isset($_GET['p']) && ($_GET['p'] == 'show_detail')): ?>
<meta property="og:image" content="//<?php echo $_SERVER["SERVER_NAME"].SWB.$image_src ?>"/>
<?php else: ?>
<meta property="og:image" content="//<?php echo $_SERVER["SERVER_NAME"].SWB.$sysconf['template']['dir']; ?>/default/img/logo.png"/>
<?php endif; ?>

<!-- Twitter
============================================= -->
<meta name="twitter:card" content="summary">
<meta name="twitter:url" content="//<?php echo $_SERVER["SERVER_NAME"].$request_uri; ?>"/>
<meta name="twitter:title" content="<?php echo $page_title; ?>"/>
<?php if(isset($_GET['p']) && ($_GET['p'] == 'show_detail')): ?>
<meta property="twitter:image" content="//<?php echo $_SERVER["SERVER_NAME"].SWB.$image_src ?>"/>
<?php else: ?>
<meta property="twitter:image" content="//<?php echo $_SERVER["SERVER_NAME"].SWB.$sysconf['template']['dir']; ?>/default/img/logo.png"/>
<?php endif; ?>

<!-- Theme
============================================= -->
<link rel="shortcut icon" href="webicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="<?php echo $sysconf['template']['dir']; ?>/core.style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo JWB; ?>colorbox/colorbox.css" type="text/css" />
<link rel="profile" href="http://www.slims.web.id/">
<link rel="canonical" href="//<?php echo $_SERVER["SERVER_NAME"].$request_uri; ?>" />
<?php echo $metadata; ?>

<!-- Script
============================================= -->
<script src="<?php echo $sysconf['template']['dir'].DS.$sysconf['template']['theme']; ?>/js/jquery.min.js"></script>
<script src="<?php echo JWB; ?>form.js"></script>
<script src="<?php echo JWB; ?>gui.js"></script>
<script src="<?php echo JWB; ?>highlight.js"></script>
<script src="<?php echo JWB; ?>fancywebsocket.js"></script>
<script src="<?php echo JWB; ?>colorbox/jquery.colorbox-min.js"></script>
<script src="<?php echo $sysconf['template']['dir'].DS.$sysconf['template']['theme']; ?>/js/jquery.jcarousel.min.js"></script>
<script src="<?php echo $sysconf['template']['dir'].DS.$sysconf['template']['theme']; ?>/js/jquery.transit.min.js"></script>
<script src="<?php echo $sysconf['template']['dir'].DS.$sysconf['template']['theme']; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo $sysconf['template']['dir'].DS.$sysconf['template']['theme']; ?>/js/custom.js"></script>
<script src="<?php echo $sysconf['template']['dir'].DS.$sysconf['template']['theme']; ?>/js/vegas.min.js"></script>
<?php 
if (isset($js)): 
    echo $js;
endif;
?>

<!-- Animation options
============================================= -->
<?php if($sysconf['template']['run_animation']) echo '<link rel="stylesheet" type="text/css" href="'.SWB.'template/'.$sysconf['template']['theme'].'/css/animate.min.css" />'; ?>

<!-- Style Minified
============================================= -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo SWB; ?>template/default/style.min.css" /> -->

<!-- Style
============================================= -->
<link rel="stylesheet" type="text/css" href="<?php echo $sysconf['template']['css']; ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo $sysconf['template']['dir'].DS.$sysconf['template']['theme']; ?>/css/vegas.min.css" />

<!-- Less
============================================= -->
<!-- For Developmet Only -->
<!-- <link rel="stylesheet/less" type="text/css" href="<?php echo SWB; ?>template/default/style.less"/> -->
<!-- <script>less = { env: "development" };</script>
<script src="<?php echo $sysconf['template']['dir']; ?>/default/js/less.min.js"></script> -->

<?php
/**
 * @file
 * Porto's HTML template.
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>

<!-- IE Fix for HTML5 Tags -->
<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[if IE]>
  <link rel="stylesheet" href="<?php global $parent_root; echo $parent_root; ?>/css/ie.css">
<![endif]-->

<!--[if lte IE 8]>
  <script src="<?php global $parent_root; echo $parent_root; ?>/vendor/respond.js"></script>
<![endif]-->

<!-- Web Fonts  -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

<?php porto_user_css();?>  
</head>

<body class="<?php print $classes; ?> <?php if (theme_get_setting('site_layout') == 'boxed'){ echo "boxed"; } if (theme_get_setting('background_color') == 'dark'){ echo "dark"; }?>"<?php print $attributes;?>>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
</body>

</html>
<?php
defined('_JEXEC') or die;
include_once JPATH_THEMES . '/' . $this->template . '/framework.php';
/*** Head Declarations **/
$doc = JFactory::getDocument();
$doc->addStyleSheet('templates/' . $this->template . '/css/foundation.css');
$doc->addStyleSheet('templates/' . $this->template . '/style.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/responsiveslides.css');
?>
<!--  -->
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en" > <!--<![endif]-->
<head>
  <jdoc:include type="head" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <style>
  	#footer{background:<?php echo $agencyFooterBgColor ?>; }
  	#main .panel, #main .moduletable{background:<?php echo $contentBgColor; ?>;<?php echo $contentBorder ?>;border-radius: <?php echo $contentBorderRd ?>px;}
    #main h1{font-size:<?php echo $sh1; ?>rem;}
    #main h2{font-size:<?php echo $sh2; ?>rem;}
    #main h3{font-size:<?php echo $sh3; ?>rem;}
    #main h4{font-size:<?php echo $sh4; ?>rem;}
    #main h5{font-size:<?php echo $sh5; ?>rem;}
    #main h6{font-size:<?php echo $sh6; ?>rem;}
  </style>
  <script src="<?php echo 'templates/' . $this->template . '/js/vendor/modernizr.js'; ?>"></script>
</head>
<body>
<?php //include_once JPATH_THEMES . '/' . $this->template . '/layouts/accessibility.php'; ?>
<?php include_once JPATH_THEMES . '/' . $this->template . '/layouts/topbar.php'; ?>
<?php include_once JPATH_THEMES . '/' . $this->template . '/layouts/masthead.php'; ?>
<?php include_once JPATH_THEMES . '/' . $this->template . '/layouts/banner.php'; ?>
<?php include_once JPATH_THEMES . '/' . $this->template . '/layouts/breadcrumb.php'; ?>
<?php include_once JPATH_THEMES . '/' . $this->template . '/layouts/panel-top.php'; ?>
<?php include_once JPATH_THEMES . '/' . $this->template . '/layouts/contents.php'; ?>
<?php include_once JPATH_THEMES . '/' . $this->template . '/layouts/panel-bottom.php'; ?>
<?php include_once JPATH_THEMES . '/' . $this->template . '/layouts/agencyfooter.php'; ?>
<?php include_once JPATH_THEMES . '/' . $this->template . '/layouts/standardfooter.php'; ?>
<div><a href="#main-nav" id="back-to-top" style="display: inline;z-index:101;">Back to Top</a></div>

<!-- JS Files -->
<script src="<?php echo 'templates/' . $this->template . '/js/vendor/jquery.js'; ?>"></script>
<script src="<?php echo 'templates/' . $this->template . '/js/foundation.min.js'; ?>"></script>
<script src="<?php echo 'templates/' . $this->template . '/js/vendor/modernizr.js'; ?>"></script>
<script src="<?php echo 'templates/' . $this->template . '/js/responsiveslides.min.js'; ?>"></script>
<script src="<?php echo 'templates/' . $this->template . '/js/theme.js'; ?>"></script>

</body>
</html>
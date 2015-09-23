<?php

defined('_JEXEC') or die;

// head declarations
$doc = JFactory::getDocument();
$doc->addStyleSheet('templates/' . $this->template . '/css/foundation.css');
$doc->addStyleSheet('templates/' . $this->template . '/style.css');

include_once JPATH_THEMES . '/' . $this->template . '/framework.php';

?>
<!--  -->
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en" > <!--<![endif]-->

<head>
  <jdoc:include type="head" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="<?php echo 'templates/' . $this->template . '/js/vendor/modernizr.js'; ?>"></script>
</head>

<body>
<?php include_once JPATH_THEMES . '/' . $this->template . '/layouts/accessibility.php'; ?>
<?php include_once JPATH_THEMES . '/' . $this->template . '/layouts/topbar.php'; ?>
<?php include_once JPATH_THEMES . '/' . $this->template . '/layouts/masthead.php'; ?>
<?php include_once JPATH_THEMES . '/' . $this->template . '/layouts/banner.php'; ?>
<?php include_once JPATH_THEMES . '/' . $this->template . '/layouts/breadcrumb.php'; ?>
<?php include_once JPATH_THEMES . '/' . $this->template . '/layouts/panel-top.php'; ?>
<?php include_once JPATH_THEMES . '/' . $this->template . '/layouts/contents.php'; ?>
<?php include_once JPATH_THEMES . '/' . $this->template . '/layouts/panel-bottom.php'; ?>
<?php include_once JPATH_THEMES . '/' . $this->template . '/layouts/agencyfooter.php'; ?>
<?php include_once JPATH_THEMES . '/' . $this->template . '/layouts/standardfooter.php'; ?>
<div><a href="#main-nav" id="back-to-top" style="display: inline;">Back to Top</a></div>

<!-- JS Files -->
<script src="<?php echo 'templates/' . $this->template . '/js/vendor/jquery.js'; ?>"></script>
<script src="<?php echo 'templates/' . $this->template . '/js/foundation.min.js'; ?>"></script>
<script src="<?php echo 'templates/' . $this->template . '/js/vendor/modernizr.js'; ?>"></script>
<script src="<?php echo 'templates/' . $this->template . '/js/theme.js'; ?>"></script>

</body>
</html>

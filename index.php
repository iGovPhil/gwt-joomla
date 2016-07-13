<?php defined( '_JEXEC' ) or die; 

include_once JPATH_THEMES.'/'.$this->template.'/function.php';
?>

<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en" > <!--<![endif]-->

<html lang="<?php echo $this->language; ?>">

<head>
  <jdoc:include type="head" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <style>
    #footer{background:<?php echo $agencyFooterBgColor ?>; }
    #main-content .moduletable, #main-content .modulearticle
    {background:<?php echo $contentBgColor; ?>; <?php echo $contentBorder ?>; border-radius:<?php echo $contentBorderRd ?>px; margin-bottom: 1rem;padding: 0.625rem;}
    #main h1{font-size:<?php echo $sh1; ?>rem;}
    #main h2{font-size:<?php echo $sh2; ?>rem;}
    #main h3{font-size:<?php echo $sh3; ?>rem;}
    #main h4{font-size:<?php echo $sh4; ?>rem;}
    #main h5{font-size:<?php echo $sh5; ?>rem;}
    #main h6{font-size:<?php echo $sh6; ?>rem;}
  </style>
  <head>

<body>
  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

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
<div><a href="#main-nav" id="back-to-top" title="Back to Top"><i class="fa fa-arrow-circle-up fa-3x" aria-hidden="true"></i>
</a></div>
      </div>
    </div>
  </div>

  <!-- <jdoc:include type="modules" name="debug" /> -->

  <script src="<?php echo 'templates/' . $this->template . '/js/foundation/vendor/jquery.js'; ?>"></script>
  <script src="<?php echo 'templates/' . $this->template . '/js/foundation/vendor/foundation.js'; ?>"></script>
  <script src="<?php echo 'templates/' . $this->template . '/js/theme.js'; ?>"></script>
  <script src="<?php echo 'templates/' . $this->template . '/js/logic.js'; ?>"></script>
</body>
</html>

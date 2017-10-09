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

    .content-container a, .content-container a:active, .content-container a:visited{color:<?php echo $ContentLinkColor;?>;}
    .content-container a:focus, .content-container a:hover{color:<?php echo $ContentLinkColorHover;?>;}

    <?php if($agencyFooterBgColor): ?>
    #footer{background:<?php echo $agencyFooterBgColor ?>;}
    <?php endif; ?>

    #main-content .moduletable, #main-content .modulearticle{<?php echo $contentBackground;?> <?php echo $contentBorder;?>;
      margin-bottom:1rem; padding:0.625rem;}

    <?php if($contentHeaderColor): ?>
    .sidebar-header, .modulearticle .item-title a{color:<?php echo $contentHeaderColor ?>;}
    <?php endif; ?>

    <?php if($contentHeaderFontSize==0 || $contentHeaderFontSize==1): ?>
    #main-content .page-header h1{font-size:<?php echo $sh1; ?>rem;}
    #main-content .modulearticle h2.item-title a{font-size:<?php echo $sh2; ?>rem;}
    .moduletable h3.sidebar-header{font-size:<?php echo $sh3; ?>rem;}
    <?php endif; ?>

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

  <script src="<?php echo 'templates/' . $this->template . '/js/foundation/vendor/jquery.js'; ?>"></script>
  <script src="<?php echo 'templates/' . $this->template . '/js/foundation/vendor/foundation.js'; ?>"></script>
  <script src="<?php echo 'templates/' . $this->template . '/js/theme.js'; ?>"></script>
  <script src="<?php echo 'templates/' . $this->template . '/js/logic.js'; ?>"></script>

<?php if($pstPosition != 0): ?>  
  <script type="text/javascript" id="gwt-pst">
    (function(d, eId){
      var js, gjs = d.getElementById(eId);
      js = d.createElement("script"); js.id = "gwt-pst-jsdk";
      js.src = "//gwhs.i.gov.ph/pst/gwtpst.js?"+new Date().getTime();
      gjs.parentNode.insertBefore(js, gjs);
    }(document, "gwt-pst"));
    var gwtpstReady = function(){new gwtpstTime({elementId: 'pst-time',keyboardTrap: true});
}
  </script>
<?php endif; ?>

</body>
</html>

<?php

defined('_JEXEC') or die;
// Load template framework 
include_once JPATH_THEMES . '/' . $this->template . '/framework.php';

$doc = JFactory::getDocument();

$doc->addStyleSheet('templates/' . $this->template . '/css/foundation.css');
$doc->addStyleSheet('templates/' . $this->template . '/style.css');
// $doc->addStyleSheet('templates/' . $this->template . '/css/a11y-desaturate.css');
// $doc->addStyleSheet('templates/' . $this->template . '/css/accessibility.css');

$doc->addStyleSheet('templates/' . $this->template . '/css/a11y-fontsize.css');


//***** sample accessibility *****//
// $doc->addStyleSheet('templates/' . $this->template . '/css/a11y-contrast.css');
// $doc->addStyleSheet("templates/gwt-joomla-3.5.4/css/a11y-contrast.css");
//***** sample accessibility *****//


$option = JFactory::getApplication()->input->getVar('option');
$view = JFactory::getApplication()->input->getVar('view');
// Make sure it is a single article
if ($option == 'com_content' && $view == 'article'):
  $id = JFactory::getApplication()->input->getInt('id');
  $article = JTable::getInstance('content');
  $article->load($id);
  $author_id = $article->created_by;
  $user = JFactory::getUser($author_id);

  $article_title = $article->get('title');
  $article_created = $article->created;

  $article_alias = $article->get('alias');
  $article_introtext = $article->get('introtext');
  $article_fulltext = $article->get('fulltext');
  $author = $user->name;

  $db = JFactory::getDBO();
  $id = JRequest::getString('id');
  $db->setQuery('SELECT #__categories.title FROM #__content, #__categories WHERE #__content.catid = #__categories.id AND #__content.id = '.$id);
  $category = $db->loadResult();
endif;

if ($this->params->get('headerBackgroundImage'))
{
	$background = 'style="background-image:url('.$this->params->get('headerBackgroundImage').');background-position:right;"';
} else {
  $background = 'style="background-color:'.$this->params->get('headerBackgroundColor').';background-position:right;"';
}

if ($this->params->get('bannerBackgroundImage'))
{
	$bannerBackground = 'style="background-image:url('.$this->params->get('bannerBackgroundImage').');background-position:right;"';
} else {
  $bannerBackground = 'style="background-color:'.$this->params->get('bannerBackgroundColor').';background-position:right;"';
}

if ($this->params->get('bannerFeaturedImage'))
{
	$featuredBackground = 'style="background-image:url('.$this->params->get('bannerFeaturedImage').');background-position:right;"';
} else {
  $featuredBackground = 'style="background-color:'.$this->params->get('bannerFeaturedColor').';background-position:right;"';
}

// TODO: check if URL is internal, if yes use relative URL (URL rewrite, yes or no)
$accessibilityLink = '';
$homeLink = '';
$contentLink = '';
$FAQLink = '';
$contactLink = '';
$feedbackLink = '';
$sitemapLink = '';
$searchLink = '';
if($this->params->get('accessAccessibility')){
	$accessibilityLink = '<li><a class="skips" href="'.$this->params->get('accessAccessibility').'" accesskey="0">Accessibility Statement</a></li>';
}
if ($this->params->get('accessHome')){
	$homeLink = '<li><a class="skips" href="'.$this->params->get('accessHome').'" accesskey="1">Home</a></li>';
}
if ($this->params->get('accessContent')){
	$contentLink = '<li><a class="skips" href="'.$this->params->get('accessContent').'" accesskey="R">Skip to Content</a></li>';
}
if ($this->params->get('accessFAQ')){
	$FAQLink = '<li><a class="skips" href="'.$this->params->get('accessFAQ').'" accesskey="5">FAQ</a></li>';
}
if ($this->params->get('accessContact')){
	$contactLink = '<li><a class="skips" href="'.$this->params->get('accessContact').'" accesskey="C">Contact</a></li>';
}
if ($this->params->get('accessFeedback')){
	$feedbackLink = '<li><a class="skips" href="'.$this->params->get('accessFeedback').'" accesskey="K">Feedback</a></li>';
}
if ($this->params->get('accessSiteMap')){
	$sitemapLink = '<li><a class="skips" href="'.$this->params->get('accessSiteMap').'" accesskey="M">Site Map</a></li>';
}
if ($this->params->get('accessSearch')){
	$searchLink = '<li><a class="skips" href="'.$this->params->get('accessSearch').'" accesskey="S">Search</a></li>';
}
?>
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

<!-- accessibility -->

<div id="acsblty">
  <input id="tmp-link" type="hidden" data-link="<?php echo 'templates/' . $this->template ?>">
  <div>
    <ul>
      <li><a href="#" class="toggle-contrast" id="is_normal_contrast" ><div></div></a></li>
      <li><a href="#" class="toggle-grayscale" id="is_normal_color" ><div></div></a></li>
      <li><a href="#" class="toggle-fontsize" id="is_normal_fontsize" ><div></div></a></li>
    </ul>
  </div>
</div>

<!-- accessibility -->

<div id="accessibility-links">
  <ul>
    <?php echo $contentLink; ?>
    <?php echo $sitemapLink; ?>
  </ul>
</div>
<div id="accessibility-shortcuts">
  <ul>
    <?php echo $accessibilityLink; ?>
    <?php echo $homeLink; ?>
    <?php echo $contentLink; ?>
    <?php echo $FAQLink; ?>
    <?php echo $contactLink; ?>
    <?php echo $feedbackLink; ?>
    <?php echo $sitemapLink; ?>
    <?php echo $searchLink; ?>
  </ul>
</div>
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




<!--a href="#" class="scrollup">Scroll</a><a>Hello</a-->
<!-- JS Files -->
<script src="<?php echo 'templates/' . $this->template . '/js/vendor/jquery.js'; ?>"></script>
<script src="<?php echo 'templates/' . $this->template . '/js/foundation.min.js'; ?>"></script>
<script src="<?php echo 'templates/' . $this->template . '/js/vendor/modernizr.js'; ?>"></script>
<script src="<?php echo 'templates/' . $this->template . '/js/theme.js'; ?>"></script>
<script class="<?php echo 'templates/' . $this->template . '/js/theme.js'; ?>"> src="#" </script>
<script src="<?php echo 'templates/' . $this->template . '/js/accessibility.js'; ?>"></script>

<script>
  
  



</script>

</body>
</html>

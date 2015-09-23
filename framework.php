<?php

// Define shortcuts for template parameters

// agency logo - for masthead
$agencyLogo	= $this->params->get('agencyLogo');

// banner slider
for($x=0;$x<=10;$x++){
	$imgUrl[] = $this->params->get('imgUrl'.$x);
	$imgExcerpt[] = $this->params->get('imgExcerpt'.$x);
	$imgLink[] = $this->params->get('imgLink'.$x);
}

// content title
$pageTitle = $this->getTitle();
$option = JRequest::getCmd('option');
$view = JRequest::getCmd('view');
if ($option=="com_content" && $view=="article") {
    $ids = explode(':',JRequest::getString('id'));
    $article_id = $ids[0];
  	$article = JTable::getInstance("content");
    $article->load($article_id);  
}

// count modules for auxiliary
$auxiliaryMenu = (int) ($this->countModules('auxiliary-menu') > 0);

// content
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

// Accessibility
$accessibilityLink = '';
$homeLink = '';
$contentLink = '';
$FAQLink = '';
$contactLink = '';
$feedbackLink = '';
$sitemapLink = '';
$searchLink = '';
if($this->params->get('accessAccessibility')){
  $accessibilityLink = '<a class="skips" href="'.$this->params->get('accessAccessibility').'" accesskey="0">Skip to Accessibility Instructions</a>';
}
if ($this->params->get('accessHome')){
  $homeLink = '<a class="skips" href="'.$this->params->get('accessHome').'" accesskey="1">Skip to Home</a>';
}
if ($this->params->get('accessContent')){
  $contentLink = '<a class="skips" href="'.$this->params->get('accessContent').'" accesskey="R">Skip to Content</a>';
}
if ($this->params->get('accessFAQ')){
  $FAQLink = '<a class="skips" href="'.$this->params->get('accessFAQ').'" accesskey="5">Skip to FAQ</a>';
}
if ($this->params->get('accessContact')){
  $contactLink = '<a class="skips" href="'.$this->params->get('accessContact').'" accesskey="C">Skip to Contact</a>';
}
if ($this->params->get('accessFeedback')){
  $feedbackLink = '<a class="skips" href="'.$this->params->get('accessFeedback').'" accesskey="K">Skip to Feedback</a>';
}
if ($this->params->get('accessSiteMap')){
  $sitemapLink = '<a class="skips" href="'.$this->params->get('accessSiteMap').'" accesskey="M">Skip to Site Map</a>';
}
if ($this->params->get('accessSearch')){
  $searchLink = '<a class="skips" href="'.$this->params->get('accessSearch').'" accesskey="S">Skip to Search</a>';
}

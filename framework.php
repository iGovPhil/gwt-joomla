<?php defined('_JEXEC') or die;

// Define shortcuts for template parameters

// for header
$agencyLogo				= $this->params->get('agencyLogo');

// for slider
$imgUrl1  				= $this->params->get('imgUrl1');
$imgUrl2   				= $this->params->get('imgUrl2');
$imgUrl3   				= $this->params->get('imgUrl3');
$imgUrl4   				= $this->params->get('imgUrl4');
$imgUrl5   				= $this->params->get('imgUrl5');
$imgUrl6   				= $this->params->get('imgUrl6');
$imgUrl7   				= $this->params->get('imgUrl7');
$imgUrl8   				= $this->params->get('imgUrl8');
$imgUrl9   				= $this->params->get('imgUrl9');
$imgUrl10   			= $this->params->get('imgUrl10');
$imgExcerpt1            = $this->params->get('imgExcerpt1');
$imgExcerpt2            = $this->params->get('imgExcerpt2');
$imgExcerpt3            = $this->params->get('imgExcerpt3');
$imgExcerpt4            = $this->params->get('imgExcerpt4');
$imgExcerpt5            = $this->params->get('imgExcerpt5');
$imgExcerpt6            = $this->params->get('imgExcerpt6');
$imgExcerpt7            = $this->params->get('imgExcerpt7');
$imgExcerpt8            = $this->params->get('imgExcerpt8');
$imgExcerpt9            = $this->params->get('imgExcerpt9');
$imgExcerpt10           = $this->params->get('imgExcerpt10');
$imgLink1               = $this->params->get('imgLink1');
$imgLink2               = $this->params->get('imgLink2');
$imgLink3               = $this->params->get('imgLink3');
$imgLink4               = $this->params->get('imgLink4');
$imgLink5               = $this->params->get('imgLink5');
$imgLink6               = $this->params->get('imgLink6');
$imgLink7               = $this->params->get('imgLink7');
$imgLink8               = $this->params->get('imgLink8');
$imgLink9               = $this->params->get('imgLink9');
$imgLink10              = $this->params->get('imgLink10');

$pageTitle = $this->getTitle();
$option = JRequest::getCmd('option');
$view = JRequest::getCmd('view');
if ($option=="com_content" && $view=="article") {
    $ids = explode(':',JRequest::getString('id'));
    $article_id = $ids[0];
    //$article =& JTable::getInstance("content");  *removed due to error
	$article = JTable::getInstance("content");
    $article->load($article_id);
    
}

// count modules
$auxiliaryMenu			= (int) ($this ->countModules('auxiliary-menu') > 0);
	
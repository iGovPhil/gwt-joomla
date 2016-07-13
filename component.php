<?php defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$this->language  = $doc->language;
$this->direction = $doc->direction;
$tpath = $this->baseurl.'/templates/'.$this->template;

// Add Stylesheets
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/template.css');
$doc->addStyleSheet($tpath.'/css/normalize-1.css');
$doc->addStyleSheet($tpath.'/foundation/css/foundation.css');
$doc->addStyleSheet($tpath.'/foundation/css/app.css');
$doc->addStyleSheet($tpath.'/style.css');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<jdoc:include type="head" />
<!--[if lt IE 9]>
	<script src="<?php echo JUri::root(true); ?>/media/jui/js/html5.js"></script>
<![endif]-->
</head>
<body class="print">
	<div class='row'>
		<div class='large-12 columns'>
			<jdoc:include type="message" />
			<jdoc:include type="component" />
		</div>
	</div>
</body>
</html>

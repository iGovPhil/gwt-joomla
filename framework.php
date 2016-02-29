<?php
/*** Header and Banner Options Variables ***/
$HeaderTypeLogo = $this->params->get('HeaderTypeLogo');
$HeaderLogo = $this->params->get('HeaderLogo');
$HeaderName = $this->params->get('HeaderName');
$HeaderTagline = $this->params->get('HeaderTagline');
$HeaderFontFamily = $this->params->get('HeaderFontFamily');
$HeaderTextColor = $this->params->get('HeaderTextColor');
$HeaderLogoFull = $this->params->get('HeaderLogoFull');
$HeaderLogoPosition = $this->params->get('HeaderLogoPosition');
$HeaderLogoAlt = $this->params->get('HeaderLogoAlt');
$HeaderBgColor = $this->params->get('HeaderBgColor');
$HeaderBgImage = $this->params->get('HeaderBgImage');
$HeaderColumns = $this->params->get('HeaderColumns');
$bannerBgColor = $this->params->get('bannerBgColor');
$bannerBgImage = $this->params->get('bannerBgImage');
$bannerPosition = $this->params->get('bannerPosition');
$bannerFeaturedColor = $this->params->get('bannerFeaturedColor');
$bannerFeaturedImage = $this->params->get('bannerFeaturedImage');

/*** Content Options Variables ***/
$sidebarPosition = $this->params->get('sidebarPosition');
$transparencyPosition = $this->params->get('transparencyPosition');
$transparencyURL = $this->params->get('transparencyURL');
$pstPosition = $this->params->get('pstPosition');
$contentBorder = $this->params->get('contentBorder');
$contentBorderWt = $this->params->get('contentBorderWt');
$contentBorderRd = $this->params->get('contentBorderRd');
$contentBorderColor = $this->params->get('contentBorderColor');
$contentHeaderFontSize = $this->params->get('contentHeaderFontSize');
$contentBgColor = $this->params->get('contentBgColor');
$agencyFooterBgColor = $this->params->get('agencyFooterBgColor');

/*** Accessibility ***/
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

/*** Auxiliary ***/
$auxiliaryMenu = (int) ($this->countModules('auxiliary-menu') > 0);

/*** Article ***/
$pageTitle = $this->getTitle();
$option = JRequest::getCmd('option');
$view = JRequest::getCmd('view');
if ($option=="com_content" && $view=="article") {
    $ids = explode(':',JRequest::getString('id'));
    $article_id = $ids[0];
  	$article = JTable::getInstance("content");
    $article->load($article_id);  
}

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

/*** Contents: Theme Options ***/
$lpst = '';
$rpst = '';
$ltrpncy = '';
$rtrpncy = '';
$lsb = $this->countModules('left-sidebar');
$rsb = $this->countModules('right-sidebar');

$pst =  '<div id="pst" class="moduletable time" >
      <h3 class="text-center">PHILIPPINE STANDARD TIME</h3>
      <div id="pst_wrapper"><iframe src="http://oras.pagasa.dost.gov.ph/time_display/time/" frameborder="0" height=30px width="100%" allowTransparency="true" scrolling="no"></iframe></div>
    </div>';
$trpncy = '<div id="trpncy" class="moduletable" style="text-align:center;">
        <a href="'.$transparencyURL.'">
          <img src="templates/'.$this->template.'/images/transparency-seal.png" class="trpncy" width=225px alt="Transparency Seal" title="Transparency Seal"/>
        </a>
      </div>';

if($pstPosition == 1){$lsb = $lsb + 1;$lpst = $pst;} 
else if($pstPosition == 2){$rsb = $rsb + 1; $rpst = $pst;
}

if($transparencyPosition == 1){$lsb = $lsb + 1;$ltrpncy = $trpncy;}
else if($transparencyPosition == 2){$rsb = $rsb + 1;$rtrpncy = $trpncy;}

if($sidebarPosition==1 && $lsb == 0){$sidebarPosition = 0;}
else if($sidebarPosition == 2 && $rsb == 0){$sidebarPosition = 0;}
else if($sidebarPosition == 3 && $lsb == 0 && $rsb == 0){$sidebarPosition = 0;}
else if($sidebarPosition == 3 && $rsb == 0){$sidebarPosition = 1;}
else if($sidebarPosition == 3 && $lsb == 0){$sidebarPosition = 2;}

if($sidebarPosition == 0){
  $mctnt = "large-12 medium-12 columns";
  $slc = "";
  $src = "";
  $lsb = 0;
  $rsb = 0;
}else if($sidebarPosition == 1){
  $mctnt = "large-8 medium-8 columns";
  $slc = "large-4 medium-4 columns";
  $src = "";
  $rsb = 0;
}else if($sidebarPosition == 2){
  $mctnt = "large-8 medium-8 columns";
  $slc = "";
  $src = "large-4 medium-4 columns";
  $lsb = 0;
}else if($sidebarPosition == 3){
  $mctnt = "large-6 medium-6 columns";
  $slc = "large-3 medium-3 columns";
  $src = "large-3 medium-3 columns";
}

// if($contentBgColor == ''){$contentBgColor = 'none';}

if($contentBorder == 0){
  $contentBorder = 'border: none';
}else if($contentBorder == 1){
  $contentBorder = 'border: solid '.$contentBorderWt.'px '.$contentBorderColor;
}else if($contentBorder == 2){
  $contentBorder = 'border: none; border-top: solid '.$contentBorderWt.'px '.$contentBorderColor;
}else if($contentBorder == 3){
  $contentBorder = 'border: none; border-bottom: solid '.$contentBorderWt.'px '.$contentBorderColor;
}

$chfs = $contentHeaderFontSize;
if($chfs == 0){
  $sh1 = (44-4)/16;
  $sh2 = (37-4)/16;
  $sh3 = (27-4)/16;
  $sh4 = (23-4)/16;
  $sh5 = (18-4)/16;
  $sh6 = (16-4)/16;
}else if($chfs == 1){
  $sh1 = (44-12)/16;
  $sh2 = (37-12)/16;
  $sh3 = (27-12)/16;
  $sh4 = (23-12)/16;
  $sh5 = (18-12)/16;
  $sh6 = (16-12)/16;
}else if($chfs == 2){
  $sh1 = (44+4)/16;
  $sh2 = (37+4)/16;
  $sh3 = (27+4)/16;
  $sh4 = (23+4)/16;
  $sh5 = (18+4)/16;
  $sh6 = (16+4)/16;
}



/*** Masthead ***/
function background($image, $color){
  if($image){$bg = 'style="background-image:url('.$image.');background-position:right;"';}
  else{$bg = 'style="background-color:'.$color.';background-position:right;"';}
  return $bg;
}

$background = background($HeaderBgImage, $HeaderBgColor);
$bannerBackground = background($bannerBgImage, $bannerBgColor);
$featuredBackground = background($bannerFeaturedImage, $bannerFeaturedColor);

$lp = $HeaderLogoPosition == 0 ? 'text-align:left;' : 'display:block; margin: 0 auto; text-align:center;';
$aname = $HeaderName == '' ? 'The Agency Name' : $HeaderName;
$atag = $HeaderTagline == '' ? '"A sample tagline"' : $HeaderTagline;
$alogo = $HeaderLogo == '' ? '' : '<img src="'.$HeaderLogo.'" alt="'.$HeaderLogoAlt.'" title="'.$HeaderLogoAlt.'" style="height:100px; padding-right:10px;"/>';
echo $aftype = $HeaderFontFamily == 0 ? '' : 'font-family: "Times New Roman", Times, serif';

$logo1 = '<a href="'.$this->baseurl.'">
  <table id="headerlogo" style="'.$lp.' color:'.$HeaderTextColor.'; '.$aftype.';">
    <tbody>
      <tr><td id="imagelogo" rowspan=4>'.$alogo.'</td></tr>
      <tr><td id="arp" style="color:'.$HeaderTextColor.';">Republic of the Philippines</td></tr>
      <tr><td id="aname" style="color:'.$HeaderTextColor.';border-color:'.$HeaderTextColor.';">'.$aname.'</td></tr>
      <tr><td id="atag" style="color:'.$HeaderTextColor.';">'.$atag.'</td></tr>
      </tr>
    </tbody>
  </table>
</a>';

if($HeaderTypeLogo==0){
  if ($HeaderLogo){$logo = '<a href="'.$this->baseurl.'"><img src="'.$HeaderLogoFull.'" alt="'.$HeaderLogoAlt.'" title="'.$HeaderLogoAlt.'" style="'.$lp.';" /></a>';}
  else{$logo = '<a href="'.$this->baseurl.'"><h1 style="'.$lp.';">Agency Logo</h1></a>';}
}else{$logo = $logo1;}

if($HeaderColumns == 3){
  $c1 = "large-3 medium-3 columns";
  $c2 = "large-6 medium-6 columns";
  $c3 = "large-3 medium-3 columns";
  $h1 = '<jdoc:include type="modules" name="masthead-feature-1" style="xhtml" />';
  $h2 = $logo;
  $h3 = '<jdoc:include type="modules" name="masthead-feature-2" style="xhtml" />';
}elseif($HeaderColumns == 2){
  $c1 = "large-6 medium-6 columns";
  $c2 = "large-3 medium-3 columns";
  $c3 = "large-3 medium-3 columns";
  $h1 = $logo;
  $h2 = '<jdoc:include type="modules" name="masthead-feature-1" style="xhtml" />';
  $h3 = '<jdoc:include type="modules" name="masthead-feature-2" style="xhtml" />';
}elseif($HeaderColumns == 1){
  $c1 = "large-6 medium-6 columns";
  $c2 = "large-6 medium-6 columns";
  $c3 = "";
  $h1 = $logo;
  $h2 = '<jdoc:include type="modules" name="masthead-feature-1" style="xhtml" />';
  $h3 = '';
}elseif($HeaderColumns == 0){
  $c1 = "large-12 medium-12 columns";
  $c2 = "";
  $c3 = "";
  $h1 = $logo;
  $h2 = "";
  $h3 = "";
}

/*** Panels ***/
function panels($p1, $p2, $p3, $p4){
  $cnt = 0;
  $pc ='';
  if($p1!=0){$cnt = $cnt+1;}
  if($p2!=0){$cnt = $cnt+1;}
  if($p3!=0){$cnt = $cnt+1;}
  if($p4!=0){$cnt = $cnt+1;}
  if($cnt == 1){$pc = 'large-12 columns';}
  if($cnt == 2){$pc = 'large-6 medium-6 columns';}
  if($cnt == 3){$pc = 'large-4 columns';}
  if($cnt == 4){$pc = 'large-3 columns';}
  return $pc;
}

$tp1 = $this->countModules('panel-top-1');
$tp2 = $this->countModules('panel-top-2');
$tp3 = $this->countModules('panel-top-3');
$tp4 = $this->countModules('panel-top-4');
$tpc = panels($tp1, $tp2, $tp3, $tp4);

$btm1 = $this->countModules('panel-btm-1');
$btm2 = $this->countModules('panel-btm-2');
$btm3 = $this->countModules('panel-btm-3');
$btm4 = $this->countModules('panel-btm-4');
$bpc = panels($btm1, $btm2, $btm3, $btm4);

/*** Agency Footer ***/
$ftr1 = $this->countModules('footer-1');
$ftr2 = $this->countModules('footer-2');
$ftr3 = $this->countModules('footer-3');
$ftr4 = $this->countModules('footer-4');
$fpc = panels($ftr1, $ftr2, $ftr3, $ftr4);




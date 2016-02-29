<div id="accessibility-links">
  <ul>
    <li><?php echo $contentLink; ?></li>
    <li><?php echo $sitemapLink; ?></li>
  </ul>
</div>

<div id="accessibility-shortcuts">
  <ul>
  	<li><a href="#" class="skips toggle-statement" title="Toggle Accessibility Statement" accesskey="0">Toggle Accessibility Statement</a></li>
    <li><?php echo $homeLink; ?></li>
    <li><?php echo $contentLink; ?></li>
    <li><?php echo $FAQLink; ?></li>
    <li><?php echo $contactLink; ?></li>
    <li><?php echo $feedbackLink; ?></li>
    <li><?php echo $sitemapLink; ?></li>
    <li><?php echo $searchLink; ?></li>
  </ul>
</div>

<nav id="accessibility-widget">
  	<input id="tmp-link" type="hidden" data-link="<?php echo JUri::base() .'templates/' . $this->template ?>">
    <ul>
      <li><a href="#" id="accessibility-mode" title="Accessibility Menu"><span class="offscreen">Toggle Accessibility Menu</span></a></li>
      <li><a href="#" id="accessibility-statement" class="toggle-statement" title="Accessibility Statement"><span class="offscreen">Toggle Accessibility Statement</span></a></li>
      <li><a href="#" id="accessibility-contrast" class="toggle-contrast" title="Toggle High Contrast"><span class="offscreen">Toggle High Contrast</span></a></li>
      <li><a href="#" id="accessibility-grayscale" class="toggle-grayscale" title="Toggle Grey Scale"><span class="offscreen">Toggle Grayscale</span></a></li>      
    </ul>
</nav>

<div id="accessibility-statement-content" title="Accessibility Statement" role="dialog">
    <textarea class="statement-textarea" readonly>
    Shortcut Keys Combination Activation Combination keys used for each browser. 
    	
    	Chrome for Linux press (Alt+Shift+shortcut_key) 
    	Chrome for Windows press (Alt+shortcut_key) 
    	For Firefox press (Alt+Shift+shortcut_key) 
    	For Internet Explorer press (Alt+Shift+shortcut_key) then press (enter) 
    	Accessibility Statement (Combination + 0): 
    	
    Statement page that will show the available accessibility keys. 
    	
	   	Home Page (Combination + 1): Accessibility key for redirecting to homepage. 
	   	Main Content (Combination + R): Shortcut for viewing the content section of the current page. 
	   	FAQ (Combination + 5): Shortcut for FAQ page. 
	   	Contact (Combination + C): Shortcut for contact page or form inquiries. 
	   	Feedback (Combination + K): Shortcut for feedback page. 
	   	Site Map (Combination + M): Shortcut for site map (footer agency) section of the page. 
	   	Search (Combination + S): Shortcut for search page. 
    	
    Press esc, or click the close the button to close this dialog box.</textarea>
    <input type="button" value="close" class="toggle-statement" />
</div>
<!-- place darklight the bottom of the page, before body -->
<div id="darklight"></div>
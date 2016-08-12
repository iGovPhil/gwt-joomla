<!-- <div id="accessibility-links">
  <ul>
    <li><?php //echo $contentLink; ?></li>
    <li><?php //echo $sitemapLink; ?></li>
  </ul>
</div> -->

<div id="accessibility-shortcuts">
  <ul>
  	<li><a href="#" class="skips toggle-statement" title="Toggle Accessibility Statement" accesskey="0" data-toggle="a11y-modal">Toggle Accessibility Statement</a></li>
    <li><?php echo $homeLink; ?></li>
    <li><?php echo $contentLink; ?></li>
    <li><?php echo $FAQLink; ?></li>
    <li><?php echo $contactLink; ?></li>
    <li><?php echo $feedbackLink; ?></li>
    <li><?php echo $sitemapLink; ?></li>
    <li><?php echo $searchLink; ?></li>
  </ul>
</div>

<input id="tmp-link" type="hidden" data-link="<?php echo JUri::base() .'templates/' . $this->template ?>">

<div id="a11y-modal" class="large reveal" data-reveal title="Accessibility Statement" role="dialog">
    <textarea class="statement-textarea" readonly rows="20">
The iGovPhil Project officially adopts the Web Content Accessibility Guidelines (WCAG 2.0) as the accessibility standard for all its related web development and services. WCAG 2.0 is also an international standard, ISO 40500. This certifies it as a stable and referenceable technical standard. 

WCAG 2.0 contains 12 guidelines organized under 4 principles: Perceivable, Operable, Understandable, and Robust (POUR for short). There are testable success criteria for each guideline. Compliance to these criteria is measured in three levels: A, AA, or AAA. A guide to understanding and implementing Web Content Accessibility Guidelines 2.0 is available at: https://www.w3.org/TR/UNDERSTANDING-WCAG20/

All iGovPhil Project services and content are currently moving towards WCAG Level A compliance. Work is being done to make the system fully compliant with this level. 
 
Accessibility Features

Shortcut Keys Combination Activation Combination keys used for each browser.
  
    Chrome for Linux press (Alt+Shift+shortcut_key) 
    Chrome for Windows press (Alt+shortcut_key) 
    For Firefox press (Alt+Shift+shortcut_key) 
    For Internet Explorer press (Alt+Shift+shortcut_key) then press (enter) 
    On Mac OS press (Ctrl+Opt+shortcut_key) 

    Accessibility Statement (Combination + 0): Statement page that will show the available accessibility keys.
    Home Page (Combination + H): Accessibility key for redirecting to homepage. 
    Main Content (Combination + R): Shortcut for viewing the content section of the current page. 
    FAQ (Combination + Q): Shortcut for FAQ page. 
    Contact (Combination + C): Shortcut for contact page or form inquiries. 
    Feedback (Combination + K): Shortcut for feedback page. 
    Site Map (Combination + M): Shortcut for site map (footer agency) section of the page. 
    Search (Combination + S): Shortcut for search page. 
	
Press esc, or click the close the button to close this dialog box.
    </textarea>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
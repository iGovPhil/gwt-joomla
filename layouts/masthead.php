<?php $logoPosition = ($this->params->get('logoPosition') == 0 ? 'text-align:left' : 'display:block; margin: 0 auto; text-align:center;');

	if ($this->params->get('agencyLogo'))
	{
		$logo = '<a href="'.$this->baseurl.'"><img src="'.$agencyLogo.'" style="'.$logoPosition.';" /></a>';
	}
	else
	{
		$logo = '<a href="'.$this->baseurl.'"><h1 style="'.$logoPosition.';">Agency Logo</h1></a>';
	}
?>

<!-- masthead -->
<div id="masthead" <?php echo $background; ?>>
	<div class="row">
		<div id="logo">
			
			<?php if ($this->params->get('headerColumns') == 3): ?>
				<!-- 3 COLS Right -->
				<div class="large-3 medium-3 columns"><jdoc:include type="modules" name="masthead-feature-1" style="xhtml" /></div>
				<div class="large-6 medium-6 columns"><?php echo $logo; ?></div>
				<div class="large-3 medium-3 columns"><jdoc:include type="modules" name="masthead-feature-2" style="xhtml" /></div>
				
			<?php elseif ($this->params->get('headerColumns') == 2): ?>
				<!-- 3 COLS Left -->
				<div class="large-6 medium-6 columns"><?php echo $logo; ?></div>
				<div class="large-3 medium-3 columns"><jdoc:include type="modules" name="masthead-feature-1" style="xhtml" /></div>
				<div class="large-3 medium-3 columns"><jdoc:include type="modules" name="masthead-feature-2" style="xhtml" /></div>
				
			<?php elseif ($this->params->get('headerColumns') == 1): ?>
				<!-- 2 COLS -->
				<div class="large-6 medium-6 columns"><?php echo $logo; ?></div>
				<div class="large-6 medium-6 columns"><jdoc:include type="modules" name="masthead-feature-1" style="xhtml" /></div>
				
			<?php else: ?>
				<!-- 1 COL -->
				<div class="large-12 columns"><?php echo $logo; ?></div>
				
			<?php endif;?>
			
			
		</div>
	</div>
</div>
<!-- end masthead -->
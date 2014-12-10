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
			
			<?php if ($this->countModules('masthead-1col')){
				echo '<div class="large-12 columns">'.$logo.'</div>';
			} else {
				echo '';
			}
			?>
			
			<?php if ($this->countModules('masthead-2col')){
				echo '<div class="large-6 medium-6 columns">'.$logo.'</div>
					<div class="large-6 medium-6 columns"><jdoc:include type="modules" name="masthead-2col-content" style="xhtml" /></div>';
			} else {
				echo '';
			} 
			?>	
			
			<?php if ($this->countModules('masthead-3col-left')){
				echo '<div class="large-6 medium-6 columns">'.$logo.'</div>
					<div class="large-3 medium-3 columns"><jdoc:include type="modules" name="masthead-3col-1" style="xhtml" /></div>
				<div class="large-3 medium-3 columns"><jdoc:include type="modules" name="masthead-3col-2" style="xhtml" /></div>';
			} else {
				echo '';
			}
			?>
			
			<?php if ($this->countModules('masthead-3col-center')){
				echo '<div class="large-3 medium-3 columns"><jdoc:include type="modules" name="masthead-3col-1" style="xhtml" /></div>
					<div class="large-6 medium-6 columns">'.$logo.'</div>
				<div class="large-3 medium-3 columns"><jdoc:include type="modules" name="masthead-3col-2" style="xhtml" /></div>';
			} else {
				echo '';
			}
			?>
		</div>
	</div>
</div>
<!-- end masthead -->
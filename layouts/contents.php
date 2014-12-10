<!-- contents -->
<?php
$pstHeight = 0;
if(is_int($this->params->get('pstHeight'))):
	$pstHeight = $this->params->get('pstHeight');
endif;
?>
<div id="main"><a name="maincontents"></a>
	
	<div class="row">
		
		<?php if ($this->params->get('sidebarPosition') == 3): ?>
			
			<?php
			$sidebar_left_class = '';
			$content_class = '';
			$sidebar_right_class = '';
			if(($this->countModules('left-sidebar') || $this->params->get('pstPosition') == 1) && ($this->countModules('right-sidebar') || $this->params->get('pstPosition') == 2)){
				$sidebar_left_class = 'large-3 medium-3 columns';
				$content_class = 'large-6 medium-6 columns';
				$sidebar_right_class = 'large-3 medium-3 columns';
			}
			elseif((!$this->countModules('left-sidebar') || $this->params->get('pstPosition') != 1) && ($this->countModules('right-sidebar') || $this->params->get('pstPosition') == 2)){
//				$sidebar_left_class = 'large-3 medium-3 columns';
				$content_class = 'large-8 medium-8 columns';
				$sidebar_right_class = 'large-4 medium-4 columns';
			}
			elseif(($this->countModules('left-sidebar') || $this->params->get('pstPosition') == 1) && (!$this->countModules('right-sidebar') || $this->params->get('pstPosition') != 2)){
				$sidebar_left_class = 'large-4 medium-4 columns';
				$content_class = 'large-8 medium-8 columns';
//				$sidebar_right_class = 'large-4 medium-4 columns';
			}
			else{
				$content_class = 'large-12 medium-12 columns';
			}
			?>
			<?php if($this->countModules('left-sidebar') || $this->params->get('pstPosition') == 1): ?>
			<div class="<?php echo $sidebar_left_class; ?>">
				<?php if($this->params->get('pstPosition') == 1): ?>
				<ul class="breadcrumbs time">
					<p class="pst">PHILIPPINE STANDARD TIME</p>
					<iframe src="http://oras.pagasa.dost.gov.ph/time_display/time/" frameborder="0" height="<?php echo $pstHeight; ?>" width="100%" allowTransparency="true" scrolling="no"></iframe>
				</ul>
				<?php endif; ?>
				<jdoc:include type="modules" name="left-sidebar" style="xhtml" />
			</div>
			<?php endif; ?>
			
			<div id="content" class="<?php echo $content_class; ?>">
				<?php include_once JPATH_THEMES . '/' . $this->template .'/layouts/content-top.php'; ?>
				<div class="post-box">
		            <jdoc:include type="message" style="xhtml" />
		            <jdoc:include type="component" style="xhtml" />
		            <div style="clear: both;"></div>
				</div>
				<?php include_once JPATH_THEMES . '/' . $this->template .'/layouts/content-bottom.php'; ?>
			</div>

			<?php if($this->countModules('right-sidebar') || $this->params->get('pstPosition') == 2): ?>
			<div class="<?php echo $sidebar_right_class; ?>">
				<?php if($this->params->get('pstPosition') == 2): ?>
				<ul class="breadcrumbs time">
					<p class="pst">PHILIPPINE STANDARD TIME</p>
					<iframe src="http://oras.pagasa.dost.gov.ph/time_display/time/" frameborder="0" height="<?php echo $pstHeight; ?>" width="175" allowTransparency="true" scrolling="no"></iframe>
				</ul>
				<?php endif; ?>
				<jdoc:include type="modules" name="right-sidebar" style="xhtml" />
			</div>
			<?php endif; ?>
			<?php /*
			<div class="large-3 medium-3 columns">
				<ul class="breadcrumbs time">
					<p class="pst">PHILIPPINE STANDARD TIME</p>
					<iframe src="http://oras.pagasa.dost.gov.ph/time_display/time/" frameborder="0" height="<?php echo $pstHeight; ?>" width="175" allowTransparency="true" scrolling="no"></iframe>
				</ul>
				<jdoc:include type="modules" name="right-sidebar" style="xhtml" />
			</div>
			*/
			?>
		
		<?php elseif ($this->params->get('sidebarPosition') == 2): ?>
			
			
			<div id="content" class="large-12 columns">
				<div class="post-box">
		            <jdoc:include type="message" style="xhtml" />
		            <jdoc:include type="component" style="xhtml" />
		            <div style="clear: both;"></div>
				</div>
			</div>
			
			
		<?php elseif ($this->params->get('sidebarPosition') == 1): ?>
			
			<?php
			$content_class = '';
			$sidebar_right_class = '';
			if($this->countModules('right-sidebar') || $this->params->get('pstPosition') == 2){
//				$sidebar_left_class = 'large-3 medium-3 columns';
				$content_class = 'large-8 medium-8 columns';
				$sidebar_right_class = 'large-4 medium-4 columns';
			}
			else{
				$content_class = 'large-12 medium-12 columns';
			}
			?>

			<div>
			
			<div id="content" class="<?php echo $content_class; ?>">
				<div class="post-box">
		            <jdoc:include type="message" style="xhtml" />
		            <jdoc:include type="component" style="xhtml" />
		            <div style="clear: both;"></div>
				</div>
			</div>
			
			<div class="<?php echo $sidebar_right_class ?>">
				<?php if($this->params->get('pstPosition') != 0): ?>
				<ul class="breadcrumbs time">
					<p class="pst">PHILIPPINE STANDARD TIME</p>
					<iframe src="http://oras.pagasa.dost.gov.ph/time_display/time/" frameborder="0" height="<?php echo $pstHeight; ?>" width="175" allowTransparency="true" scrolling="no"></iframe>
				</ul>
				<?php endif; ?>
				<jdoc:include type="modules" name="right-sidebar" style="xhtml" />
			</div>
			
			</div>
			
			
		<?php else: ?>
			
			<?php
			$content_class = '';
			$sidebar_left_class = '';
			if($this->countModules('left-sidebar') || $this->params->get('pstPosition') == 1){
				$sidebar_left_class = 'large-4 medium-4 columns';
				$content_class = 'large-8 medium-8 columns';
				// $sidebar_right_class = 'large-4 medium-4 columns';
			}
			else{
				$content_class = 'large-12 medium-12 columns';
			}
			?>

			<div class="<?php echo $sidebar_left_class ?>">
				<?php if($this->params->get('pstPosition') != 0): ?>
				<ul class="breadcrumbs time">
					<p class="pst">PHILIPPINE STANDARD TIME</p>
					<iframe src="http://oras.pagasa.dost.gov.ph/time_display/time/" frameborder="0" height="<?php echo $pstHeight; ?>" width="175" allowTransparency="true" scrolling="no"></iframe>
				</ul>
				<?php endif; ?>
				<jdoc:include type="modules" name="left-sidebar" style="xhtml" />
			</div>
			
			<div id="content" class="<?php echo $content_class; ?>">
				<div class="post-box">
		            <jdoc:include type="message" style="xhtml" />
		            <jdoc:include type="component" style="xhtml" />
				</div>
			</div>
			
		
		<?php endif?>
		
	</div>
</div>
		
		

		
		
		
		
<!-- end contents -->

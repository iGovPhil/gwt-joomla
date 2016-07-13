<div id="main-content"> 
	<a name="maincontents"></a>
	<div class="row">
		
		<?php if($lsb){ ?>
		<div id="left-sidebar" class="<?php echo $slc; ?>" >
			
			<?php if($ltrpncy): ?>
			<div class="moduletable">
				<?php echo $ltrpncy; ?>
			</div>
			<?php endif; ?>

			<?php if($lpst): ?>
			<div class="moduletable">
				<?php echo $lpst; ?>
			</div>
			<?php endif; ?>
			<jdoc:include type="modules" name="left-sidebar" style="xhtml" />
		
		</div>
		<?php } ?>
		
		<div id="content" class="<?php echo $mctnt; ?>" >
			<?php include_once JPATH_THEMES . '/' . $this->template .'/layouts/content-top.php'; ?>
			<div class="post-box clearfix">
	            <jdoc:include type="message" style="xhtml" />
	            <jdoc:include type="component" style="xhtml" />
	            <!-- <div style="clear: both;"></div> -->
			</div>
			<?php include_once JPATH_THEMES . '/' . $this->template .'/layouts/content-bottom.php'; ?>
		</div>
		
		<?php if($rsb){ ?>
		<div id="right-sidebar" class="<?php echo $src; ?>">
			<?php if($rtrpncy): ?>
			<div class="callout secondary">
				<div class="moduletable">
					<?php echo $rtrpncy; ?>
				</div>
			</div>
			<?php endif; ?>

			<?php if($lpst): ?>
			<div class="callout secondary">
				<div class="moduletable callout secondary">
					<?php echo $rpst; ?>
				</div>
			</div>
			<?php endif; ?>
			<jdoc:include type="modules" name="right-sidebar" style="xhtml" />
		</div>
		<?php } ?>
		
	</div>
</div>
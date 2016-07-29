<div id="main-content" class="content-container"> 
	<a name="maincontents"></a>
	<div class="row">
		
		<?php if($lsb){ ?>
		<div id="left-sidebar" class="<?php echo $slc; ?>" >
			
			<?php if($ltrpncy): ?>
			<div class="sidebar-module moduletable">
				<?php echo $ltrpncy; ?>
			</div>
			<?php endif; ?>

			<?php if($lpst): ?>
			<div class="sidebar-module moduletable">
				<?php echo $lpst; ?>
			</div>
			<?php endif; ?>
			<jdoc:include type="modules" name="left-sidebar" style="sidebar" />
		
		</div>
		<?php } ?>
		
		<div id="content" class="<?php echo $mctnt; ?>" >
			<?php include_once JPATH_THEMES . '/' . $this->template .'/layouts/content-top.php'; ?>
			<div class="post-box clearfix">
	            <jdoc:include type="message" style="xhtml" />
	            <jdoc:include type="component" style="xhtml" />
			</div>
			<?php include_once JPATH_THEMES . '/' . $this->template .'/layouts/content-bottom.php'; ?>
		</div>
		
		<?php if($rsb){ ?>
		<div id="right-sidebar" class="<?php echo $src; ?>">
			<?php if($rtrpncy): ?>
			<div class="sidebar-module moduletable">
				<?php echo $rtrpncy; ?>
			</div>
			<?php endif; ?>

			<?php if($rpst): ?>
				<div class="sidebar-module moduletable">
					<?php echo $rpst; ?>
				</div>
			<?php endif; ?>
			<jdoc:include type="modules" name="right-sidebar" style="sidebar" />
		</div>
		<?php } ?>
		
	</div>
</div>
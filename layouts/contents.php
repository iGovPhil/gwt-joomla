<div id="main"> 
	<a name="maincontents"></a>
	<div class="row">
		
		<?php if($lsb != 0){ ?>
		<div id="left-sidebar" class="<?php echo $slc; ?>" >
			<?php 
			echo $ltrpncy;
			echo $lpst;
			?>
			<jdoc:include type="modules" name="left-sidebar" style="xhtml" />
		</div>
		<?php } ?>
		
		<div id="content" class="<?php echo $mctnt; ?>" >
			<?php include_once JPATH_THEMES . '/' . $this->template .'/layouts/content-top.php'; ?>
			<div class="post-box">
	            <jdoc:include type="message" style="xhtml" />
	            <jdoc:include type="component" style="xhtml" />
	            <div style="clear: both;"></div>
			</div>
			<?php include_once JPATH_THEMES . '/' . $this->template .'/layouts/content-bottom.php'; ?>
		</div>
		
		<?php if($rsb != 0){ ?>
		<div id="right-sidebar" class="<?php echo $src; ?>">
			<?php 
			echo $rtrpncy;
			echo $rpst;
			?>
			<jdoc:include type="modules" name="right-sidebar" style="xhtml" />
		</div>
		<?php } ?>
		
	</div>
</div>
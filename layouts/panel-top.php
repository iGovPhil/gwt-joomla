<div id="panel-top" class="row">
	<?php if($tp1): ?>
		<div class="<?php echo $tpc; ?>">
			<jdoc:include type="modules" name="panel-top-1" style="xhtml" />
		</div>
	<?php endif; ?>

	<?php if($tp2): ?>
		<div class="<?php echo $tpc; ?>">
			<jdoc:include type="modules" name="panel-top-2" style="xhtml" />
		</div>
	<?php endif; ?>

	<?php if($tp3): ?>
		<div class="<?php echo $tpc; ?>">
			<jdoc:include type="modules" name="panel-top-3" style="xhtml" />
		</div>
	<?php endif; ?>

	<?php if($tp4): ?>
		<div class="<?php echo $tpc; ?>">
			<jdoc:include type="modules" name="panel-top-4" style="xhtml" />
		</div>
	<?php endif; ?>
</div>
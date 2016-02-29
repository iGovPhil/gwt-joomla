<?php


?>

<div id="panel-bottom" class="row">
	<?php if($btm1): ?>
		<div class="<?php echo $bpc; ?>">
			<jdoc:include type="modules" name="panel-btm-1" style="xhtml" />
		</div>
	<?php endif; ?>

	<?php if($btm2): ?>
		<div class="<?php echo $bpc; ?>">
			<jdoc:include type="modules" name="panel-btm-2" style="xhtml" />
		</div>
	<?php endif; ?>

	<?php if($btm3): ?>
		<div class="<?php echo $bpc; ?>">
			<jdoc:include type="modules" name="panel-btm-3" style="xhtml" />
		</div>
	<?php endif; ?>

	<?php if($btm4): ?>
		<div class="<?php echo $bpc; ?>">
			<jdoc:include type="modules" name="panel-btm-4" style="xhtml" />
		</div>
	<?php endif; ?>
</div>
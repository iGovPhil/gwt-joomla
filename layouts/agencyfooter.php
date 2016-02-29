<div id="footer" name="agencyfooter">
	<div class="row">
		<?php if($ftr1): ?>
			<div class="<?php echo $fpc; ?>">
				<jdoc:include type="modules" name="footer-1" style="xhtml" />
			</div>
		<?php endif; ?>

		<?php if($ftr2): ?>
			<div class="<?php echo $fpc; ?>">
				<jdoc:include type="modules" name="footer-2" style="xhtml" />
			</div>
		<?php endif; ?>

		<?php if($ftr3): ?>
			<div class="<?php echo $fpc; ?>">
				<jdoc:include type="modules" name="footer-3" style="xhtml" />
			</div>
		<?php endif; ?>

		<?php if($ftr4): ?>
			<div class="<?php echo $fpc; ?>">
				<jdoc:include type="modules" name="footer-4" style="xhtml" />
			</div>
		<?php endif; ?>
	</div>
</div>
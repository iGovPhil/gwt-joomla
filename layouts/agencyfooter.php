<!-- agency footer -->
<div id="footer" name="agencyfooter">
<div class="row">

<?php
$class_footer1 = '';
$class_footer2 = '';
$class_footer3 = '';
$class_footer4 = '';
if($this->countModules('footer-1')){

	$class_footer1 = 'large-12';
	if($this->countModules('footer-2')){
		$class_footer1 = 'large-6';
		$class_footer2 = 'large-6';
		if($this->countModules('footer-3')){
			$class_footer1 = 'large-4';
			$class_footer2 = 'large-4';
			$class_footer3 = 'large-4';
			if($this->countModules('footer-4')){
				$class_footer1 = 'large-3';
				$class_footer2 = 'large-3';
				$class_footer3 = 'large-3';
				$class_footer4 = 'large-3';
			}
		}
		elseif(!$this->countModules('footer-3') && $this->countModules('footer-4')){
			$class_footer1 = 'large-4';
			$class_footer2 = 'large-4';
			// $class_footer3 = 'large-3';
			$class_footer4 = 'large-4';
		}
	}
	else{
		if($this->countModules('footer-3')){
			$class_footer1 = 'large-6';
			// $class_footer2 = 'large-4';
			$class_footer3 = 'large-6';
			if($this->countModules('footer-4')){
				$class_footer1 = 'large-4';
				// $class_footer2 = 'large-3';
				$class_footer3 = 'large-4';
				$class_footer4 = 'large-4';
			}
		}
		elseif(!$this->countModules('footer-3') && $this->countModules('footer-4')){
			$class_footer1 = 'large-6';
			// $class_footer2 = 'large-4';
			// $class_footer3 = 'large-3';
			$class_footer4 = 'large-6';
		}
	}
}
else{
	if($this->countModules('footer-2')){
		// $class_footer1 = 'large-6';
		$class_footer2 = 'large-12';
		if($this->countModules('footer-3')){
			// $class_footer1 = 'large-4';
			$class_footer2 = 'large-6';
			$class_footer3 = 'large-6';
			if($this->countModules('footer-4')){
				// $class_footer1 = 'large-3';
				$class_footer2 = 'large-4';
				$class_footer3 = 'large-4';
				$class_footer4 = 'large-4';
			}
		}
		elseif(!$this->countModules('footer-3') && $this->countModules('footer-4')){
			// $class_footer1 = 'large-4';
			$class_footer2 = 'large-6';
			// $class_footer3 = 'large-3';
			$class_footer4 = 'large-6';
		}
	}
	else{
		if($this->countModules('footer-3')){
			// $class_footer1 = 'large-6';
			// $class_footer2 = 'large-4';
			$class_footer3 = 'large-12';
			if($this->countModules('footer-4')){
				// $class_footer1 = 'large-4';
				// $class_footer2 = 'large-3';
				$class_footer3 = 'large-6';
				$class_footer4 = 'large-6';
			}
		}
		elseif(!$this->countModules('footer-3') && $this->countModules('footer-4')){
			// $class_footer1 = 'large-6';
			// $class_footer2 = 'large-4';
			// $class_footer3 = 'large-3';
			$class_footer4 = 'large-12';
		}
	}
}
$class_footer1 .= ' columns';
$class_footer2 .= ' columns';
$class_footer3 .= ' columns';
$class_footer4 .= ' columns';
?>
	<?php if($this->countModules('footer-1')): ?>
	<div class="<?php echo $class_footer1; ?>">
		<jdoc:include type="modules" name="footer-1" style="xhtml" />
	</div>
	<?php endif; ?>
	<?php if($this->countModules('footer-2')): ?>
	<div class="<?php echo $class_footer2; ?>">
		<jdoc:include type="modules" name="footer-2" style="xhtml" />
	</div>
	<?php endif; ?>
	<?php if($this->countModules('footer-3')): ?>
	<div class="<?php echo $class_footer3; ?>">
		<jdoc:include type="modules" name="footer-3" style="xhtml" />
	</div>
	<?php endif; ?>
	<?php if($this->countModules('footer-4')): ?>
	<div class="<?php echo $class_footer4; ?>">
		<jdoc:include type="modules" name="footer-4" style="xhtml" />
	</div>
	<?php endif; ?>
</div>
</div>
<!-- end agency footer-->
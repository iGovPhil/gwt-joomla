<!-- modules -->
<div id="panel-top" class="row">

<?php
$class_top1 = '';
$class_top2 = '';
$class_top3 = '';
$class_top4 = '';
if($this->countModules('panel-top-1')){

	$class_top1 = 'large-12';
	if($this->countModules('panel-top-2')){
		$class_top1 = 'large-6';
		$class_top2 = 'large-6';
		if($this->countModules('panel-top-3')){
			$class_top1 = 'large-4';
			$class_top2 = 'large-4';
			$class_top3 = 'large-4';
			if($this->countModules('panel-top-4')){
				$class_top1 = 'large-3';
				$class_top2 = 'large-3';
				$class_top3 = 'large-3';
				$class_top4 = 'large-3';
			}
		}
		elseif(!$this->countModules('panel-top-3') && $this->countModules('panel-top-4')){
			$class_top1 = 'large-4';
			$class_top2 = 'large-4';
			// $class_top3 = 'large-3';
			$class_top4 = 'large-4';
		}
	}
	else{
		if($this->countModules('panel-top-3')){
			$class_top1 = 'large-6';
			// $class_top2 = 'large-4';
			$class_top3 = 'large-6';
			if($this->countModules('panel-top-4')){
				$class_top1 = 'large-4';
				// $class_top2 = 'large-3';
				$class_top3 = 'large-4';
				$class_top4 = 'large-4';
			}
		}
		elseif(!$this->countModules('panel-top-3') && $this->countModules('panel-top-4')){
			$class_top1 = 'large-6';
			// $class_top2 = 'large-4';
			// $class_top3 = 'large-3';
			$class_top4 = 'large-6';
		}
	}
}
else{
	if($this->countModules('panel-top-2')){
		// $class_top1 = 'large-6';
		$class_top2 = 'large-12';
		if($this->countModules('panel-top-3')){
			// $class_top1 = 'large-4';
			$class_top2 = 'large-6';
			$class_top3 = 'large-6';
			if($this->countModules('panel-top-4')){
				// $class_top1 = 'large-3';
				$class_top2 = 'large-4';
				$class_top3 = 'large-4';
				$class_top4 = 'large-4';
			}
		}
		elseif(!$this->countModules('panel-top-3') && $this->countModules('panel-top-4')){
			// $class_top1 = 'large-4';
			$class_top2 = 'large-6';
			// $class_top3 = 'large-3';
			$class_top4 = 'large-6';
		}
	}
	else{
		if($this->countModules('panel-top-3')){
			// $class_top1 = 'large-6';
			// $class_top2 = 'large-4';
			$class_top3 = 'large-12';
			if($this->countModules('panel-top-4')){
				// $class_top1 = 'large-4';
				// $class_top2 = 'large-3';
				$class_top3 = 'large-6';
				$class_top4 = 'large-6';
			}
		}
		elseif(!$this->countModules('panel-top-3') && $this->countModules('panel-top-4')){
			// $class_top1 = 'large-6';
			// $class_top2 = 'large-4';
			// $class_top3 = 'large-3';
			$class_top4 = 'large-12';
		}
	}
}
$class_top1 .= ' columns';
$class_top2 .= ' columns';
$class_top3 .= ' columns';
$class_top4 .= ' columns';
?>
<?php if($this->countModules('panel-top-1')): ?>
<div class="<?php echo $class_top1; ?>">
	<jdoc:include type="modules" name="panel-top-1" style="xhtml" />
</div>
<?php endif; ?>

<?php if($this->countModules('panel-top-2')): ?>
<div class="<?php echo $class_top2; ?>">
	<jdoc:include type="modules" name="panel-top-2" style="xhtml" />
</div>
<?php endif; ?>

<?php if($this->countModules('panel-top-3')): ?>
<div class="<?php echo $class_top3; ?>">
	<jdoc:include type="modules" name="panel-top-3" style="xhtml" />
</div>
<?php endif; ?>

<?php if($this->countModules('panel-top-4')): ?>
<div class="<?php echo $class_top4; ?>">
	<jdoc:include type="modules" name="panel-top-4" style="xhtml" />
</div>
<?php endif; ?>

</div>
<!-- end modules -->

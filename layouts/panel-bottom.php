<!-- modules -->
<div id="panel-bottom" class="row">
<?php
$class_btm1 = '';
$class_btm2 = '';
$class_btm3 = '';
$class_btm4 = '';
if($this->countModules('panel-btm-1')){

	$class_btm1 = 'large-12';
	if($this->countModules('panel-btm-2')){
		$class_btm1 = 'large-6';
		$class_btm2 = 'large-6';
		if($this->countModules('panel-btm-3')){
			$class_btm1 = 'large-4';
			$class_btm2 = 'large-4';
			$class_btm3 = 'large-4';
			if($this->countModules('panel-btm-4')){
				$class_btm1 = 'large-3';
				$class_btm2 = 'large-3';
				$class_btm3 = 'large-3';
				$class_btm4 = 'large-3';
			}
		}
		elseif(!$this->countModules('panel-btm-3') && $this->countModules('panel-btm-4')){
			$class_btm1 = 'large-4';
			$class_btm2 = 'large-4';
			// $class_btm3 = 'large-3';
			$class_btm4 = 'large-4';
		}
	}
	else{
		if($this->countModules('panel-btm-3')){
			$class_btm1 = 'large-6';
			// $class_btm2 = 'large-4';
			$class_btm3 = 'large-6';
			if($this->countModules('panel-btm-4')){
				$class_btm1 = 'large-4';
				// $class_btm2 = 'large-3';
				$class_btm3 = 'large-4';
				$class_btm4 = 'large-4';
			}
		}
		elseif(!$this->countModules('panel-btm-3') && $this->countModules('panel-btm-4')){
			$class_btm1 = 'large-6';
			// $class_btm2 = 'large-4';
			// $class_btm3 = 'large-3';
			$class_btm4 = 'large-6';
		}
	}
}
else{
	if($this->countModules('panel-btm-2')){
		// $class_btm1 = 'large-6';
		$class_btm2 = 'large-12';
		if($this->countModules('panel-btm-3')){
			// $class_btm1 = 'large-4';
			$class_btm2 = 'large-6';
			$class_btm3 = 'large-6';
			if($this->countModules('panel-btm-4')){
				// $class_btm1 = 'large-3';
				$class_btm2 = 'large-4';
				$class_btm3 = 'large-4';
				$class_btm4 = 'large-4';
			}
		}
		elseif(!$this->countModules('panel-btm-3') && $this->countModules('panel-btm-4')){
			// $class_btm1 = 'large-4';
			$class_btm2 = 'large-6';
			// $class_btm3 = 'large-3';
			$class_btm4 = 'large-6';
		}
	}
	else{
		if($this->countModules('panel-btm-3')){
			// $class_btm1 = 'large-6';
			// $class_btm2 = 'large-4';
			$class_btm3 = 'large-12';
			if($this->countModules('panel-btm-4')){
				// $class_btm1 = 'large-4';
				// $class_btm2 = 'large-3';
				$class_btm3 = 'large-6';
				$class_btm4 = 'large-6';
			}
		}
		elseif(!$this->countModules('panel-btm-3') && $this->countModules('panel-btm-4')){
			// $class_btm1 = 'large-6';
			// $class_btm2 = 'large-4';
			// $class_btm3 = 'large-3';
			$class_btm4 = 'large-12';
		}
	}
}
$class_btm1 .= ' columns';
$class_btm2 .= ' columns';
$class_btm3 .= ' columns';
$class_btm4 .= ' columns';
?>
		<?php if($this->countModules('panel-btm-1')): ?>
		<div class="<?php echo $class_btm1; ?>">
			<jdoc:include type="modules" name="panel-btm-1" style="xhtml" />
		</div>
		<?php endif; ?>
		<?php if($this->countModules('panel-btm-2')): ?>
		<div class="<?php echo $class_btm2; ?>">
			<jdoc:include type="modules" name="panel-btm-2" style="xhtml" />
		</div>
		<?php endif; ?>
		<?php if($this->countModules('panel-btm-3')): ?>
		<div class="<?php echo $class_btm3; ?>">
			<jdoc:include type="modules" name="panel-btm-3" style="xhtml" />
		</div>
		<?php endif; ?>
		<?php if($this->countModules('panel-btm-4')): ?>
		<div class="<?php echo $class_btm4; ?>">
			<jdoc:include type="modules" name="panel-btm-4" style="xhtml" />
		</div>
		<?php endif; ?>
</div>
<!-- end modules -->

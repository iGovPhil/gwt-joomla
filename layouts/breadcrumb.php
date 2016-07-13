<?php if ($this->countModules('auxiliary-menu')): ?>
	<div id="auxiliary" class="show-for-large">
      <div class="row">
        <div class="large-12 columns">
	        <ul class="dropdown menu" data-dropdown-menu>
	        	<jdoc:include type="modules" name="auxiliary-menu" style="none" />
	        </ul>
        </div>
      </div>
    </div>
<?php endif ?>

<?php if ($this->countModules('breadcrumbs')): ?>
	<div id="breadcrumbs">
		<div class="row">
			<div class="large-12 columns">
				<jdoc:include type="modules" name="breadcrumbs" style="none" />
			</div>
		</div>
	</div>
<?php endif ?>
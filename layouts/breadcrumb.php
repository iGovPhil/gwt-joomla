<!--auxiliary menu-->
<?php if ($this->countModules('auxiliary-menu')): ?>
	<div id="auxiliary">
		<div class="row">
			<div class="large-12 columns">
				<div class="aux-nav-btn-container hide-for-medium-up" >
					<button id="aux-nav-btn" data-dropdown="aux-nav">Auxiliary Menu</button>
				</div>
				<nav id="aux-nav" class="top-bar show-for-medium-up" data-dropdown-content>
            		<section>
                		<ul class="left">
							<li class="divider"></li>
                   			<li><jdoc:include type="modules" name="auxiliary-menu" style="none" /></li>
							<li class="divider"></li>
                    	</ul>
              	  </section>
				</nav>
			</div>
		</div>
	</div>
<?php endif ?>

<!-- end auxiliary menu-->

<!-- breadcrumb -->
<?php if ($this->countModules('breadcrumbs')): ?>
	<div id="breadcrumbs">
		<div class="row">
			<div class="large-12 columns">
				<jdoc:include type="modules" name="breadcrumbs" style="none" />
			</div>
		</div>
	</div>
<?php endif ?>
<!-- end breadcrumb -->
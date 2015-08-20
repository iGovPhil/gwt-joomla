<!-- top bar -->
<div id="main-nav">
	<div class="row">
		<div class="large-12 columns">
			<nav class="top-bar" data-topbar>
				<ul class="title-area">
					<li class="name">
						<h1><a href="http://www.gov.ph">GOVPH</a></h1>
					</li>
					<li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
				</ul>
				
				<section class="top-bar-section">
					<!-- Right Nav Section -->
					<ul class="right">
						<?php if ($this->countModules('topbar-right')): ?>
                        	<jdoc:include type="modules" name="topbar-right" style="none" />
                        <?php endif ?>
						
						<?php if ($this->countModules('search')): ?>
							<li class="search"><jdoc:include type="modules" name="search" style="none" /></li>
						<?php endif ?>
					</ul>
				
					<!-- Left Nav Section -->
					<ul class="left">
						<li class="divider"></li>
                        	<?php if ($this->countModules('topbar-left')): ?>
                        		<jdoc:include type="modules" name="topbar-left" style="none" />
                        	<?php endif ?>
						<li class="divider"></li>
					</ul>
				</section>
			</nav>
		</div>
	</div>  
</div> 
<!-- end top bar -->
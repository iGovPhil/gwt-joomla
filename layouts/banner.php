<!-- banner full width 1 col, position banner-fullwidth-1col, 2 -->
<?php if ($this->params->get('bannerPosition') == 2): ?>
	
<div id="banner" style="margin: 0; padding: 0;">

	<?php if ($this->countModules('banner')): ?>
		<jdoc:include type="modules" name="banner" style="xhtml" />	
    <?php else: ?>
  
    <div class="row">
        <div class="large-9 columns">
            <header>
                <?php if ($option == 'com_content' && $view == 'article'): ?>
                    <?php if ($article_title): ?>
                        <h1 class="entry-title"><?php echo $article_title;  ?></h1>
                    <?php endif ?>
                <?php endif ?>
            </header>
        </div>
    </div>
  
    <?php endif; ?>
	
</div>
	
<!-- banner 2 cols, position banner-2col, 1 -->
<?php elseif ($this->params->get('bannerPosition') == 1): ?>
	
<div id="banner" <?php echo $bannerBackground; ?>>
	
	<?php if ($this->countModules('banner')): ?>
	
	<div class="row">
		<div class="large-12 columns">
			 <div class="row collapse bg-banner">
				 <div class="large-8 medium-8 columns">
				 	<div id="banners">
				 		<jdoc:include type="modules" name="banner" style="xhtml" />
				 	</div>
				 <div class="large-4 medium-4 columns" <?php echo $featuredBackground;?> >
					<div id="featured01">
						<jdoc:include type="modules" name="banner-featured" style="xhtml" />
					</div>
				 </div>
			  </div>
		  </div>
	  </div>
  </div>
  
  <?php else: ?>
  
  <div class="row">
      <div class="large-9 columns">
          <header>
              <?php if ($option == 'com_content' && $view == 'article'): ?>
                  <?php if ($article_title): ?>
                      <h1 class="entry-title"><?php echo $article_title;  ?></h1>
                  <?php endif ?>
              <?php endif ?>
          </header>
      </div>
  </div>
  
  <?php endif; ?>
  
</div>

<!-- banner 1 col, position banner-1col, 0 -->
<?php else: ?>
	
<?php if ($this->countModules('banner')): ?>
<div id="banner" <?php echo $bannerBackground; ?>>
		
	<div class="row">
		<div class="large-12 columns">
			<div id="banners">
				<jdoc:include type="modules" name="banner" style="xhtml" />
			</div>
		</div>
	</div>	
</div>
<?php else: ?>
		<div id="banner" style="margin: 0; padding: 0;">
			<div class="row" <?php echo $bannerBackground; ?>>
				<div class="large-9 columns">
					<header>
						<?php if ($option == 'com_content' && $view == 'article'): ?>
							<?php if ($article_title): ?>
								<h1 class="entry-title"><?php echo $article_title;  ?></h1>
							<?php endif ?>
						<?php endif ?>
					</header>
				</div>
			</div>
		</div>
    <?php endif; ?>
<?php endif; ?>

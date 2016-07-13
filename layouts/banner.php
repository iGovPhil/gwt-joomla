<?php if($this->countModules('banner')): ?>
<div id='banner' <?php echo $bannerBackground; ?>>
	
	<?php if($bannerPosition!=2): ?>
	<div class='row'>
		<div id='bnr' class='<?php echo $bcl ?> show-for-large'>
			<jdoc:include type="modules" name="banner"/>
		</div>
		
		<?php if ($option == 'com_content' && $view == 'article'): ?>
		<div class='<?php echo $bcl ?> hide-for-large'>
        <?php if ($article_title): ?>
            <h1 class="entry-title"><?php echo $article_title;  ?></h1>
        <?php endif ?>
    	</div>
        <?php endif ?>

		<?php if($bannerPosition==1): ?>
		<div id='fbnr' class='<?php echo $fbcl ?>' <?php echo $featuredBackground;?>>
			<?php if($this->countModules('banner-featured')): ?>
			<jdoc:include type="modules" name="banner-featured" style="xhtml"/>
			<?php endif; ?>
		</div>
		<?php endif; ?>

	</div>

	<?php else: ?>
	<jdoc:include type="modules" name="banner"/>
	<?php endif; ?>

</div>
<?php else: ?>	
	<?php if ($option == 'com_content' && $view == 'article'): ?>
<div id='banner' <?php echo $bannerBackground; ?>>

	<div class="row">
	    <div class="large-9 columns">
	        <header>
	                <?php if ($article_title): ?>
	                    <h1 class="entry-title"><?php echo $article_title;  ?></h1>
	                <?php endif ?>
	        </header>
	    </div>
	</div>

</div>	
	<?php endif ?>
<?php endif; ?>
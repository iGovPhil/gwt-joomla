<?php if($this->countModules('banner')): ?>

	<?php if($bannerPosition!=2): ?>
	<div id='banner' <?php echo $bannerBackground; ?> class="hide-for-small-only">
		<div class='row'>
			
		<?php if($bannerOnHome): ?>
			<?php if ($option == 'com_content' && $view == 'article'): ?>
			<div class='<?php echo $bcl ?>'>
				<?php if ($article_title): ?>
				<header style="color:<?php echo $MainHeaderColor; ?>;">
		            <h1 class="entry-title"><?php echo $article_title;  ?></h1>
	        	</header>
	        	<?php endif ?>
	    	</div>
	        <?php else: ?>
	        <div id='bnr' class='<?php echo $bcl ?>'>
				<jdoc:include type="modules" name="banner"/>
			</div>
			<?php endif ?>
		<?php else: ?>
			<div id='bnr' class='<?php echo $bcl ?>'>
				<jdoc:include type="modules" name="banner"/>
			</div>
		<?php endif; ?>
		

			<?php if($bannerPosition==1): ?>
			<div id='fbnr' class='<?php echo $fbcl ?> content-container'>
				<div <?php echo $featuredBackground;?>>
				<?php if($this->countModules('banner-featured')): ?>
				<jdoc:include type="modules" name="banner-featured" style="xhtml"/>
				<?php endif; ?>
				</div>
			</div>
			<?php endif; ?>


		</div>
	</div>
	<?php else: ?>		
		<div id="fullbanner" class="hide-for-small-only">
			<jdoc:include type="modules" name="banner"/>
		</div>
	<?php endif; ?>
	
<?php else: ?>

	<div id='banner' <?php echo $bannerBackground; ?>>
		<div class="row">
		    <div class="large-8 columns">
		        <header style="color:<?php echo $MainHeaderColor; ?>;">
	                    <h1 class="entry-title"><?php echo $page_title;  ?></h1>
		        </header>
		    </div>
		    <?php if($bannerPosition==1): ?>
			<div id='fbnr' class='<?php echo $fbcl ?> content-container'>
				<div <?php echo $featuredBackground;?>>
				<?php if($this->countModules('banner-featured')): ?>
				<jdoc:include type="modules" name="banner-featured" style="xhtml"/>
				<?php endif; ?>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>	

<?php endif; ?>
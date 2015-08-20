<!-- banner full width 1 col, position banner-fullwidth-1col, 2 -->
<?php if ($this->params->get('bannerPosition') == 2): ?>
	
<div id="banner" style="margin: 0; padding: 0;">

	<?php if ($this->countModules('banner')): ?>
	
	<ul class="example-orbit" data-orbit data-options="">
		
          <?php if($imgUrl1){
			echo '<li><a href="'.$imgLink1.'"><img src="'.$imgUrl1.'" class="fullwidth" /><div class="orbit-caption">'.$imgExcerpt1.'</div></a></li>';
		} else {
			echo '';
		} ?>
		
         <?php if($imgUrl2){
			echo '<li><a href="'.$imgLink2.'"><img src="'.$imgUrl2.'" class="fullwidth" /><div class="orbit-caption">'.$imgExcerpt2.'</div></a></li>';
		} else {
			echo '';
		} ?>
		
         <?php if($imgUrl3){
			echo '<li><a href="'.$imgLink3.'"><img src="'.$imgUrl3.'" class="fullwidth" /><div class="orbit-caption">'.$imgExcerpt3.'</div></a></li>';
		} else {
			echo '';
		} ?>
		
         <?php if($imgUrl4){
			echo '<li><a href="'.$imgLink4.'"><img src="'.$imgUrl4.'" class="fullwidth" /><div class="orbit-caption">'.$imgExcerpt4.'</div></a></li>';
		} else {
			echo '';
		} ?>
		
         <?php if($imgUrl5){
			echo '<li><a href="'.$imgLink5.'"><img src="'.$imgUrl5.'" class="fullwidth" /><div class="orbit-caption">'.$imgExcerpt5.'</div></a></li>';
		} else {
			echo '';
		} ?>
		
         <?php if($imgUrl6){
			echo '<li><a href="'.$imgLink6.'"><img src="'.$imgUrl6.'" class="fullwidth" /><div class="orbit-caption">'.$imgExcerpt6.'</div></a></li>';
		} else {
			echo '';
		} ?>
		
         <?php if($imgUrl7){
			echo '<li><a href="'.$imgLink7.'"><img src="'.$imgUrl7.'" class="fullwidth" /><div class="orbit-caption">'.$imgExcerpt7.'</div></a></li>';
		} else {
			echo '';
		} ?>
		
         <?php if($imgUrl8){
			echo '<li><a href="'.$imgLink8.'"><img src="'.$imgUrl8.'" class="fullwidth" /><div class="orbit-caption">'.$imgExcerpt8.'</div></a></li>';
		} else {
			echo '';
		} ?>
		
         <?php if($imgUrl9){
			echo '<li><a href="'.$imgLink9.'"><img src="'.$imgUrl9.'" class="fullwidth" /><div class="orbit-caption">'.$imgExcerpt9.'</div></a></li>';
		} else {
			echo '';
		} ?>
		
         <?php if($imgUrl10){
			echo '<li><a href="'.$imgLink10.'"><img src="'.$imgUrl10.'" class="fullwidth" /><div class="orbit-caption">'.$imgExcerpt10.'</div></a></li>';
		} else {
			echo '';
		} ?>
	</ul>
	
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
					 <div class="orbit-container">
						 <ul class="example-orbit" data-orbit data-options="">
							 
		                    <?php if($imgUrl1){
								echo '<li><a href="'.$imgLink1.'"><img src="'.$imgUrl1.'" /><div class="orbit-caption">'.$imgExcerpt1.'</div></a></li>';
							} else {
								echo '';
							} ?>
					
		                    <?php if($imgUrl2){
								echo '<li><a href="'.$imgLink2.'"><img src="'.$imgUrl2.'" /><div class="orbit-caption">'.$imgExcerpt2.'</div></a></li>';
							} else {
								echo '';
							} ?>
					
		                    <?php if($imgUrl3){
								echo '<li><a href="'.$imgLink3.'"><img src="'.$imgUrl3.'" /><div class="orbit-caption">'.$imgExcerpt3.'</div></a></li>';
							} else {
								echo '';
							} ?>
					
		                    <?php if($imgUrl4){
								echo '<li><a href="'.$imgLink4.'"><img src="'.$imgUrl4.'" /><div class="orbit-caption">'.$imgExcerpt4.'</div></a></li>';
							} else {
								echo '';
							} ?>
					
		                    <?php if($imgUrl5){
								echo '<li><a href="'.$imgLink5.'"><img src="'.$imgUrl5.'" /><div class="orbit-caption">'.$imgExcerpt5.'</div></a></li>';
							} else {
								echo '';
							} ?>
					
		                    <?php if($imgUrl6){
								echo '<li><a href="'.$imgLink6.'"><img src="'.$imgUrl6.'" /><div class="orbit-caption">'.$imgExcerpt6.'</div></a></li>';
							} else {
								echo '';
							} ?>
					
		                    <?php if($imgUrl7){
								echo '<li><a href="'.$imgLink7.'"><img src="'.$imgUrl7.'" /><div class="orbit-caption">'.$imgExcerpt7.'</div></a></li>';
							} else {
								echo '';
							} ?>
					
		                    <?php if($imgUrl8){
								echo '<li><a href="'.$imgLink8.'"><img src="'.$imgUrl8.'" /><div class="orbit-caption">'.$imgExcerpt8.'</div></a></li>';
							} else {
								echo '';
							} ?>
					
		                    <?php if($imgUrl9){
								echo '<li><a href="'.$imgLink9.'"><img src="'.$imgUrl9.'" /><div class="orbit-caption">'.$imgExcerpt9.'</div></a></li>';
							} else {
								echo '';
							} ?>
					
		                    <?php if($imgUrl10){
								echo '<li><a href="'.$imgLink10.'"><img src="'.$imgUrl10.'" /><div class="orbit-caption">'.$imgExcerpt10.'</div></a></li>';
							} else {
								echo '';
							} ?> 
							 
						 </ul> 
					  </div>
				  </div>
				  
				  <div class="large-4 medium-4 columns" <?php echo $featuredBackground; ?>>
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
			<div class="orbit-container">
				<ul class="example-orbit" data-orbit data-options="">
					
                    <?php if($imgUrl1){
						echo '<li><a href="'.$imgLink1.'"><img src="'.$imgUrl1.'" /><div class="orbit-caption">'.$imgExcerpt1.'</div></a></li>';
					} else {
						echo '';
					} ?>
					
                    <?php if($imgUrl2){
						echo '<li><a href="'.$imgLink2.'"><img src="'.$imgUrl2.'" /><div class="orbit-caption">'.$imgExcerpt2.'</div></a></li>';
					} else {
						echo '';
					} ?>
					
                    <?php if($imgUrl3){
						echo '<li><a href="'.$imgLink3.'"><img src="'.$imgUrl3.'" /><div class="orbit-caption">'.$imgExcerpt3.'</div></a></li>';
					} else {
						echo '';
					} ?>
					
                    <?php if($imgUrl4){
						echo '<li><a href="'.$imgLink4.'"><img src="'.$imgUrl4.'" /><div class="orbit-caption">'.$imgExcerpt4.'</div></a></li>';
					} else {
						echo '';
					} ?>
					
                    <?php if($imgUrl5){
						echo '<li><a href="'.$imgLink5.'"><img src="'.$imgUrl5.'" /><div class="orbit-caption">'.$imgExcerpt5.'</div></a></li>';
					} else {
						echo '';
					} ?>
					
                    <?php if($imgUrl6){
						echo '<li><a href="'.$imgLink6.'"><img src="'.$imgUrl6.'" /><div class="orbit-caption">'.$imgExcerpt6.'</div></a></li>';
					} else {
						echo '';
					} ?>
					
                    <?php if($imgUrl7){
						echo '<li><a href="'.$imgLink7.'"><img src="'.$imgUrl7.'" /><div class="orbit-caption">'.$imgExcerpt7.'</div></a></li>';
					} else {
						echo '';
					} ?>
					
                    <?php if($imgUrl8){
						echo '<li><a href="'.$imgLink8.'"><img src="'.$imgUrl8.'" /><div class="orbit-caption">'.$imgExcerpt8.'</div></a></li>';
					} else {
						echo '';
					} ?>
					
                    <?php if($imgUrl9){
						echo '<li><a href="'.$imgLink9.'"><img src="'.$imgUrl9.'" /><div class="orbit-caption">'.$imgExcerpt9.'</div></a></li>';
					} else {
						echo '';
					} ?>
					
                    <?php if($imgUrl10){
						echo '<li><a href="'.$imgLink10.'"><img src="'.$imgUrl10.'" /><div class="orbit-caption">'.$imgExcerpt10.'</div></a></li>';
					} else {
						echo '';
					} ?>
				 
				</ul>
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

<?php endif?>





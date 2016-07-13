<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_banners
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

require_once JPATH_ROOT . '/components/com_banners/helpers/banner.php';
$baseurl = JUri::base();
?>
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
	<ul class="orbit-container bannergroup<?php echo $moduleclass_sfx ?>">
	<?php if ($headerText) : ?>
		<?php echo $headerText; ?>
	<?php endif; ?>

<?php $count=count($list); ?>

		<?php if($count>1):?>
		<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
	    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
	    <?php endif; ?>

	<?php foreach ($list as $item) : ?>
		<li class="orbit-slide banneritem">
			<?php $link = JRoute::_('index.php?option=com_banners&task=click&id=' . $item->id);?>
			<?php if ($item->type == 1) :?>
				<?php // Text based banners ?>
				<?php echo str_replace(array('{CLICKURL}', '{NAME}'), array($link, $item->name), $item->custombannercode);?>
			<?php else:?>
				<?php $imageurl = $item->params->get('imageurl');?>
				<?php $width = $item->params->get('width');?>
				<?php $height = $item->params->get('height');?>
				<?php if (BannerHelper::isImage($imageurl)) :?>
					<?php // Image based banner ?>
					<?php $alt = $item->params->get('alt');?>
					<?php $alt = $alt ? $alt : $item->name; ?>
					<?php $alt = $alt ? $alt : JText::_('MOD_BANNERS_BANNER'); ?>
					<?php if ($item->clickurl) :?>
						<?php // Wrap the banner in a link?>
						<?php $target = $params->get('target', 1);?>
						<?php if ($target == 1) :?>
							<?php // Open in a new window?>
							<a
								href="<?php echo $link; ?>" target="_blank"
								title="<?php echo htmlspecialchars($item->name, ENT_QUOTES, 'UTF-8');?>">
								<img
									src="<?php echo $baseurl . $imageurl;?>"
									alt="<?php echo $alt;?>"
									<?php if (!empty($width)) echo 'width ="' . $width . '"';?>
									<?php if (!empty($height)) echo 'height ="' . $height . '"';?>
								/>
							</a>
						<?php elseif ($target == 2):?>
							<?php // Open in a popup window?>
							<a
								href="<?php echo $link;?>" onclick="window.open(this.href, '',
									'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=780,height=550');
									return false"
								title="<?php echo htmlspecialchars($item->name, ENT_QUOTES, 'UTF-8');?>">
								<img
									src="<?php echo $baseurl . $imageurl;?>"
									alt="<?php echo $alt;?>"
									<?php if (!empty($width)) echo 'width ="' . $width . '"';?>
									<?php if (!empty($height)) echo 'height ="' . $height . '"';?>
								/>
							</a>
						<?php else :?>
							<?php // Open in parent window?>
							<a
								href="<?php echo $link;?>"
								title="<?php echo htmlspecialchars($item->name, ENT_QUOTES, 'UTF-8');?>">
								<img
									src="<?php echo $baseurl . $imageurl;?>"
									alt="<?php echo $alt;?>"
									<?php if (!empty($width)) echo 'width ="' . $width . '"';?>
									<?php if (!empty($height)) echo 'height ="' . $height . '"';?>
								/>
							</a>
						<?php endif;?>
					<?php else :?>
						<?php // Just display the image if no link specified?>
						<img
							src="<?php echo $baseurl . $imageurl;?>"
							alt="<?php echo $alt;?>"
							<?php if (!empty($width)) echo 'width ="' . $width . '"';?>
							<?php if (!empty($height)) echo 'height ="' . $height . '"';?>
						/>
					<?php endif;?>
				<?php elseif (BannerHelper::isFlash($imageurl)) :?>
					<object
						classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
						codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
						<?php if (!empty($width)) echo 'width ="' . $width . '"';?>
						<?php if (!empty($height)) echo 'height ="' . $height . '"';?>
					>
						<param name="movie" value="<?php echo $imageurl;?>" />
						<embed
							src="<?php echo $imageurl;?>"
							loop="false"
							pluginspage="http://www.macromedia.com/go/get/flashplayer"
							type="application/x-shockwave-flash"
							<?php if (!empty($width)) echo 'width ="' . $width . '"';?>
							<?php if (!empty($height)) echo 'height ="' . $height . '"';?>
						/>
					</object>
				<?php endif;?>
			<?php endif;?>
			<div class="clr"></div>

			<?php if($item->description != ''){ ?>
			<figcaption class="orbit-caption"><?php echo $item->description; ?></figcaption>
			<?php } ?>
			
		</li>
	<?php endforeach; ?>

	<?php if ($footerText) : ?>
		<div class="bannerfooter">
			<?php echo $footerText; ?>
		</div>
	<?php endif; ?>
	</ul>

	<?php if($count>1):?>
	<nav class="orbit-bullets">
		<?php for($x=0;$x<$count;$x++){?>
			<?php if($x==0){$ocl='class="is-active"';}else{$ocl='';} ?>
		<button <?php echo $ocl; ?> data-slide="<?php echo $x;?>">
		<?php } ?>
	</nav>
	<?php endif; ?>

</div>

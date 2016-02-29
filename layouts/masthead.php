<div id="masthead" <?php echo $background; ?>>
	<div class="row">
		<div id="logo">

			<div class ="<?php echo $c1; ?>"><?php echo $h1; ?></div>
<?php if($HeaderColumns > 1): ?>
			<div class ="<?php echo $c2; ?>"><?php echo $h2; ?></div>
	<?php if($HeaderColumns > 0): ?> 
			<div class ="<?php echo $c3; ?>"><?php echo $h3; ?></div>
	<?php endif; ?>
<?php endif; ?>
		
		</div>
	</div>
</div>
<?php 
///Advanced Custom Fields
$author_story			= get_field('author_story');
$author_image			= get_field('author_image');
 ?>
<!-- About -->

<section id="boost-income">
	<div class="container">
		<div class="section-header">
		
		<!-- If user uploaded an image -->
		<div class="row">
			<div class="col-sm-6">
				<?php if(!empty($author_image)) : ?>

			<img src="<?php echo $author_image['url']; ?>" alt="<?php echo $author_image['alt']; ?>">

	    <?php endif; ?>
			</div> <!-- col -->
			<div class="col-sm-6">
				<p><?php echo $author_story?></p>
			</div> <!-- col -->					
		</div>

	</div>

</section>
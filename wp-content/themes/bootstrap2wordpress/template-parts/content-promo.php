<?php 
///Advanced Custom Fields
$promo_image			= get_field('promo_image');
$promo_title			= get_field('promo_title');
$promo_description    = get_field('promo_description');
 ?>
<!-- Sign up-->

   <section id="content-promo">
	<div class="container">
		<div class="section-header container2">
		
		<!-- If user uploaded an image -->
		<div class="row jumbotron">
			<div class="col-sm-6">
				<h3 class="promo-title"><?php echo $promo_title ?></h3>
				<p><?php echo $promo_description ?></p>
			</div> <!-- col -->	
			<div class="col-sm-6">
				<?php if(!empty($promo_image)) : ?>

			<img src="<?php echo $promo_image['url']; ?>" alt="<?php echo $promo_image['alt']; ?>">

	    <?php endif; ?>
			</div> <!-- col -->				
		</div>

	</div>

</section>
<?php 
///Advanced Custom Fields
$latest_cover			= get_field('latest_cover');
$latest_title			= get_field('latest_title');
$latest_desc      	= get_field('latest_description');
 ?>
<!-- latest-->

<section id="content-latest">
	<div class="container">
		<div class="section-header">
		
		<!-- If user uploaded an image -->
		<div class="row">
			<div>
				<h1>Latest Release</h1>
			</div>
			<div class="col-sm-6">
				<?php if(!empty($latest_cover)) : ?>

			<img src="<?php echo $latest_cover['url']; ?>" alt="<?php echo $latest_cover['alt']; ?>">

	    		<?php endif; ?>
			</div> <!-- col -->	
			<div class="col-sm-6">
				<h3><?php echo $latest_title ?></h3>
				<p><?php echo $latest_desc ?></p>
			</div> <!-- col -->				
		</div>

	</div>

</section>
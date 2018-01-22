<?php 
///Custom Fields
 $hero_background	= get_field('hero_background');
 $hero_emblem      	= get_field('hero_emblem');
 ?>

<!-- HERO --> 
		<section id="hero" date-type="background" data-speed="5">
			<div class="container clearfix">
					<div class="row">
					<!-- Hero Image-->
					<div class="col-sm-5">
						<?php if(!empty($hero_emblem)) : ?>

						<img src="<?php echo $hero_emblem['url']; ?>" alt="<?php echo $hero_emblem['alt']; ?>">

			   			<?php endif; ?>
					</div> <!-- col -->

					<div class="col-sm-7 hero-text">
						<h1><?php bloginfo('name') ?></h1>
						<p class="lead"><?php bloginfo('description') ?></p>
						</div><!-- price-timeline -->
						<!-- <p><a class="btn btn-lg btn-danger" href=" <?php $course_url; ?> " role="button"> <?php $button_text; ?> </a></p> -->
					</div> <!-- col -->
					</div> <!-- row -->
				</div> <!-- container -->	
		</section>
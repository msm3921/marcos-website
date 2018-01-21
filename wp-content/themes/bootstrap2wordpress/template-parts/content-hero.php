<?php 
///Custom Fields
$course_url				= get_post_meta(7,'course_url',true);
$button_text			= get_post_meta(7,'button_text',true);
 ?>

<!-- HERO -->
<section id="hero" date-type="background" data-speed="5">
	<article>
		<div class="container clearfix">
			<div class="row">

				<div class="col-sm-5">
					<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/MH-Emblem.png" alt="Bootstrap to WorldPress" class="logo">
				</div> <!-- col -->

				<div class="col-sm-7 hero-text">
					<h1><?php bloginfo('name') ?></h1>
					<p class="lead"><?php bloginfo('description') ?></p>
					</div><!-- price-timeline -->
					<!-- <p><a class="btn btn-lg btn-danger" href=" <?php $course_url; ?> " role="button"> <?php $button_text; ?> </a></p> -->
				</div> <!-- col -->
			</div> <!-- row -->
		</div> <!-- container -->	
	</article>
</section> <!-- hero -->
<?php
/* Template Name: About Page */	
 get_header();
 $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
<!-- FEATURE IMAGE -->
<?php if(has_post_thumbnail() ) {//check for feature image ?>
	<section class="feature-image" style="background:url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
		<h1><?php the_title(); ?></h1>
	</section>

<?php } else { //fallback image ?>
	<section class="feature-image feature-image-default" data-type="background" data-speed="2">
		<h1><?php the_title(); ?></h1>
	</section>
   <?php } ?> 
    
    <!-- MAIN CONTENT -->
    <div class="container">
	    <?php get_template_part ('template-parts/content','about'); ?>
    </div><!-- container -->
<?php get_footer(); ?>


<?php

/*
Template Name: Home Page
*/ 


get_header(); ?>

<?php get_template_part ('template-parts/content','hero'); ?>

<?php get_template_part ('template-parts/content','optin'); ?>

<?php get_template_part ('template-parts/content','boost'); ?>

<?php get_template_part ('template-parts/content','benefits'); ?>

<?php get_template_part ('template-parts/content','courseFeatures'); ?>
	
<?php get_template_part ('template-parts/content','projectFeatures'); ?>

<?php get_template_part ('template-parts/content','video'); ?>

<?php get_template_part ('template-parts/content','instructor'); ?>

<?php get_template_part ('template-parts/content','testimonials'); ?>


<?php get_footer();


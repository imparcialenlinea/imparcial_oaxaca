<?php 
/*
*Template Name: Micrositio Especial
*/
?>
<?php get_header('micrositio'); ?>
	<?php 
		while(have_posts()) : the_post(); 

			the_content();

		endwhile;
	?>


<?php get_footer();?>
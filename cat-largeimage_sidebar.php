<?php 
/*
*Category Template: Large Image Sidebar 
*/
?>
<?php
get_header();
?>
<?php get_template_part( 'category/larimage'); ?>

<?php
if ( wp_is_mobile() ):
	get_footer('mobile');
else:
	get_footer();
endif;
?>
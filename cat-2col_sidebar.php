<?php 
/*
*Category Template: 2 Columns Sidebar 
*/
?>
<?php
get_header();
?>
<?php $custom  = hotmagazine_custom(); ?>

		<?php get_template_part( 'category/2colsidebar'); ?>

<?php
if ( wp_is_mobile() ):
	get_footer('mobile');
else:
	get_footer();
endif;
?>
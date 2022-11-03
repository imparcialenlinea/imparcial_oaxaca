<?php 
/*
*Category Template: 3 Columns 
*/
?>
<?php
get_header();
?>
<?php $custom  = hotmagazine_custom(); ?>
		<?php get_template_part( 'category/3columns'); ?>

<?php
if ( wp_is_mobile() ):
	get_footer('mobile');
else:
	get_footer();
endif;
?>
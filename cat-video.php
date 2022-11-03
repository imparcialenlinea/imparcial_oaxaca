<?php 
/*
*Category Template: Video
*/
?>
<?php
get_header();
?>
<?php get_template_part( 'category/video'); ?>

<?php
if ( wp_is_mobile() ):
	get_footer('mobile');
else:
	get_footer();
endif;
?>
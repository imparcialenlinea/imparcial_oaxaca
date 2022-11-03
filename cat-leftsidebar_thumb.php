<?php 
/*
*Category Template: Left Sidebar Thumbnail
*/
?>
<?php
get_header();
?>
<?php get_template_part( 'category/thumbleft'); ?>
<?php
if ( wp_is_mobile() ):
	get_footer('mobile');
else:
	get_footer();
endif;
?>
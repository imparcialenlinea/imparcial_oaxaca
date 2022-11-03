<?php $custom  = hotmagazine_custom(); ?>

<!-- sidebar -->
<div class="sidebar theiaStickySidebar">

<?php if($post->hoy[0]!='espubli' && $post->hoy[1]!='espubli' && $post->hoy[2]!='espubli'){ 
		dynamic_sidebar('sidebar-1');
	}else{
		dynamic_sidebar('sidebar-b1'); 
	}?>
</div>
<!-- End sidebar -->
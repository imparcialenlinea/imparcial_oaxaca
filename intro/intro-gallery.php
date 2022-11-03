 <?php 
    $gallery = get_post_meta(get_the_ID(), '_hotmagazine_gallery', true);
	$images = rwmb_meta( 'gallery_new');
?>

<div class="post-gallery">
	<ul class="bxslider">
		<?php if(count($gallery)>0 and $gallery!=''){ ?>    
		<?php foreach($gallery as $img) {?>
		<li><img src="<?php echo esc_attr($img); ?>" alt="<?php the_title(); ?>" class="img-responsive"/></li>
		<?php }} ?>
   		<?php if(rwmb_meta( 'gallery_new',array( 'limit' => 1 ))){ ?> 
		<?php foreach($images as $image) {?>
		<li><img src="<?php echo $image['full_url']; ?>" alt="<?php the_title(); ?>" class="img-responsive"/></li>
		<?php } }?>        
	</ul>
	<?php if(is_single()){ ?>
	<?php $caption = get_post_meta(get_the_ID(), '_hotmagazine_caption', true).' '.get_post_meta(get_the_ID(), 'piegallery', true); ?>
	<?php if($caption!=''){ ?>
	<span class="image-caption"><?php echo esc_html($caption);?></span>
	<?php } ?>
</div>
<?php } ?>
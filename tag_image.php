<?php $posttag=get_the_tags();
	$value_url = rwmb_meta( 'urlmicrositio', array( 'object_type' => 'term' ), $posttag[0]->term_id );
	$value_imgd = rwmb_meta( 'tag_image_desktop', array( 'object_type' => 'term' ), $posttag[0]->term_id );
	$value_imgm = rwmb_meta( 'tag_image_mobile', array( 'object_type' => 'term' ), $posttag[0]->term_id );
	if($value_imgd!='' and $value_url!=''){?>
		<div class="micrositio-tag">
        	<a href="<?php echo $value_url ?>"><img src="<?php echo wp_get_attachment_url($value_imgd[ID]) ?>" width=100% /></a>
            <div class="micrositio-text">
            <a href="<?php echo $value_url ?>">Ver Micrositio</a>
            </div>
         </div>	
		
		<?php }?>

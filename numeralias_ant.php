<?php // NUMERALIA ANTERIOR, NO BORRAR O SE DESAPARECEN LAS NUMERALIAS ATRASADAS
		if($post->_hotmagazine_designbox==''){$post->_hotmagazine_designbox='outlineblue';}								
			$reviews = get_post_meta(get_the_ID(),'post_numeralia', true);									
				if(isset($reviews[0]['_hotmagazine_numeralia_num'])){?>
                   <div class="numeralia numderecha <?php echo $post->_hotmagazine_designbox .'  '.$post->_hotmagazine_formatointer ?> ">	
                   	<?php if ($post->_hotmagazine_intertexto!=''){echo'<h3>'.$post->_hotmagazine_intertexto.'</h3>';}?>
						<?php foreach((array)$reviews as $key => $entry){												
                        	$nums = esc_html( $entry['_hotmagazine_numeralia_num'] );
                            $descs = $entry['_hotmagazine_numeralia_desc']; 
                            echo '<span>'.$nums.'</span>';
                            echo '<p>'.$descs.'</p>';
                         } ?>
					</div>
<?php 	} //FIN NUMERALIA?>   
							
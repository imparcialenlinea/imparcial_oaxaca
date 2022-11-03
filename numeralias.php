
									<?php // NUMERALIA
									$cajas = rwmb_meta( 'num' );
									if(empty($cajas[0]['dato'][0]['dato_title']) and empty($cajas[0]['num_title'])){									
									}else{?>
								        <div class="numderecha">
										<?php foreach ( $cajas as $caja ) {?>
 										<div class="numeralia <?php echo rwmb_meta( 'design' ) .'  '.rwmb_meta( 'size' ).' '.$flotar ?> ">
                                   		<?php $datos = $caja['dato'];?>
                                        <?php if ($caja['num_title']!=''){echo'<h3>'.$caja['num_title'].'</h3>';}?>
										<?php foreach((array)$datos as $key => $entry){												
												 $nums = esc_html( $entry['dato_title'] );
												 $descs = $entry['dato_desc']; 
												 if(strlen($nums)>24){
													 $extra='class="smallertext"';
												 }elseif(strlen($nums)>12){
													 $extra='class="smalltext"';
												 }elseif(strlen($nums)>4){
													 $extra='';
												 }else{
													 $extra='class="largertext"';
												 }
												 echo '<span '.$extra.'>'.$nums.'</span>';
 												 echo '<p>'.$descs.'</p>';
										} ?>
										</div>                                        



										<?php } ?></div>
									<?php } ?>   
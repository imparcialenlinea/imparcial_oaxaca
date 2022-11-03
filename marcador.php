<?php $marcador = rwmb_meta( 'group_scores' );
	if(rwmb_meta( 'torneo' )!=''){  
	    if(rwmb_meta( 'marcadores' )=='resultados'){?>
		        <div class="score numderecha">            
                <table class="blueTable">
                <tbody>
                <tr>
                <td><?php echo rwmb_meta( 'torneo' );?></td></tr>
                </tbody>
                </tr>
                </table>
             
				<?php foreach ( $marcador as $single ) {?>	 
                <?php	$postid1=$single['equipo1' ];
						$postid2=$single['equipo2' ]; 
					if($postid1==''){
						$titulo1=$single['title1'];
						$urlimg1=wp_get_attachment_url( $single['logo1']);					
					}else{
						$titulo1=get_the_title($postid1);
						$urlimg1=wp_get_attachment_url( get_post_thumbnail_id($postid1) );
					}
					if($postid2==''){
						$titulo2=$single['title2'];					
						$urlimg2=wp_get_attachment_url( $single['logo2']);						
					}else{
						$titulo2=get_the_title($postid2);
						$urlimg2=wp_get_attachment_url( get_post_thumbnail_id($postid2) );
					}
					
				?>                  
                    <table class="marcador">
                    <tbody>
                    <tr>
                    <td style="background:#CC0000; width:42px;"><p class="numeroscore"><?php echo $single['goles1'] ?></p></td>
                    <td><?php echo $titulo1 ?></td>                 
                    <td width="45px"><img src="<?php echo $urlimg1 ?>" /></td>
                    </tr>
                    <tr style="border-top:2px solid #ffffff">
                    <td style="background:#CC0000;  width:42px;"><p class="numeroscore"><?php echo $single['goles2'] ?></p></td>
                    <td><?php echo $titulo2 ?></td>
                    <td width="45px"><img src="<?php echo $urlimg2 ?>"></td>
                    </tr>
                    </tbody>
                    </table>                                   
		<?php }?></div>		
		<?php }else{ ?>
            <div class="score numizquierda">   
                            <table class="blueTable">
                <tbody>
                <tr>
                <td><?php echo rwmb_meta( 'torneo' );?></td></tr>
                </tbody>
                </tr>
                </table>         
             
				<?php foreach ( $marcador as $single ) {?>	
                <?php	$postid1=$single['equipo1' ];
						$postid2=$single['equipo2' ]; 
					if($postid1==''){
						$titulo1=$single['title1'];
						$urlimg1=wp_get_attachment_url( $single['logo1']);					
					}else{
						$titulo1=get_the_title($postid1);
						$urlimg1=wp_get_attachment_url( get_post_thumbnail_id($postid1) );
					}
					if($postid2==''){
						$titulo2=$single['title2'];					
						$urlimg2=wp_get_attachment_url( $single['logo2']);						
					}else{
						$titulo2=get_the_title($postid2);
						$urlimg2=wp_get_attachment_url( get_post_thumbnail_id($postid2) );
					}
					
				?>                                      
                <table class="vs" width="100%" border="0">
                  <tr>
                    <td  width="45px" align="center" valign="middle"><img src="<?php echo $urlimg1 ?>" /></td>
                    <td align="center" valign="middle"><?php echo $titulo1 ?></td>
                    <td rowspan="2" style="text-align:right; background:#ae0808"><p class="pvs">VS</p></td>
                  </tr>
                  <tr valign="middle">
                    <td  width="45px" align="center"><img src="<?php echo $urlimg2 ?>" /></td>
                    <td align="center"><?php echo $titulo2 ?></td>
                  </tr>
                  <tr valign="middle">
                    <td colspan="3" align="center" style="background:#999999; color:#FFFFFF; height:40px"><?php echo $single['fechapartido']; ?></td>
                  </tr>
                </table>          

<?php } ?>
		</div>

<?php } ?>

<?php } ?>

<?php 
if ( ! defined( 'ABSPATH' ) ) {
  die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $order
 * @var $cat
 * @var $title
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_qk_team
 */
$order =  $cat = $title = '';
$output = $after_output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) {
    $paged = get_query_var('page');
} else {
    $paged = 1;
}

$i=0;
$args = array(
	'post_type' => 'post',
	'posts_per_page' =>50,
	'orderby'   => 'date',
	'paged' => $paged,
    
);
$portfolio = new WP_Query($args);?>


<script>


function marcar_row() {
    if ( document.getElementById("row-65757").style.background == "none") { 
		document.getElementById("row-65757").style.background = "#ffe027";
	}else{
		document.getElementById("row-65757").style.background = "none"}
}

</script>  




<table width="100%" border="0">
  <tr>
    <td width="94%" style="vertical-align: top !important"><!-- TABLA PRINCIPAL -->
<table width="100%" border="1" cellspacing="0">
  <?php if($portfolio->have_posts()) :
		             while($portfolio->have_posts()) : $portfolio->the_post();
					 $postcat = get_the_category( $post->ID ); ?>

  <tr style="height:140px; background:none" id="row-<?php echo get_the_ID() ?>">
    <td ><?php if(get_cat_ID($postcat[0]->name)=='9'){
			if(get_the_author_meta('_hotmagazine_user_columna')!=''){
			echo esc_html(get_the_author_meta('_hotmagazine_user_columna')); 
		    echo(': ');
			}
		the_title();	
	}else{
	 	the_title();
	 } 
	 ?></td>
    <td><p style="font-size:8px"><?php the_permalink(); ?></p></td>
    <td><p style="font-size:9px; font-weight:bold"><?php 
	if (get_cat_ID($postcat[0]->name)=='71' or get_cat_ID($postcat[0]->name)=='1083'or get_cat_ID($postcat[0]->name)=='74' or get_cat_ID($postcat[0]->name)=='72' or get_cat_ID($postcat[0]->name)=='70' or get_cat_ID($postcat[0]->name)=='73'or get_cat_ID($postcat[0]->name)=='12509' or get_cat_ID($postcat[0]->name)=='12510' or get_cat_ID($postcat[0]->name)=='11015' or get_cat_ID($postcat[0]->name)=='18653' or get_cat_ID($postcat[0]->name)=='15871' or get_cat_ID($postcat[0]->name)=='21149' ){
		echo 'Est: '.$postcat[0]->name;
	}elseif (get_cat_ID($postcat[0]->name)=='5' or get_cat_ID($postcat[0]->name)=='12176'or get_cat_ID($postcat[0]->name)=='12177' or get_cat_ID($postcat[0]->name)=='12178' or get_cat_ID($postcat[0]->name)=='12172' or get_cat_ID($postcat[0]->name)=='12174' or get_cat_ID($postcat[0]->name)=='12173' or get_cat_ID($postcat[0]->name)=='12175'){
		echo('Súper Deportivo');
	}elseif(get_post_meta(get_the_ID(), 'especial', true)==1){
		echo esc_html( $postcat[0]->name );echo(': Especial');		
	}else{			
		echo esc_html( $postcat[0]->name );
	}?>
    </p></td>
    <td><?php if(get_cat_ID($postcat[0]->name)=='15' or get_cat_ID($postcat[0]->name)=='1083' or get_cat_ID($postcat[0]->name)=='71'){
					echo('');
				}else{
						$hashtag=$hashtag2=$usertw='';
						if(in_category(9)){ //SI ES NOTA DE OPINIÓN
							$hashtag='';
							
							
							if(get_the_author_meta('_hotmagazine_user_twitter')!=''){
								$hashtag2='. 🖋 La opinión de @'.get_the_author_meta('_hotmagazine_user_twitter');
							}else{
								$hashtag2='. 🖋 #Opinión';
							}
						}elseif(in_category(19)){ //SI ES NOTA DE CIENCIA Y SALUD
							$hashtag2=' | #CienciaySalud';
						}elseif(in_category(8)){ //SI ES NOTA DE ECONOMIA
							$hashtag2=' | #Economía';	
						}elseif(in_category(7)){ //SI ES NOTA DE ESCENA
							$hashtag2=' | #EnEscena';
						}elseif(in_category(11)){ //SI ES NOTA DE WEB
							$hashtag2=' | #Viral';
						}elseif(in_category(4)){ //SI ES NOTA DE INTERNACIONAL
							$hashtag2=' | #Internacional';
						}elseif(in_category(3)){ //SI ES NOTA DE NACIONAL
							$hashtag2=' | #Nacional';
						}elseif(in_category(2)){ //SI ES NOTA DE POLICIACA
							$hashtag2=' | #Policiaca';
						}elseif(in_category(5)){ //SI ES NOTA DE DEPORTES
							$hashtag='#SúperDeportivo | ';
							$hashtag2='';
						}elseif(in_category(10)){ //SI ES NOTA DE TECNOLOGIA
							$hashtag='#Tech | ';				
						}else{
							$hashtag='';
							$hashtag2='';			
						}
		
		
			$patrones = array();
			$patrones[0] = '/\\bOaxaca\\b/';
			$patrones[1] = '/\\bCosta\\b/';
			$patrones[2] = '/Cuenca/';
			$patrones[3] = '/\\bIstmo\\b/';
			$patrones[4] = '/Salina Cruz/';	
			$patrones[5] = '/Juchitán/';	
			$patrones[6] = '/Huajuapan/';	
			$patrones[7] = '/Mixteca/';
			$patrones[9] = '/Tuxtepec/';
			$patrones[10] = '/\\bAMLO\\b/';
			$patrones[11] = '/\\bVideo\\b/';
			$patrones[12] = '/UABJO/';
			$patrones[13] = '/\\bUNAM\\b/';
			$patrones[14] = '/NASA/';
			$patrones[15] = '/IPN/';
			$patrones[16] = '/IEEPO/';
			$patrones[17] = '/Enrique Peña Nieto/';	
			$patrones[18] = '/Pemex/';
			$patrones[19] = '/Profeco/';
			$patrones[20] = '/INEGI/';
			$patrones[21] = '/Guerreros de #Oaxaca/';
			$patrones[22] = '/Netflix/';
			$patrones[23] = '/Google/';
			$patrones[24] = '/Pinotepa Nacional/';	
			$patrones[25] = '/Zaachila/';
			$patrones[26] = '/Xoxocotlán/';	
			$patrones[27] = '/\\bEditorial/';				
			$patrones[28] = '/Donald Trump/';
			$patrones[29] = '/WhatsApp/';	
			$patrones[30] = '/Semovi/';
			$patrones[32] = '/Gobierno de #Oaxaca/';
			$patrones[33] = '/IEEPCO/';
			$patrones[34] = '/\\bSSO\\b/';
			$patrones[35] = '/Seculta/';
			$patrones[36] = '/Sinfra/';
			$patrones[38] = '/TEEO/';
			$patrones[39] = '/FAHHO/';
			$patrones[40] = '/UTVCO/';
			$patrones[41] = '/Secretaría General de Gobierno/';
			$patrones[42] = '/DDHPO/';
			$patrones[43] = '/OaxacaCine/';
			$patrones[44] = '/DIF #Oaxaca/';
			$patrones[45] = '/Alejandro Murat/';
			$patrones[46] = '/COBAO/';
			$patrones[47] = '/Sección 22/';
			$patrones[48] = '/Nochixtlán/';
			$patrones[49] = '/Covid-19/';	
			$patrones[50] = '/PRI/';
			$patrones[51] = '/PAN/';
			$patrones[52] = '/PRD/';		
			$patrones[53] = '/MORENA/';
			$patrones[56] = '/CNDH/';
			$patrones[58] = '/SSPO/';
			$patrones[59] = '/SEP/';
			$patrones[60] = '/\\bMéxico\\b/';
			$patrones[61] = '/S-22/';
																						
			$sustituciones = array();
			$sustituciones[0] = '#Oaxaca';		
			$sustituciones[1] = '#Costa';
			$sustituciones[2] = '#Cuenca';
			$sustituciones[3] = '#Istmo';
			$sustituciones[4] = '#SalinaCruz';
			$sustituciones[5] = '#Juchitán';	
			$sustituciones[6] = '#Huajuapan';	
			$sustituciones[7] = '#Mixteca';
			$sustituciones[9] = '#Tuxtepec';
			$sustituciones[10] = '@lopezobrador_';
			$sustituciones[11] = '#Video';																					
			$sustituciones[12] = '@UABJO';
			$sustituciones[13] = '@UNAM_MX';																																														
			$sustituciones[14] = '@NASA';
			$sustituciones[15] = '@IPN_MX';																																																		
			$sustituciones[16] = '@IEEPOGobOax';			
			$sustituciones[17] = '@EPN';		
			$sustituciones[18] = '@Pemex';
			$sustituciones[19] = '@Profeco';						
			$sustituciones[20] = '@@INEGI_INFORMA';	
			$sustituciones[21] = '@GuerrerosOax';
			$sustituciones[22] = '#Netflix';
			$sustituciones[23] = '#Google';		
			$sustituciones[24] = '#PinotepaNacional';
			$sustituciones[25] = '#Zaachila';
			$sustituciones[26] = '#Xoxocotlán';	
			$sustituciones[27] = '#Editorial';				
			$sustituciones[28] = '@realDonaldTrump';
			$sustituciones[29] = '#WhatsApp';
			$sustituciones[30] = '@SEMOVI_GobOax';	
			$sustituciones[32] = '@GobOax';
			$sustituciones[33] = '@IEEPCO';
			$sustituciones[34] = '@SSO_GobOax';
			$sustituciones[35] = '@SECULTA_GobOax';
			$sustituciones[36] = '@SINFRA_GobOax';
			$sustituciones[38] = '@TEEOax';
			$sustituciones[39] = '@FundacionAHHO';
			$sustituciones[40] = '@utvco';
			$sustituciones[41] = '@SEGEGO_GobOax';
			$sustituciones[42] = '@DDHPO';
			$sustituciones[43] = '@OaxacaCine';
			$sustituciones[44] = '@DIF_Oaxaca';
			$sustituciones[45] = '@alejandromurat';
			$sustituciones[46] = '@COBAO_GobOax';
			$sustituciones[47] = '@SECCIONXXII';
			$sustituciones[48] = '#Nochixtlán';
			$sustituciones[49] = '#Covid19';	
			$sustituciones[50] = '#PRI';
			$sustituciones[51] = '#PAN';
			$sustituciones[52] = '#PRD';
			$sustituciones[53] = '#MORENA';
			$sustituciones[56] = '@CNDH';						
			$sustituciones[58] = '@SSP_GobOax';	
			$sustituciones[59] = '@SEP_mx';	
			$sustituciones[60] = '#México';	
			$sustituciones[61] = '@SECCIONXXII';
			if(in_category(9)){
				$column=esc_html(get_the_author_meta('_hotmagazine_user_columna'));				
				if ($column==''){
					$cadena=$hashtag.preg_replace($patrones, $sustituciones, get_the_title()).$hashtag2;					
				}else{
					if(get_the_author_meta('ID')==27){
						$cadena="Este domingo en la #Opinión de El Calla'o";			
					}else{
						$column=$column.': ';	
						$cadena=$hashtag.preg_replace($patrones, $sustituciones, $column.get_the_title()).$hashtag2;											
					}
				}			
			}else{
						$cadena=$hashtag.preg_replace($patrones, $sustituciones, get_the_title()).$hashtag2;											
			}
			if(in_category(17) or in_category(18) or in_category(2605)){			
				if (strpos($cadena, 'Oaxaca') == false) {
					$cadena=$cadena.' #Oaxaca';
				}
			}elseif(in_category(20)){
					if (strpos($cadena, '#Istmo') == false) {
					$cadena=$cadena.' #Istmo';					
			}
			
			}
			
			
			

			if($cadena[0]=='@'){
				$cadena='.@'.ltrim($cadena, '@');
			}
	 	echo($cadena);
		$tw[$i]=$cadena;
		$i++; 			
	  } 
	 ?></td>
    <td><?php 
			$hashtag=$hashtag2='';
			

			
			
			$pat = array();
				$pat[0] = '/Estilo Oaxaca/';
				$pat[1] = '/estilo Oaxaca/';
				$pat[2] = '/ESTILO OAXACA/';															
				$pat[3] = '/\\bOaxaca\\b/';

							
			$sust = array();
				$sust[0] = '#EstiloOaxaca';		
				$sust[1] = '#EstiloOaxaca';		
				$sust[2] = '#EstiloOaxaca';														
				$sust[3] = '#Oaxaca';		

			$sumario=preg_replace($pat, $sust, get_the_excerpt());
			
			if(get_cat_ID($postcat[0]->name)=='15'){
				if (strpos($sumario, '#EstiloOaxaca') == false) {
					$hashtag2=' #EstiloOaxaca';
				}
			}
			if(in_category(17) or in_category(18) or in_category(2605)){
				if (strpos($sumario, '#Oaxaca') == false) {
					$hashtag2=' | #Oaxaca';
				}
			}			
			
			$sumario=$hashtag.$sumario.$hashtag2;
						
			echo $sumario;
			
			
			 ?></td>
     <td><?php
		 	$extra=get_post_meta(get_the_ID(), 'hoy', true);
	 		if($extra[0]=='espubli' || $extra[1]=='espubli' || $extra[2]=='espubli'){
					echo('publi');		 
			}elseif($extra[0]=='c' || $extra[1]=='c' || $extra[2]=='c'){
					echo('c');		
			}?></td>
     <td><?php if(get_cat_ID($postcat[0]->name)!='2' and has_tag('Nota Roja')){ ?>
          	p
          <?php }elseif(get_cat_ID($postcat[0]->name)!='11' and has_tag('Viral')){ ?>
          	w            
		 <?php }else{ ?>
         	&nbsp;
         <?php }?></td>


  </tr>
  
  <?php endwhile;
	endif;?> 
</table>    <?php wp_reset_postdata(); $i=0; ?>

    </td>
    <td><!--  TABLA SECUNDARIA -->
  <table width="100%" border="0">
 <?php if($portfolio->have_posts()) :
		             while($portfolio->have_posts()) : $portfolio->the_post();
					 $postcat = get_the_category( $post->ID ); ?>
  <tr style="height:140px; text-align:center">
    <td><a target="blank" href="https://twitter.com/share?url=<?php the_permalink(); if(get_the_author_meta('_hotmagazine_user_twitter')!=''){echo '&via='.get_the_author_meta('_hotmagazine_user_twitter');}?>&related=imparcialoaxaca%2Ctwitter&text=<?php echo urlencode($tw[$i]) ?>"><i class="fab fa-twitter-square" style="font-size:24px"></i></a></td>
  </tr>
  <?php $i++;?>
  <?php endwhile;
	endif;?> 
</table>
  
    
    
    </td>
  </tr>
</table>




    
  
<?php wp_reset_postdata(); ?>
<div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
	<div class="pagination-box">
		<?php hotmagazine_pagination($prev = esc_html__('Anterior', 'hotmagazine'), $next = esc_html__('Siguiente', 'hotmagazine'), $pages=$portfolio->max_num_pages); ?>
	</div>
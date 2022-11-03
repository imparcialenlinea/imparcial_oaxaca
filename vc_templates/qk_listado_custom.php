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
	//'orderby'   => 'date',
	'paged' => $paged,
	'meta_key' => 'post_views_count', 
	'orderby' => 'meta_value',
    
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
    <td><p style="font-size:9px; font-weight:bold"><?php $loultimo=get_post_meta(get_the_ID(), '_hotmagazine_loultimo', true);
	if (get_cat_ID($postcat[0]->name)=='71' or get_cat_ID($postcat[0]->name)=='1083'or get_cat_ID($postcat[0]->name)=='74' or get_cat_ID($postcat[0]->name)=='72' or get_cat_ID($postcat[0]->name)=='70' or get_cat_ID($postcat[0]->name)=='73'){
		echo('Estilo');
	}elseif(get_post_meta(get_the_ID(), '_hotmagazine_especial', true)!=''){
		echo esc_html( $postcat[0]->name );echo(': Especial');		
	}else{			
		echo esc_html( $postcat[0]->name );
	}?>
    </p></td>
    <td><?php if(get_cat_ID($postcat[0]->name)=='15' or get_cat_ID($postcat[0]->name)=='1083' or get_cat_ID($postcat[0]->name)=='71'){
					echo('');
				}else{
						$hashtag=$hashtag2='';
						if(in_category(9)){ //SI ES NOTA DE OPINIÓN
							$hashtag='#Opinión | ';			
							$hashtag2=' #Oaxaca';
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
							$hashtag='#Policiaca | ';
						}elseif(in_category(5)){ //SI ES NOTA DE DEPORTES
							$hashtag='#SúperDeportivo | ';
							$hashtag2=' | #Deportes';
						}elseif(in_category(10)){ //SI ES NOTA DE TECNOLOGIA
							$hashtag='#Tech | ';				
						}else{
							$hashtag='';
							$hashtag2='';			
						}
		
		
			$patrones = array();
			$patrones[0] = '/Oaxaca/';
			$patrones[1] = '/Costa/';
			$patrones[2] = '/Cuenca/';
			$patrones[3] = '/Istmo/';
			$patrones[4] = '/Salina Cruz/';	
			$patrones[5] = '/Juchitán/';	
			$patrones[6] = '/Huajuapan/';	
			$patrones[7] = '/Mixteca/';
			$patrones[8] = '/Gabino Cué/';
			$patrones[9] = '/Tuxtepec/';
			$patrones[10] = '/AMLO/';
			$patrones[11] = '/Video/';
			$patrones[12] = '/UABJO/';
			$patrones[13] = '/UNAM/';
			$patrones[14] = '/NASA/';
			$patrones[15] = '/IPN/';
			$patrones[16] = '/IEEPO/';
			$patrones[17] = '/Enrique Peña Nieto/';	
			$patrones[18] = '/Pemex/';
			$patrones[19] = '/Profeco/';
			$patrones[20] = '/INE/';
			$patrones[21] = '/Guerreros de #Oaxaca/';
			$patrones[22] = '/Netflix/';
			$patrones[23] = '/Google/';
			$patrones[24] = '/Pinotepa Nacional/';	
			$patrones[25] = '/Zaachila/';
			$patrones[26] = '/Xoxocotlán/';	
			$patrones[27] = '/EPN/';
			$patrones[28] = '/Donald Trump/';
			$patrones[29] = '/WhatsApp/';	
			$patrones[30] = '/Sevitra/';
			$patrones[31] = '/Game of Thrones/';
			$patrones[32] = '/Gobierno de #Oaxaca/';
			$patrones[33] = '/IEEPCO/';
			$patrones[34] = '/SSO/';
			$patrones[35] = '/Seculta/';
			$patrones[36] = '/Sinfra/';
			$patrones[37] = '/Municipio de #Oaxaca de Juárez/';
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
			$patrones[49] = '/Enrique Ochoa/';
			$patrones[50] = '/PRI/';
			$patrones[51] = '/PAN/';
			$patrones[52] = '/PRD/';		
			$patrones[53] = '/MORENA/';
			$patrones[54] = '/Ricardo Anaya/';
			$patrones[55] = '/Alejandra Barrales/';	
			$patrones[56] = '/CNDH/';
			$patrones[57] = '/Cristiano Ronaldo/';	
			$patrones[58] = '/SSPO/';
			$patrones[59] = '/SEP/';
			$patrones[60] = '/México/';
			$patrones[61] = '/S-22/';
			$patrones[62] = '/IEEA/';	
			$patrones[63] = '/@@EPN/';												
																						
			$sustituciones = array();
			$sustituciones[0] = '#Oaxaca';		
			$sustituciones[1] = '#Costa';
			$sustituciones[2] = '#Cuenca';
			$sustituciones[3] = '#Istmo';
			$sustituciones[4] = '#SalinaCruz';
			$sustituciones[5] = '#Juchitán';	
			$sustituciones[6] = '#Huajuapan';	
			$sustituciones[7] = '#Mixteca';
			$sustituciones[8] = '@GabinoCue';	
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
			$sustituciones[20] = '@INEMexico';	
			$sustituciones[21] = '@GuerrerosOax';
			$sustituciones[22] = '#Netflix';
			$sustituciones[23] = '#Google';		
			$sustituciones[24] = '#PinotepaNacional';
			$sustituciones[25] = '#Zaachila';
			$sustituciones[26] = '#Xoxocotlán';	
			$sustituciones[27] = '@EPN';																				
			$sustituciones[28] = '@realDonaldTrump';
			$sustituciones[29] = '#WhatsApp';
			$sustituciones[30] = '@SEVITRA_GobOax';	
			$sustituciones[31] = '#GameOfThrones';	
			$sustituciones[32] = '@GobOax';
			$sustituciones[33] = '@IEEPCO';
			$sustituciones[34] = '@SSO_GobOax';
			$sustituciones[35] = '@SECULTA_GobOax';
			$sustituciones[36] = '@SINFRA_GobOax';
			$sustituciones[37] = '@GobCdOax';
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
			$sustituciones[49] = '@EnriqueOchoaR';
			$sustituciones[50] = '#PRI';
			$sustituciones[51] = '#PAN';
			$sustituciones[52] = '#PRD';
			$sustituciones[53] = '#MORENA';
			$sustituciones[54] = '@RicardoAnayaC';
			$sustituciones[55] = '@Ale_BarralesM';											
			$sustituciones[56] = '@CNDH';						
			$sustituciones[57] = '@Cristiano';
			$sustituciones[58] = '@SSP_GobOax';	
			$sustituciones[59] = '@SEP_mx';	
			$sustituciones[60] = '#México';	
			$sustituciones[61] = '@SECCIONXXII';
			$sustituciones[62] = '@IEEA_GobOax';
			$sustituciones[63] = '@EPN';						
	
			if(in_category(9)){
				$cadena=$hashtag.esc_html(get_the_author_meta('_hotmagazine_user_columna')).': '.preg_replace($patrones, $sustituciones, get_the_title());		
			}else{			
				$cadena=$hashtag.preg_replace($patrones, $sustituciones, get_the_title()).$hashtag2;
			}
			if(in_category(17) or in_category(18) or in_category(2605) or in_category(9)){			
				if (strpos($cadena, '#Oaxaca') == false) {
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
    <td><?php the_excerpt(); ?></td>
     <td><?php if(get_cat_ID($postcat[0]->name)=='1' or  has_post_format('aside')){
					echo('c');															 
			}?></td>
     <td><?php if(get_the_author_meta('ID')==94 and get_cat_ID($postcat[0]->name)=='2'){?>
     		a
          <?php }elseif(get_cat_ID($postcat[0]->name)!='2' and has_tag('Nota Roja')){ ?>
          	p
          <?php }elseif(get_cat_ID($postcat[0]->name)!='11' and has_tag('Viral')){ ?>
          	w            
		 <?php }else{ ?>
         	&nbsp;
         <?php }?></td>


    <td><?php echo hotmagazine_getPostViews(get_the_ID()); ?></td>
  </tr>
  
  <?php endwhile;
	endif;?> 
</table>    <?php wp_reset_postdata(); $i=0; ?>





    
  
<?php wp_reset_postdata(); ?>
<div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
	<div class="pagination-box">
		<?php hotmagazine_pagination($prev = esc_html__('Anterior', 'hotmagazine'), $next = esc_html__('Siguiente', 'hotmagazine'), $pages=$portfolio->max_num_pages); ?>
	</div>
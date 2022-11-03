<?php 

if ( ! defined( 'ABSPATH' ) ) {

  die( '-1' );

}


/**

 * Shortcode attributes

 * @var $atts
 * @var $grupo_slug 
 * @var $this WPBakeryShortCode_qk_team

 */

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
$custom  = hotmagazine_custom();


// This is where you run the code and display the output
$queryhoy = array(	
	'posts_per_page' =>1,
	'post_type' => 'casoscovid',
	'post_status' => 'publish',
);
$queryayer = array(	
	'posts_per_page' =>1,
	'offset'=>1,
	'post_type' => 'casoscovid',
	'post_status' => 'publish',
);

$items = new WP_Query($queryhoy);
$items->the_post();
	$confirmadoshoy=rwmb_meta( 'confirmados' );
	$sospechososhoy=rwmb_meta( 'sospechosos' );
	$negativoshoy=rwmb_meta( 'negativos' );
	$muertoshoy=rwmb_meta( 'muertos' );	
	$recuperadoshoy=rwmb_meta( 'recuperados' );	
	$activoshoy=rwmb_meta( 'activos' );	
	
	$confirmadoshoyN=rwmb_meta( 'confirmadosN' );
	$sospechososhoyN=rwmb_meta( 'sospechososN' );
	$negativoshoyN=rwmb_meta( 'negativosN' );
	$muertoshoyN=rwmb_meta( 'muertosN' );
	$recuperadoshoyN=rwmb_meta( 'recuperadosN' );	
	$activoshoyN=rwmb_meta( 'activosN' );		
		
	$actualizado=get_the_date('g:i a, D, j F Y');	
	$reporte=get_the_date();	
	
$items2 = new WP_Query($queryayer);
$items2->the_post();
	$confirmadosayer=rwmb_meta( 'confirmados' );
	$muertosayer=rwmb_meta( 'muertos' );
	$difconf=$confirmadoshoy-$confirmadosayer;
	$difmuertos=$muertoshoy-$muertosayer;
	$cambioconfir='Disminución';
	$cambiomuerte='Disminución';	
	$colormuerte='red';
	$colorconf='red';	
	
	$confirmadosayerN=rwmb_meta( 'confirmadosN' );
	$muertosayerN=rwmb_meta( 'muertosN' );
	$difconfN=$confirmadoshoyN-$confirmadosayerN;
	$difmuertosN=$muertoshoyN-$muertosayerN;
	$cambioconfirN='Disminución';
	$cambiomuerteN='Disminución';	
	$colormuerteN='red';
	$colorconfN='red';		
	
	
	if($difconf>0){$difconf='+'.$difconf;$colorconf='green';$cambioconfir='Aumento';}
	if($difmuertos>0){$difmuertos='+'.$difmuertos;$colormuerte='green';$cambiomuerte='Aumento';}	
	
	if($difconfN>0){$difconfN='+'.$difconfN;$colorconfN='green';$cambioconfirN='Aumento';}
	if($difmuertosN>0){$difmuertosN='+'.number_format($difmuertosN, 0, '.', ',');$colormuerteN='green';$cambiomuerteN='Aumento';}		
		
?>
<h3 class="cvtitleprincipal fourthbreak ocultarmovil">PANORAMA DEL COVID-19: <span style="font-weight:100; color:#333333;"><?php echo $reporte ?></h3>
<div class="row">
	<div class="wpb_column vc_column_container vc_col-sm-2 vc_col-has-fill ocultarmovil lastview30 fourthbreak">
		<div class="vc_column-inner vc_custom_1592341322518">
	    	<div class="wpb_wrapper">
            <h3 class="cvtitle">EN OAXACA</h3>
            <div class="cvnumber cvconfirmado"><img class="bigicon" src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-conf.png"> <?php echo number_format($confirmadoshoy, 0, '.', ','); ?> <span class="firstbreak"><a data-toggle="tooltip" title="<?php echo $cambioconfir ?> de casos con respecto al día anterior."><span style="font-size:11px; color:<?php echo $colorconf ?>">( <?php echo $difconf;  ?> )</span></a></span></div>
            <p class="cvtext">Casos confirmados acumulados</p>
        	</div>
		</div>
	</div>
    <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-has-fill ocultarmovil lastview30 fourthbreak">
    	<div class="vc_column-inner vc_custom_1592341332288">
        	<div class="wpb_wrapper">
            <!--CV BOX-->
            	<div class="cvbox ">
                	<div class="cvicon ">                    
                    <img src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-negativos.jpg" >
                    </div>      
                	<div class="cvtexts">                    
                    <p class="cvnumber2 "><?php echo number_format($negativoshoy, 0, '.', ','); ?></p>
                    <p class="cvtext2">Casos Negativos</p>
                    </div>                    
                                  
                </div>
            	<div class="cvbox">
                	<div class="cvicon ">                    
                    <img src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-sospechosos.jpg" >
                    </div>      
                	<div class="cvtexts">                    
                    <p class="cvnumber2 "><?php echo number_format($sospechososhoy, 0, '.', ','); ?></p>
                    <p class="cvtext2">Casos Sospechosos</p>
                    </div>                    
                                  
                </div>
            	<div class="cvbox">
                	<div class="cvicon ">                    
                    <img src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-totales.jpg" >
                    </div>      
                	<div class="cvtexts">                    
                    <p class="cvnumber2 "><?php echo number_format($negativoshoy+$confirmadoshoy+$sospechososhoy, 0, '.', ','); ?></p>
                    <p class="cvtext2">Notificaciones Totales</p>
                    </div>                                                      
                </div>    
                                <!--CV BOX-->                                        
            </div>
		</div>
	</div>
    <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-has-fill ocultarmovil lastview30 fourthbreak">
    	<div class="vc_column-inner vc_custom_1592341332288">
        	<div class="wpb_wrapper">
            <!--CV BOX-->
            	<div class="cvbox ">
                	<div class="cvicon ">                    
                    <img src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-muertos.jpg" >
                    </div>      
                	<div class="cvtexts">                    
                    <p class="cvnumber2 "><?php echo number_format($muertoshoy, 0, '.', ','); ?><span class="secondtip"><a data-toggle="tooltip" title="<?php echo $cambiomuerte ?> de muertes con respecto al día anterior."><span style="font-size:10px; color:<?php echo $colormuerte ?>"> ( <?php echo $difmuertos;  ?> )</span></a></span></p>
                    <p class="cvtext2">Muertes</p>
                    </div>                    
                                  
                </div>
            	<div class="cvbox">
                	<div class="cvicon ">                    
                    <img src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-recuperados.jpg" >
                    </div>      
                	<div class="cvtexts">                    
                    <p class="cvnumber2 "><?php echo number_format($recuperadoshoy, 0, '.', ','); ?></p>
                    <p class="cvtext2">Recuperados</p>
                    </div>                    
                                  
                </div>
            	<div class="cvbox">
                	<div class="cvicon ">                    
                    <img src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-activos.jpg" >
                    </div>      
                	<div class="cvtexts">                    
                    <p class="cvnumber2 cvmuerto"><?php echo number_format($activoshoy, 0, '.', ','); ?></p>
                    <p class="cvtext2">Casos activos</p>
                    </div>                                                      
                </div>    
                                <!--CV BOX-->                                        
            </div>
		</div>
	</div>    
    <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-has-fill bordeizquierdo ocultarmovil secondbreak fourthbreak">
    	<div class="vc_column-inner">
        	<div class="wpb_wrapper">
            <h3 class="cvtitle">EN MÉXICO</h3>
            <div class="cvconfirmado cvnumber" style="font-size:18px!important;"><img  class="bigicon" src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-conf.png"> <?php echo number_format($confirmadoshoyN, 0, '.', ','); ?> <span class="firstbreak"><a data-toggle="tooltip" title="<?php echo $cambioconfirN ?> de casos con respecto al día anterior."><span style="font-size:9px; color:<?php echo $colorconfN ?>">( <?php echo $difconfN;  ?> )</span></a></span></div>
            <p class="cvtext">Casos confirmados acumulados</p>            
            </div>
		</div>
	</div>
    <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-has-fill ocultarmovil secondbreak fourthbreak">
    	<div class="vc_column-inner vc_custom_1592341332288">
        	<div class="wpb_wrapper">
            <!--CV BOX-->
            	<div class="cvbox ">
                	<div class="cvicon ">                    
                    <img src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-negativos.jpg" >
                    </div>      
                	<div class="cvtexts">                    
                    <p class="cvnumber2 "><?php echo number_format($negativoshoyN, 0, '.', ','); ?></p>
                    <p class="cvtext2">Casos Negativos</p>
                    </div>                    
                                  
                </div>
            	<div class="cvbox">
                	<div class="cvicon ">                    
                    <img src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-sospechosos.jpg" >
                    </div>      
                	<div class="cvtexts">                    
                    <p class="cvnumber2 "><?php echo number_format($sospechososhoyN, 0, '.', ','); ?></p>
                    <p class="cvtext2">Casos Sospechosos</p>
                    </div>                    
                                  
                </div>
            	<div class="cvbox">
                	<div class="cvicon ">                    
                    <img src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-totales.jpg" >
                    </div>      
                	<div class="cvtexts">                    
                    <p class="cvnumber2 "><?php echo number_format($negativoshoyN+$confirmadoshoyN+$sospechososhoyN, 0, '.', ','); ?></p>
                    <p class="cvtext2">Notificaciones Totales</p>
                    </div>                                                      
                </div>    
                                <!--CV BOX-->                                        
            </div>
		</div>
	</div>
    <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-has-fill ocultarmovil secondbreak fourthbreak">
    	<div class="vc_column-inner vc_custom_1592341332288">
        	<div class="wpb_wrapper">
            <!--CV BOX-->
            	<div class="cvbox ">
                	<div class="cvicon ">                    
                    <img src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-muertos.jpg" >
                    </div>      
                	<div class="cvtexts">                    
                    <p class="cvnumber2 "><?php echo number_format($muertoshoyN, 0, '.', ','); ?><span class="secondtip"><a data-toggle="tooltip" title="<?php echo $cambiomuerteN ?> de muertes con respecto al día anterior."><span style="font-size:10px; color:<?php echo $colormuerteN ?>"> ( <?php echo $difmuertosN;  ?> )</span></a></span></p>
                    <p class="cvtext2">Muertes</p>
                    </div>                    
                                  
                </div>
            	<div class="cvbox">
                	<div class="cvicon ">                    
                    <img src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-recuperados.jpg" >
                    </div>      
                	<div class="cvtexts">                    
                    <p class="cvnumber2 "><?php echo number_format($recuperadoshoyN, 0, '.', ','); ?></p>
                    <p class="cvtext2">Recuperados</p>
                    </div>                    
                                  
                </div>
            	<div class="cvbox">
                	<div class="cvicon ">                    
                    <img src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-activos.jpg" >
                    </div>      
                	<div class="cvtexts">                    
                    <p class="cvnumber2 cvmuerto"><?php echo number_format($activoshoyN, 0, '.', ','); ?></p>
                    <p class="cvtext2">Casos activos</p>
                    </div>                                                      
                </div>    
                                <!--CV BOX-->                                        
            </div>
		</div>
</div>
 <p class="actualizado ocultarmovil">Última actualización: <?php echo $actualizado; ?> / Fuente: <a target="blank" href="https://coronavirus.gob.mx/datos/">coronavirus.gob.mx/datos/</a></p>
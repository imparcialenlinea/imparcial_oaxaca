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
	$confirmadoshoyN=rwmb_meta( 'confirmadosN' );
	$sospechososhoyN=rwmb_meta( 'sospechososN' );
	$negativoshoyN=rwmb_meta( 'negativosN' );
	$muertoshoyN=rwmb_meta( 'muertosN' );	
	$actualizado=get_the_date('g:i a, D, j F Y');	
	$reporte=get_the_date();	
$items2 = new WP_Query($queryayer);
$items2->the_post();
	$confirmadosayer=rwmb_meta( 'confirmados' );
	$muertosayer=rwmb_meta( 'muertos' );
	$difconf=$confirmadoshoy-$confirmadosayer;
	$difmuertos=$muertoshoy-$muertosayer;
	$colormuerte='red';
	$colorconf='red';	
	if($difconf>0){$difconf='+'.$difconf;$colorconf='green';}
	if($difmuertos>0){$difmuertos='+'.$difmuertos;$colormuertes='green';}	
		
?>

<div class="row">
	<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
    	<div class="vc_column-inner vc_custom_1592263881177">
        	<div class="wpb_wrapper">
<!-- INICIA LOCAL -->
<p class="pcovid">CASOS DE COVID-19 EN OAXACA</p>
<div class="row">
	<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
    	<div class="vc_column-inner tablacovid">
        	<div class="wpb_wrapper white">
                <table width="100%" border="0" cellspacing="2">
                <tr>
                <td class="covid-number"  bgcolor="#f1f1f1"><img width="28px" src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-confirmados.jpg" style="margin-right:10px"><?php echo number_format($confirmadoshoy, 0, '.', ','); ?> <a data-toggle="tooltip" title="Aumento/Disminución de casos con respecto al día anterior."><span style="font-size:11px; color:<?php echo $colorconf ?>">( <?php echo $difconf;  ?> )</span></a></td>
                </tr>
                <tr>
                <td class="covid-text" bgcolor="#003366">CONFIRMADOS</td>
                </tr>
                </table>            
            </div>
		</div>
	</div>
	<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
    	<div class="vc_column-inner tablacovid">
        	<div class="wpb_wrapper white">
                <table width="100%" border="0" cellspacing="2">
                <tr>
                <td class="covid-number"  bgcolor="#f1f1f1"><img width="28px" src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-negativos.jpg" style="margin-right:10px"><?php echo number_format($negativoshoy, 0, '.', ','); ?></td>
                </tr>
                <tr>
                <td class="covid-text" bgcolor="#003366">CASOS NEGATIVOS</td>
                </tr>
                </table>            
            </div>
		</div>
	</div>    
	<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
		<div class="vc_column-inner tablacovid">
    		<div class="wpb_wrapper white">
                <table width="100%" border="0" cellspacing="2">
                <tr>
                <td  class="covid-number"  bgcolor="#f1f1f1"><img width="28px" src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-sospechosos.jpg" style="margin-right:10px"><?php echo number_format($sospechososhoy, 0, '.', ','); ?></td>
                </tr>
                <tr>
                <td class="covid-text" bgcolor="#003366">CASOS SOSPECHOSOS</td>
                </tr>
                </table>             
	        </div>
		</div>
	</div>
	<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
		<div class="vc_column-inner tablacovid">
    		<div class="wpb_wrapper white">
                <table width="100%" border="0" cellspacing="2">
                <tr>
                <td  class="covid-number"  bgcolor="#f1f1f1"><img width="28px" src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-muertos.jpg" style="margin-right:10px"><?php echo number_format($muertoshoy, 0, '.', ','); ?> <a data-toggle="tooltip" title="Aumento/Disminución de casos con respecto al día anterior."><span style="font-size:11px; color:<?php echo $colormuertes ?>">( <?php echo $difmuertos;  ?> )</span></a></td>
                </tr>
                <tr>
                <td class="covid-text" bgcolor="#003366">MUERTOS</td>
                </tr>
                </table>             
	        </div>
		</div>
	</div>
</div>
<!-- TERMINA LOCAL -->            
            </div>
		</div>
	</div>
	<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
		<div class="vc_column-inner vc_custom_1592263889801">
    		<div class="wpb_wrapper">
<!-- INICIA MÉXICO -->
<p class="pcovid ocultarmovil">CASOS DE COVID-19 EN MÉXICO</p>
<div class="row ocultarmovil">
	<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
    	<div class="vc_column-inner tablacovid" style="border-left:5px solid white">
        	<div class="wpb_wrapper white">
                <table width="100%" border="0" cellspacing="2">
                <tr>
                <td class="covid-number"  bgcolor="#f1f1f1"><img width="28px" src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-confirmados.jpg" style="margin-right:10px"><?php echo number_format($confirmadoshoyN, 0, '.', ','); ?></td>
                </tr>
                <tr>
                <td class="covid-text" bgcolor="#003366">CONFIRMADOS</td>
                </tr>
                </table>            
            </div>
		</div>
	</div>
	<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
    	<div class="vc_column-inner tablacovid">
        	<div class="wpb_wrapper white">
                <table width="100%" border="0" cellspacing="2">
                <tr>
                <td class="covid-number"  bgcolor="#f1f1f1"><img width="28px" src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-negativos.jpg" style="margin-right:10px"><?php echo number_format($negativoshoyN, 0, '.', ','); ?></td>
                </tr>
                <tr>
                <td class="covid-text" bgcolor="#003366">CASOS NEGATIVOS</td>
                </tr>
                </table>            
            </div>
		</div>
	</div>        
	<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
		<div class="vc_column-inner tablacovid">
    		<div class="wpb_wrapper white">
                <table width="100%" border="0" cellspacing="2">
                <tr>
                <td  class="covid-number"  bgcolor="#f1f1f1"><img width="28px" src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-sospechosos.jpg" style="margin-right:10px"><?php echo number_format($sospechososhoyN, 0, '.', ','); ?></td>
                </tr>
                <tr>
                <td class="covid-text" bgcolor="#003366">CASOS SOSPECHOSOS</td>
                </tr>
                </table>             
	        </div>
		</div>
	</div>
	<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
		<div class="vc_column-inner tablacovid">
    		<div class="wpb_wrapper white">
                <table width="100%" border="0" cellspacing="2">
                <tr>
                <td  class="covid-number"  bgcolor="#f1f1f1"><img width="28px" src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-muertos.jpg" style="margin-right:10px"><?php echo number_format($muertoshoyN, 0, '.', ','); ?></td>
                </tr>
                <tr>
                <td class="covid-text" bgcolor="#003366">MUERTOS</td>
                </tr>
                </table>             
	        </div>
		</div>
	</div>
</div>
            <!-- TERMINA MÉXICO -->            
            
            
	        </div>
		</div>
	</div>
</div>
<p class="actualizado">Última actualización: <?php echo $actualizado; ?> / Fuente: <a target="blank" href="https://coronavirus.gob.mx/datos/">coronavirus.gob.mx/datos/</a></p>
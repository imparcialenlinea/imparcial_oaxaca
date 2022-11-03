<?php
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
	$cambioconfir='Disminución';
	$cambiomuerte='Disminución';	
	$colormuerte='red';
	$colorconf='red';	
	if($difconf>0){$difconf='+'.$difconf;$colorconf='green';$cambioconfir='Aumento';}
	if($difmuertos>0){$difmuertos='+'.$difmuertos;$colormuerte='green';$cambiomuerte='Aumento';}	
		
?>
<h3 class="cvtitleprincipal fourthbreak">PANORAMA DEL COVID-19: <span style="font-weight:100; color:#333333;"><?php echo $reporte ?></h3>

<table class="covid-single" width="100%" border="0" cellspacing="0">
  <tr>
    <td>
            <h3 class="cvtitle">EN OAXACA</h3>
            <div class="cvnumber cvconfirmado"><img class="bigicon" src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-conf.png"> <?php echo number_format($confirmadoshoy, 0, '.', ','); ?> <span class="firstbreak"><a data-toggle="tooltip" title="<?php echo $cambioconfir ?> de casos con respecto al día anterior."><span style="font-size:11px; color:<?php echo $colorconf ?>">( <?php echo $difconf;  ?> )</span></a></span></div>
            <p class="cvtext">Casos confirmados acumulados</p>

    </td>
    <td>
            <!--CV BOX-->
            	<div class="cvbox ">
                	<div class="cvicon ">                    
                    <img src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-negativos.jpg" >
                    </div>      
                	<div class="cvtexts">                    
                    <p class="cvnumber2 cvnegativo"><?php echo number_format($negativoshoy, 0, '.', ','); ?></p>
                    <p class="cvtext2">Casos negativos</p>
                    </div>                    
                                  
                </div>
            	<div class="cvbox">
                	<div class="cvicon ">                    
                    <img src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-sospechosos.jpg" >
                    </div>      
                	<div class="cvtexts">                    
                    <p class="cvnumber2 cvsospechoso"><?php echo number_format($sospechososhoy, 0, '.', ','); ?></p>
                    <p class="cvtext2">Casos sospechosos</p>
                    </div>                    
                                  
                </div>
            	<div class="cvbox">
                	<div class="cvicon ">                    
                    <img src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-muertos.jpg" >
                    </div>      
                	<div class="cvtexts">                    
                    <p class="cvnumber2 cvmuerto"><?php echo number_format($muertoshoy, 0, '.', ','); ?><span class="secondtip"><a data-toggle="tooltip" title="<?php echo $cambiomuerte ?> de muertes con respecto al día anterior."><span style="font-size:10px; color:<?php echo $colormuerte ?>"> ( <?php echo $difmuertos;  ?> )</span></a></span></p>
                    <p class="cvtext2">Muertes</p>
                    </div>                                                      
                </div>    
                                <!--CV BOX-->                                        

    </td>
    <td>
            <h3 class="cvtitle">EN MÉXICO</h3>
            <div class="cvconfirmado cvnumber"><img  class="bigicon" src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-conf.png"> <?php echo number_format($confirmadoshoyN, 0, '.', ','); ?></div>
            <p class="cvtext">Casos confirmados acumulados</p>            

    </td>
    <td>
            <!--CV BOX-->
            	<div class="cvbox">
                	<div class="cvicon">                    
                    <img src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-negativos.jpg">
                    </div>      
                	<div class="cvtexts">                    
                    <p class="cvnumber2 cvnegativo"><?php echo number_format($negativoshoyN, 0, '.', ','); ?></p>
                    <p class="cvtext2">Casos negativos</p>
                    </div>                    
                                  
                </div>
            	<div class="cvbox">
                	<div class="cvicon">                    
                    <img  src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-sospechosos.jpg" >
                    </div>      
                	<div class="cvtexts">                    
                    <p class="cvnumber2 cvsospechoso"><?php echo number_format($sospechososhoyN, 0, '.', ','); ?></p>
                    <p class="cvtext2">Casos sospechosos</p>
                    </div>                    
                                  
                </div>
            	<div class="cvbox">
                	<div class="cvicon">                    
                    <img src="https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-muertos.jpg" >
                    </div>      
                	<div class="cvtexts">                    
                    <p class="cvnumber2 cvmuerto"><?php echo number_format($muertoshoyN, 0, '.', ','); ?></p>
                    <p class="cvtext2">Muertes</p>
                    </div>   
                    </div>                 
                <!--CV BOX-->              
    
    </td>
  </tr>
</table>


 <p class="actualizado ocultarmovil">Última actualización: <?php echo $actualizado; ?> / Fuente: <a target="blank" href="https://coronavirus.gob.mx/datos/">coronavirus.gob.mx/datos/</a></p>
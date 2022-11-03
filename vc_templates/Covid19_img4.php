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


$items = new WP_Query($queryhoy);
$items->the_post();
	$activoshoy=rwmb_meta( 'activos' );
	$confirmadoshoy=rwmb_meta( 'confirmados' );
	$sospechososhoy=rwmb_meta( 'sospechosos' );
	$muertoshoy=rwmb_meta( 'muertos' );	

	$activosNhoy=rwmb_meta( 'activosN' );
	$confirmadosNhoy=rwmb_meta( 'confirmadosN' );
	$sospechososNhoy=rwmb_meta( 'sospechososN' );
	$muertosNhoy=rwmb_meta( 'muertosN' );	

	$dia=get_the_date('j');	
	$mes=get_the_date('F');	
	
?>


<style>
.imgCOVID{
	width:960px;
	height:960px;
	background-image:url(https://imparcialoaxaca.mx/wp-content/uploads/2020/11/general.jpg);
	border:1px solid #999999;
}
.CVcorte{
top: 240px;
    left: 582px;
    font-size: 31px;
    width: 305px;
    text-align: center;
    position: absolute;
    text-transform: uppercase;
    color: #ffffff;
}
.CVconfirmados{
	top: 350px;
    left: 760px;
    font-size: 42px;
    width: 217px;
    text-align: center;
    position: absolute;
    color: #ffffff;
    font-weight: 900;
}
.CVsospechosos{
    top: 450px;
    left: 760px;
    font-size: 42px;
    width: 217px;
    text-align: center;
    position: absolute;
    color: #ffffff;
    font-weight: 900;
}
.CVmuertes{
    top: 540px;
    left: 760px;
    font-size: 42px;
    width: 217px;
    text-align: center;
    position: absolute;
    color: #ffffff;
    font-weight: 900;
}
.CVactivos{
    top: 470px;
    left: 100px;
    font-size: 64px;
    width: 295px;
    text-align: center;
    position: absolute;
    color: #ffffff;
    font-weight: 900;
}	

	.CVconfirmadosN{
	top: 750px;
    left: 760px;
    font-size: 36px;
    width: 177px;
    text-align: center;
    position: absolute;
    color: #ffffff;
}
.CVsospechososN{
	top: 820px;
    left: 760px;
    font-size: 36px;
    width: 177px;
    text-align: center;
    position: absolute;
    color: #ffffff;
}
.CVmuertesN{
	top: 900px;
    left: 760px;
    font-size: 36px;
    width: 177px;
    text-align: center;
    position: absolute;
    color: #ffffff;
}
.CVactivosN{
    top: 845px;
    left: 155px;
    font-size: 44px;
    width: 295px;
    text-align: center;
    position: absolute;
    color: #ffffff;
}	
</style>

    <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"> 
    </script> 
      
    <script src= 
"https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"> 
    </script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js" integrity="sha512-s/XK4vYVXTGeUSv4bRPOuxSDmDlTedEpMEcAQk0t/FMd9V6ft8iXdwSBxV0eD60c6w/tjotSlKu9J2AAW1ckTA==" crossorigin="anonymous"></script>

<div class="imgCOVID" id="html-content-holder">
	<div class="CVcorte">
    	<?php echo $dia.' de '.$mes; ?>
    </div>   
	<div class="CVactivos">
    	<?php echo number_format($activoshoy, 0, '.', ','); ?>
    </div>  	
	<div class="CVconfirmados">
    	<?php echo number_format($confirmadoshoy, 0, '.', ','); ?>
    </div>    
	<div class="CVsospechosos">
    	<?php echo number_format($sospechososhoy, 0, '.', ','); ?>
    </div> 
	<div class="CVmuertes">
    	<?php echo number_format($muertoshoy, 0, '.', ','); ?>
    </div> 
	
	<div class="CVactivosN">
    	<?php echo number_format($activosNhoy, 0, '.', ','); ?>
    </div>  	
	<div class="CVconfirmadosN">
    	<?php echo number_format($confirmadosNhoy, 0, '.', ','); ?>
    </div>    
	<div class="CVsospechososN">
    	<?php echo number_format($sospechososNhoy, 0, '.', ','); ?>
    </div> 
	<div class="CVmuertesN">
    	<?php echo number_format($muertosNhoy, 0, '.', ','); ?>
    </div> 	
</div>
    <input id="btn-Preview-Image" type="button"
                value="CREAR IMAGEN" />  
          
    <a id="btn-Convert-Html2Image" href="#"> 
        DESCARGAR 
    </a> 
  
    <br/> 
      
    <h3>IMAGEN:</h3> 
      
    <div id="previewImage"></div> 

    <script> 
        $(document).ready(function() { 
          
            // Global variable 
            var element = $("#html-content-holder");  
          
            // Global variable 
            var getCanvas;  
  
            $("#btn-Preview-Image").on('click', function() { 
                html2canvas(element, { 
                    onrendered: function(canvas) { 
                        $("#previewImage").append(canvas); 
                        getCanvas = canvas; 
                    } 
                }); 
            }); 
  
            $("#btn-Convert-Html2Image").on('click', function() { 
                var imgageData =  
                    getCanvas.toDataURL("image/jpg"); 
              
                // Now browser starts downloading  
                // it instead of just showing it 
                var newData = imgageData.replace( 
                /^data:image\/png/, "data:application/octet-stream"); 
              
                $("#btn-Convert-Html2Image").attr( 
                "download", "Covid-19-General-<?php echo $dia.$mes; ?>.jpg").attr( 
                "href", newData); 
            }); 
        }); 
    </script> 
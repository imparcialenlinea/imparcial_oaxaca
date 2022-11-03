 <?php 

if ( ! defined( 'ABSPATH' ) ) {

  die( '-1' );

}
   date_default_timezone_set('America/Mexico_City');
   setlocale(LC_TIME, 'es_ES.UTF-8');
   setlocale(LC_TIME, 'spanish');

$meses = array(
'January'=>'enero',
'February'=>'febrero',
'March'=>'merzo',
'April'=>'abril',
'May'=>'mayo',
'June'=>'junio',
'July'=>'julio',
'August'=>'agosto',
'September'=>'septiembre',
'October'=>'octubre',
'November'=>'noviembre',
'December'=>'diciembre',
);

	$dia=date('j');	
	$mes=$meses[date('F')];	
	$anio=date('Y');	


/**

 * Shortcode attributes

 * @var $atts
 * @var $grupo_slug 
 * @var $this WPBakeryShortCode_qk_team

 */

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
$custom  = hotmagazine_custom();?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("#myTextarea").keyup(function(){
        // Getting the current value of textarea
        var currentText = $(this).val();
        
        // Setting the Div content
        $(".output").text(currentText);
    });
});
</script>
<script>
$(document).ready(function(){
    $("#myTextarea2").keyup(function(){
        // Getting the current value of textarea
        var currentText2 = $(this).val();
        
        // Setting the Div content
        $(".output2").text(currentText2);
    });
});
</script>
<script>
$(document).ready(function(){
    $("#myTextarea3").keyup(function(){
        // Getting the current value of textarea
        var currentText3 = $(this).val();
        
        // Setting the Div content
        $(".output3").text(currentText3);
    });
});
</script>
<script>
$(document).ready(function(){
    $("#myTextarea4").keyup(function(){
        // Getting the current value of textarea
        var currentText4 = $(this).val();
        
        // Setting the Div content
        $(".output4").text(currentText4);
    });
});
</script>
<script>
$(document).ready(function(){
    $("#myTextarea5").keyup(function(){
        // Getting the current value of textarea
        var currentText5 = $(this).val();
        
        // Setting the Div content
        $(".output5").text(currentText5);
    });
});
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Marcellus&display=swap');
	
.esquelacss{
	width:750px;
	height:750px;
	background-image:url(https://imparcialoaxaca.mx/wp-content/uploads/2020/10/esquela1-750x750-1.jpg);
	border:1px solid #999999;
}
.esquela-marco{
    height: auto;
    top: 142px;
    left: 177px;
    text-align: center;
    width: 430px;
    position: absolute;

	
}
.esquela-fecha{
	margin-top:30px;
    font-size: 16px;
    line-height: 1.3;
	font-weight: bold;
    text-align: center;
    color: #000000;
    font-family: 'Open Sans';
}
.esquela-txt{
	margin-top: 25px;
    font-size: 20px;
    line-height: 1.3;
    text-align: center;
    color: #000000;
    font-family: 'Open Sans';
}
.esquela-nombre{
	font-size: 52px;
    line-height: 1.1;
    color: #000000;
    font-weight: 900;
    margin-top: 36px;
    margin-bottom: 36px;
    margin-bottom: 35px;
	font-family: 'Marcellus', serif;

}
</style>

    <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"> 
    </script> 
      
    <script src= 
"https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"> 
    </script> 


<div class="row"><div class="wpb_column vc_column_container vc_col-sm-8"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_single_image post-gallery wpb_content_element vc_align_center">

<div class="esquelacss" id="html-content-holder">
	<div class="esquela-marco">
	<div class="esquela-txt">
		<div class="output">se une a la pena que embarga a la familia Pérez López, por el sensible fallecimiento de la señora</div>
	</div> 
	<div class="esquela-nombre">
		<div class="output2">María del Socorro López Castellanos</div>
    </div> 
	<div class="esquela-txt">
		<div class="output3">Nuestro más sentido pésame y un abrazo solidario, deseando una pronta resignación.</div> 
    </div> 
	<div class="esquela-txt">
		<div class="output4">DESCANSE EN PAZ</div> 
    </div> 		
	<div class="esquela-fecha">
		<div class="output5">Oaxaca de Juárez, Oax., a <?php echo $dia.' de '.$mes.' de '.$anio; ?></div> 
    </div>  		
 
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
                "download", "Esquela-<?php echo $dia.$mes; ?>.jpg").attr( 
                "href", newData); 
            }); 
        }); 
    </script> 		

	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_single_image post-gallery wpb_content_element vc_align_center">
<div class="title-section"><h2>Editar esquela</h2></div>
		<form>
        	<textarea id="myTextarea" rows="5" cols="60" placeholder="se une a la pena que embarga a la familia Pérez López, por el sensible fallecimiento de la señora"></textarea>		
        	<textarea id="myTextarea2" rows="1" cols="60" placeholder="María del Socorro López Castellanos"></textarea>			
        	<textarea id="myTextarea3" rows="5" cols="60" placeholder="Nuestro más sentido pésame y un abrazo solidario, deseando una pronta resignación."></textarea>	
        	<textarea id="myTextarea4" rows="1" cols="60" placeholder="DESCANSE EN PAZ"></textarea>	
        	<textarea id="myTextarea5" rows="1" cols="60" placeholder="Oaxaca de Juárez, Oax., a <?php echo $dia.' de '.$mes.' de '.$anio; ?>"></textarea>				
    	</form>

	</div>
</div></div></div></div>
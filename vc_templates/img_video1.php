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
$custom  = hotmagazine_custom();?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
$(document).ready(function(){
    $("#urlIMG").keyup(function(){
        // Getting the current value of textarea
        var currentText3 = $(this).val();
        
        // Setting the Div content
		$('#imgdefondo').css({
        'background-image': attr('url', currentText3),
        
    });
	
		
    });
});
</script>
<script>
$(document).ready(function(){
    $("#urlIMG2").keyup(function(){
        // Getting the current value of textarea
        var currentText2 = $(this).val();
        
        // Setting the Div content
		$('#frenteimg').find('img').attr('src', currentText2)
    });
});
</script>

<script>
$(document).ready(function(){
    $("#myTextarea1").keyup(function(){
        // Getting the current value of textarea
        var Text1 = $(this).val();
        
        // Setting the Div content
        $(".output1").text(Text1);
    });
});
</script>
<script>
$(document).ready(function(){
    $("#myTextarea2").keyup(function(){
        // Getting the current value of textarea
        var Text2 = $(this).val();
        
        // Setting the Div content
        $(".output2").text(Text2);
    });
});
</script>
<script>
$(document).ready(function(){
    $("#myTextarea3").keyup(function(){
        // Getting the current value of textarea
        var Text3 = $(this).val();
        
        // Setting the Div content
        $(".output3").text(Text3);
    });
});
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

	
#imgdefondo{
    width: 1000px;
    height: 563px;    
    background-image:url(https://oaxacaentrelineas.com/storage/2013/01/Oaxaca-1.jpg);
    background-size:cover;
	filter: blur(5px);

}	
.frenteimg{
	background-image: url(https://imparcialoaxaca.mx/wp-content/uploads/2020/10/image-removebg-preview.png);
    background-position: right bottom;
    background-size: cover;
    width: 900px;
    height: 563px;
    position: absolute;
    border: 2px solid yellow;
    top: 406px;
    left: 116px;
}
.logo{
position: absolute;
    border: 5px solid blue;
    top: 445px;
}

.marcoimg{
	width: 1000px;
    height: 563px;
    border: 1px solid #999999;		
}

.cuadro{
    border: 1px solid green;
    width: 1000px;
    height: 563px;
    position: absolute;
    top: 405px;
    padding-left: 20px;
}

.texto1{
    font-size: 57px;
    left: 50px;
    text-shadow: 2px 2px 12px #000000;	
    top: 503px;
    line-height: 1.3;
    font-weight: bold;
    text-align: left;
    color: #ffffff;
	font-family: 'Montserrat', sans-serif;
    text-transform: uppercase;
}
.texto2{
	font-size: 57px;
    left: 33px;
    padding-left: 20px;
    top: 569px;
    line-height: 1.3;
    font-weight: 900;
    font-weight: 900;
    text-align: left;
    color: #ffd322;
    background: #0077bd;
    font-family: 'Montserrat', sans-serif;
    text-transform: uppercase;
}	
.texto3{
	font-size: 52px;
    text-shadow: 2px 2px 12px #000000;
    left: 51px;
    top: 639px;
    line-height: 1.1;
    font-weight: 500;
    text-align: left;
    color: #ffffff;
    font-family: 'Montserrat', sans-serif;
    text-transform: uppercase;
    border: 1px solid pink;
    width: 440px;
}		
.textos{
    width: 700px;
    border: 3px dotted cyan;
    top: 84px;
    position: absolute;		
}
</style>

    <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"> 
    </script> 
      
    <script src= 
"https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"> 
    </script> 


<div class="title-section"><h2>Editar IMAGEN PARA VIDEO DE FACEBOOK</h2></div>
		<form>
        	<textarea id="urlIMG" rows="1" cols="60" placeholder="Pega aquí la URL de la imagen de fondo"></textarea>		
        	<textarea id="urlIMG2" rows="1" cols="60" placeholder="Pega aquí la URL de la imagen que va al frente"></textarea>			
        	<textarea id="myTextarea1" rows="1" cols="30" placeholder="Máximo XX caracteres"></textarea>	
        	<textarea id="myTextarea2" rows="1" cols="30" placeholder="Máximo XX caracteres"></textarea>	
        	<textarea id="myTextarea3" rows="1" cols="30" placeholder="Máximo XX caracteres"></textarea>				
		</form>

		
<div class="marcoimg" id="html-content-holder">
	
	<div id="imgdefondo">
	
	</div>
	<div class="cuadro">
		<div class="textos">
			<div class="texto1">
				<div class="output1">La consulta </div>
			</div> 	
			<div class="texto2">
				<div class="output2">popular</div>
			</div> 		
			<div class="texto3">
				<div class="output3">con fines electorales</div>
			</div> 			
		</div>
		<img class="logo" src="https://imparcialoaxaca.mx/wp-content/uploads/2020/10/logo-estilo-blanco-Sombra.png" width="280px">
	</div>
	<div class="frenteimg">
			
	</div>		


</div>		

<br/><br/> 

    <input id="btn-Preview-Image" type="button"
                value="CREAR IMAGEN" />  
          
    <a id="btn-Convert-Html2Image" href="#"> 
        DESCARGAR 
    </a> 
  
    <br/><br/> 
      
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


</div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_single_image post-gallery wpb_content_element vc_align_center">


	</div>
</div></div></div>
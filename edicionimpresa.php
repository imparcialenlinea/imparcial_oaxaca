<?php

// Creating the widget 
class edicion_impresa_widget extends WP_Widget {

function __construct() {

parent::__construct(
// Base ID of your widget
'edicion_impresa_widget', 

// Widget name will appear in UI
esc_html__('QK Edición Impresa', 'hotmagazine'), 

// Widget description
array( 'description' => esc_html__( 'PDF Edición Impreso', 'hotmagazine' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
//echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];

// This is where you run the code and display the output
$pdf1 = array(
	'post_type' => 'post',
	'posts_per_page' =>1,
	'post_type'=>'impreso',
        'tax_query' => array(
            array(
                'taxonomy' => 'impresotype',
                'field' => 'slug',
                'terms' => 'imparcialistmo',
            ),
        ),  
);
$pdf2 = array(
	'post_type' => 'post',
	'posts_per_page' =>1,
	'post_type'=>'impreso',
        'tax_query' => array(
            array(
                'taxonomy' => 'impresotype',
                'field' => 'slug',
                'terms' => 'imparcialoaxaca',
            ),
        ),  
);
$pdf3 = array(
	'post_type' => 'post',
	'posts_per_page' =>1,
	'post_type'=>'impreso',
        'tax_query' => array(
            array(
                'taxonomy' => 'impresotype',
                'field' => 'slug',
                'terms' => 'clasificados',
            ),
        ),  
);

$pdfizq = new WP_Query($pdf1);
$pdfcen = new WP_Query($pdf2);
$pdfder = new WP_Query($pdf3);

//Datos de la izquierda
$pdfizq->the_post();
$id=get_the_ID();
$imgizq =get_the_post_thumbnail_url();
$urlizq=rwmb_meta('pdfcompaginado');


//Datos centro


//Datos de la derecha


//Datos del suplemento


?>
		<!-- Impreso--> 
				<div class="impreso-envoltura" style="margin-bottom:30px">

					<div class="impreso">
							<a target="blank" href="<?php echo ($urlizq); ?>">
							<img class="impreso-izquierda" src="<?php echo ($imgizq); ?>" /></a>
						
							<a target="blank" href="<?php echo ($urlcen); ?>">
							<img class="impreso-centro" src="<?php echo ($imgcen); ?>" /></a>

							<a target="blank" href="<?php echo ($urlder); ?>">
							<img class="impreso-derecha" src="<?php echo ($imgder); ?>" /></a>                                                                                    
					</div>

				</div>


<?php

echo $args['after_widget'];
}
		
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widgetEdicionImpresa() {
	register_widget( 'edicion_impresa_widget' );
}
add_action( 'widgets_init', 'wpb_load_widgetEdicionImpresa' );
?>
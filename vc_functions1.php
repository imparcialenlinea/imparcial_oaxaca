<?php 

if(function_exists('vc_map')){

vc_map( array(
   "name" => esc_html__("QK Image","hotmagazine"),
   "base" => "qk_image",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_construct" => true,
   "params" => array(
   
      
     array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Image","hotmagazine"),
         "param_name" => "image",
         "value" => "",
         "description" => 'Your image'
      ), array(
		   "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Caption","hotmagazine"),
         "param_name" => "caption",
         "value" => "",
         "description" => 'Your image caption'
      )
   )
) );

}
class WPBakeryShortCode_qk_image extends WPBakeryShortCode {
}

//Blog Standard

if(function_exists('vc_map')){
$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {
if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}



}

vc_map( array(
   "name" => esc_html__("QK Posts Carousel","hotmagazine"),
   "base" => "qk_posts_carousel",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/big-grid-5.png",
   "params" => array(
      
      array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),
		      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Order","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "6"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number posts each slide","hotmagazine"),
         "param_name" => "order2",
         "value" => "",
         "description" => 'Example "4"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Class","hotmagazine"),
         "param_name" => "class",
         "value" => "",
         "description" => ''
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "thumbnail, medium, large" or leave empty'
      ),array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Filter Style","hotmagazine"),
          "param_name" => "filter",
          "value" => array(
              
              'Vertical'=>'vertical',
              'Horizontal'=>'horizontal',
          ),
          "description" => ''
        ),
   )
) );

}
class WPBakeryShortCode_qk_posts_carousel extends WPBakeryShortCode {
}


if(function_exists('vc_map')){
$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {


if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}


}

///Prueba nuevo carrusel

vc_map( array(
   "name" => esc_html__("QK Posts Carousel Cartones","hotmagazine"),
   "base" => "qk_posts_carousel_cartones",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/big-grid-5.png",
   "params" => array(
      
      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Order","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "6"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number posts each slide","hotmagazine"),
         "param_name" => "order2",
         "value" => "",
         "description" => 'Example "4"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Class","hotmagazine"),
         "param_name" => "class",
         "value" => "",
         "description" => ''
      ),
	  array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Filter Style","hotmagazine"),
          "param_name" => "filter",
          "value" => array(
              
              'Vertical'=>'vertical',
              'Horizontal'=>'horizontal',
          ),
          "description" => ''
        ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Slug de cartonistas","hotmagazine"),
         "param_name" => "slugcarto",
         "value" => "",
         "description" => 'Cartonistas, separados por coma'
      ),
	  
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "thumbnail, medium, large" or leave empty'
      )
   )
) );

}
class WPBakeryShortCode_qk_posts_carousel_cartones extends WPBakeryShortCode {
}

//Termina prueba carrusel cartones


if(function_exists('vc_map')){
$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {


if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}


}

vc_map( array(
   "name" => esc_html__("QK Posts Carousel 2","hotmagazine"),
   "base" => "qk_posts_carousel2",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/big-grid-5.png",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),
      array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Or Insert your category IDs Here:","hotmagazine"),
         "param_name" => "cat_ids",
         "value" => "",
         "description" => 'Filter multiple categories by ID. Enter here the category IDs separated by commas (ex: 13,23,18).'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Order","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "6"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Class","hotmagazine"),
         "param_name" => "class",
         "value" => "",
         "description" => ''
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Items each Slide","hotmagazine"),
         "param_name" => "item",
         "value" => "",
         "description" => 'Insert number posts you want to display each slide'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "thumbnail, medium, large" or leave empty'
      )
   )
) );

}
class WPBakeryShortCode_qk_posts_carousel2 extends WPBakeryShortCode {
}



//QK CAROUSEL DE TAGS

if(function_exists('vc_map')){
$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {


if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}


}

vc_map( array(
   "name" => esc_html__("QK Posts Carousel CATEGORY + TAGS","hotmagazine"),
   "base" => "qk_posts_carousel_category_tag",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/big-grid-5.png",
   "params" => array(   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),
      array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Or Insert your category IDs Here:","hotmagazine"),
         "param_name" => "cat_ids",
         "value" => "",
         "description" => 'Filter multiple categories by ID. Enter here the category IDs separated by commas (ex: 13,23,18).'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Tags a incluir","hotmagazine"),
         "param_name" => "the_tags",
         "value" => "",
         "description" => 'Tags (slug), separados por coma, ejemplo: "viral, nota-roja, mundial-rusia-2018"'
      ),	  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Order","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "6"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Class","hotmagazine"),
         "param_name" => "class",
         "value" => "",
         "description" => ''
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Items each Slide","hotmagazine"),
         "param_name" => "item",
         "value" => "",
         "description" => 'Insert number posts you want to display each slide'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "thumbnail, medium, large" or leave empty'
      )
   )
) );

}
class WPBakeryShortCode_qk_posts_carousel_category_tag extends WPBakeryShortCode {
}



//FIN QK CAROUSEL DE TAGS


// CARRUSEL ESTILO

if(function_exists('vc_map')){
$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {


if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}


}

vc_map( array(
   "name" => esc_html__("QK Posts Carousel Estilo","hotmagazine"),
   "base" => "qk_posts_carousel_estilo",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/big-grid-5.png",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),
      array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Or Insert your category IDs Here:","hotmagazine"),
         "param_name" => "cat_ids",
         "value" => "",
         "description" => 'Filter multiple categories by ID. Enter here the category IDs separated by commas (ex: 13,23,18).'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Order","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "6"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Class","hotmagazine"),
         "param_name" => "class",
         "value" => "",
         "description" => ''
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Items each Slide","hotmagazine"),
         "param_name" => "item",
         "value" => "",
         "description" => 'Insert number posts you want to display each slide'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "thumbnail, medium, large" or leave empty'
      )
   )
) );

}
class WPBakeryShortCode_qk_posts_carousel_estilo extends WPBakeryShortCode {
}

//CARRUSEL ESTILO


// LISTADOINTERNO

if(function_exists('vc_map')){
$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {


if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}


}

vc_map( array(
   "name" => esc_html__("Listado Interno","hotmagazine"),
   "base" => "qk_listado",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/big-grid-5.png",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),
      array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Or Insert your category IDs Here:","hotmagazine"),
         "param_name" => "cat_ids",
         "value" => "",
         "description" => 'Filter multiple categories by ID. Enter here the category IDs separated by commas (ex: 13,23,18).'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Order","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "6"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Class","hotmagazine"),
         "param_name" => "class",
         "value" => "",
         "description" => ''
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Items each Slide","hotmagazine"),
         "param_name" => "item",
         "value" => "",
         "description" => 'Insert number posts you want to display each slide'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "thumbnail, medium, large" or leave empty'
      )
   )
) );

}
class WPBakeryShortCode_qk_listado extends WPBakeryShortCode {
}

//LISTADOINTERNO



// LISTADOINTERNO NOTAS POR USUARIOS

if(function_exists('vc_map')){
$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {


if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}


}

vc_map( array(
   "name" => esc_html__("LISTADO INTERNO usuarios y notas ","hotmagazine"),
   "base" => "qk_listado_users",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/big-grid-5.png",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),
      array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Or Insert your category IDs Here:","hotmagazine"),
         "param_name" => "cat_ids",
         "value" => "",
         "description" => 'Filter multiple categories by ID. Enter here the category IDs separated by commas (ex: 13,23,18).'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Order","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "6"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Class","hotmagazine"),
         "param_name" => "class",
         "value" => "",
         "description" => ''
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Items each Slide","hotmagazine"),
         "param_name" => "item",
         "value" => "",
         "description" => 'Insert number posts you want to display each slide'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "thumbnail, medium, large" or leave empty'
      )
   )
) );

}
class WPBakeryShortCode_qk_listado_users extends WPBakeryShortCode {
}

// LISTADOINTERNO NOTAS POR USUARIOS





// LISTADOINTERNOESTILO

if(function_exists('vc_map')){
$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {


if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}


}

vc_map( array(
   "name" => esc_html__("Listado Interno Estilo","hotmagazine"),
   "base" => "qk_listado_estilo",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/big-grid-5.png",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),
      array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Or Insert your category IDs Here:","hotmagazine"),
         "param_name" => "cat_ids",
         "value" => "",
         "description" => 'Filter multiple categories by ID. Enter here the category IDs separated by commas (ex: 13,23,18).'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Order","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "6"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Class","hotmagazine"),
         "param_name" => "class",
         "value" => "",
         "description" => ''
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Items each Slide","hotmagazine"),
         "param_name" => "item",
         "value" => "",
         "description" => 'Insert number posts you want to display each slide'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "thumbnail, medium, large" or leave empty'
      )
   )
) );

}
class WPBakeryShortCode_qk_listado_estilo extends WPBakeryShortCode {
}

//LISTADOINTERNOESTILO


// LISTADOGENERAL

if(function_exists('vc_map')){
$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {


if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}


}

vc_map( array(
   "name" => esc_html__("Listado General (Reporte)","hotmagazine"),
   "base" => "qk_listado_general",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/big-grid-5.png",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),
      array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Or Insert your category IDs Here:","hotmagazine"),
         "param_name" => "cat_ids",
         "value" => "",
         "description" => 'Filter multiple categories by ID. Enter here the category IDs separated by commas (ex: 13,23,18).'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Order","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "6"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Class","hotmagazine"),
         "param_name" => "class",
         "value" => "",
         "description" => ''
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Items each Slide","hotmagazine"),
         "param_name" => "item",
         "value" => "",
         "description" => 'Insert number posts you want to display each slide'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "thumbnail, medium, large" or leave empty'
      )
   )
) );

}
class WPBakeryShortCode_qk_listado_general extends WPBakeryShortCode {
}

//LISTADOGENERAL



// INICIO BANNERS

if(function_exists('vc_map')){
$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {


if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}


}

vc_map( array(
   "name" => esc_html__("Banner publicitario","hotmagazine"),
   "base" => "banner",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/dfp.png",
   "params" => array(
		array(
			  "type" => "textarea_raw_html",
			  "class" => "",
			  "heading" => __( "Código para desktop", "my-text-domain" ),
			  "param_name" => "code_desktop",
			  "value" => '', 
			  "description" => __( "Código de banner para desktop.", "my-text-domain" )
			), 
		array(
			  "type" => "textarea_raw_html",
			  "class" => "",
			  "heading" => __( "Código para móvil", "my-text-domain" ),
			  "param_name" => "code_mobile",
			  "value" => '', 
			  "description" => __( "Código de banner para móvil (dejar vacío si es el mismo que desktop).", "my-text-domain" )
			) 			  
      
   )
) );

}
class WPBakeryShortCode_banner extends WPBakeryShortCode {
}

//FIN BANNERS

// INICIO FOTORRPORTAJES

if(function_exists('vc_map')){
$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {


if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}


}

vc_map( array(
   "name" => esc_html__("Carrusel de Fotorreportajes","hotmagazine"),
   "base" => "fotorreportajes_carrusel",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/gallery.png",
   "params" => array(
      array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Or Insert your category IDs Here:","hotmagazine"),
         "param_name" => "cat_ids",
         "value" => "",
         "description" => 'Filter multiple categories by ID. Enter here the category IDs separated by commas (ex: 13,23,18).'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Order","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "6"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "thumbnail, medium, large" or leave empty'
      )
   )
) );

}
class WPBakeryShortCode_fotorreportajes_carrusel extends WPBakeryShortCode {
}

//FIN FOTORREPORTAJES











// UNPDF_INICIA

if(function_exists('vc_map')){
$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {


if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}


}

vc_map( array(
   "name" => esc_html__("Suplemento (PDF )","hotmagazine"),
   "base" => "qk_PDF_suplemento",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/big-grid-5.png",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("ID de PDF","hotmagazine"),
         "param_name" => "id",
         "value" => "",
         "description" => 'Id de PDF'
      )
   )
) );

}
class WPBakeryShortCode_qk_PDF_suplemento extends WPBakeryShortCode {
}

//UNPDF_Finaliza





if(function_exists('vc_map')){
$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {


if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

//inicia carrusel de especiales

vc_map( array(
   "name" => esc_html__("QK Carousel especiales","hotmagazine"),
   "base" => "qk_carrusel_especiales",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/big-grid-5.png",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),
      array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Or Insert your category IDs Here:","hotmagazine"),
         "param_name" => "cat_ids",
         "value" => "",
         "description" => 'Filter multiple categories by ID. Enter here the category IDs separated by commas (ex: 13,23,18).'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Order","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "6"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Class","hotmagazine"),
         "param_name" => "class",
         "value" => "",
         "description" => ''
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Items each Slide","hotmagazine"),
         "param_name" => "item",
         "value" => "",
         "description" => 'Insert number posts you want to display each slide'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "thumbnail, medium, large" or leave empty'
      )
   )
) );

}
class WPBakeryShortCode_qk_carrusel_especiales extends WPBakeryShortCode {
}


if(function_exists('vc_map')){
$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {


if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}


// termina carrusel de especiales


//Inicia carrusel de tags y categoria
vc_map( array(
   "name" => esc_html__("QK Carousel Categoria y tags de ubicacion","hotmagazine"),
   "base" => "qk_categoria_ubic",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/big-grid-5.png",
   "params" => array(
      
      array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),
		      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Order","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "6"'
      ),
	  array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Elegir región","hotmagazine"),
        "param_name" => "reg",
        "value" =>array(
    'Cañada' => __('caniada'),
    'Costa' => __('costa'),
    'Cuenca' => __('cuenca'),
    'Istmo' => __('istmo'),
    'Mixteca' => __('mixteca'),	
    'Sierra Norte' => __('sierranorte'),
    'Sierra Sur' => __('sierrasur'),
    'Valles Centrales' => __('vallescentrales'),

),
        "description" => ''
      ),
array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Items each Slide","hotmagazine"),
         "param_name" => "order2",
         "value" => "",
         "description" => 'Insert number posts you want to display each slide'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "thumbnail, medium, large" or leave empty'
      ),array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Filter Style","hotmagazine"),
          "param_name" => "filter",
          "value" => array(
              
              'Vertical'=>'vertical',
              'Horizontal'=>'horizontal',
          ),
          "description" => ''
        ),
   )
) );

}
class WPBakeryShortCode_qk_categoria_ubic extends WPBakeryShortCode {
}


if(function_exists('vc_map')){
$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {


if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}


}

// Termina carrusel categoria y tags





//Inicia carrusel de especiales 2
vc_map( array(
   "name" => esc_html__("QK Carousel especiales 2","hotmagazine"),
   "base" => "qk_carrusel_especiales2",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/big-grid-5.png",
   "params" => array(
      
      array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),
		      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Order","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "6"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number posts each slide","hotmagazine"),
         "param_name" => "order2",
         "value" => "",
         "description" => 'Example "4"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Class","hotmagazine"),
         "param_name" => "class",
         "value" => "",
         "description" => ''
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "thumbnail, medium, large" or leave empty'
      ),array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Filter Style","hotmagazine"),
          "param_name" => "filter",
          "value" => array(
              
              'Vertical'=>'vertical',
              'Horizontal'=>'horizontal',
          ),
          "description" => ''
        ),
   )
) );

}
class WPBakeryShortCode_qk_carrusel_especiales2 extends WPBakeryShortCode {
}


if(function_exists('vc_map')){
$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {


if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}


}

// Termina carrusel de especiales 2

vc_map( array(
   "name" => esc_html__("QK Featurred Carousel","hotmagazine"),
   "base" => "qk_featured_carousel",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/big-grid-5.png",
   "params" => array(
      
      array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),
      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Order","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "6"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "thumbnail, medium, large" or leave empty'
      )
   )
) );

}
class WPBakeryShortCode_qk_featured_carousel extends WPBakeryShortCode {
}



if(function_exists('vc_map')){
$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {


if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("QK Top Carousel","hotmagazine"),
   "base" => "qk_top_posts",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "params" => array(
      
      array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Tags a incluir","hotmagazine"),
         "param_name" => "the_tags",
         "value" => "",
         "description" => 'Tags (slug), separados por coma, ejemplo: "viral, nota-roja, mundial-rusia-2018"'
      ),		   		 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Order","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "6"'
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail","hotmagazine"),
         "param_name" => "thumb",
         "value" => "",
         "description" => '"enable" or "disable"'
      ),
	 array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Quitar tag de categoría?","hotmagazine"),
         "param_name" => "qcategoria",
         "value" => "",
         "description" => '"yes" or "no"'
      ),	  
	 array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Quitar autor?","hotmagazine"),
         "param_name" => "qautor",
         "value" => "",
         "description" => '"yes" or "no"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Quitar fecha?","hotmagazine"),
         "param_name" => "qfecha",
         "value" => "",
         "description" => '"yes" or "no"'
      ),	  
   )
) );

}
class WPBakeryShortCode_qk_top_posts extends WPBakeryShortCode {
}



//QK TOP CAROUSEL VARIAS CATEGORIAS
if(function_exists('vc_map')){
$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {


if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("QK Top Carousel VARIAS CATEGORIAS","hotmagazine"),
   "base" => "qk_top_posts_varias_categories",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "params" => array(
      
      array(
          "type" => "textfield",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => '',
          "description" => 'Separar con comas'
        ),
      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Order","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "6"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail","hotmagazine"),
         "param_name" => "thumb",
         "value" => "",
         "description" => '"enable" or "disable"'
      )
   )
) );

}
class WPBakeryShortCode_qk_top_posts_varias_categories extends WPBakeryShortCode {
}

//FIN QK TOP CAROUSEL VARIAS CATEGORIAS
vc_map( array(
    "name" => esc_html__("QK Posts Slider", "hotmagazine"),
    "base" => "qk_posts_slider",
    "as_parent" => array('only' => 'qk_post2, qk_post3'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    "content_unique" => true,
    "icon" => get_template_directory_uri() . "/images/icon/slider.png",
    "show_settings_on_create" => false,
    "params" => array(
        // add params same as with any other content unique
        array(
            "type" => "textfield",
            "heading" => esc_html__("Block custom class", "hotmagazine"),
            "param_name" => "class",
            "description" => '',
        )
    ),
    "js_view" => 'VcColumnView'
) );

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_qk_posts_slider extends WPBakeryShortCodesContainer {
    }
}




if(function_exists('vc_map')){
$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {


if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("QK Featurred Slider","hotmagazine"),
   "base" => "qk_featured_slider",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/slider.png",
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),
      array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),
      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Order","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "6"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "thumbnail, medium, large" or leave empty'
      )
   )
) );

}
class WPBakeryShortCode_qk_featured_slider extends WPBakeryShortCode {
}

vc_map( array(
   "name" => esc_html__("QK Slider caption","hotmagazine"),
   "base" => "qk_slider_caption",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/grid-slide.png",
   "params" => array(
      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("IDs","hotmagazine"),
         "param_name" => "ids",
         "value" => "",
         "description" => 'Insert posts ids. Separate ids with commas (e.g. "3,17,8").'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Multiple categories filter:","hotmagazine"),
         "param_name" => "cat_ids",
         "value" => "",
         "description" => 'Filter multiple categories by ID. Enter here the category IDs separated by commas (ex: 13,23,18).'
      )
   )
) );


class WPBakeryShortCode_qk_slider_caption extends WPBakeryShortCode {
}
if(function_exists('vc_map')){
$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {


if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}
vc_map( array(
   "name" => esc_html__("QK Slider caption 2","hotmagazine"),
   "base" => "qk_slider_caption2",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/grid-slide.png",
   "params" => array(
      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("IDs","hotmagazine"),
         "param_name" => "ids",
         "value" => "",
         "description" => 'Insert posts ids. Separate ids with commas (e.g. "3,17,8").'
      ),array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Or Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Order","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "4"'
      )
   )
) );
}

class WPBakeryShortCode_qk_slider_caption2 extends WPBakeryShortCode {
}

//QK Heading News
vc_map( array(
    "name" => esc_html__("QK Heading News", "hotmagazine"),
    "base" => "qk_heading_news",
    "as_parent" => array('only' => 'qk_post,qk_post_nueva, qk_top_stories_nueva, qk_top_stories, qk_top_stories_tag, qk_top_stories_testigos, qk_pportada, qk_top_stories_seccion, qk_top_stories_seccion_noresalte, qk_post_seccion,qk_post_tag, qk_post_testigos, qk_post_seccion_sin'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    "content_unique" => true,
    "show_settings_on_create" => false,
    "icon" => get_template_directory_uri() . "/images/icon/big-grid-3.png",
    "params" => array(
       
        array(
            "type" => "textfield",
            "heading" => esc_html__("Class", "hotmagazine"),
            "param_name" => "class",
            "description" => 'example "bnr-slide-2"',
        )
    ),
    "js_view" => 'VcColumnView'
) );

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_qk_heading_news extends WPBakeryShortCodesContainer {
    }
}


if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['Select Category'] = 'all';
foreach ($categories as $category) {
if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}
}

vc_map( array(
   "name" => esc_html__("QK Post","hotmagazine"),
   "base" => "qk_post",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   "params" => array(
   
      
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Insert Post ID","hotmagazine"),
         "param_name" => "id",
         "value" => "",
         "description" => 'Insert Your Post ID Here'
      ), array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Or get latest post from Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
	),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("O es secundaria de sección","hotmagazine"),
         "param_name" => "principal",
         "value" => "",
         "description" => 'Elija el número de lugar: 1, 2 o 3'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Class","hotmagazine"),
         "param_name" => "class",
         "value" => "",
         "description" => 'Insert Your Custom Class example "snd-size"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Image Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "default,thumbnail, medium, large" or leave empty. Recommend size is "default"'
      )
   )
) );

}
class WPBakeryShortCode_qk_post extends WPBakeryShortCode {
}

//QK POST NUEVA

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['Select Category'] = 'all';
foreach ($categories as $category) {
if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}
}

vc_map( array(
   "name" => esc_html__("QK Post NUEVA","hotmagazine"),
   "base" => "qk_post_nueva",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   "params" => array(
   
      
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Insert Post ID","hotmagazine"),
         "param_name" => "id",
         "value" => "",
         "description" => 'Insert Your Post ID Here'
      ), array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Or get latest post from Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
	),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("O es secundaria de sección","hotmagazine"),
         "param_name" => "principal",
         "value" => "",
         "description" => 'Elija el número de lugar: 1, 2 o 3'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Class","hotmagazine"),
         "param_name" => "class",
         "value" => "",
         "description" => 'Insert Your Custom Class example "snd-size"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Image Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "default,thumbnail, medium, large" or leave empty. Recommend size is "default"'
      )
   )
) );

}
class WPBakeryShortCode_qk_post_nueva extends WPBakeryShortCode {
}

//FIN QK POST NUEVA


//QK POST SECCION

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['Select Category'] = 'all';
foreach ($categories as $category) {
if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}
}

vc_map( array(
   "name" => esc_html__("QK Post SECCIÓN","hotmagazine"),
   "base" => "qk_post_seccion",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   "params" => array(
   
      
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Insert Post ID","hotmagazine"),
         "param_name" => "id",
         "value" => "",
         "description" => 'Insert Your Post ID Here'
      ), array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Or get latest post from Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
	),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("O es secundaria de sección","hotmagazine"),
         "param_name" => "principal",
         "value" => "",
         "description" => 'Elija el número de lugar: 1, 2 o 3'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Class","hotmagazine"),
         "param_name" => "class",
         "value" => "",
         "description" => 'Insert Your Custom Class example "snd-size"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Image Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "default,thumbnail, medium, large" or leave empty. Recommend size is "default"'
      )
   )
) );

}
class WPBakeryShortCode_qk_post_seccion extends WPBakeryShortCode {
}

//FIN QK POST SECCION


//QK POST TAG

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['Select Category'] = 'all';
foreach ($categories as $category) {
if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}
}

vc_map( array(
   "name" => esc_html__("QK Post TAG","hotmagazine"),
   "base" => "qk_post_tag",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   "params" => array(
   
      
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Insert Post ID","hotmagazine"),
         "param_name" => "id",
         "value" => "",
         "description" => 'Insert Your Post ID Here'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("TAGS","hotmagazine"),
         "param_name" => "tags",
         "value" => "",
         "description" => 'Separados por coma'
      ), array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Or get latest post from Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
	),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("O es secundaria de sección","hotmagazine"),
         "param_name" => "principal",
         "value" => "",
         "description" => 'Elija el número de lugar: 1, 2 o 3'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Class","hotmagazine"),
         "param_name" => "class",
         "value" => "",
         "description" => 'Insert Your Custom Class example "snd-size"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Image Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "default,thumbnail, medium, large" or leave empty. Recommend size is "default"'
      )
   )
) );

}
class WPBakeryShortCode_qk_post_tag extends WPBakeryShortCode {
}

//FIN QK POST TAG



//QK POST TESTIGOS

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['Select Category'] = 'all';
foreach ($categories as $category) {
if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}
}

vc_map( array(
   "name" => esc_html__("QK Post TESTIGOS","hotmagazine"),
   "base" => "qk_post_testigos",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   "params" => array(
   
      
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Fecha","hotmagazine"),
         "param_name" => "fecha",
         "value" => "",
         "description" => 'Fecha a mostrar que sea en 2005-08-05 10:41:13'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Insert Post ID","hotmagazine"),
         "param_name" => "id",
         "value" => "",
         "description" => 'Insert Your Post ID Here'
      ), array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Or get latest post from Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
	),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("O es secundaria de sección","hotmagazine"),
         "param_name" => "principal",
         "value" => "",
         "description" => 'Elija el número de lugar: 1, 2 o 3'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Class","hotmagazine"),
         "param_name" => "class",
         "value" => "",
         "description" => 'Insert Your Custom Class example "snd-size"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Image Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "default,thumbnail, medium, large" or leave empty. Recommend size is "default"'
      )
   )
) );

}
class WPBakeryShortCode_qk_post_testigos extends WPBakeryShortCode {
}

//FIN QK POST TESTIGOS




//QK POST SECCION SIN SRESALTE

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['Select Category'] = 'all';
foreach ($categories as $category) {
if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}
}

vc_map( array(
   "name" => esc_html__("QK Post SECCIÓN (Sin resalte)","hotmagazine"),
   "base" => "qk_post_seccion_sin",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   "params" => array(
   
      
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Insert Post ID","hotmagazine"),
         "param_name" => "id",
         "value" => "",
         "description" => 'Insert Your Post ID Here'
      ), array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Or get latest post from Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
	),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("O es secundaria de sección","hotmagazine"),
         "param_name" => "principal",
         "value" => "",
         "description" => 'Elija el número de lugar: 1, 2 o 3'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Class","hotmagazine"),
         "param_name" => "class",
         "value" => "",
         "description" => 'Insert Your Custom Class example "snd-size"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Image Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "default,thumbnail, medium, large" or leave empty. Recommend size is "default"'
      )
   )
) );

}
class WPBakeryShortCode_qk_post_seccion_sin extends WPBakeryShortCode {
}

//FIN QK POST SECCION SIN RESALTE


if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['Select Category'] = 'all';
foreach ($categories as $category) {
if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}
}

vc_map( array(
   "name" => esc_html__("QK Post 2","hotmagazine"),
   "base" => "qk_post2",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   "params" => array(
   
      
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Insert Post ID","hotmagazine"),
         "param_name" => "id",
         "value" => "",
         "description" => 'Insert Your Post ID Here'
      ), array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Or get latest post from Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Offset","hotmagazine"),
        "param_name" => "offset",
        "value" => "",
        "description" => 'Offset del post'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Wrap Tag","hotmagazine"),
         "param_name" => "wrap",
         "value" => "",
         "description" => 'Example "div" or "li" or you can leave empty'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "thumbnail, medium, large" or leave empty'
      )
	  ,array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Excluir","hotmagazine"),
         "param_name" => "excluircat",
         "value" => "",
         "description" => 'Id de Categoría que se desea ignorar'
      )
   )
) );

}
class WPBakeryShortCode_qk_post2 extends WPBakeryShortCode {
}

//QK POST 2 CON TAG

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['Select Category'] = 'all';
foreach ($categories as $category) {
if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}
}

vc_map( array(
   "name" => esc_html__("QK Post 2 CON TAGS","hotmagazine"),
   "base" => "qk_post2_tag",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   "params" => array(
   
      
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Insert Post ID","hotmagazine"),
         "param_name" => "id",
         "value" => "",
         "description" => 'Insert Your Post ID Here'
      ), array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Or get latest post from Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),array(
        "type" => "textfield",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Offset","hotmagazine"),
        "param_name" => "offset",
        "value" => "",
        "description" => 'Offset del post'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Tags a incluir","hotmagazine"),
         "param_name" => "the_tags",
         "value" => "",
         "description" => 'Tag, el (slug). si es más de uno separar con un "+"'
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Wrap Tag","hotmagazine"),
         "param_name" => "wrap",
         "value" => "",
         "description" => 'Example "div" or "li" or you can leave empty'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "thumbnail, medium, large" or leave empty'
      )
	  ,array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Excluir","hotmagazine"),
         "param_name" => "excluircat",
         "value" => "",
         "description" => 'Id de Categoría que se desea ignorar'
      )
   )
) );

}
class WPBakeryShortCode_qk_post2_tag extends WPBakeryShortCode {
}


//FIN QK POST 2 CON TAG



//QK LISTADO_TE PODRÍA INTERESAR

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['Select Category'] = 'all';
foreach ($categories as $category) {
if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}
}

vc_map( array(
   "name" => esc_html__("QK Te podría interesar","hotmagazine"),
   "base" => "qk_te_podria",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   "params" => array(

     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Select Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Excluir categoría","hotmagazine"),
         "param_name" => "exclude",
         "value" => "",
         "description" => 'ID de categorías a excluir, separadas con coma'
      ),	  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "4"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Tags a incluir","hotmagazine"),
         "param_name" => "the_tags",
         "value" => "",
         "description" => 'Tags (slug), separados por coma, ejemplo: "viral, nota-roja, mundial-rusia-2018"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Operador","hotmagazine"),
         "param_name" => "operador",
         "value" => "",
         "description" => 'Operador, puede ser "or" o "and", default para "or"'
      ),	  	  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Quitar autor?","hotmagazine"),
         "param_name" => "qautor",
         "value" => "",
         "description" => '"yes" or "no"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Quitar fecha?","hotmagazine"),
         "param_name" => "qfecha",
         "value" => "",
         "description" => '"yes" or "no"'
      )
   )   

) );

}
class WPBakeryShortCode_qk_te_podria extends WPBakeryShortCode {
}


//FIN QK LISTADO_TE PODRÍA INTERESAR




if(function_exists('vc_map')){

vc_map( array(
   "name" => esc_html__("QK Post 3","hotmagazine"),
   "base" => "qk_post3",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   "params" => array(
   
      
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post ID","hotmagazine"),
         "param_name" => "id",
         "value" => "",
         "description" => 'Insert Your Post ID Here'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Wrap Tag","hotmagazine"),
         "param_name" => "wrap",
         "value" => "",
         "description" => 'Example "div" or "li" or you can leave empty'
      )
   )
) );

}
class WPBakeryShortCode_qk_post3 extends WPBakeryShortCode {
}

if(function_exists('vc_map')){

vc_map( array(
   "name" => esc_html__("QK Post 4","hotmagazine"),
   "base" => "qk_post4",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   "params" => array(
   
      
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post ID","hotmagazine"),
         "param_name" => "id",
         "value" => "",
         "description" => 'Insert Your Post ID Here'
      ),      
   )
) );

}
class WPBakeryShortCode_qk_post4 extends WPBakeryShortCode {
}

if(function_exists('vc_map')){

vc_map( array(
   "name" => esc_html__("QK Standard","hotmagazine"),
   "base" => "qk_post_standard",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   "params" => array(
   
      
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post ID","hotmagazine"),
         "param_name" => "id",
         "value" => "",
         "description" => 'Insert Your Post ID Here'
      )
   )
) );

}
class WPBakeryShortCode_qk_post_standard extends WPBakeryShortCode {
}


if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['Select Category'] = 'all';
foreach ($categories as $category) {
if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}
}

vc_map( array(
   "name" => esc_html__("QK Top Stories","hotmagazine"),
   "base" => "qk_top_stories",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   "params" => array(
   
    array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Insert Number posts you want to show '
      ), array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Block Tag","hotmagazine"),
         "param_name" => "tag",
         "value" => "",
         "description" => 'Example "Top Stories"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Image Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "default,thumbnail, medium, large" or leave empty. Recommend size is "large"'
      )
   )
) );

}
class WPBakeryShortCode_qk_top_stories extends WPBakeryShortCode {
}


//TOP STORIES NUEVA
if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['Select Category'] = 'all';
foreach ($categories as $category) {
if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}
}

vc_map( array(
   "name" => esc_html__("QK Top Stories NUEVA","hotmagazine"),
   "base" => "qk_top_stories_nueva",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   "params" => array(
   
    array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Insert Number posts you want to show '
      ), array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Block Tag","hotmagazine"),
         "param_name" => "tag",
         "value" => "",
         "description" => 'Example "Top Stories"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Image Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "default,thumbnail, medium, large" or leave empty. Recommend size is "large"'
      )
   )
) );

}
class WPBakeryShortCode_qk_top_stories_nueva extends WPBakeryShortCode {
}
//FIN TOP SOTRIES NUEVA

//TOP STORIES TESTIGOS

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['Select Category'] = 'all';
foreach ($categories as $category) {
if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}
}

vc_map( array(
   "name" => esc_html__("QK Top Stories TESTIGOS","hotmagazine"),
   "base" => "qk_top_stories_testigos",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   "params" => array(
   
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Fecha","hotmagazine"),
         "param_name" => "fecha",
         "value" => "",
         "description" => 'Fecha a mostrar que sea en 2005-08-05 10:41:13'
      ), array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Insert Number posts you want to show '
      ), array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Block Tag","hotmagazine"),
         "param_name" => "tag",
         "value" => "",
         "description" => 'Example "Top Stories"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Image Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "default,thumbnail, medium, large" or leave empty. Recommend size is "large"'
      )
   )
) );

}
class WPBakeryShortCode_qk_top_stories_testigos extends WPBakeryShortCode {
}


//FIN TOP STORIES TESTIGOS



//TOP STORIES TAG

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['Select Category'] = 'all';
foreach ($categories as $category) {
if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}
}

vc_map( array(
   "name" => esc_html__("QK Top Stories Tag","hotmagazine"),
   "base" => "qk_top_stories_tag",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   "params" => array(
   
    array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Insert Number posts you want to show '
      ),     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Etiquetas o Tags"),
         "param_name" => "tags",
         "value" => "",
         "description" => 'Id de categorías, separadas por coma'
      ), array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Block Tag","hotmagazine"),
         "param_name" => "tag",
         "value" => "",
         "description" => 'Example "Top Stories"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Image Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "default,thumbnail, medium, large" or leave empty. Recommend size is "large"'
      )
   )
) );

}
class WPBakeryShortCode_qk_top_stories_tag extends WPBakeryShortCode {
}


//FIN TOP STORIES TAG

//TOP STORIES SECCION

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['Select Category'] = 'all';
foreach ($categories as $category) {
if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}
}

vc_map( array(
   "name" => esc_html__("QK Top Stories SECCION","hotmagazine"),
   "base" => "qk_top_stories_seccion",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   "params" => array(
   
    array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Insert Number posts you want to show '
      ), array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Block Tag","hotmagazine"),
         "param_name" => "tag",
         "value" => "",
         "description" => 'Example "Top Stories"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Image Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "default,thumbnail, medium, large" or leave empty. Recommend size is "large"'
      )
   )
) );

}
class WPBakeryShortCode_qk_top_stories_seccion extends WPBakeryShortCode {
}


//FIN TOP STORIES SECCION


//TOP STORIES SECCION (Sin resalte)

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['Select Category'] = 'all';
foreach ($categories as $category) {
if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}
}

vc_map( array(
   "name" => esc_html__("QK Top Stories SECCION (Sin resalte)","hotmagazine"),
   "base" => "qk_top_stories_seccion_noresalte",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   "params" => array(
   
    array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Select Category","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Insert Number posts you want to show '
      ), array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Block Tag","hotmagazine"),
         "param_name" => "tag",
         "value" => "",
         "description" => 'Example "Top Stories"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Image Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "default,thumbnail, medium, large" or leave empty. Recommend size is "large"'
      )
   )
) );

}
class WPBakeryShortCode_qk_top_stories_seccion_noresalte extends WPBakeryShortCode {
}


//FIN TOP STORIES SECCION (SIN RESALTE)



//TOPS STORIES ESTILO

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['Select Category'] = 'all';
foreach ($categories as $category) {
if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}
}

vc_map( array(
   "name" => esc_html__("Carrusel Principal de sección","hotmagazine"),
   "base" => "qk_top_estilo",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   "params" => array(
   
    array(
          "type" => "dropdown",
          "holder" => "div",
          "class" => "",
          "heading" => esc_html__("Seleccionar categoría","hotmagazine"),
          "param_name" => "cat",
          "value" => $category_option,
          "description" => ''
        ),
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Número de posts a mostrar","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Insertar número de posts a mostrar'
      ), 
   )
) );

}
class WPBakeryShortCode_qk_top_estilo extends WPBakeryShortCode {
}



///CARRUSEL ESPECIALES TAG


if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['Select Category'] = 'all';
foreach ($categories as $category) {
if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}
}

vc_map( array(
   "name" => esc_html__("Carrusel Principal especiales TAG","hotmagazine"),
   "base" => "qk_top_especiales_tag",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   "params" => array(
   
    array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Nombre del tag","hotmagazine"),
         "param_name" => "tag",
         "value" => "",
         "description" => 'Escriba el nombre del tag, el slug'
      ),
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Número de posts a mostrar","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Insertar número de posts a mostrar'
      ), 
   )
) );

}
class WPBakeryShortCode_qk_top_especiales_tag extends WPBakeryShortCode {
}

//FIN CARRUSEL ESPECIALES TAG



if(function_exists('vc_map')){

vc_map( array(
   "name" => esc_html__("QK Sticker Posts","hotmagazine"),
   "base" => "qk_tickers",
   "class" => "",
   "icon" => get_template_directory_uri() . "/images/icon/news-ticker.png",
   "category" => esc_html__("Content", "hotmagazine"),
   "content_unique" => true,
   "params" => array(
   
      
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Insert Number posts you want to show '
      ), array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Hace cuántas horas","hotmagazine"),
         "param_name" => "timeago",
         "value" => "",
         "description" => 'Escribir: 6 hours ago, por ejemplo '
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Sticker lable","hotmagazine"),
         "param_name" => "tag",
         "value" => "",
         "description" => 'Example "Breaking News"'
      )
   )
) );

}
class WPBakeryShortCode_qk_tickers extends WPBakeryShortCode {
}

vc_map( array(
    "name" => esc_html__("Home Sección principal", "hotmagazine"),
    "base" => "qk_carousel1",
    "as_parent" => array('only' => 'qk_posts1, vc_raw_html, qk_post2'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    "content_unique" => true,
    "icon" => get_template_directory_uri() . "/images/icon/block2.png",
    "show_settings_on_create" => true,
    "params" => array(
        // add params same as with any other content unique
        array(
            "type" => "textfield",
            "heading" => esc_html__("Block Title", "hotmagazine"),
            "param_name" => "title",
            "description" => 'Your block Title',
        )
    ),
    "js_view" => 'VcColumnView'
) );

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_qk_carousel1 extends WPBakeryShortCodesContainer {
    }
}

vc_map( array(
    "name" => esc_html__("QK Carousel Block 2", "hotmagazine"),
    "base" => "qk_carousel2",
    "as_parent" => array('only' => 'qk_posts2,qk_posts1'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    "content_unique" => true,
    "show_settings_on_create" => true,
    "icon" => get_template_directory_uri() . "/images/icon/block11.png",
    "params" => array(
        // add params same as with any other content unique
        array(
            "type" => "textfield",
            "heading" => esc_html__("Block Title", "hotmagazine"),
            "param_name" => "title",
            "description" => 'Your block Title',
        )
    ),
    "js_view" => 'VcColumnView'
) );

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_qk_carousel2 extends WPBakeryShortCodesContainer {
    }
}

vc_map( array(
    "name" => esc_html__("QK Big Carousel", "hotmagazine"),
    "base" => "qk_carousel4",
    "as_parent" => array('only' => 'qk_post2,qk_post3,qk_post4, qk_post2_tag'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    "content_unique" => true,
    "show_settings_on_create" => false,
    "params" => array(
        // add params same as with any other content unique
        array(
            "type" => "textfield",
            "heading" => esc_html__("Custom Class", "hotmagazine"),
            "param_name" => "class",
            "description" => '',
        )
    ),
    "js_view" => 'VcColumnView'
) );

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_qk_carousel4 extends WPBakeryShortCodesContainer {
    }
}

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("QK Posts 1","hotmagazine"),
   "base" => "qk_posts1",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   
   "params" => array(
   
      
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Select Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("O elige entre varias categorías","hotmagazine"),
         "param_name" => "cat_ids",
         "value" => "",
         "description" => 'Separadas por comas, ejemplo: "18,12,13,20".'
      ),  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "4"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Class","hotmagazine"),
         "param_name" => "class",
         "value" => "",
         "description" => 'Custom class example "standard" '
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Quitar autor?","hotmagazine"),
         "param_name" => "qautor",
         "value" => "",
         "description" => '"yes" or "no"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Quitar fecha?","hotmagazine"),
         "param_name" => "qfecha",
         "value" => "",
         "description" => '"yes" or "no"'
      )
   )
) );

}
class WPBakeryShortCode_qk_posts1 extends WPBakeryShortCode {
}





//QK POSTS 2
if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("QK Posts 2","hotmagazine"),
   "base" => "qk_posts2",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   
   "params" => array(
   
     
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Select Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Or multiple categories filter:","hotmagazine"),
         "param_name" => "cat_ids",
         "value" => "",
         "description" => 'Filter multiple categories by ID. Enter here the category IDs separated by commas (ex: 13,23,18).'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "3"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Tag de fecha?","hotmagazine"),
         "param_name" => "fecha",
         "value" => "",
         "description" => '¿"yes" or "no"?'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail","hotmagazine"),
         "param_name" => "thumb",
         "value" => "",
         "description" => '"enable" or "disable"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("No. de thumbnails a mostrar","hotmagazine"),
         "param_name" => "nothumbs",
         "value" => "",
         "description" => 'Número de posts que llevan thumbnail'
      )	  
   )
) );

}
class WPBakeryShortCode_qk_posts2 extends WPBakeryShortCode {
}

//FIN POSTS 2


//QK POSTS HOY ESTILO
if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("INTERNO: Hoy ESTILO","hotmagazine"),
   "base" => "qk_posts_hoyESTILO",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   
   "params" => array(
   
     
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Select Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),  
   )
) );

}
class WPBakeryShortCode_qk_posts_hoyESTILO extends WPBakeryShortCode {
}

//FIN HOY ESTILO


//QK POSTS HOY
if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("INTERNO: Hoy","hotmagazine"),
   "base" => "qk_posts_hoy",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   
   "params" => array(
   
     
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Select Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),  
   )
) );

}
class WPBakeryShortCode_qk_posts_hoy extends WPBakeryShortCode {
}

//FIN HOY

//QK POSTS HOY2
if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("INTERNO: Hoy, propio","hotmagazine"),
   "base" => "qk_posts_hoy2",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   
   "params" => array(
   
     
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Id de autores a mostrar","hotmagazine"),
         "param_name" => "author",
         "value" => "",
         "description" => 'ID de estos autores, separador por coma'
      ),  
   )
) );

}
class WPBakeryShortCode_qk_posts_hoy2 extends WPBakeryShortCode {
}

//FIN HOY2

//QK POSTS HOY3
if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("INTERNO: Hoy, portadas","hotmagazine"),
   "base" => "qk_posts_hoy3",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   
   "params" => array(
   
     
          array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Titulo","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => 'Titulo'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Id de key a buscar","hotmagazine"),
         "param_name" => "key",
         "value" => "",
         "description" => 'ID de key personalizado a buscar'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Valor","hotmagazine"),
         "param_name" => "value",
         "value" => "",
         "description" => 'Valor a buscar'
      ),  
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Cantidad","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'No. de posts a mostrar'
      ),  	  
   )
) );

}
class WPBakeryShortCode_qk_posts_hoy3 extends WPBakeryShortCode {
}

//FIN HOY3


//QK POSTS HOY4
if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("INTERNO: Hoy, cant. 
   r","hotmagazine"),
   "base" => "qk_posts_hoy4",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   
   "params" => array(
   
     
          array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Autor","hotmagazine"),
         "param_name" => "author",
         "value" => "",
         "description" => 'Id del autor'
      ),
   )
) );

}
class WPBakeryShortCode_qk_posts_hoy4 extends WPBakeryShortCode {
}

//FIN HOY4



//QK UNA COLUMNA
if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("QK Una Columna","hotmagazine"),
   "base" => "qk_unacolumna",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   
   "params" => array(
   
     
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Select Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Or multiple categories filter:","hotmagazine"),
         "param_name" => "cat_ids",
         "value" => "",
         "description" => 'Filter multiple categories by ID. Enter here the category IDs separated by commas (ex: 13,23,18).'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "3"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Tag de fecha?","hotmagazine"),
         "param_name" => "fecha",
         "value" => "",
         "description" => '¿"yes" or "no"?'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail","hotmagazine"),
         "param_name" => "thumb",
         "value" => "",
         "description" => '"enable" or "disable"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("No. de thumbnails a mostrar","hotmagazine"),
         "param_name" => "nothumbs",
         "value" => "",
         "description" => 'Número de posts que llevan thumbnail'
      )	  
   )
) );

}
class WPBakeryShortCode_qk_punacolumna extends WPBakeryShortCode {
}

//FIN UNA COLUMNA


//QK POSTS SEGUNDOS
if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("QK Posts Segundas","hotmagazine"),
   "base" => "qk_posts_segundas",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   
   "params" => array(
   
     
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Select Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Or multiple categories filter:","hotmagazine"),
         "param_name" => "cat_ids",
         "value" => "",
         "description" => 'Filter multiple categories by ID. Enter here the category IDs separated by commas (ex: 13,23,18).'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "3"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Tag de fecha?","hotmagazine"),
         "param_name" => "fecha",
         "value" => "",
         "description" => '¿"yes" or "no"?'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail","hotmagazine"),
         "param_name" => "thumb",
         "value" => "",
         "description" => '"enable" or "disable"'
      )
   )
) );

}
class WPBakeryShortCode_qk_posts_segundas extends WPBakeryShortCode {
}

//FIN POSTS SEGUNDOS



//BOTON MEDIA KIT

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("MediaKit | Botón","hotmagazine"),
   "base" => "MediaKit_boton",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "http://imparcialoaxaca.mx/wp-content/uploads/2018/06/mediakitboton.jpg",
   "content_unique" => true,
   
   "params" => array(
   
   )
) );

}
class WPBakeryShortCode_MediaKit_boton extends WPBakeryShortCode {
}


//FIN BOTON MEDIA



//COVID IMG1

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("IMG 1 | Covid-19","hotmagazine"),
   "base" => "Covid19_img1",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-19-cartel-icono-virus_1142-7401.jpg",
   "content_unique" => true,
   
   "params" => array(
   
   )
) );

}
class WPBakeryShortCode_Covid19_img1 extends WPBakeryShortCode {
}


//FIN COVID IMG1

//ESQUELA

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("Esquela","hotmagazine"),
   "base" => "esquela",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "https://imparcialoaxaca.mx/wp-content/uploads/2020/10/images-1.jpg",
   "content_unique" => true,
   
   "params" => array(
   
   )
) );

}
class WPBakeryShortCode_esquela extends WPBakeryShortCode {
}


//FIN ESQUELA

//IMG VIDEO 1

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("IMG VIDEO 1","hotmagazine"),
   "base" => "img_video1",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "https://imparcialoaxaca.mx/wp-content/uploads/2020/10/PARA-VIDEO-copia.jpg",
   "content_unique" => true,
   
   "params" => array(
   
   )
) );

}
class WPBakeryShortCode_img_video1 extends WPBakeryShortCode {
}


//FIN IMG VIDEO 1


//COVID IMG2

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("IMG 2 | Covid-19","hotmagazine"),
   "base" => "Covid19_img2",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-19-cartel-icono-virus_1142-7401.jpg",
   "content_unique" => true,
   
   "params" => array(
   
   )
) );

}
class WPBakeryShortCode_Covid19_img2 extends WPBakeryShortCode {
}


//FIN COVID IMG2


//COVID IMG3

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("IMG 3 | Covid-19","hotmagazine"),
   "base" => "Covid19_img3",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-19-cartel-icono-virus_1142-7401.jpg",
   "content_unique" => true,
   
   "params" => array(
   
   )
) );

}
class WPBakeryShortCode_Covid19_img3 extends WPBakeryShortCode {
}


//FIN COVID IMG3


//COVID IMG4

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("IMG 4 | Covid-19","hotmagazine"),
   "base" => "Covid19_img4",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-19-cartel-icono-virus_1142-7401.jpg",
   "content_unique" => true,
   
   "params" => array(
   
   )
) );

}
class WPBakeryShortCode_Covid19_img4 extends WPBakeryShortCode {
}


//FIN COVID IMG4


//COVID HOY

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("Plantilla hoy | Covid-19","hotmagazine"),
   "base" => "Covid19_hoy",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-19-cartel-icono-virus_1142-7401.jpg",
   "content_unique" => true,
   
   "params" => array(
   
   )
) );

}
class WPBakeryShortCode_Covid19_hoy extends WPBakeryShortCode {
}


//FIN COVID HOY


//COVID CIFRAS

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("Cifras de Covid-19","hotmagazine"),
   "base" => "Covid19_cifras",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-19-cartel-icono-virus_1142-7401.jpg",
   "content_unique" => true,
   
   "params" => array(
   
   )
) );

}
class WPBakeryShortCode_Covid19_cifras extends WPBakeryShortCode {
}


//FIN COVID CIFRAS

//COVID CIFRAS2

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("Cifras de Covid-19 (2)","hotmagazine"),
   "base" => "Covid19_cifras2",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-19-cartel-icono-virus_1142-7401.jpg",
   "content_unique" => true,
   
   "params" => array(
   
   )
) );

}
class WPBakeryShortCode_Covid19_cifras2 extends WPBakeryShortCode {
}


//FIN COVID CIFRAS2

//COVID CIFRAS3

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("Cifras de Covid-19 (3)","hotmagazine"),
   "base" => "Covid19_cifras3",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "https://imparcialoaxaca.mx/wp-content/uploads/2020/06/covid-19-cartel-icono-virus_1142-7401.jpg",
   "content_unique" => true,
   
   "params" => array(
   
   )
) );

}
class WPBakeryShortCode_Covid19_cifras3 extends WPBakeryShortCode {
}


//FIN COVID CIFRAS3


//QK POSTS OPINION
if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("Posts Opinión por autor","hotmagazine"),
   "base" => "qk_posts_opi",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   
   "params" => array(
   
	  	   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Incluir a estos autores","hotmagazine"),
         "param_name" => "incluir",
         "value" => "",
         "description" => 'Poner ids a incluir "13,8,34"; asimismo, poner con (-) los que se deben quitar, ejemplo: "-87,-20"'
      ),
	  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "3"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Tag de fecha?","hotmagazine"),
         "param_name" => "fecha",
         "value" => "",
         "description" => '¿"yes" or "no"?'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail","hotmagazine"),
         "param_name" => "thumb",
         "value" => "",
         "description" => '"enable" or "disable"'
      )
   )
) );

}
class WPBakeryShortCode_qk_posts_opi extends WPBakeryShortCode {
}

//FIN POSTS OPINION 


//QK POSTS OPINION POR SECCION
if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("Posts Opinión por SECCIÓN","hotmagazine"),
   "base" => "qk_opinion_seccion",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   
   "params" => array(
   
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Select Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),
	  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "3"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Tag de fecha?","hotmagazine"),
         "param_name" => "fecha",
         "value" => "",
         "description" => '¿"yes" or "no"?'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail","hotmagazine"),
         "param_name" => "thumb",
         "value" => "",
         "description" => '"enable" or "disable"'
      )
   )
) );

}
class WPBakeryShortCode_qk_opinion_seccion extends WPBakeryShortCode {
}

//FIN POSTS OPINION POR SECCION




// INICIO QK POSTS TAGS


if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("QK Posts 2_TAG","hotmagazine"),
   "base" => "qk_posts2_tag",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   
   "params" => array(
   
     
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Slug del tag:","hotmagazine"),
         "param_name" => "tag_slug",
         "value" => "",
         "description" => 'Filter multiple categories by ID. Enter here the category IDs separated by commas (ex: 13,23,18).'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "3"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Tag de fecha?","hotmagazine"),
         "param_name" => "fecha",
         "value" => "",
         "description" => '¿"yes" or "no"?'
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Autor?","hotmagazine"),
         "param_name" => "autor",
         "value" => "",
         "description" => '¿"yes" or "no"?'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail","hotmagazine"),
         "param_name" => "thumb",
         "value" => "",
         "description" => '"enable" or "disable"'
      )
   )
) );

}
class WPBakeryShortCode_qk_posts2_tag extends WPBakeryShortCode {
}

// FIN QK POSTS TAGS




//QK POSTS 2 ESTILO

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("Home Posts de Estilo (Sin Sociales)","hotmagazine"),
   "base" => "qk_posts2_estilo",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   
   "params" => array(
   
     
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Select Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Or multiple categories filter:","hotmagazine"),
         "param_name" => "cat_ids",
         "value" => "",
         "description" => 'Filter multiple categories by ID. Enter here the category IDs separated by commas (ex: 13,23,18).'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "3"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail","hotmagazine"),
         "param_name" => "thumb",
         "value" => "",
         "description" => '"enable" or "disable"'
      )
   )
) );

}
class WPBakeryShortCode_qk_posts2_estilo extends WPBakeryShortCode {
}

//QK POSTS 2 ESTILO


//MENU CENTRO

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("Menu | Centro","hotmagazine"),
   "base" => "Menu_Centro",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "http://imparcialoaxaca.mx/wp-content/uploads/2018/06/menu.png",
   "content_unique" => true,
   
   "params" => array(
   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Url del logo","hotmagazine"),
         "param_name" => "urllogo",
         "value" => "",
         "description" => 'Poner URL del LOGO'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("ID del menú","hotmagazine"),
         "param_name" => "idmenu",
         "value" => "",
         "description" => 'ID del menú'
      ),	  
   )
) );

}
class WPBakeryShortCode_Menu_Centro extends WPBakeryShortCode {
}


//FIN MENU CENTRO

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("QK Posts 3","hotmagazine"),
   "base" => "qk_posts3",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   
   "params" => array(
   
     
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Select Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "4"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      )
      
   )
) );

}
class WPBakeryShortCode_qk_posts3 extends WPBakeryShortCode {
}

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("QK Posts 4","hotmagazine"),
   "base" => "qk_posts4",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_unique" => true,
   
   "params" => array(
   
     
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Select Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "3"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      )
      
   )
) );

}
class WPBakeryShortCode_qk_posts4 extends WPBakeryShortCode {
}


if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("QK Posts grid","hotmagazine"),
   "base" => "qk_posts_grid",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/block15.png",
   "content_unique" => true,
   
   "params" => array(
   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => 'Custom block title'
      ),
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Select Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "6"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Page pagination","hotmagazine"),
         "param_name" => "pagination",
         "value" => "",
         "description" => '"on" or "off"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Tamaño de thumbnail","hotmagazine"),
         "param_name" => "thumbnail",
         "value" => "",
         "description" => 'default, medium, large'
      )
   )
) );

}
class WPBakeryShortCode_qk_posts_grid extends WPBakeryShortCode {
}


//Grid video

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("QK Videos grid","hotmagazine"),
   "base" => "qk_videos_grid",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/block15.png",
   "content_unique" => true,
   
   "params" => array(
   
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => 'Custom block title'
      ),
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Select Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "6"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Page pagination","hotmagazine"),
         "param_name" => "pagination",
         "value" => "",
         "description" => '"on" or "off"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Tamaño de thumbnail","hotmagazine"),
         "param_name" => "thumbnail",
         "value" => "",
         "description" => 'default, medium, large'
      )
   )
) );

}
class WPBakeryShortCode_qk_videos_grid extends WPBakeryShortCode {
}

// Fin grid video




if(function_exists('vc_map')){

vc_map( array(
   "name" => esc_html__("QK Ad Box","hotmagazine"),
   "base" => "qk_adv",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/aaa.png",
   "content_construct" => true,
   "params" => array(
   
      
     array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Large Screen","hotmagazine"),
         "param_name" => "image",
         "value" => "",
         "description" => 'Image display on Large Screen'
      ),array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Medium Screen","hotmagazine"),
         "param_name" => "image2",
         "value" => "",
         "description" => 'Image Display on Medium Screen'
      ),array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Small Screen","hotmagazine"),
         "param_name" => "image3",
         "value" => "",
         "description" => 'Image Display on Small Screen'
      ), array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Link","hotmagazine"),
         "param_name" => "caption",
         "value" => "",
         "description" => 'Your image caption'
      )
   )
) );

}
class WPBakeryShortCode_qk_adv extends WPBakeryShortCode {
}


if(function_exists('vc_map')){

vc_map( array(
   "name" => esc_html__("QK Gallery Box","hotmagazine"),
   "base" => "qk_gallery",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "content_construct" => true,
   "params" => array(
   
    array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),
     array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Add images","hotmagazine"),
         "param_name" => "images",
         "value" => "",
         "description" => ''
      ),
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Or insert Post IDs","hotmagazine"),
         "param_name" => "ids",
         "value" => "",
         "description" => 'Insert posts ids. Separate ids with commas (e.g. "3,17,8").'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Size","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Example "thumbnail, medium, large" or leave empty'
      )
   )
) );

}
class WPBakeryShortCode_qk_gallery extends WPBakeryShortCode {
}


if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("QK Posts 2Col","hotmagazine"),
   "base" => "qk_posts_2col",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/block4.png",
   "content_unique" => true,
   
   "params" => array(
   
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Select Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "4"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Page pagination","hotmagazine"),
         "param_name" => "pagination",
         "value" => "",
         "description" => '"on" or "off" or "ajax"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Quitar autor?","hotmagazine"),
         "param_name" => "qautor",
         "value" => "",
         "description" => '"yes" or "no"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Quitar fecha?","hotmagazine"),
         "param_name" => "qfecha",
         "value" => "",
         "description" => '"yes" or "no"'
      )
   )
) );

}
class WPBakeryShortCode_qk_posts_2col extends WPBakeryShortCode {
}


//QK 2COL CATEGORIA + TAG

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("QK Posts 2Col CATEGORY + TAGS","hotmagazine"),
   "base" => "qk_posts_2col_tags",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/block4.png",
   "content_unique" => true,
   
   "params" => array(
   
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Select Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Excluir categoría","hotmagazine"),
         "param_name" => "exclude",
         "value" => "",
         "description" => 'ID de categorías a excluir, separadas con coma'
      ),	  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "4"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Tags a incluir","hotmagazine"),
         "param_name" => "the_tags",
         "value" => "",
         "description" => 'Tags (slug), separados por coma, ejemplo: "viral, nota-roja, mundial-rusia-2018"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Operador","hotmagazine"),
         "param_name" => "operador",
         "value" => "",
         "description" => 'Operador, puede ser "or" o "and", default para "or"'
      ),	  	  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Page pagination","hotmagazine"),
         "param_name" => "pagination",
         "value" => "",
         "description" => '"on" or "off" or "ajax"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Quitar autor?","hotmagazine"),
         "param_name" => "qautor",
         "value" => "",
         "description" => '"yes" or "no"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Quitar fecha?","hotmagazine"),
         "param_name" => "qfecha",
         "value" => "",
         "description" => '"yes" or "no"'
      ),
   )
) );

}
class WPBakeryShortCode_qk_posts_2col_tags extends WPBakeryShortCode {
}

//FIN QK 2COL CATEGORIA + TAG


//INICIO QK 2COL CUSTOM

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("QK Posts 2Col CUSTOM","hotmagazine"),
   "base" => "qk_posts_2col_custom",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/block4.png",
   "content_unique" => true,
   
   "params" => array(
   
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Incluir categorías","hotmagazine"),
         "param_name" => "cats",
         "value" => "",
         "description" => 'ID de categorías separadas con coma'
      ),	  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "4"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Tags a incluir","hotmagazine"),
         "param_name" => "tags",
         "value" => "",
         "description" => 'Tags (slug), separados por coma, ejemplo: "viral, nota-roja, mundial-rusia-2018"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Operador","hotmagazine"),
         "param_name" => "operador",
         "value" => "",
         "description" => 'Operador, puede ser "or" o "and", default para "or"'
      ),	  	  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Page pagination","hotmagazine"),
         "param_name" => "pagination",
         "value" => "",
         "description" => '"on" or "off" or "ajax"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Quitar autor?","hotmagazine"),
         "param_name" => "qautor",
         "value" => "",
         "description" => '"yes" or "no"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Quitar fecha?","hotmagazine"),
         "param_name" => "qfecha",
         "value" => "",
         "description" => '"yes" or "no"'
      ),
   )
) );

}
class WPBakeryShortCode_qk_posts_2col_custom extends WPBakeryShortCode {
}

//FIN QK 2COL CUSTOM



//QK 2COL CATEGORIA AND TAG

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("QK Posts 2Col CATEGORY AND TAGS","hotmagazine"),
   "base" => "qk_posts_2col_and_tags",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/block4.png",
   "content_unique" => true,
   
   "params" => array(
   
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Select Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Excluir categoría","hotmagazine"),
         "param_name" => "exclude",
         "value" => "",
         "description" => 'ID de categorías a excluir, separadas con coma'
      ),	  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "4"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Tags a incluir","hotmagazine"),
         "param_name" => "the_tags",
         "value" => "",
         "description" => 'Tags (slug), separados por coma, ejemplo: "viral, nota-roja, mundial-rusia-2018"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Page pagination","hotmagazine"),
         "param_name" => "pagination",
         "value" => "",
         "description" => '"on" or "off" or "ajax"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Quitar autor?","hotmagazine"),
         "param_name" => "qautor",
         "value" => "",
         "description" => '"yes" or "no"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Quitar fecha?","hotmagazine"),
         "param_name" => "qfecha",
         "value" => "",
         "description" => '"yes" or "no"'
      ),
   )
) );

}
class WPBakeryShortCode_qk_posts_2col_and_tags extends WPBakeryShortCode {
}

//FIN QK 2COL CATEGORIA AND TAG




//QK 2COL REGIONES

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("QK Posts 2Col REGIONES","hotmagazine"),
   "base" => "qk_posts_2col_regiones",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/block4.png",
   "content_unique" => true,
   
   "params" => array(
   
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Elegir categoría","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("O múltiples categorías, poner IDs","hotmagazine"),
         "param_name" => "multiple",
         "value" => "",
         "description" => 'Separadas por comas, ejemplo: "4,7,6,18"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Excluir categoría","hotmagazine"),
         "param_name" => "exclude",
         "value" => "",
         "description" => 'ID de categorías a excluir, separadas con coma'
      ),	  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "4"'
      ),array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Elegir región","hotmagazine"),
        "param_name" => "reg",
        "value" =>array(
    'Cañada' => __('caniada'),
    'Costa' => __('costa'),
    'Cuenca' => __('cuenca'),
    'Istmo' => __('istmo'),
    'Mixteca' => __('mixteca'),	
    'Sierra Norte' => __('sierranorte'),
    'Sierra Sur' => __('sierrasur'),
    'Valles Centrales' => __('vallescentrales'),

)),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Page pagination","hotmagazine"),
         "param_name" => "pagination",
         "value" => "",
         "description" => '"on" or "off" or "ajax"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Quitar autor?","hotmagazine"),
         "param_name" => "qautor",
         "value" => "",
         "description" => '"yes" or "no"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Quitar fecha?","hotmagazine"),
         "param_name" => "qfecha",
         "value" => "",
         "description" => '"yes" or "no"'
      ),
   )
) );

}
class WPBakeryShortCode_qk_posts_2col_regiones extends WPBakeryShortCode {
}

//FIN QK 2COL REGIONES







if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("QK Posts 2Col 2","hotmagazine"),
   "base" => "qk_posts_2col2",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/block4.png",
   "content_unique" => true,
   
   "params" => array(
   
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Select Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "4"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Page pagination","hotmagazine"),
         "param_name" => "pagination",
         "value" => "",
         "description" => '"on" or "off"'
      )
   )
) );

}
class WPBakeryShortCode_qk_posts_2col2 extends WPBakeryShortCode {
}


if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}
//archivo especiales

vc_map( array(
   "name" => esc_html__("Landing: Especiales","hotmagazine"),
   "base" => "qk_posts_especiales",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/block4.png",
   "content_unique" => true,
   
   "params" => array(
   
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "4"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Page pagination","hotmagazine"),
         "param_name" => "pagination",
         "value" => "",
         "description" => '"on" or "off"'
      )
   )
) );

}
class WPBakeryShortCode_qk_posts_especiales extends WPBakeryShortCode {
}


if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

//archivo opinión

vc_map( array(
   "name" => esc_html__("QK Posts 2Col Opinión","hotmagazine"),
   "base" => "qk_posts_opinion",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/block4.png",
   "content_unique" => true,
   
   "params" => array(
   
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "4"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Page pagination","hotmagazine"),
         "param_name" => "pagination",
         "value" => "",
         "description" => '"on" or "off"'
      )
   )
) );

}
class WPBakeryShortCode_qk_posts_opinion extends WPBakeryShortCode {
}


if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}


//archivo cartones
vc_map( array(
   "name" => esc_html__("QK Cartones 2 Col","hotmagazine"),
   "base" => "qk_cartones_2col",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/block4.png",
   "content_unique" => true,
   
   "params" => array(
   
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "4"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Page pagination","hotmagazine"),
         "param_name" => "pagination",
         "value" => "",
         "description" => '"on" or "off"'
      )
   )
) );

}
class WPBakeryShortCode_qk_cartones_2col extends WPBakeryShortCode {
}


//archivocartones fin

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}




vc_map( array(
   "name" => esc_html__("Landing: Listado general","hotmagazine"),
   "base" => "qk_posts_list",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/block21.png",
   "content_unique" => true,
   
   "params" => array(
   
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Elegir categoría","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("O múltiples categorías, poner IDs","hotmagazine"),
         "param_name" => "multiple",
         "value" => "",
         "description" => 'Separadas por comas, ejemplo: "4,7,6,18"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Número de posts por página","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Ejemplo: "4"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Column","hotmagazine"),
         "param_name" => "thumb",
         "value" => "",
         "description" => 'Example "5"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Tamaño del thumbnail","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Recomendado: "principal"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset2",
         "value" => "",
         "description" => 'Empezar a partir del ... '
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Paginación","hotmagazine"),
         "param_name" => "pagination",
         "value" => "",
         "description" => '"on" or "off"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Incluir Especiales?","hotmagazine"),
         "param_name" => "especiales",
         "value" => "",
         "description" => '"yes" or "no"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Incluir minientradas?","hotmagazine"),
         "param_name" => "breves",
         "value" => "",
         "description" => '"yes" or "no"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Tag de lugar, sí o no?","hotmagazine"),
         "param_name" => "tagubicacion",
         "value" => "",
         "description" => '"yes" or "no"'
      )
   )
) );

}
class WPBakeryShortCode_qk_posts_list extends WPBakeryShortCode {
}


//QK LANDING CAT + TAG

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("Landing: Listado general CAT + TAG","hotmagazine"),
   "base" => "qk_posts_list_TAG_CAT",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/block4.png",
   "content_unique" => true,
   
   "params" => array(
   
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Select Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Excluir categoría","hotmagazine"),
         "param_name" => "exclude",
         "value" => "",
         "description" => 'ID de categorías a excluir, separadas con coma'
      ),	  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "4"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Tags a incluir","hotmagazine"),
         "param_name" => "the_tags",
         "value" => "",
         "description" => 'Tags (slug), separados por coma, ejemplo: "viral, nota-roja, mundial-rusia-2018"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Operador","hotmagazine"),
         "param_name" => "operador",
         "value" => "",
         "description" => 'Operador, puede ser "or" o "and", default para "or"'
      ),	  	  
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Page pagination","hotmagazine"),
         "param_name" => "pagination",
         "value" => "",
         "description" => '"on" or "off" or "ajax"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Quitar autor?","hotmagazine"),
         "param_name" => "qautor",
         "value" => "",
         "description" => '"yes" or "no"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Quitar fecha?","hotmagazine"),
         "param_name" => "qfecha",
         "value" => "",
         "description" => '"yes" or "no"'
      ),
   )
) );

}
class WPBakeryShortCode_qk_posts_list_TAG_CAT extends WPBakeryShortCode {
}

//FIN LANDING TAG+CAT





//LANDING LISTADO SECCIONES Y REGIONES

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}




vc_map( array(
   "name" => esc_html__("Landing: Listado secciones/regiones","hotmagazine"),
   "base" => "qk_posts_list_region",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/block21.png",
   "content_unique" => true,
   
   "params" => array(
   
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Elegir categoría","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("O múltiples categorías, poner IDs","hotmagazine"),
         "param_name" => "multiple",
         "value" => "",
         "description" => 'Separadas por comas, ejemplo: "4,7,6,18"'
      ),  
	  array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Elegir región","hotmagazine"),
        "param_name" => "reg",
        "value" =>array(
    'Cañada' => __('caniada'),
    'Costa' => __('costa'),
    'Cuenca' => __('cuenca'),
    'Istmo' => __('istmo'),
    'Mixteca' => __('mixteca'),	
    'Sierra Norte' => __('sierranorte'),
    'Sierra Sur' => __('sierrasur'),
    'Valles Centrales' => __('vallescentrales'),

),
        "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Número de posts por página","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Ejemplo: "4"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Column","hotmagazine"),
         "param_name" => "thumb",
         "value" => "",
         "description" => 'Example "5"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Tamaño del thumbnail","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Recomendado: "principal"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset2",
         "value" => "",
         "description" => 'Empezar a partir del ... '
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Paginación","hotmagazine"),
         "param_name" => "pagination",
         "value" => "",
         "description" => '"on" or "off"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Incluir Especiales?","hotmagazine"),
         "param_name" => "especiales",
         "value" => "",
         "description" => '"yes" or "no"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Incluir minientradas?","hotmagazine"),
         "param_name" => "breves",
         "value" => "",
         "description" => '"yes" or "no"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Tag de lugar, sí o no?","hotmagazine"),
         "param_name" => "tagubicacion",
         "value" => "",
         "description" => '"yes" or "no"'
      )
   )
) );

}
class WPBakeryShortCode_qk_posts_list_region extends WPBakeryShortCode {
}

//FIN LANDING LISTADO SECCIONES Y REGIONES

//LISTADO CON TAGS
if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}




vc_map( array(
   "name" => esc_html__("Landing: Listado de TAG","hotmagazine"),
   "base" => "qk_posts_list_tag",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/block21.png",
   "content_unique" => true,
   
   "params" => array(
   
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Nombre del tag","hotmagazine"),
         "param_name" => "tag",
         "value" => "",
         "description" => 'Escriba el nombre del tag, ejemplo "Video del día"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Número de posts por página","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Ejemplo: "4"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Column","hotmagazine"),
         "param_name" => "thumb",
         "value" => "",
         "description" => 'Example "5"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Tamaño del thumbnail","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Recomendado: "principal"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset2",
         "value" => "",
         "description" => 'Empezar a partir del ... '
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Paginación","hotmagazine"),
         "param_name" => "pagination",
         "value" => "",
         "description" => '"on" or "off"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Incluir Especiales?","hotmagazine"),
         "param_name" => "especiales",
         "value" => "",
         "description" => '"yes" or "no"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Incluir minientradas?","hotmagazine"),
         "param_name" => "breves",
         "value" => "",
         "description" => '"yes" or "no"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Tag de lugar, sí o no?","hotmagazine"),
         "param_name" => "tagubicacion",
         "value" => "",
         "description" => '"yes" or "no"'
      )
   )
) );

}
class WPBakeryShortCode_qk_posts_list_tag extends WPBakeryShortCode {
}


//FIN LISTADO CON TAGAS

if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}



//FIN CON ESPECIALES



//EXCLUYENDO


vc_map( array(
   "name" => esc_html__("Landing: Listado sin incluir subcategorías","hotmagazine"),
   "base" => "qk_posts_list_exc",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/block21.png",
   "content_unique" => true,
   
   "params" => array(
   
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Select Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "4"'
      ),
 array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset2",
         "value" => "",
         "description" => 'Empezar el listado en el número... '
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Número de columnas del thumbanail","hotmagazine"),
         "param_name" => "thumb",
         "value" => "",
         "description" => 'Recomendado "5"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Tamaño del thumbnail","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Recomendado "principal"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Page pagination","hotmagazine"),
         "param_name" => "pagination",
         "value" => "",
         "description" => '"on" or "off"'
      )
   )
) );

}
class WPBakeryShortCode_qk_posts_list_exc extends WPBakeryShortCode {
}


if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}



//FIN EXCLUYENDO CATEGORIAS



//Ultima hora inicio
vc_map( array(
   "name" => esc_html__("Landing: Última hora","hotmagazine"),
   "base" => "qk_posts_ultimahora",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/block21.png",
   "content_unique" => true,
   
   "params" => array(

      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Número de posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "4"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Número de columnas del thumbnail","hotmagazine"),
         "param_name" => "thumb",
         "value" => "",
         "description" => 'Recomendado "5"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Tamaño de thumbnail","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Recomendado "principal"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Paginación?","hotmagazine"),
         "param_name" => "pagination",
         "value" => "",
         "description" => '"on" or "off"'
      )
   )
) );

}
class WPBakeryShortCode_qk_posts_ultimahora extends WPBakeryShortCode {
}


if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}


//Ultima hora fin



//Ultimas
vc_map( array(
   "name" => esc_html__("Landing: Últimas","hotmagazine"),
   "base" => "qk_posts_ultimas",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/block21.png",
   "content_unique" => true,
   
   "params" => array(

      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Número de posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "4"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Número de columnas del thumbnail","hotmagazine"),
         "param_name" => "thumb",
         "value" => "",
         "description" => 'Recomendado "5"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Tamaño de thumbnail","hotmagazine"),
         "param_name" => "thumbsize",
         "value" => "",
         "description" => 'Recomendado "principal"'
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("¿Paginación?","hotmagazine"),
         "param_name" => "pagination",
         "value" => "",
         "description" => '"on" or "off"'
      )
   )
) );

}
class WPBakeryShortCode_qk_posts_ultimas extends WPBakeryShortCode {
}


if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}


//Ultimas


vc_map( array(
   "name" => esc_html__("QK Posts Lists 2","hotmagazine"),
   "base" => "qk_posts_lists2",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/block21.png",
   "content_unique" => true,
   
   "params" => array(
   
     array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Custom Title","hotmagazine"),
         "param_name" => "title",
         "value" => "",
         "description" => ''
      ),
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Select Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "4"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ), array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("order","hotmagazine"),
         "param_name" => "orderby",
         "value" => "",
         "description" => '"ASC" or "DESC"'
      ), array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Show Rating ","hotmagazine"),
         "param_name" => "rate",
         "value" => "",
         "description" => '"yes" or "no"'
      ), array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Thumbnail Column","hotmagazine"),
         "param_name" => "thumb",
         "value" => "",
         "description" => 'Example "5"'
      )
   )
) );

}
class WPBakeryShortCode_qk_posts_lists2 extends WPBakeryShortCode {
}


if(function_exists('vc_map')){

$categories = get_terms('category' , 'hide_empty=0');
$category_option = array();
$category_option['All'] = 'all';
foreach ($categories as $category) {

if ( is_rtl() ) {
  $category_option[$category->name] = $category->term_id;
}else{ 
  $category_option[$category->name] = $category->slug;
}

}

vc_map( array(
   "name" => esc_html__("QK Posts Full","hotmagazine"),
   "base" => "qk_posts_full",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => get_template_directory_uri() . "/images/icon/block20.png",
   "content_unique" => true,
   
   "params" => array(
   
    
     array(
        "type" => "dropdown",
        "holder" => "div",
        "class" => "",
        "heading" => esc_html__("Select Category","hotmagazine"),
        "param_name" => "cat",
        "value" => $category_option,
        "description" => ''
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Number Posts","hotmagazine"),
         "param_name" => "order",
         "value" => "",
         "description" => 'Example "4"'
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Post Offset","hotmagazine"),
         "param_name" => "offset",
         "value" => "",
         "description" => 'You want to list post from ... '
      ), array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("order","hotmagazine"),
         "param_name" => "orderby",
         "value" => "",
         "description" => '"ASC" or "DESC"'
      )
   )
) );

}
class WPBakeryShortCode_qk_posts_full extends WPBakeryShortCode {
}


if(function_exists('vc_map')){

vc_map( array(
   "name" => esc_html__("QK Gmap","hotmagazine"),
   "base" => "qk_gmap",
   "class" => "",
   "category" => esc_html__("Content", "hotmagazine"),
   "icon" => "icon-qk",
   "params" => array(
   
      
    array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Latitude","hotmagazine"),
         "param_name" => "lat",
         "value" => "",
         "description" => 'Example "-33.880641"'
      ),
    array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => esc_html__("Longitude","hotmagazine"),
         "param_name" => "lon",
         "value" => "",
         "description" => 'Example "151.204298"'
      ),

   
   )
) );

}
class WPBakeryShortCode_qk_gmap extends WPBakeryShortCode {
}


add_filter( 'vc_load_default_templates', 'hotmagazine_custom_template_modify_array' ); // Hook in
function hotmagazine_custom_template_modify_array( $data ) {
    return array(); // This will remove all default templates. Basically you should use native PHP functions to modify existing array and then return it.
}

add_filter( 'vc_load_default_templates', 'hotmagazine_custom_template_at_first_position1' ); // Hook in
 
function hotmagazine_custom_template_at_first_position1( $data ) {
    $template               = array();
    $template['name']       = __( 'Home Default 1', 'my-text-domain' ); // Assign name for your custom template
    $template['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . "/images/icon/homepage.png" ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px.
    $template['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $template['content']    = <<<CONTENT
        [vc_row full_width="stretch_row_content_no_spaces" el_class="heading-news"][vc_column][qk_heading_news][qk_post id="246"][qk_top_stories order="3" tag="TOP STORIES"][qk_post id="261"][qk_post id="246"][qk_post id="266"][qk_post id="270"][qk_post id="266"][qk_post id="270"][qk_post id="261"][/qk_heading_news][/vc_column][/vc_row][vc_row el_class="ticker-news"][vc_column][qk_tickers order="4" tag="Breaking News"][/vc_column][/vc_row][vc_row el_class="features-today"][vc_column][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIyJTNFJTBBJTA5JTNDaDIlM0UlM0NzcGFuJTNFVG9kYXklMjdzJTIwRmVhdHVyZWQlM0MlMkZzcGFuJTNFJTNDJTJGaDIlM0UlMEElM0MlMkZkaXYlM0U=[/vc_raw_html][qk_featured_carousel order="5"][/vc_column][/vc_row][vc_row el_class="block-wrapper"][vc_column width="8/12" el_class="block-content content-blocker" css=".vc_custom_1456593391727{padding-right: 15px !important;padding-left: 15px !important;}"][qk_carousel1 title="World"][qk_posts1 cat="world" order="4" offset="1"][qk_posts1 cat="world" order="4" offset="5"][qk_posts1 cat="world" order="4" offset="9"][/qk_carousel1][qk_posts_carousel2 title="Gallery" cat="gallery" order="5" item="3"][vc_row_inner el_class="grid-box"][vc_column_inner el_class="disable" offset="vc_col-lg-6 vc_col-md-6"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIyJTNFJTBBJTIwJTIwJTNDaDElM0UlM0NzcGFuJTIwY2xhc3MlM0QlMjJmYXNoaW9uJTIyJTNFRmFzaGlvbiUzQyUyRnNwYW4lM0UlM0MlMkZoMSUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][qk_posts_slider][qk_post2 id="97" wrap="li"][qk_post2 id="89" wrap="li"][qk_post2 id="81" wrap="li"][/qk_posts_slider][/vc_column_inner][vc_column_inner offset="vc_col-lg-6 vc_col-md-6"][qk_carousel2 title="LIFESTYLE"][qk_posts2 cat="business" order="3"][qk_posts2 cat="lifestyle" order="3"][/qk_carousel2][/vc_column_inner][/vc_row_inner][qk_adv image="32" image2="31" image3="28" caption="http://themeforest.net/item/hotmagazine-news-magazine-wordpress-theme/14747026?ref=qktheme"][/vc_column][vc_column width="4/12" el_class="sidebar-sticky"][vc_widget_sidebar sidebar_id="sidebar-b1"][/vc_column][/vc_row][vc_row el_class="feature-video"][vc_column][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIwd2hpdGUlMjIlM0UlMEElMjAlM0NoMiUzRSUzQ3NwYW4lM0VGZWF0dXJlZCUyMFZpZGVvJTNDJTJGc3BhbiUzRSUzQyUyRmgyJTNFJTBBJTNDJTJGZGl2JTNF[/vc_raw_html][qk_posts_carousel cat="video" order="8" class="features-video-box"][/vc_column][/vc_row][vc_row][vc_column width="8/12" el_class="block-content content-blocker" css=".vc_custom_1456568288896{padding-right: 15px !important;padding-left: 15px !important;}"][qk_posts_2col title="LATEST ARTICLES" cat="uncategorized" order="6"][/vc_column][vc_column width="4/12" el_class="sidebar-sticky"][vc_widget_sidebar sidebar_id="sidebar-b2"][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}

add_filter( 'vc_load_default_templates', 'hotmagazine_custom_template_at_first_position2' ); // Hook in
 
function hotmagazine_custom_template_at_first_position2( $data ) {
    $template               = array();
    $template['name']       = __( 'Home Default 2', 'my-text-domain' ); // Assign name for your custom template
    $template['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . "/images/icon/homepage.png" ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px.
    $template['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $template['content']    = <<<CONTENT
        [vc_row el_class="heading-news2"][vc_column][qk_tickers order="4" tag="Breaking News"][qk_heading_news][qk_top_stories order="3" tag="Top Stories"][qk_post id="246"][qk_post id="261"][qk_post id="266"][qk_post id="270"][/qk_heading_news][/vc_column][/vc_row][vc_row el_class="block-wrapper"][vc_column width="8/12" el_class="block-content content-blocker" css=".vc_custom_1456594144163{padding-top: 0px !important;padding-right: 15px !important;padding-left: 15px !important;}"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIyJTNFJTBBJTNDaDElM0UlM0NzcGFuJTNFVG9kYXklMjdzJTIwRmVhdHVyZWQlM0MlMkZzcGFuJTNFJTNDJTJGaDElM0UlMEElM0MlMkZkaXYlM0U=[/vc_raw_html][vc_row_inner el_class="grid-box"][vc_column_inner offset="vc_col-lg-6 vc_col-md-6"][qk_post2 id="324"][/vc_column_inner][vc_column_inner offset="vc_col-lg-6 vc_col-md-6"][qk_posts2 order="3" offset="5"][/vc_column_inner][/vc_row_inner][vc_row_inner el_class="grid-box"][vc_column_inner offset="vc_col-lg-6 vc_col-md-6"][qk_post2 id="328"][/vc_column_inner][vc_column_inner offset="vc_col-lg-6 vc_col-md-6"][qk_posts2 order="3" offset="8"][/vc_column_inner][/vc_row_inner][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJjZW50ZXItYnV0dG9uJTIyJTNFJTBBJTIwJTIwJTNDYSUyMGNsYXNzJTNEJTIyZmVhdHVyZS1sb2FkJTIyJTIwaHJlZiUzRCUyMiUyMyUyMiUzRSUzQ2klMjBjbGFzcyUzRCUyMmZhJTIwZmEtcmVmcmVzaCUyMiUzRSUzQyUyRmklM0UlMjBNb3JlJTIwZnJvbSUyMGZlYXR1cmVkJTNDJTJGYSUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][qk_adv image="32" image2="31" image3="28" caption="http://themeforest.net/item/hotmagazine-news-magazine-wordpress-theme/14747026?ref=qktheme"][qk_posts_grid title="NEWS IN VIDEO" cat="video" order="6"][qk_carousel1 title="LIFESTYLE"][qk_posts1 cat="world" order="4" offset="1"][qk_posts1 cat="world" order="4" offset="5"][qk_posts1 cat="world" order="4" offset="9"][/qk_carousel1][qk_adv image="32" image2="31" image3="28" caption="http://themeforest.net/item/hotmagazine-news-magazine-wordpress-theme/14747026?ref=qktheme"][qk_posts_list title="Latest Articles" cat="tech" order="4" orderby="ASC"][/vc_column][vc_column width="4/12" el_class="sidebar-sticky"][vc_widget_sidebar sidebar_id="sidebar-1"][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}
add_filter( 'vc_load_default_templates', 'hotmagazine_custom_template_at_first_position3' ); // Hook in
 
function hotmagazine_custom_template_at_first_position3( $data ) {
    $template               = array();
    $template['name']       = __( 'Home Default 3', 'my-text-domain' ); // Assign name for your custom template
    $template['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . "/images/icon/homepage.png" ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px.
    $template['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $template['content']    = <<<CONTENT
        [vc_row el_class="block-wrapper"][vc_column width="2/3" el_class="block-content content-blocker" css=".vc_custom_1456594198244{padding-top: 0px !important;padding-right: 15px !important;padding-left: 15px !important;}" offset="vc_col-lg-7 vc_col-md-7"][qk_top_stories order="3" tag="Top Stories"][vc_empty_space height="42px"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIyJTNFJTBBJTA5JTNDaDElM0UlM0NzcGFuJTNFVG9kYXklMjdzJTIwRmVhdHVyZWQlM0MlMkZzcGFuJTNFJTNDJTJGaDElM0UlMEElM0MlMkZkaXYlM0U=[/vc_raw_html][qk_posts_slider][qk_post2 id="359" wrap="li"][qk_post2 id="365" wrap="li"][qk_post2 id="367" wrap="li"][/qk_posts_slider][vc_row_inner][vc_column_inner offset="vc_col-lg-6 vc_col-md-6"][qk_posts2 cat="lifestyle" order="3"][/vc_column_inner][vc_column_inner offset="vc_col-lg-6 vc_col-md-6"][qk_posts2 cat="travel" order="3" offset="3"][/vc_column_inner][/vc_row_inner][vc_empty_space height="10px"][vc_raw_html css=".vc_custom_1455703198798{margin-top: 15px !important;margin-bottom: 15px !important;}"]JTNDZGl2JTIwY2xhc3MlM0QlMjJjZW50ZXItYnV0dG9uJTIyJTNFJTBBJTIwJTIwJTNDYSUyMGNsYXNzJTNEJTIyZmVhdHVyZS1sb2FkJTIyJTIwaHJlZiUzRCUyMiUyMyUyMiUzRSUzQ2klMjBjbGFzcyUzRCUyMmZhJTIwZmEtcmVmcmVzaCUyMiUzRSUzQyUyRmklM0UlMjBNb3JlJTIwZnJvbSUyMGZlYXR1cmVkJTNDJTJGYSUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][vc_empty_space height="15px"][qk_carousel1 title="Popular"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpdGVtJTIyJTNF[/vc_raw_html][qk_post2 id="89"][qk_post2 id="324"][vc_raw_html]JTNDJTJGZGl2JTNF[/vc_raw_html][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpdGVtJTIyJTNF[/vc_raw_html][qk_post2 id="97"][qk_post2 id="328"][vc_raw_html]JTNDJTJGZGl2JTNF[/vc_raw_html][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpdGVtJTIyJTNF[/vc_raw_html][qk_post2 id="324"][qk_post2 id="328"][vc_raw_html]JTNDJTJGZGl2JTNF[/vc_raw_html][/qk_carousel1][qk_posts_carousel2 title="GALLERY" cat="gallery" order="4" item="3"][qk_adv image="489" caption="http://themeforest.net/item/hotmagazine-news-magazine-wordpress-theme/14747026?ref=qktheme"][qk_posts_list title="LATEST ARTICLES" cat="lifestyle" order="4" rate="yes" thumb="4"][/vc_column][vc_column width="1/12" offset="vc_col-lg-2 vc_col-md-2 vc_hidden-sm vc_hidden-xs" el_class="sidebar-sticky"][vc_widget_sidebar sidebar_id="sidebar-2"][/vc_column][vc_column width="1/3" offset="vc_col-lg-3 vc_col-md-3" el_class="sidebar-sticky"][vc_widget_sidebar sidebar_id="sidebar-1" el_class="large-sidebar "][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}

add_filter( 'vc_load_default_templates', 'hotmagazine_custom_template_at_first_position4' ); // Hook in
 
function hotmagazine_custom_template_at_first_position4( $data ) {
    $template               = array();
    $template['name']       = __( 'Home Default 4', 'my-text-domain' ); // Assign name for your custom template
    $template['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . "/images/icon/homepage.png" ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px.
    $template['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $template['content']    = <<<CONTENT
        [vc_row el_class="list-line-posts"][vc_column][qk_top_posts order="5"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces" el_class="heading-news3"][vc_column][qk_carousel4][qk_post2 id="443" wrap="div"][qk_post2 id="447" wrap="div"][qk_post2 id="451" wrap="div"][qk_post2 id="454" wrap="div"][qk_post2 id="443" wrap="div"][/qk_carousel4][/vc_column][/vc_row][vc_row el_class="features-today second-style"][vc_column][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIyJTNFJTBBJTA5JTNDaDElM0UlM0NzcGFuJTNFVG9kYXklMjdzJTIwRmVhdHVyZWQlM0MlMkZzcGFuJTNFJTNDJTJGaDElM0UlMEElM0MlMkZkaXYlM0U=[/vc_raw_html][qk_featured_carousel order="8"][/vc_column][/vc_row][vc_row el_class="block-wrapper"][vc_column width="1/6" offset="vc_col-lg-2 vc_col-md-2 vc_hidden-sm" el_class="sidebar-sticky"][vc_widget_sidebar sidebar_id="sidebar-2" el_class="small-sidebar"][/vc_column][vc_column width="2/3" offset="vc_col-lg-7 vc_col-md-7" el_class="block-content content-blocker" css=".vc_custom_1456594291306{padding-right: 15px !important;padding-left: 15px !important;}"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIyJTNFJTBBJTA5JTNDaDElM0UlM0NzcGFuJTNFd29ybGQlMjBOZXdzJTNDJTJGc3BhbiUzRSUzQyUyRmgxJTNFJTBBJTNDJTJGZGl2JTNF[/vc_raw_html][vc_row_inner][vc_column_inner offset="vc_col-lg-6 vc_col-md-6"][qk_post2 id="463"][vc_empty_space height="30px"][qk_posts2 order="3" thumb="disable"][/vc_column_inner][vc_column_inner offset="vc_col-lg-6 vc_col-md-6"][qk_post2 id="467"][vc_empty_space height="30px"][qk_posts2 order="3" offset="3" thumb="disable"][/vc_column_inner][/vc_row_inner][qk_slider_caption ids="478,485,55,481,51"][vc_row_inner el_class="grid-box"][vc_column_inner offset="vc_col-lg-6 vc_col-md-6"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIyJTNFJTBBJTA5JTNDaDElM0UlM0NzcGFuJTNFVGVjaG5vbG9neSUzQyUyRnNwYW4lM0UlM0MlMkZoMSUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][qk_posts2 cat="tech" order="4"][/vc_column_inner][vc_column_inner offset="vc_col-lg-6 vc_col-md-6"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIyJTNFJTBBJTA5JTNDaDElM0UlM0NzcGFuJTNFQnVzaW5lc3MlM0MlMkZzcGFuJTNFJTNDJTJGaDElM0UlMEElM0MlMkZkaXYlM0U=[/vc_raw_html][qk_posts2 cat="business" order="4"][/vc_column_inner][/vc_row_inner][qk_adv image="489" image2="31" image3="28" caption="http://themeforest.net/item/hotmagazine-news-magazine-wordpress-theme/14747026?ref=qktheme"][qk_gallery title="Gallery" images="497,496,493,491,495,494,492"][qk_posts_list title="Latest Articles" cat="lifestyle" order="4" rate="yes" thumb="4"][/vc_column][vc_column width="1/3" offset="vc_col-lg-3 vc_col-md-3" el_class="sidebar-sticky"][vc_widget_sidebar sidebar_id="sidebar-1" el_class="large-sidebar"][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}

add_filter( 'vc_load_default_templates', 'hotmagazine_custom_template_at_first_position5' ); // Hook in
 
function hotmagazine_custom_template_at_first_position5( $data ) {
    $template               = array();
    $template['name']       = __( 'Home Default 5', 'my-text-domain' ); // Assign name for your custom template
    $template['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . "/images/icon/homepage.png" ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px.
    $template['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $template['content']    = <<<CONTENT
        [vc_row el_class="big-slider"][vc_column][qk_posts_slider class="image-slider"][qk_post2 id="503" wrap="li"][qk_post2 id="508" wrap="li"][qk_post2 id="510" wrap="li"][/qk_posts_slider][/vc_column][/vc_row][vc_row el_class="block-wrapper shadow-white"][vc_column][vc_row_inner el_class="list-line-posts"][vc_column_inner][qk_top_posts order="6"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner el_class="block-content content-blocker" width="2/3" offset="vc_col-lg-9 vc_col-md-8" css=".vc_custom_1456594397329{padding-top: 0px !important;padding-right: 15px !important;padding-bottom: 0px !important;padding-left: 15px !important;}"][qk_posts_full order="6"][/vc_column_inner][vc_column_inner el_class="sidebar-sticky" width="1/3" offset="vc_col-lg-3 vc_col-md-4"][vc_widget_sidebar sidebar_id="sidebar-1" el_class="large-sidebar"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}

add_filter( 'vc_load_default_templates', 'hotmagazine_custom_template_at_first_position6' ); // Hook in
 
function hotmagazine_custom_template_at_first_position6( $data ) {
    $template               = array();
    $template['name']       = __( 'Home Default 6', 'my-text-domain' ); // Assign name for your custom template
    $template['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . "/images/icon/homepage.png" ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px.
    $template['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $template['content']    = <<<CONTENT
        [vc_row css=".vc_custom_1456653160719{padding-top: 0px !important;padding-bottom: 0px !important;background-color: #222222 !important;}" el_class="heading-news4"][vc_column css=".vc_custom_1456653079840{padding-top: 30px !important;}"][qk_tickers order="4" tag="Breaking News"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces" el_class="heading-news4" css=".vc_custom_1456653113723{padding-top: 0px !important;}"][vc_column][qk_carousel4][qk_post4 id="762" wrap="div"][qk_post4 id="767" wrap="div"][qk_post4 id="769" wrap="div"][qk_post4 id="762" wrap="div"][qk_post4 id="767" wrap="div"][/qk_carousel4][/vc_column][/vc_row][vc_row el_class="features-today second-style"][vc_column][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIyJTNFJTBBJTIwJTIwJTNDaDElM0UlM0NzcGFuJTNFVG9kYXklMjdzJTIwRmVhdHVyZWQlM0MlMkZzcGFuJTNFJTNDJTJGaDElM0UlMEElM0MlMkZkaXYlM0U=[/vc_raw_html][qk_featured_carousel order="6"][/vc_column][/vc_row][vc_row el_class="block-wrapper"][vc_column][vc_empty_space height="30px"][qk_adv image="32" image2="31" image3="28" caption="http://themeforest.net/item/hotmagazine-news-magazine-wordpress-theme/14747026?ref=qktheme"][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/2"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIyJTNFJTBBJTIwJTIwJTNDaDElM0UlM0NzcGFuJTIwY2xhc3MlM0QlMjJ3b3JsZCUyMiUzRUxpZmVzdHlsZSUzQyUyRnNwYW4lM0UlM0MlMkZoMSUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][qk_posts4 cat="life6" order="3"][/vc_column_inner][vc_column_inner width="1/2"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIyJTNFJTBBJTIwJTIwJTNDaDElM0UlM0NzcGFuJTIwY2xhc3MlM0QlMjJ0cmF2ZWwlMjIlM0VUcmF2ZWwlM0MlMkZzcGFuJTNFJTNDJTJGaDElM0UlMEElM0MlMkZkaXYlM0U=[/vc_raw_html][qk_posts4 cat="travel6" order="3"][/vc_column_inner][/vc_row_inner][vc_empty_space height="60px"][/vc_column][/vc_row][vc_row el_class="latest-videos-section"][vc_column][qk_slider_caption2 ids="776,783,786,788"][/vc_column][/vc_row][vc_row el_class="block-wrapper"][vc_column width="8/12" el_class="content-blocker block-content" css=".vc_custom_1456588364077{padding-right: 15px !important;padding-left: 15px !important;}"][qk_posts_2col2 title="Latest Article" cat="home6"][/vc_column][vc_column width="4/12" el_class="sidebar-sticky"][vc_widget_sidebar sidebar_id="sidebar-b1"][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}

add_filter( 'vc_load_default_templates', 'hotmagazine_custom_template_fashion' ); // Hook in
 
function hotmagazine_custom_template_fashion( $data ) {
    $template               = array();
    $template['name']       = __( 'Home Fashion', 'my-text-domain' ); // Assign name for your custom template
    $template['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . "/images/icon/homepage.png" ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px.
    $template['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $template['content']    = <<<CONTENT
        [vc_row full_width="stretch_row_content_no_spaces" el_class="main-news-slider"][vc_column][qk_posts_slider class="main"][qk_post2 id="7" wrap="li"][qk_post2 id="12" wrap="li"][/qk_posts_slider][vc_row_inner el_class="features-today"][vc_column_inner][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIwd2hpdGUlMjIlM0UlMEElMDklM0NoMSUzRSUzQ3NwYW4lM0VNb3N0JTIwUG9wdWxhciUzQyUyRnNwYW4lM0UlM0MlMkZoMSUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][qk_featured_carousel cat="4" order="5"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row el_class="block-wrapper"][vc_column width="1/12" offset="vc_col-lg-2 vc_col-md-2 vc_hidden-sm vc_hidden-xs" el_class="sidebar-sticky"][vc_widget_sidebar sidebar_id="sidebar-2"][/vc_column][vc_column width="2/3" el_class="block-content content-blocker" css=".vc_custom_1456393225175{padding-top: 0px !important;padding-right: 15px !important;padding-left: 15px !important;}" offset="vc_col-lg-7 vc_col-md-7"][qk_carousel1 title="Popular"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpdGVtJTIyJTNF[/vc_raw_html][qk_post2 id="32"][qk_post2 id="38"][vc_raw_html]JTNDJTJGZGl2JTNF[/vc_raw_html][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpdGVtJTIyJTNF[/vc_raw_html][qk_post2 id="40"][qk_post2 id="42"][vc_raw_html]JTNDJTJGZGl2JTNF[/vc_raw_html][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpdGVtJTIyJTNF[/vc_raw_html][qk_post2 id="38"][qk_post2 id="32"][vc_raw_html]JTNDJTJGZGl2JTNF[/vc_raw_html][/qk_carousel1][qk_adv image="47" image2="49" image3="48" caption="#"][vc_row_inner el_class="grid-box"][vc_column_inner width="1/2"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIyJTNFJTBBJTA5JTNDaDElM0UlM0NzcGFuJTNFQmVhdXR5JTNDJTJGc3BhbiUzRSUzQyUyRmgxJTNFJTBBJTNDJTJGZGl2JTNF[/vc_raw_html][qk_posts2 cat="5" order="3"][/vc_column_inner][vc_column_inner width="1/2"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIyJTNFJTBBJTA5JTNDaDElM0UlM0NzcGFuJTNFRmFzaGlvbiUzQyUyRnNwYW4lM0UlM0MlMkZoMSUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][qk_posts2 cat="5" order="3" offset="3"][/vc_column_inner][/vc_row_inner][qk_posts_lists2 title="Latest Article" order="5" rate="yes" thumb="6"][/vc_column][vc_column width="1/3" offset="vc_col-lg-3 vc_col-md-3" el_class="sidebar-sticky"][vc_widget_sidebar sidebar_id="sidebar-1" el_class="large-sidebar "][/vc_column][/vc_row][vc_row el_class="feature-video"][vc_column][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIwd2hpdGUlMjIlM0UlMEElMDklM0NoMSUzRSUzQ3NwYW4lM0VQaG90byUyMEdhbGxlcmllcyUzQyUyRnNwYW4lM0UlM0MlMkZoMSUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][qk_posts_carousel cat="20" order="7" class="features-video-box"][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}
add_filter( 'vc_load_default_templates', 'hotmagazine_custom_template_sport' ); // Hook in
 
function hotmagazine_custom_template_sport( $data ) {
    $template               = array();
    $template['name']       = __( 'Home Sport', 'my-text-domain' ); // Assign name for your custom template
    $template['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . "/images/icon/homepage.png" ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px.
    $template['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $template['content']    = <<<CONTENT
        [vc_row el_class="heading-news2"][vc_column][qk_heading_news][qk_top_stories order="1" tag="TOP STORIES"][qk_post id="19"][qk_post id="23"][qk_post id="27"][/qk_heading_news][/vc_column][/vc_row][vc_row el_class="block-wrapper"][vc_column width="8/12" el_class="block-content content-blocker" css=".vc_custom_1456393730913{padding-right: 15px !important;padding-left: 15px !important;}"][qk_posts_carousel2 title="Trending now" cat="7" order="5" item="3"][vc_row_inner][vc_column_inner][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIyJTNFJTBBJTIwJTIwJTNDaDElM0UlM0NzcGFuJTNFVG9kYXklMjdzJTIwRmVhdHVyZWQlM0MlMkZzcGFuJTNFJTNDJTJGaDElM0UlMEElM0MlMkZkaXYlM0UlMEElMEE=[/vc_raw_html][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/2"][qk_post_standard id="43"][/vc_column_inner][vc_column_inner width="1/2"][qk_posts2 cat_ids="3,12,5,10" order="4" thumb="enable"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_row_inner el_class="carousel-box"][vc_column_inner width="1/2"][qk_carousel2 title="Football"][qk_posts1 cat="3" order="5"][qk_posts1 cat="3" order="5"][/qk_carousel2][/vc_column_inner][vc_column_inner width="1/2"][qk_carousel2 title="Formula 1"][qk_posts1 cat="12" order="5"][qk_posts1 cat="12" order="5"][/qk_carousel2][/vc_column_inner][/vc_row_inner][qk_adv image="54" image2="53" image3="52" caption="#"][qk_gallery title="Photo Gallery" images="55,56,57,58,59"][qk_posts_list title="Latest Articles" order="4" thumb="5"][/vc_column][vc_column width="4/12" el_class="sidebar-sticky"][vc_widget_sidebar sidebar_id="sidebar-1"][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}

add_filter( 'vc_load_default_templates', 'hotmagazine_custom_template_game' ); // Hook in
 
function hotmagazine_custom_template_game( $data ) {
    $template               = array();
    $template['name']       = __( 'Home Game', 'my-text-domain' ); // Assign name for your custom template
    $template['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . "/images/icon/homepage.png" ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px.
    $template['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $template['content']    = <<<CONTENT
        [vc_row el_class="ticker-news"][vc_column][qk_tickers order="5" tag="breaking news"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces" el_class="heading-news3"][vc_column][vc_row_inner][vc_column_inner][vc_raw_html]JTNDaDElM0VQb3B1bGFyJTIwR2FtZXMlMjBPdXQlMjBOb3clM0MlMkZoMSUzRQ==[/vc_raw_html][/vc_column_inner][/vc_row_inner][qk_carousel4][qk_post3 id="24" wrap="div"][qk_post3 id="27" wrap="div"][qk_post3 id="34" wrap="div"][qk_post3 id="41" wrap="div"][qk_post3 id="44" wrap="div"][/qk_carousel4][/vc_column][/vc_row][vc_row el_class="feature-video"][vc_column][qk_posts_carousel2 title="Latest Reviews" cat="6" order="7" class="features-video-box"][/vc_column][/vc_row][vc_row el_class="block-wrapper"][vc_column width="8/12" el_class="block-content content-blocker" css=".vc_custom_1456393976362{padding-right: 15px !important;padding-left: 15px !important;}"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIyJTNFJTBBJTIwJTIwJTNDaDElM0UlM0NzcGFuJTNFVG9wJTIwU3RvcmllcyUzQyUyRnNwYW4lM0UlM0MlMkZoMSUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][vc_raw_html]JTNDdWwlMjBjbGFzcyUzRCUyMmNhdGVnb3J5LWZpbHRlci1wb3N0cyUyMiUzRSUwQSUyMCUyMCUzQ2xpJTNFJTNDYSUyMGNsYXNzJTNEJTIyYWN0aXZlJTIyJTIwaHJlZiUzRCUyMiUyMyUyMiUzRUFsbCUzQyUyRmElM0UlM0MlMkZsaSUzRSUwQSUyMCUyMCUzQ2xpJTNFJTNDYSUyMGhyZWYlM0QlMjIlMjMlMjIlM0VYYm94JTIwb25lJTNDJTJGYSUzRSUzQyUyRmxpJTNFJTBBJTIwJTIwJTNDbGklM0UlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUzRVBTNCUzQyUyRmElM0UlM0MlMkZsaSUzRSUwQSUyMCUyMCUzQ2xpJTNFJTNDYSUyMGhyZWYlM0QlMjIlMjMlMjIlM0VXSUklMjBVJTNDJTJGYSUzRSUzQyUyRmxpJTNFJTBBJTIwJTIwJTNDbGklM0UlM0NhJTIwaHJlZiUzRCUyMiUyMyUyMiUzRVBDJTNDJTJGYSUzRSUzQyUyRmxpJTNFJTBBJTNDJTJGdWwlM0U=[/vc_raw_html][qk_post_standard id="75"][vc_row_inner][vc_column_inner width="1/2"][qk_posts2 cat="7" order="3"][/vc_column_inner][vc_column_inner width="1/2"][qk_posts2 cat="7" order="3" offset="3"][/vc_column_inner][/vc_row_inner][vc_empty_space][qk_posts_carousel2 title="Most played games" cat="9" order="5"][qk_adv image="107" image2="108" image3="109" caption="#"][qk_posts_list title="LATEST ARTICLES" cat="1" order="4" rate="yes" thumb="4"][/vc_column][vc_column width="4/12" el_class="sidebar-sticky"][vc_widget_sidebar sidebar_id="sidebar-1"][/vc_column][/vc_row][vc_row el_class="block-wrapper non-sidebar"][vc_column el_class="block-content non-sidebar" css=".vc_custom_1453727436617{padding-right: 15px !important;padding-left: 15px !important;}"][qk_slider_caption ids="112,119,123,125,127"][vc_row_inner][vc_column_inner width="1/2" css=".vc_custom_1453735185656{padding-right: 15px !important;padding-left: 15px !important;}"][qk_posts_2col title="LATEST DEALS" cat="8" order="2" pagination="off"][qk_posts2 cat="7" order="3"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1453735197052{padding-right: 15px !important;padding-left: 15px !important;}"][qk_posts_2col title="LATEST Reviews" cat="6" order="2" pagination="off"][qk_posts2 cat="7" order="3" offset="6"][/vc_column_inner][/vc_row_inner][qk_adv image="107" image2="108" image3="109" caption="#"][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}

add_filter( 'vc_load_default_templates', 'hotmagazine_custom_template_tech' ); // Hook in
 
function hotmagazine_custom_template_tech( $data ) {
    $template               = array();
    $template['name']       = __( 'Home Tech', 'my-text-domain' ); // Assign name for your custom template
    $template['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . "/images/icon/homepage.png" ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px.
    $template['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $template['content']    = <<<CONTENT
        [vc_row el_class="list-line-posts"][vc_column][qk_top_posts order="5"][/vc_column][/vc_row][vc_row el_class="block-wrapper"][vc_column width="1/6" offset="vc_col-lg-2 vc_col-md-2 vc_hidden-sm" el_class="sidebar-sticky"][vc_widget_sidebar sidebar_id="sidebar-2" el_class="small-sidebar"][/vc_column][vc_column width="2/3" offset="vc_col-lg-7 vc_col-md-7" el_class="block-content content-blocker" css=".vc_custom_1456394274553{padding-right: 15px !important;padding-left: 15px !important;}"][qk_slider_caption ids="34,41,44,46" cat_ids="6,9,10"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIyJTNFJTBBJTA5JTNDaDElM0UlM0NzcGFuJTNFVG9kYXklMjdzJTIwRmVhdHVyZWQlM0MlMkZzcGFuJTNFJTNDJTJGaDElM0UlMEElM0MlMkZkaXYlM0UlMEE=[/vc_raw_html][vc_row_inner][vc_column_inner width="1/2"][qk_posts1 cat="11" order="3"][/vc_column_inner][vc_column_inner width="1/2"][qk_posts2 cat_ids="3,12,7,9" order="5"][/vc_column_inner][/vc_row_inner][qk_adv image="53" image2="52" image3="51" caption="#"][qk_posts_grid title="Gatgets &amp; Apps" cat="12" order="6"][qk_gallery title="Video News" ids="59,64,66"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIyJTNFJTBBJTIwJTIwJTNDaDElM0UlM0NzcGFuJTNFTGF0ZXN0JTIwQXJ0aWNsZXMlM0MlMkZzcGFuJTNFJTNDJTJGaDElM0UlMEElM0MlMkZkaXYlM0U=[/vc_raw_html][qk_posts_full order="4"][/vc_column][vc_column width="1/3" offset="vc_col-lg-3 vc_col-md-3" el_class="sidebar-sticky"][vc_widget_sidebar sidebar_id="sidebar-1" el_class="large-sidebar"][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}

add_filter( 'vc_load_default_templates', 'hotmagazine_custom_template_design' ); // Hook in
 
function hotmagazine_custom_template_design( $data ) {
    $template               = array();
    $template['name']       = __( 'Home Design', 'my-text-domain' ); // Assign name for your custom template
    $template['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . "/images/icon/homepage.png" ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px.
    $template['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $template['content']    = <<<CONTENT
        [vc_row full_width="stretch_row"][vc_column][qk_posts_2col cat="3" order="4"][qk_adv image="33"][qk_posts_2col cat="4" order="4"][qk_posts_2col cat="5" order="4"][qk_adv image="33"][qk_posts_carousel2 title="Photography" cat="6" order="5" item="4"][qk_posts_lists2 title="Interviews" cat="7" order="4"][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}
add_filter( 'vc_load_default_templates', 'hotmagazine_custom_template_travel' ); // Hook in
 
function hotmagazine_custom_template_travel( $data ) {
    $template               = array();
    $template['name']       = __( 'Home Travel', 'my-text-domain' ); // Assign name for your custom template
    $template['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . "/images/icon/homepage.png" ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px.
    $template['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $template['content']    = <<<CONTENT
        [vc_row el_class="heading-news2"][vc_column][vc_row_inner][vc_column_inner][qk_tickers order="4" tag="BREAKING NEWS"][/vc_column_inner][/vc_row_inner][qk_heading_news][qk_post id="43"][qk_post id="46" class="snd-size"][qk_post id="52"][qk_post id="55"][/qk_heading_news][/vc_column][/vc_row][vc_row el_class="features-today"][vc_column][qk_posts_carousel2 title="Trending Now" cat="trending" order="6" item="4"][/vc_column][/vc_row][vc_row el_class="block-wrapper"][vc_column width="8/12" el_class="block-content content-blocker" css=".vc_custom_1456394537903{padding-right: 15px !important;padding-left: 15px !important;}"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIyJTNFJTBBJTNDaDElM0UlM0NzcGFuJTNFVG9kYXklMjdzJTIwRmVhdHVyZWQlM0MlMkZzcGFuJTNFJTNDJTJGaDElM0UlMEElM0MlMkZkaXYlM0U=[/vc_raw_html][qk_post2 id="76"][vc_empty_space height="30px"][vc_row_inner][vc_column_inner width="1/2"][qk_posts1 cat="beach" order="4"][/vc_column_inner][vc_column_inner width="1/2"][qk_posts1 cat="beach" order="4" offset="4"][/vc_column_inner][/vc_row_inner][qk_adv image="109" image2="110" image3="111" caption="http://themeforest.net/item/hotmagazine-news-magazine-wordpress-theme/14747026?ref=qktheme"][qk_gallery title="Photo Galleries" images="8,9,113,114,115"][vc_row_inner el_class="grid-box"][vc_column_inner width="1/2"][qk_carousel2 title="Fashion"][qk_posts1 cat="fashion" order="3" class="standard"][qk_posts1 cat="fashion" order="3" offset="3" class="standard"][/qk_carousel2][/vc_column_inner][vc_column_inner width="1/2"][qk_carousel2 title="INSPIRATION"][qk_posts1 cat="inspiration" order="3" class="standard"][qk_posts1 cat="inspiration" order="3" offset="3" class="standard"][/qk_carousel2][/vc_column_inner][/vc_row_inner][qk_adv image="109" image2="110" image3="111" caption="http://themeforest.net/item/hotmagazine-news-magazine-wordpress-theme/14747026?ref=qktheme"][qk_posts_list title="LATEST ARTICLES" order="4" thumb="6"][/vc_column][vc_column width="4/12" el_class="sidebar-sticky"][vc_widget_sidebar sidebar_id="sidebar-1"][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}

add_filter( 'vc_load_default_templates', 'hotmagazine_custom_template_politics' ); // Hook in
 
function hotmagazine_custom_template_politics( $data ) {
    $template               = array();
    $template['name']       = __( 'Home Plitics', 'my-text-domain' ); // Assign name for your custom template
    $template['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . "/images/icon/homepage.png" ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px.
    $template['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $template['content']    = <<<CONTENT
        [vc_row el_class="heading-news2" css=".vc_custom_1456763569713{background-image: url(http://localhost/politics/wp-content/uploads/2016/02/back.jpg?id=53) !important;}"][vc_column][qk_heading_news][qk_post id="28"][qk_top_stories order="3" tag="Top Stories"][qk_post id="45"][qk_post id="48"][qk_post id="50"][/qk_heading_news][/vc_column][/vc_row][vc_row el_class="ticker-news"][vc_column][qk_tickers order="4" tag="Breaking News"][/vc_column][/vc_row][vc_row el_class="block-wrapper"][vc_column width="1/6" el_class="sidebar-sticky" offset="vc_col-lg-2 vc_col-md-2 vc_hidden-sm vc_hidden-xs"][vc_widget_sidebar sidebar_id="sidebar-2"][/vc_column][vc_column width="2/3" el_class="content-blocker block-content" css=".vc_custom_1456764391578{padding-right: 15px !important;padding-left: 15px !important;}" offset="vc_col-lg-7 vc_col-md-7"][qk_posts_slider][qk_post2 id="66" wrap="li"][qk_post2 id="69" wrap="li"][/qk_posts_slider][vc_row_inner][vc_column_inner width="1/2"][qk_posts2 cat="list" order="3"][/vc_column_inner][vc_column_inner width="1/2"][qk_posts2 cat="list" order="3" offset="3"][/vc_column_inner][/vc_row_inner][vc_empty_space height="20px"][vc_raw_html css=".vc_custom_1456816978830{padding-top: 20px !important;padding-bottom: 20px !important;}"]JTNDZGl2JTIwY2xhc3MlM0QlMjJjZW50ZXItYnV0dG9uJTIyJTNFJTBBJTIwJTIwJTNDYSUyMGhyZWYlM0QlMjIlMjMlMjIlM0UlM0NpJTIwY2xhc3MlM0QlMjJmYSUyMGZhLXJlZnJlc2glMjIlM0UlM0MlMkZpJTNFJTIwTW9yZSUyMGZyb20lMjBmZWF0dXJlZCUzQyUyRmElM0UlMEElM0MlMkZkaXYlM0U=[/vc_raw_html][vc_empty_space height="20px"][qk_adv image="94" image2="93" image3="92" caption="http://themeforest.net/item/hotmagazine-news-magazine-wordpress-theme/14747026?ref=qktheme"][qk_carousel1 title="Popular"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpdGVtJTIyJTNF[/vc_raw_html][qk_post2 id="119"][qk_post2 id="100"][qk_post2 id="111"][vc_raw_html]JTNDJTJGZGl2JTNF[/vc_raw_html][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpdGVtJTIyJTNF[/vc_raw_html][qk_post2 id="116"][qk_post2 id="114"][qk_post2 id="109"][vc_raw_html]JTNDJTJGZGl2JTNF[/vc_raw_html][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJpdGVtJTIyJTNF[/vc_raw_html][qk_post2 id="111"][qk_post2 id="109"][qk_post2 id="100"][vc_raw_html]JTNDJTJGZGl2JTNF[/vc_raw_html][/qk_carousel1][/vc_column][vc_column width="1/3" el_class="sidebar-sticky" offset="vc_col-lg-3 vc_col-md-3"][vc_widget_sidebar sidebar_id="sidebar-1" el_class="large-sidebar"][/vc_column][/vc_row][vc_row el_class="list-line-posts"][vc_column][qk_top_posts order="6" thumb="disable"][/vc_column][/vc_row][vc_row el_class="feature-video"][vc_column][qk_posts_carousel2 title="POLITICS ORIGINAL VIDEOS" cat="video" order="7"][/vc_column][/vc_row][vc_row el_class="block-wrapper"][vc_column width="1/12" el_class="sidebar-sticky" offset="vc_col-lg-2 vc_col-md-2 vc_hidden-sm vc_hidden-xs"][vc_widget_sidebar sidebar_id="sidebar-b1" el_class="small-sidebar"][/vc_column][vc_column width="2/3" el_class="content-blocker block-content" css=".vc_custom_1456805662315{padding-right: 15px !important;padding-left: 15px !important;}" offset="vc_col-lg-7 vc_col-md-7"][qk_posts_list title="Latest Article" order="4"][/vc_column][vc_column width="1/3" el_class="sidebar-sticky" offset="vc_col-lg-3 vc_col-md-3"][vc_widget_sidebar sidebar_id="sidebar-b2"][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}


add_filter( 'vc_load_default_templates', 'hotmagazine_custom_template_video' ); // Hook in
 
function hotmagazine_custom_template_video( $data ) {
    $template               = array();
    $template['name']       = __( 'Home Video', 'my-text-domain' ); // Assign name for your custom template
    $template['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . "/images/icon/homepage.png" ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px.
    $template['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $template['content']    = <<<CONTENT
        [vc_row el_class="ticker-news"][vc_column][qk_tickers order="4" tag="Breaking News"][/vc_column][/vc_row][vc_row el_class="heading-news"][vc_column width="9/12"][vc_row_inner][vc_column_inner width="1/2"][qk_post id="27" class="snd-size"][/vc_column_inner][vc_column_inner width="1/2"][qk_post id="38" class="snd-size"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/3"][qk_post id="46"][/vc_column_inner][vc_column_inner width="1/3"][qk_post id="48"][/vc_column_inner][vc_column_inner width="1/3"][qk_post id="52"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="3/12"][qk_post id="41"][qk_post id="43"][qk_post id="56"][/vc_column][/vc_row][vc_row el_class="feature-video"][vc_column][qk_adv image="61" image2="60" image3="59" caption="http://themeforest.net/item/hotmagazine-news-magazine-wordpress-theme/14747026?ref=qktheme"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIwd2hpdGUlMjIlM0UlMEElMDklMDklMDklMDklMDklM0NoMSUzRSUzQ3NwYW4lM0V0cmVuZGluZyUyMG5vdyUzQyUyRnNwYW4lM0UlM0MlMkZoMSUzRSUwQSUwOSUwOSUwOSUwOSUzQyUyRmRpdiUzRQ==[/vc_raw_html][qk_posts_carousel cat="trending-now" order="9" order2="6" class="features-video-box"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIwd2hpdGUlMjIlM0UlMEElMDklMDklMDklMDklMDklM0NoMSUzRSUzQ3NwYW4lM0VNb3N0JTIwdmlld2VkJTNDJTJGc3BhbiUzRSUzQyUyRmgxJTNFJTBBJTA5JTA5JTA5JTA5JTNDJTJGZGl2JTNF[/vc_raw_html][qk_posts_carousel cat="most-viewed" order="9" order2="6" class="features-video-box"][/vc_column][/vc_row][vc_row el_class="block-wrapper"][vc_column width="8/12" el_class="block-content content-blocker" css=".vc_custom_1457684585708{padding-right: 15px !important;padding-left: 15px !important;}"][qk_posts_lists2 title="Best Of" cat="featured" order="6"][qk_adv image="61" image2="60" image3="59" caption="http://themeforest.net/item/hotmagazine-news-magazine-wordpress-theme/14747026?ref=qktheme"][qk_posts_grid title="Latest Article" order="9"][/vc_column][vc_column width="4/12" el_class="sidebar-sticky"][vc_widget_sidebar sidebar_id="sidebar-1"][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}


add_filter( 'vc_load_default_templates', 'hotmagazine_custom_template_showbiz' ); // Hook in
 
function hotmagazine_custom_template_showbiz( $data ) {
    $template               = array();
    $template['name']       = __( 'Home ShowBiz', 'my-text-domain' ); // Assign name for your custom template
    $template['image_path'] = preg_replace( '/\s/', '%20', get_template_directory_uri() . "/images/icon/homepage.png" ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px.
    $template['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $template['content']    = <<<CONTENT
        [vc_row el_class="ticker-news"][vc_column][qk_tickers order="5" tag="Breaking news"][/vc_column][/vc_row][vc_row el_class="heading-news3"][vc_column][qk_carousel4][qk_post3 id="22" wrap="div"][qk_post3 id="28" wrap="div"][qk_post3 id="30" wrap="div"][qk_post3 id="32" wrap="div"][/qk_carousel4][/vc_column][/vc_row][vc_row el_class="block-wrapper"][vc_column el_class="block-content non-sidebar" css=".vc_custom_1457852217091{padding-right: 15px !important;padding-left: 15px !important;}"][vc_row_inner el_class="grid-box"][vc_column_inner width="1/2"][qk_featured_slider title="Latest Celebrity" order="3"][/vc_column_inner][vc_column_inner width="1/2"][qk_posts_carousel cat="entertainment" order="4" order2="2"][/vc_column_inner][/vc_row_inner][qk_adv image="47" image2="48" image3="45"][/vc_column][/vc_row][vc_row parallax="content-moving" parallax_image="51" parallax_speed_bg="2" el_class="latest-fashion"][vc_column][qk_posts_carousel2 title="latest fashion" cat="featured" order="6" class="fatest-fashion" item="3"][/vc_column][/vc_row][vc_row el_class="block-wrapper"][vc_column width="8/12" el_class="content-blocker block-content" css=".vc_custom_1457859352450{padding-right: 15px !important;padding-left: 15px !important;}"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJ0aXRsZS1zZWN0aW9uJTIyJTNFJTBBJTIwJTIwJTNDaDElM0UlM0NzcGFuJTNFTGF0ZXN0JTIwQXJ0aWNsZXMlM0MlMkZzcGFuJTNFJTNDJTJGaDElM0UlMEElM0MlMkZkaXYlM0U=[/vc_raw_html][qk_post_standard id="116"][qk_posts_2col2 order="6"][/vc_column][vc_column width="4/12" el_class="sidebar-sticky"][vc_widget_sidebar sidebar_id="sidebar-1"][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}
?>
<?php 

if ( ! defined( 'ABSPATH' ) ) {

  die( '-1' );

}



/**

 * Shortcode attributes

 * @var $atts

 * @var $order

 * @var $offset

 * @var $cat

 * @var $title

 * @var $class

 * @var $content - shortcode content

 * Shortcode class

 * @var $this WPBakeryShortCode_qk_team

 */

$order =  $cat = $class= $offset = $title = $cat_ids= $qfecha = $qautor ='';

$output = $after_output = '';

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );

extract( $atts );

$custom  = hotmagazine_custom();





?>

<?php 



if ( get_query_var('paged') ) {

    $paged = get_query_var('paged');

} elseif ( get_query_var('page') ) {

    $paged = get_query_var('page');

} else {

    $paged = 1;

}

		$args = array(
		
			'post_type' => 'post',
			'post_type' => 'any',
			
			'orderby'   => 'date', 
			'meta_query' => array(
					array(
						'key'     => '_hotmagazine_especial',
						'value'   => 'on',
						'compare' => 'NOT EXISTS',
					)),
		
			
		);
		
		
		if($cat!='all'){
		  if ( is_rtl() ) {
			$args['cat'] = $cat;
		  }else{
			$args['category_name'] = $cat;
		  }
		}elseif($cat_ids!=''){
			$args['cat'] = array($cat_ids);			
		}
						
		
		$args['order'] = 'DESC';
		
		if($offset!=''){
		  $args['offset'] = $offset;
		}
		$args['posts_per_page']= $order;


//EXCLUIDOS
$i=0;
$excluidos=array();
$principales = array('post_type' => 'post', 'posts_per_page' => '3','meta_query' => array(
						array(
							'key'     => '_hotmagazine_portada',
							'value'   => 'stories',
							'compare' => 'IN',
						),
			)	
);

$exc = new WP_Query($principales);
while($exc->have_posts()) : 
	$exc->the_post(); 
	$excluidos[$i]=get_the_ID();
	$i++; endwhile;

$secundarios = array( 'post_type' => 'post', 'posts_per_page' => '4', 'meta_query' => array(
		array(
			'key'     => '_hotmagazine_portada',
			'value'   => 'stories2',
			'compare' => 'IN',								
			),
		)
);
$exc2 = new WP_Query($secundarios);
while($exc2->have_posts()) : 
	$exc2->the_post(); 
	$excluidos[$i]=get_the_ID();
	$i++; endwhile;

//FIN EXCLUIDOS


$args['post__not_in']=$excluidos;



		$portfolio = new WP_Query($args);
		if($cat!='all' and !is_rtl()){
		$category = get_term_by('slug', $cat, 'category');
		$cat = $category->term_id;
		}




?>


<div class="item">

	<?php 

      if($portfolio->have_posts()) :

             $i=1; while($i <= $order) : $portfolio->the_post(); 
		   //$i=1; while($i <10) : $portfolio->the_post(); 

    ?>

    <?php if($i==1){ ?>



	<div class="news-post image-post2">

		<div class="post-gallery">

			<?php if(has_post_thumbnail()){ ?>

			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('principal'); ?></a>
			<?php }else{ ?>
			<a href="<?php the_permalink(); ?>"><img src="http://imparcialoaxaca.mx/wp-content/uploads/2017/01/thumb_principal.jpg" /></a>

			<?php } ?>            
            

			<div class="post-content tituloprincipal">	

					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>

					<ul class="post-tags">

						<?php if($qautor!='yes'){?><li><i class="fa fa-user"></i><?php esc_html_e('Por','hotmagazine'); ?> <?php the_author(); ?></li><?php }?>
                        <?php if($qfecha!='yes'){?><li><i class="fa fa-clock-o"></i><?php the_time('M j, Y'); ?></li><?php }?>

						

						

					</ul>

					

				</div>



		</div>

	</div>



	<ul class="list-posts">

	<?php }else{  ?>



		<li>



			<?php if(has_post_thumbnail()){ ?>

			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
			<?php }else{ ?>
			<a href="<?php the_permalink(); ?>"><img src="http://imparcialoaxaca.mx/wp-content/uploads/2017/01/thumb_small.jpg" /></a>

			<?php } ?>


			<div class="post-content">

				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>

				<ul class="post-tags">

					<?php if($qautor!='yes'){?><li><i class="fa fa-user"></i><?php esc_html_e('Por ','hotmagazine'); ?> <?php the_author(); ?></li><br /><?php }?>
					<?php if($qfecha!='yes'){?><li><i class="fa fa-clock-o"></i><?php the_time('M j, Y'); ?></li><?php }?>

				</ul>

			</div>

		</li>

	 <?php if($i==$portfolio->post_count){ ?>

	</ul>	

	<?php } ?>	

	<?php } ?>

	<?php $i++; endwhile; ?>

	<?php endif; ?>

	<?php wp_reset_postdata(); ?>			

</div>
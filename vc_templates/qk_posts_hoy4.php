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
 * @var $cat_ids
 * @var $thumb
 * @var $title
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_qk_team
 */
$author ='';
$output = $after_output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );



?>
<?php 
if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) {
    $paged = get_query_var('page');
} else {
    $paged = 1;
}
$today = current_time('Y-m-d');
$args = array(
	'post_type' => 'post',
	'posts_per_page' => -1,
	'author' => 94,$author,
    'date_query' => array(
        array(
        'after' => $today,
        'inclusive' => true,
        ),
    ),
	
);

$portfolio = new WP_Query($args); 
$i=0;
while($portfolio->have_posts()) : $portfolio->the_post();
	if(get_the_modified_author()==get_the_author_meta( 'display_name',$author)){
		
		$i++;
	}
endwhile;


?>

<div class="item" id="list_load">
	
	<ul class="list-posts2">
		<li>
			<?php $id = get_the_ID(); ?>
			<div class="post-content">
				<?php echo get_author_name($author).' <strong'; if($i<=6){echo' style="color:red;"';}echo '>('.$i.')</strong>'; ?>
			</div>
		</li>
		<?php wp_reset_postdata(); ?>	
		
	</ul>
</div>
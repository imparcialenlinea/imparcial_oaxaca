<?php extract(shortcode_atts(array(
	'tag'=>'',
	'order'=>'',
	'timeago'=>'',
), $atts));
wp_enqueue_script("hotmagazine-ticker", get_template_directory_uri()."/js/jquery.ticker.js",array(),false,true);
wp_enqueue_style( 'hotmagazine-ticker', get_template_directory_uri().'/css/ticker-style.css');

			$arr = array(	'post_type' => 'post', 
							'posts_per_page' => $order,
							'date_query' 		=> array(
									array(
										'after' => $timeago,
										)
									), 
							'meta_query' => array(
								'relation' => 'OR',
								array(
										'key'     => 'especial',
										'value'   => array ( 'ultimahora', 'alertavial' ),
										'compare' => 'IN',
									),
								array(
										'key'     => 'ticker',
										'value'   => 'on',
										'compare' => 'IN',
									),									
		));
			$query = new WP_Query($arr);
			$count = $query->post_count;
			if($query->have_posts() and $count>1){?>

<div class="ticker-news-box">
	<span class="breaking-news"><?php echo esc_html($tag); ?></span>
	<ul id="js-news" data-rtl="<?php if ( is_rtl() ) { ?>rtl<?php }else{  ?>ltr<?php }?>">
		<?php while($query->have_posts()) : $query->the_post();	?>
		<li class="news-item"><span class="time-news"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a> - <?php echo excerpt(20); ?>   </li>
		<?php endwhile;?>
		<?php wp_reset_postdata(); ?>
	</ul>
</div>

<?php }else{?>

<div><script>
    if ( document.getElementById("switchticker").style.display == "none") { 
		document.getElementById("switchticker").style.display = "block";
	}else{
		document.getElementById("switchticker").style.display = "none"}</script></div>   
<?php }?>

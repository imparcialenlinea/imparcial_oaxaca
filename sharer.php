<script>
window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.body.scrollTop > 310 || document.documentElement.scrollTop > 310) {
        document.getElementById("social_side_links").style.visibility = "visible";		
    } else {
        document.getElementById("social_side_links").style.visibility = "hidden";
	
    }
}
</script>


<ul id="social_side_links" style="visibility:hidden">
	<li><a class="iconshare sharefb" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a></li>    
	<li><a class="iconshare sharetw" href="https://twitter.com/home?status=<?php the_title(); ?>  <?php the_permalink(); ?>%20v%C3%ADa%20%40ImparcialOaxaca" target="_blank" ><i class="fab fa-twitter"></i></a></li>
	<li><a class="iconshare sharewa" href="whatsapp://send?text=<?php the_title(); ?>%20%20<?php the_permalink(); ?>" data-action="share/whatsapp/share"><i class="fab fa-whatsapp"></i></a></li>
	<li><a class="iconshare sharetg" href="https://telegram.me/share/url?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" ><i class="fab fa-telegram-plane"></i>        
	<li><a class="iconshare sharegp" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank" rel="noopener"><i class="fab fa-google-plus-g"></i></a></li>
	<li><a class="iconshare sharemail" href="mailto:?&subject=<?php echo htmlspecialchars(get_the_title()); ?>&body=Mira%20esta%20nota%20de%20EL%20IMPARCIAL%20DE%20OAXACA%20<?php the_permalink(); ?>" target="_blank"><i class="fas fa-envelope"></i></a></li>
</ul>                            


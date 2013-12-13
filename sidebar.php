 <!--Sidebar-->

	   <article class="grid_3" id="side_bar" class="center">
	    <!--  <h4>More about me!</h4>
	    <img src="images/sadao.jpg" alt="It's Me!!" class="me">
		 <p>My name is George Offley, and I am a freelance web developer, movie buff, and I love all
   		    things internet! I love to blog about the things I'm working on, and I love to talk so feel free
			to contact me!</p>
		 -->
		 <h4>More about me!</h4>
		 <p>My name is George Offley, and I am a freelance web developer, movie buff, and I love all
   		    things internet! I love to blog about the things I'm working on, and I love to talk so feel free
			to contact me!</p>
			<br />
		 <br />
		 <h4>Recent Stuff</h4>
		 <ul>	
		 <?php
		 	$args = array( 'numberposts' => '5' );
		 	$recent_posts = wp_get_recent_posts( $args );
		 	foreach( $recent_posts as $recent ){
		 		echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look' .esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
		 	}
		 ?>
		</ul>
	   </article>

<!--End Sidebar-->
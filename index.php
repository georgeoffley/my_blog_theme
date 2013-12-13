<?php get_header(); ?>
   <!--Page C0ntent-->

   <section class="container_12 content">
	  <!--Sidebar-->
    <?php get_sidebar(); ?>
    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

	   <article class="grid_7 post">
	     <h3><a class="post_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<!-- Place this tag where you want the share button to render. -->
      <ul class="social">
        <li><div class="g-plus" data-action="share" data-annotation="none" data-height="15"></div></li>
        <li><div class="fb-share-button" data-href="http://developers.facebook.com/docs/plugins/" data-type="button_count"></div></li>

        <li><div id="fb-root"></div></li>
        <li><a href="https://twitter.com/share" class="twitter-share-button" data-via="georgeoffley">Tweet</a></li>
      </ul>
      <br />
       <?php the_content('Read On..'); ?>
       <br />
       <?php _e('Written by'); ?> <?php  the_author(); ?>
       <br />
       <?php _e(''); ?> <?php the_date(); ?>
	   </article>
     <?php endwhile; ?>
   <?php endif; ?>
	 </section>
<?php get_footer(); ?>
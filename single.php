<?php get_header(); ?>
   <!--Page C0ntent-->
   
   <section class="container_12 content">
	  <!--Sidebar-->
    <?php get_sidebar(); ?>
    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

	   <article class="grid_7 post post_selected">
	     <h3><a class="post_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
       <ul class="drid_7 social">
        <li><div class="g-plus" data-action="share" data-annotation="none" data-height="15"></div></li>
        <li><div class="fb-share-button" data-href="http://developers.facebook.com/docs/plugins/" data-type="button_count"></div></li>

        <li><div id="fb-root"></div></li>
        <li><a href="https://twitter.com/share" class="twitter-share-button" data-via="georgeoffley">Tweet</a></li>
      </ul>
      <div class="clear clearfix"></div>
       <?php the_content(); ?>
      <?php _e('Written by'); ?> <?php  the_author(); ?>

      <br />  

       <?php _e('Date posted:'); ?> <?php the_date(); ?>

       <br />

       <?php _e('Catagories&#58;'); ?> <?php the_category(', ') ?>
	   </article>
     <?php endwhile; ?>
   <?php endif; ?>

   <!--Comments-->
   <div class="comments-template grid_7">
      <?php comments_template(); ?>
   </div>
   <div class="clear clearfix"></div>

   <!--Show Comments-->
   <div class="comment_display grid_11">
    <?php 
    $comments = get_comments(array('post_id' => $post ->ID, 'status' => 'approve', 'order' => 'DESC') );
    foreach($comments as $comment) {
      echo('<div class="single_comment>"');
      echo('<br />');
      echo('<br />');
      echo get_avatar( $comment, $id_or_email, $default = 'http://afflatus.webfactoryltd.com/images/default_gravatar.jpg', $size = '96' ); 
      //echo('<div class="clear clearfix"></div>');
      //echo('<br />');
      echo('<p class="comment_author">' . $comment->comment_author . ' Said' . ': ' . '</p>');
      echo('<p class="comment_content">' . $comment->comment_content . '<br />' . ' at ' . $comment->comment_date . '</p>');
      echo('</div>');
      echo('<br />');
      }
    //endforeach;
    ?>
  
   </div>
   <!--http://codex.wordpress.org/Function_Reference/get_comments  // look to this for reference-->
   <div class="clear clearfix"></div>
	 </section>
<?php get_footer(); ?>
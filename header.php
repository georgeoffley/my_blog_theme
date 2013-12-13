<?php ob_start(); ?>

<!DOCTYPE html>
<html>
  <head>

  <title><?php bloginfo('name'); ?> <?php if ( is_single()) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>  

  <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>">
  <!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
  <meta charset="utf-8" />
  <meta name="description" content="George Offley Development">
  <meta name="author" content="George Offley">
  <meta name="keywords" content="George Offley Development, web, web developer, home, build websites">
  <?php wp_head(); ?>
  <!--Loading animation-->
  <style>
    .loader {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url('wp-content/themes/my_theme_test2/images/page-loader.gif') 50% 50% no-repeat rgb(249,249,249);
}
  </style>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  </head>
  <!--Added the grid.css and global.css file-->
  <body>
    <div class="loader"></div>
    <div class="container_12 container">
	 <!--Header-->
     <header class="container_12 title_hdr">
      <div class="page_title">
      	<h1 class="title" id="title"><a href="index.php">George Offley</a><br />
           <b>I make the web do stuff</b>
        </h1>
      </div>  
     </header>
	 <!--End Header-->
	 <!--Navigation-->
      <nav class="container_12 nav_bar">
        <ul class="nav_list">
          <!--
          <li><div><a href="index.html" class="selected">Blog</a></div></li>
          <li><div><a href="about.html">About</a></div></li>
          <li><div><a href="work.html">Work</a></div></li>
          <li><div><a href="contact.html">Contact</a></div></li>
          -->
          <?php wp_list_pages('sort_column=menu_order&depth=1&title_li=');?>
        </ul>
      </nav>
	  <!--End Navigation
    Tutorial: 

    http://webdesignerwall.com/tutorials/building-custom-wordpress-theme


    -->
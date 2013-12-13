<!doctype html>
<html>
<head>
  <title>404!</title>
  <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>">
  <!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript">
   $(window).load(function() {
    $(".loader").fadeOut("slow");
  })

   </script>
   <style type="text/css">

  html,
  body {
    height: 100%;
    overflow: hidden;
  }

   .loader {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url('wp-content/themes/my_theme_test2/images/page-loader.gif') 50% 50% no-repeat rgb(249,249,249);
  }

  .four_oh_four_content {
    margin-left: auto;
    margin-right: auto;
    width: 960px;
  }

  .four_oh_four_container {
    width: 950px;
    height: 400px;
    position: fixed;
    top:0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    background-color: #fff;
    border-radius: 5px;
    -moz-box-shadow:    3px 3px 5px 6px #ccc;
    -webkit-box-shadow: 3px 3px 5px 6px #ccc;
    box-shadow:         3px 3px 5px 6px #ccc;
    padding: 5px;
  }

  .four_oh_four_title_one {
    text-align: center;
    font-size: 3.5em;
    margin-top: 10px;
  }

  .four_oh_four_img {
    max-width: 100%;
    float: left;
    
  }


  .four_oh_four_title_two {
    font-size: 2em;
  }

  .four_oh_four_message {
    float: right;
    position: relative;
    bottom: 200px;
    right: 50px;  
  }

  .four_oh_four_message > p {
    font-size: 1.25em;
  }

  .home_link {
    font-size: 1.5em;
    text-transform:uppercase;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    transition: all 0.3s ease;
    color: black;
  }

  .home_link:hover {
    color: black;
    text-shadow: 1px 1px #34495e;
  }

  .home_link:visited {
    text-decoration: none;
  }



</style>
</head>  
<body>
   <!--Page C0ntent-->
   <div class="loader"></div>
   <section class="four_oh_four_content">
    <h2 class="four_oh_four_title_one">404 Error!</h2>
    <article class="four_oh_four_container">
        <img src="wp-content/themes/my_theme_test2/images/great-scott-404.jpg" class="four_oh_four_img" alt="404!">
        <div class="clear clearfix"></div>
        <div class="four_oh_four_message">
          <h2 class="four_oh_four_title_two">GREAT SCOTT!!</h2> <br />
          <p>We must have over shot it! The page doesn't seem to be here <br />
            We have just enough power to <span><a href="index.php" class="home_link">go home!</a></span></p>

        </div>
    </article>
	 </section>
</body>
</html>   
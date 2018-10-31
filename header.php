<!DOCTYPE html>
<html dir="ltr" lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>

    <!-- Bootstrap -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"> 
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

	  
<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
	
  
	  
	  <?php
	  if (is_front_page()) ;
	  ?>


		
		<?php
			wp_nav_menu(array(
			'theme_location' => 'place_global',
			'depth'           => 2,
			'container' => 'nav',
			'container_class' => 'navbar navbar-default navbar-fixed-top',
				'menu_class'      => 'nav navbar-nav',

			));
		?>
	  
	  

	
	
	<div class="top-video"> 
	  <div  style=" font-size: 2em; font-weight: 600; position: absolute; top: 200px; left: 35%; z-index: 0; text-align: center; ">We <h1 style="color:white; font-size: 6em; line-height:0.8em;">Design</h1></div>
	    <video src="http://www.torutsume.net/wp-content/uploads/2018/10/video-top.mp4" alt="<?php bloginfo('name'); ?>" class="center-block video-style" autoplay playsinline muted loop>		
		</video>
		

	</div> 
    </div><!--container-fluid end-->
	 
	  
<div class="container-fluid container" > <!--main-->

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
	  
	<div class="container-fluid" style="background-color: #F5DB36 !important; ">
	  <nav class="navbar navbar-default navbar-fixed-top"  style="background-color: #F5DB36 !important; ">
    	<div class="navbar-header">
  			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
    	    <span class="icon-bar"></span>
       		<span class="icon-bar"></span>
        	<span class="icon-bar"></span>
  			</button>
			<a class="navbar-brand" href="#"><img height="30px" src="<?php bloginfo('template_url'); ?>/images/logo-top.png" alt="top"></a>
		</div>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
    		<ul class="nav navbar-nav">
        		<li class="menu-item"><a href="#">会社概要</a></li>
        		<li><a href="#">対応実績</a>
          			<ul  class="dropdown-menu">
            			<li><a href="#">フィリピン</a></li>
            			<li><a href="#">国内</a></li>
            			<li><a href="#">その他</a></li>
         			</ul>
        		</li>
        		<li class="menu-item"><a href="#">コラム</a></li>
       			<li class="menu-item"><a href="#">お問い合わせ</a></li>
      		</ul><!-- #menu-global end -->
			<form class="navbar-form navbar-right" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="検索キーワード">
				</div>
				<button type="submit" class="btn btn-default">検索</button>
	 		 </form>
	    </div>
    </nav>
	<div style="background-color: #F5DB36 !important; padding-top:200px; "> 
	  <div style=" font-size: 2em; font-weight: 600; position: absolute; top: 200px; left: 35%; z-index: 0; text-align: center;">We <h1 style="color:white; font-size: 6em; line-height:0.8em;">Design</h1></div>
	    <video src="http://www.torutsume.net/wp-content/uploads/2018/10/video-top.mp4" height="500" style="padding-top:200px; " alt="" class="center-block " autoplay playsinline muted loop></video>
	</div> 
    </div><!--container-fluid end-->
	 
	  
<div class="container-fluid container" > <!--main-->

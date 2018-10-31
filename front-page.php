<?php get_header(); ?>
	<div class="container-fluid container" > <!--main-->
		<div class="row top-main col-xs-12">
		<h1><span class="top-main-title">ExDesign helps your <br>business worldwide</span></h1>
			<div class="col-md-6 col-xs-12  top-main-text-blue">コーディング・Webデザイン・テクニカルライティング・技術翻訳など幅広く対応。WebデザインやHTML/CSSコーディングを請け負っています。テクニカルライティング19年の実績を活かし、ユーザビリティ設計を含めて対応します。</div>
			<div class="col-md-6 col-xs-12  pull-right top-main-text-black">UI/UXデザインおよびテクニカルライティングを請け負っています。対象製品は、ソフトウェアからハードウェアまで幅広く実績がありますが、特に工作機械や発電プラントといった重工業系の対象製品のヘルプやマニュアル制作実績が多数あります。</div>
			<div class="col-md-6 col-xs-12  pull-right top-main-text-black">InDesign/Illustrator/Photoshop等を駆使し、構造化されたエディトリアルデザインを行います。特に、ホワイトペーパー、マニュアルや技術文書のデザインの実績が多数あります。</div>
		</div>
		<div class="row row-eq-height col-xs-12">
	
			<article class="col-md-6 col-xs-12 box">
		

						
				<?php			query_posts('posts_per_page=-1&post_type=page&orderby=menu_order&order=asc&post_parent=39');
					if (have_posts()):
					$count = 1;
					while (have_posts()) :
					the_post();
					if ( $count !=1 ) :
				?>		
			
		 </article>
<article class="col-md-6 col-xs-12 box" >


					<?php 
					endif;
				?>	

				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<a href="<?php the_permalink(); ?>"  ><?php the_post_thumbnail('pickup_thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?></a>		
		  			<?php the_short_excerpt(); ?>
							
				  <div class="continue-button"> <a href="<?php the_permalink(); ?>">詳しく見る</a></div>
				  <?php 
					$count++;
			  		endwhile;
			  		endif;
			  		wp_reset_query();
			  		?>
	


        		 </article>
	  </div>  <!-- row col-xs-12 end-->
	
		
		
		
		
			  <div class="row ">
		  <img src="<?php bloginfo('template_url'); ?>/images/logo.png" class="img-responsive center-block" style="margin-top: 5%;" alt="logo">
	  	  <div class="case-study center-block" >これまでの実績の一部を紹介します。<br>コーディング・Webデザイン・テクニカルライティング・技術翻訳など幅広く対応しています。<br>マニュアルライティング、技術翻訳からエディトリアルデザインまで対応。ExperienceをDesignします。<br>案件の主担当は、IT、語学、プログラミング、音楽と興味の幅が広く、良く言えば守備範囲が広い、悪く言えば器用貧乏が悩みです。</div>
		  	<button type="button" class="btn btn-default btn-lg center-block button-style ">Show me everything</button>
		</div>
	 	<div class="row column-main">
			
				<h1 class="update-title">新着コラム</h1>
            	<span class="pull-right"><a href="<?php echo get_term_link('information', 'category'); ?>">コラムを全て見る</a></span>
	
		<div class="row-eq-height">	
           <article class="col-md-4  col-xs-12 entry-update box">
	
				<?php
			   		query_posts('posts_per_page=6&category_name=information');
			   		if (have_posts()) :
			   		$count = 1;
			   		while (have_posts()):
			   		the_post();
 if($count != 1) :
			   	?>
	
			   
				</article>

					<article class="col-md-4  col-xs-12 entry-update box">	
	<?php
						endif;
						?>

		
				<h2 class=""><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				
				
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?></a>
				
				<?php the_excerpt(); ?>
				<span><a href="<?php the_permalink(); ?>">続きを読む</a></span>
		
			
			<?php
			$count++;
			endwhile;
			endif;
			wp_reset_query();
			?>
					</article>
            
	  	</div>

		
		
		
		
		
		

	</div>
		</div>	

<?php get_footer(); ?>
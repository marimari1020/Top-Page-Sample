<?php get_header(); ?>
	<div class="container-fluid container" > <!--main-->
		
	<?php
		if (have_posts()) :
			while (have_posts()) :
				the_post();
		?>
		<div class="row ">
		<article>
			<header class="">
				<h1  class="top-main-title "><?php the_title(); ?></h1>
			</header>
			<section>
				<?php the_content(); ?>
			</section>
		</article>
		</div>
	<?php
				
			endwhile;
		endif;
		?>	
		

	</div> <!--container-fluid container end-->
			

<?php get_footer(); ?>
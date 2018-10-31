<?php get_header(); ?>
	<div class="container-fluid container" > <!--main-->
		<header class="">
		<h1 class="top-main-title"><?php single_cat_title(); ?></h1></header>
		<div class="">
	<?php
		if (have_posts()) :
			while (have_posts()) :
				the_post();
				get_template_part('content-archive');
			endwhile;
		endif;
		?>	
		
</div>
	</div> <!--container-fluid container end-->
			

<?php get_footer(); ?>
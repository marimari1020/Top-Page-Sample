		<div class="row content-archive-row">
			<article <?php post_class(); ?>>
				<header class="entry-header">
					<time pubdate="pubdate" datetime="<?php the_time('Y-m-d'); ?>" class="entry-date"><?php the_time(get_option('date_format')); ?></time>
					<h1  class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				</header>
				<div class="row box">
				<div class="col-md-2">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('large_thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?>
				</a>
				</div>
				<div class="col-md-10">
					<?php the_excerpt(); ?>
				</div>
				</div>
			</article>
		</div>
	
<!DOCTYPE html>

<html>
<head>
	<title><?php bloginfo('name') ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" type="text/css" media="screen"/>
</head>
<body>
	<div id="wrap">		
		<?php get_header(); ?>
		
		<!-- Begin Content -->
		<div class="contentBody">
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post() ?>
					<div class="post_snippet">
						<h2>
							<a href="<?php the_permalink() ?>"
								title="Permanent link to <?php the_title_attribute() ?>">
								<?php the_title() ?>
							</a>
						</h2>
						<?php the_content('Continue Reading...') ?>
					</div>
				<?php endwhile; ?>
				<p>
					<?php previous_posts_link('Previous Entries');?>
					<?php next_posts_link('Next Entries') ?>
				</p>
			<?php else : ?>
				<div class="post_snippet">
					<h2>
						Sorry but we could not find what you were looking for.
						But don't give up, keep at it.
					</h2>
				</div>
			<?php endif ?>
		</div>
		<!-- End Content -->
		
		<?php get_sidebar(); ?>
		
		<div class="clear"></div>
		
		<!-- Begin Footer -->
		<div id="footer">
			<p>
				<?php bloginfo('name'); ?> is proudly power by <a href="http://wordpress.org">WordPress</a>
				|
				<a href="<?php bloginfo('rss2_url'); ?>">Full Post RSS</a>
				and
				<a href="<?php bloginfo('comments_rss2_url'); ?>">Comments RSS</a>
			</p>
		</div>
		<!-- End Footer -->
	</div>
</body>
</html>
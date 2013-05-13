<!DOCTYPE >
<html>
<head>
	<title><?php bloginfo('name') ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" type="text/css" media="screen"/>
	<script src="<?php bloginfo('template_url') ?>/js/jquery-1.9.1.js"></script>
</head>
<body>
	<div class="container">
		<?php get_header(); ?>
		
		<div class="body-section">
			<div class="main-body">
				<div class="body-banner"></div>
				<div class="body-content">
					<div class="content-title">
						<h3>Welcome to the Heineken Engine</h3>
						<p>
							This central portal facilitates the ordering and approval process of all your
							POS requirements, for global BTL Campaigns. You can order all BTL campaign
							POS materials as required for your market/region.
						</p>
					</div>
					<div class="content-list">
						<?php if(have_posts()) : ?>
							<?php while(have_posts()) : the_post() ?>
								<h2>
									<a href="<?php the_permalink() ?>"
										title="Permanent link to <?php the_title_attribute() ?>">
										<?php the_title() ?>
									</a>
								</h2>
								<?php the_content() ?>
							<?php endwhile; ?>
						<?php endif ?>
					</div>
				</div>
			</div>
			
			<!--
			<?php get_sidebar(); ?>
			-->
		</div>
		
		<?php get_footer(); ?>
	</div>
</body>
</html>
<!DOCTYPE html>

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
			<div class="main-body"></div>
			
			<?php get_sidebar(); ?>
		</div>
		
		<?php get_footer(); ?>
	</div>
</body>
</html>
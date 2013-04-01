<!-- Begin Header -->
<div id="header">
	<h1>
		<a href="<?php echo get_option('home') ?>">
			<?php bloginfo('name') ?>
		</a>
	</h1>
	<div class="tagline">
		<?php bloginfo('description') ?>
	</div>
	
	<ul id="nav">
		<?php wp_list_pages('title_li='); ?>
	</ul>
</div>
<!-- End Header -->
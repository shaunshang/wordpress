<div id="sidebar">
	<ul>
		<!--  Lets widgetize up in here  -->
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar()) : ?>
		<li>
			<?php get_search_form(); ?>
		</li>
		<?php wp_list_pages('title_li=<h3>Pages</h3>'); ?>
		<li>
			<h3>Archives</h3>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</li>
		
		<?php wp_list_categories('title_li=<h3>Categories</h3>'); ?>
		
		<?php endif ?>
	</ul>
</div>

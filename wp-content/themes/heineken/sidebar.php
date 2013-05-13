<div class="sidebar-section">
	<ul class="sidebar-sub-section recent-posts">
		<li>Recent Posts</li>
		<?php wp_get_archives(array( 'type' => 'postbypost', 'limit' => 10)); ?>
	</ul>
	
	<ul class="sidebar-sub-section quick-links">
		<li>Quick Links</li>
		<?php wp_list_bookmarks('title_li='); ?>
	</ul>
	
	<ul class="sidebar-sub-section quick-links quick-support">
		<li>Quick Support</li>
		<li>
			<h2>Questions?</h2>
			<ul>
				<li><a href="javascript:;">Download the Engine User Guide</a></li>
			</ul>
		</li>
		<li>
			<h2>Technical issues</h2>
			<ul>
				<li>
					For technical issues, please contact Rich Darby <br>
					<a href="javascript:;" class="mailto">rich.darby@e-graphics.com</a>
				</li>
			</ul>
		</li>
	</ul>
	
	<div class="bottom-logo"></div>
</div>

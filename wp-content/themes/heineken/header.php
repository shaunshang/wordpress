<div class="header-section">
	<div class="user-control">
		<div class="logo"></div>
		<ul>
			<li>
				Welcome
				<?php global $current_user;
					get_current_user(); 
					
					echo $current_user->user_firstname . " " . $current_user->user_lastname
				?>
			</li>
			<li>
				<a href="javascript:;">Log out</a>
			</li>
		</ul>
	</div>
	<div class="nav">
		
	</div>
</div>
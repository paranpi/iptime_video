<div class="col-sm-3 col-md-2 sidebar">
	<ul class="nav nav-sidebar">
		<?php				 
		foreach($sidebar_menu_list as $value) {
			echo '<li>';
			printf('<a href="#">%s</a>',$value);
			echo '</li>';					
		}?>		
	</ul>	
</div>
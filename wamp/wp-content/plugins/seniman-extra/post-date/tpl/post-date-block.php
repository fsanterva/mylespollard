<div class="post-date clearfix">
	<?php 
	if($date_type == 'publish') {
		the_time( get_option( 'date_format' ) );
	}
	elseif($date_type == 'modify') {
		the_modified_date('Y-m-j');
	} ?>
</div>
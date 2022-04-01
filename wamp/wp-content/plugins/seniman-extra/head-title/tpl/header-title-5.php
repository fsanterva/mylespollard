<!-- Head Title 5 -->
<div class="head-title head-title-5 text-<?php echo esc_attr($align); ?> clearfix">
	<<?php echo sanitize_text_field($title_size); ?> class="the-title">
		<span><?php echo sanitize_text_field( $the_title ); ?></span>
	</<?php echo sanitize_text_field($title_size); ?>>
	
	<?php if($head_use_subtitle == 'on') { ?>
		<span class="subtitle"><?php echo sanitize_text_field( $the_subtitle ); ?></span>
	<?php } ?>
</div>
<!-- End Head Title 5 -->
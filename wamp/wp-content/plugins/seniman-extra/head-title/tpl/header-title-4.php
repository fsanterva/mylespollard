<div class="head-title head-title-4 text-<?php echo esc_attr($align); ?> clearfix">
	<<?php echo sanitize_text_field($title_size); ?> class="the-title">
		<span class="inner-title"><?php echo sanitize_text_field( $the_title ); ?></span>
	</<?php echo sanitize_text_field($title_size); ?>>

	<?php if($head_use_subtitle == 'on') { ?>
		<span class="subtitle"><?php echo sanitize_text_field( $the_subtitle ); ?></span>
	<?php } ?>
</div>
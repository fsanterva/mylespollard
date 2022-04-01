<div class="head-title head-title-2 text-<?php echo esc_attr($align); ?> clearfix">
	<<?php echo sanitize_text_field($title_size); ?> class="the-title">
		<?php if($head_use_subtitle == 'on') { ?>
			<span class="subtitle"><?php echo sanitize_text_field( $the_subtitle ); ?></span>
		<?php } ?>
		<?php echo sanitize_text_field( $the_title ); ?>
	</<?php echo sanitize_text_field($title_size); ?>>
</div>
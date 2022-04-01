<?php 

?>

<div class="head-title head-title-1 text-<?php echo esc_attr($align); ?> bg-image clearfix">
	<<?php echo sanitize_text_field($title_size); ?> class="the-title">
		<?php echo sanitize_text_field( $the_title ); ?>
	</<?php echo sanitize_text_field($title_size); ?>>

	<?php if($head_use_subtitle == 'on') { ?>
		<span class="subtitle"><?php echo balancetags( $the_subtitle ); ?></span>
	<?php } ?>
</div>
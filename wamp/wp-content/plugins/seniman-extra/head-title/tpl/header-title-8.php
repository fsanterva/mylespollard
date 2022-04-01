<div class="head-title head-title-8 text-<?php echo esc_attr($align); ?> clearfix">
	<<?php echo $title_size; ?> class="the-title">
		<?php echo $the_title; ?><?php if(!empty($title_end)) { ?><span class="title-end"><?php echo $title_end; ?></span><?php } ?>
	</<?php echo $title_size; ?>>
	<?php if($head_use_subtitle == 'on') { ?>
	<span class="subtitle">
		<?php echo $the_subtitle; ?>
	</span>
	<?php } ?>
</div>
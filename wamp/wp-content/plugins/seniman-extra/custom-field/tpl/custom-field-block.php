<?php if(have_rows('portfolio_details')): ?>
<div class="portfolio-details detail-columns-<?php echo $instance['detail_columns']; ?> clearfix">
	<?php while(have_rows('portfolio_details')):the_row(); 
		$detail_name	= get_sub_field('detail_name');
		$detail_text	= get_sub_field('detail_text');
	?>
	<div class="detail-item detail-item-block">
		<span class="detail-title"><?php echo sanitize_text_field( $detail_name ); ?></span>
		<h5 class="detail-info"><?php echo sanitize_text_field( $detail_text ); ?></h5>
	</div>
	<?php endwhile; ?>
</div>
<?php endif; ?>
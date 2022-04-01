<div class="client-wrap clearfix">
	<div class="client-inner-content">

	<?php foreach ( $clients as $client ) : 
	$client_id = $client['client_img']['id'];

	$client_url = $client['client_img']['url'];

	$client_url = wp_get_attachment_image_src( get_post_thumbnail_id($client_url), 'full');

	$img_url_blog = $client_url;

	$client_img = aq_resize($img_url_blog,  80, 80, true, true, true);	
	if ($client_img) {
 	$client_img = $client_img;
	}
	else {
	$client_id2 = wp_get_attachment_image_src($client_id, 'seniman-client'); 
	$client_img = $client_id2[0];
		}
?>
	<div class="client-content column <?php echo esc_attr( $column_choose_column ); ?> <?php echo esc_attr($mobile_choose_column); ?> <?php echo esc_attr($tablet_choose_column); ?>">
		<a href="<?php echo esc_url($client['client_link']['url']); ?>">
			<img src="<?php echo esc_url($client_img); ?>" alt="<?php echo sanitize_text_field($client['client_author']); ?>">
		</a>
	</div>

	<?php endforeach; ?>

	</div>
</div>
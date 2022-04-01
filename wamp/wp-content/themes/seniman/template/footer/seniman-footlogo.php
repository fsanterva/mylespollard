<div class="logo-footer foot-col-item">
	<?php $seniman_foot_logo = '';
	$options = get_option('seniman_framework');
	if (isset($options['foot_logo'])) {
	$seniman_foot_logo = $options['foot_logo']; ?>
		<img src="<?php echo esc_url( $seniman_foot_logo['url'] ); ?>" alt="<?php esc_attr_e( 'logo-footer', 'seniman' ); ?>">
	<?php } ?>
</div>
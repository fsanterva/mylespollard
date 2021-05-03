<div class="foot-col-item clearfix">
<?php 
$options = get_option('seniman_framework');
$seniman_foot_address = $options['foot_address'];

echo wp_specialchars_decode( esc_html( $seniman_foot_address )); ?>
</div>
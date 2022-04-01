<?php 
	$form_select = $instance['form_select']; 
?>

<div class="seniman-contact-form">
<?php echo do_shortcode('[contact-form-7 id="' . $form_select . '"]');  ?>
</div>

<?php wp_reset_postdata(); ?>
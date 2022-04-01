<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> > <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<!--[if ie]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php wp_head(); ?>

</head>

<body id="body" <?php body_class() ;?>>
	<?php wp_body_open(); ?>
<?php
$logo_id    = get_theme_mod( 'custom_logo' );
$logo_image = wp_get_attachment_image_src( $logo_id, 'full' );

if(class_exists( 'Redux' )) {
	$options 			= get_option('seniman_framework');
	if(!empty($options['wrap_opt'])) {
		$seniman_wrap_opt 	= $options['wrap_opt'];
	}
	else {
		$seniman_wrap_opt = "";
	}

	if(!empty($options['header_scheme'])) {
		$seniman_header_scheme 	= $options['header_scheme'];
	}
	else {
		$seniman_header_scheme = "";
	}

	$seniman_header_alt_logo 	= '';
	if (isset($options['header_alt_logo'])) {
		$seniman_header_alt_logo 	= $options['header_alt_logo'];
		$seniman_alt_logo 			= $seniman_header_alt_logo['url'];
	}

	if(!empty($options['header_1_layout'])) {
		$seniman_head_layout 	= $options['header_1_layout'];
	}
	else {
		$seniman_head_layout = "";
	}

	// header customize position
	if(!empty($options['header_customize_right']['enabled'])) {
		$seniman_right 	= $options['header_customize_right']['enabled'];
	}
	else {
		$seniman_right = "";
	}
	if(!empty($options['header_customize_center']['enabled'])) {
		$seniman_center 	= $options['header_customize_center']['enabled'];
	}
	else {
		$seniman_center = "";
	}
	if(!empty($options['header_customize_left']['enabled'])) {
		$seniman_left 	= $options['header_customize_left']['enabled'];
	}
	else {
		$seniman_left = "";
	}

	// header customize display
	if(!empty($options['header_left_display'])) {
		$seniman_left_display 	= $options['header_left_display'];
	}
	else {
		$seniman_left_display = "";
	}
	if(!empty($options['header_center_display'])) {
		$seniman_center_display 	= $options['header_center_display'];
	}
	else {
		$seniman_center_display = "";
	}
	if(!empty($options['header_right_display'])) {
		$seniman_right_display 	= $options['header_right_display'];
	}
	else {
		$seniman_right_display = "";
	}

	// header features custom
	if(!empty($options['header_animated'])) {
		$seniman_header_animated 	= $options['header_animated'];
	}
	else {
		$seniman_header_animated = "";
	}
	if(!empty($options['fixed_header'])) {
		$fixed_header 	= $options['fixed_header'];
	}
	else {
		$fixed_header = "";
	}
	if(!empty($options['header_fixed_type'])) {
		$header_fixed_type 	= $options['header_fixed_type'];
	}
	else {
		$header_fixed_type = "";
	}
	if(!empty($options['space_fixed_alt'])) {
		$space_fixed_alt 	= $options['space_fixed_alt'];
	}
	else {
		$space_fixed_alt = "";
	}

	// header float
	if(!empty($options['search_bar_style'])) {
		$search_bar_style 	= $options['search_bar_style'];
	}
	else {
		$search_bar_style = "";
	}
	if(!empty($options['header_left_float'])) {
		$header_left_float 	= $options['header_left_float'];
	}
	else {
		$header_left_float = "";
	}
	if(!empty($options['header_center_float'])) {
		$header_center_float 	= $options['header_center_float'];
	}
	else {
		$header_center_float = "";
	}
	if(!empty($options['header_right_float'])) {
		$header_right_float 	= $options['header_right_float'];
	}
	else {
		$header_right_float = "";
	}

	// header align
	if(!empty($options['header_left_align'])) {
		$header_left_align 	= $options['header_left_align'];
	}
	else {
		$header_left_align = "";
	}
	if(!empty($options['header_center_align'])) {
		$header_center_align 	= $options['header_center_align'];
	}
	else {
		$header_center_align = "";
	}
	if(!empty($options['header_right_align'])) {
		$header_right_align 	= $options['header_right_align'];
	}
	else {
		$header_right_align = "";
	}

	if($seniman_head_layout == '3column-header') {
		$header_3_centered		= $options['header_3_centered'];
	}
	else {
		$header_3_centered		= '';
	}

	if(!empty($options['header_boxed'])) {
		$header_boxed 	= $options['header_boxed'];
	}
	else {
		$header_boxed = "";
	}

	if($header_boxed == true ) {
		$head_box_class = 'boxed-head-in';
	}
	else {
		$head_box_class = '';
	}

	if(class_exists( 'acf' )) {
		$seniman_header_style_choice = get_field('header_style_choice');
	}
?>
	<?php if(class_exists( 'Redux' ) && $seniman_wrap_opt == 'bordered'){ ?>
	<div class="bordered top-border"></div>
	<div class="bordered bottom-border"></div>
	<div class="bordered left-border"></div>
	<div class="bordered right-border"></div>
	<?php } ?>

	<div id="main-wrapper" class="main-wrapper<?php if(class_exists( 'Redux' ) && $seniman_wrap_opt == 'bordered'){ ?> bordered-main-wrap<?php } ?> clearfix">

		<?php if($fixed_header == true) {
			echo '<div id="sticky-wrap-head" class="sticky-header-wrap ' . $header_fixed_type . ' clearfix">';
		} ?>

		<!-- Header
		============================================= -->
		<header id="header" class="header-style-1-wrap inner-head-wrap <?php if(class_exists( 'acf' ) && !is_search() && $seniman_header_style_choice == 'alternative'){ ?>alt-head<?php } ?><?php if($seniman_header_animated == '1') { ?> animated<?php } ?> <?php echo esc_attr($head_box_class); ?> clearfix">

			<div class="container clearfix">

			<div class="header-clear <?php echo esc_attr( $header_3_centered ); ?> clearfix">
				<?php if($seniman_head_layout == '3column-header') { ?>
				<div class="fl <?php echo esc_attr( $seniman_left_display ); ?> <?php echo esc_attr( $header_left_float ); ?> <?php echo esc_attr( $header_left_align ); ?> clearfix">
					<?php seniman_header_part('header/header-customize-left' ); ?>
				</div>

				<div class="fc <?php echo esc_attr( $seniman_center_display ); ?> <?php echo esc_attr( $header_center_float ); ?> <?php echo esc_attr( $header_center_align ); ?> clearfix">
					<?php seniman_header_part('header/header-customize-center' ); ?>
				</div>

				<div class="fr <?php echo esc_attr( $seniman_right_display ); ?> <?php echo esc_attr( $header_right_float ); ?> <?php echo esc_attr( $header_right_align ); ?> clearfix">
					<?php seniman_header_part('header/header-customize-right' ); ?>
				</div>
				<?php }
				if($seniman_head_layout == '2column-header') { ?>
				<div class="fl header1-2 <?php echo esc_attr( $seniman_left_display ); ?> <?php echo esc_attr( $header_left_float ); ?> clearfix">
					<?php seniman_header_part('header/header-customize-left' ); ?>
				</div>

				<div class="fr header1-2 <?php echo esc_attr( $seniman_right_display ); ?> <?php echo esc_attr( $header_right_float ); ?> clearfix">
					<?php seniman_header_part('header/header-customize-right' ); ?>
				</div>
				<?php }
				if($seniman_head_layout == '1column-header') { ?>
				<div class="fc <?php echo esc_attr( $seniman_center_display ); ?> clearfix">
					<?php seniman_header_part('header/header-customize-center' ); ?>
				</div>
				<?php } ?>
			</div>

			</div>

		</header>

		<?php if($fixed_header == true) {
			echo '</div>';
			if($seniman_header_style_choice == 'alternative' && $space_fixed_alt == 'on') {
			echo '<div class="sticky-header-gap ' . $header_fixed_type . ' clearfix"></div>';
			}
			elseif($seniman_header_style_choice != 'alternative') {
			echo '<div class="sticky-header-gap ' . $header_fixed_type . ' clearfix"></div>';
			}
		} ?>

		<?php
		if($search_bar_style == 'expand') {
			if($seniman_right || $seniman_center || $seniman_left ) {
				if( isset($seniman_right['seniman-search']) || isset($seniman_center['seniman-search']) || isset($seniman_left['seniman-search']) ) {
					get_template_part('/inc/part/search-big', '');
				}
			}
		}
}
else {

if(class_exists( 'acf' )) {
	$sakola_header_style_choice = get_field('header_style_choice');
}
?>

	<div class="main-wrapper clearfix">
	<!-- Header
	============================================= -->
	<header id="header" class="header-style-1-wrap inner-head-wrap <?php if(class_exists( 'acf' ) && $seniman_header_style_choice == 'alternative'){ ?>alt-head<?php } ?> animated clearfix no-redux">

		<div class="container">

			<div class="fl">
				<div class="logo head-item">
					<?php if ( ! empty( $logo_image ) ) { ?>
					<div class="logo-image">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo esc_url( $logo_image[0] ); ?>" alt="<?php esc_attr_e( 'logo', 'seniman' ); ?>" />
						</a>
					</div>
					<?php }
					else { ?>
					<div class="logo-title">
						<h2 class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="header-logo"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
						</h2>
					</div>
					<?php } ?>
				</div>
				<!-- end logo -->
			</div>

			<div class="fr">
				<!-- Mobile menu toggle button (hamburger/x icon) -->
				<input id="main-menu-state" type="checkbox" />
				<label class="main-menu-btn sub-menu-triger" for="main-menu-state">
					<span class="main-menu-btn-icon"></span>
				</label>

				<!-- Primary Navigation
				============================================= -->
				<nav id="primary-menu" class="menu main-menu head-item">
					<?php seniman_main_nav_menu(); ?>
				</nav>
				<!-- end primary menu -->

				<div class="search-wrap">
					<button id="btn-search"><i class="icon-simple-line-icons-143"></i></button>
				</div>
			</div>

			<?php get_template_part('/inc/part/search-big', ''); ?>
		</div>

	</header>
<?php } ?>
<!-- HEADER END -->
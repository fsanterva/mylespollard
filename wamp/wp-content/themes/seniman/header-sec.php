<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="header-burger-animation"> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<!--[if ie]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php wp_head(); ?>

</head>

<body id="body" <?php body_class() ;?>>
	<?php wp_body_open(); ?>
<?php
$options = get_option('seniman_framework');
$logo = '';
if (isset($options['logo_upload'])) {
$logo = $options['logo_upload'];
$upload_logo = $logo['url'];
}

$seniman_wrap_opt 	= $options['wrap_opt'];

$seniman_header_animated    	= $options['header_animated'];
$fixed_header						= $options['fixed_header'];
$header_fixed_type					= $options['header_fixed_type'];

if(class_exists( 'acf' )) {
	$seniman_header_style_choice = get_field('header_style_choice');
}
?>
	
	<?php if($seniman_wrap_opt == 'bordered'){ ?>
	<div class="bordered top-border"></div>
	<div class="bordered bottom-border"></div>
	<div class="bordered left-border"></div>
	<div class="bordered right-border"></div>
	<?php } ?>

<!-- Main Wrapper -->
<div id="main-wrapper" class="clearfix<?php if(class_exists( 'Redux' ) && $seniman_wrap_opt == 'bordered'){ ?> bordered-main-wrap<?php } ?>">

<div id="perspective" class="perspective effect-airbnb">

	<div class="container-header-burger">
		<div class="wrapper-header-burger"><!-- wrapper needed for scroll -->

		<?php if($fixed_header == true) {
			echo '<div id="sticky-wrap-head" class="sticky-header-wrap clearfix">';
		} ?>

		<!-- Header
		============================================= -->
		<header id="header" class="header-style-4 inner-head-wrap<?php if($seniman_header_animated == '1') { ?> animated<?php } ?> <?php if(class_exists( 'acf' ) && !is_search() && $seniman_header_style_choice == 'alternative'){ ?>alt-head <?php } ?>clearfix">

			<div class="container clearfix">

				<!-- Logo
				============================================= -->
				<?php seniman_header_part('header/logos'); ?>
				<!-- end logo -->

				<div id="showMenu">
					<span></span>
			  		<span></span>
			  		<span></span>
			  	</div>

			</div>

		</header>
		<!-- HEADER END -->

		<?php if($fixed_header == true) {
			echo '</div>';
			echo '<div class="sticky-header-gap clearfix"></div>';
		} ?>
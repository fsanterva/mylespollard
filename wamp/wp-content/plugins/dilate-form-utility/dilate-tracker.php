<?php
  /*
   Plugin Name: Dilate Form Utility
   Plugin URI: 
   Description: Custom plugin to manage contact form 7 google tracking and many more.
   Version: 1.0
   Author: Dame Angelitud
   Author URI: dameangelitud@gmail.com
   License: 
   */


include("includes/datarow.php");
include("includes/buildrow.php");


/*=============================================
		INITIALIZE ADMIN CUSTOM MENU AND PAGE
==============================================*/
function dilate_tracker_menu() {
	  $hook_suffix = add_menu_page( 'Dilate Form Utility', 'Dilate Form Utility', 'manage_options', 'dilate-form-utility', 'build_screen', 'dashicons-universal-access' );
}
add_action( 'admin_menu', 'dilate_tracker_menu' );


/*=============================================
		REGISTER STYLESHEET TO HEAD OF ADMIN
==============================================*/
function register_head() {
    $siteurl = get_option('siteurl');
    $url = $siteurl . '/wp-content/plugins/' . basename(dirname(__FILE__)) . '/customstyle.css';
    echo "<link rel='stylesheet' type='text/css' href='$url' />\n";
}
add_action('admin_head', 'register_head');


/*=============================================
		BUILD HTML MARK UP INTO ADMIN SCREEN
==============================================*/
function build_screen() {
    if ( !current_user_can( 'manage_options' ) )  {
      wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }

    echo '<div class="wrap">';
    echo "<h2>" . __( 'Dilate Form Utility Page', 'tracking-page' ) . "</h2>";
    ?>
    
    <form name="form1" method="post" action="">
    <table class="widefat fixed customtable" cellspacing="0">
      <thead>
      <tr>
        <th id="columnname" class="manage-column column-columnname" scope="col"><span>Form Name</span></th>
        <th id="columnname" class="manage-column column-columnname small" scope="col"><span>Form ID</span></th>
        <th id="columnname" class="manage-column column-columnname" scope="col"><span>Additional Settings</span></th>
        <th id="columnname" class="manage-column column-columnname" scope="col"><span>Redirect Link</span></th>
      </tr>
      </thead>
			<tbody>
				<?php
	
					$cf7Forms = init_cf7_forms();
					if ( !get_option('dilate_forms_utility_v1') ) {
						save_opts();
						init_data();
					} else {
						init_data();
					}
	
				?>
			</tbody>
      <tfoot>
      <tr>
        <th id="columnname" class="manage-column column-columnname" scope="col"><span>Form Name</span></th>
        <th id="columnname" class="manage-column column-columnname small" scope="col"><span>Form ID</span></th>
        <th id="columnname" class="manage-column column-columnname" scope="col"><span>Additional Settings</span></th>
        <th id="columnname" class="manage-column column-columnname" scope="col"><span>Redirect Link</span></th>
      </tr>
      </tfoot>

      <tbody></tbody>
			
      <p class="submit">
			<input type="hidden" name="hidden_input" value="Y">
      <input type="submit" name="Submit" class="button-submit" value="<?php esc_attr_e('Save Changes') ?>" />
			<input type="submit" name="Refresh" class="button-refresh" value="<?php esc_attr_e('Refresh Forms') ?>" />
				<input type="submit" name="Export" class="button-export" value="<?php esc_attr_e('Export to csv') ?>" />
      </p></table></form></div>
<?php
}


/*=============================================
		INITIALIZE CF7 FORMS INSTANCE
==============================================*/
function init_cf7_forms() {
	
	$args = array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1);
	$cf7forms = get_posts( $args );
	
	return $cf7forms;
	
}


/*=============================================
		PLUGIN EVENT HANDLERS
==============================================*/
function init_data() {
	
	if( isset($_POST["Submit"]) ) {	
		echo "All Changes Saved";
		save_opts();
		build_screen_rows();
	} elseif ( isset($_POST["Refresh"]) ){
		echo "Forms refreshed";
		save_opts();
		build_screen_rows();
	} elseif ( isset($_POST["Export"]) ) {
		convert_to_csv(get_option("dilate_forms_utility_v1"));
	}else {
		build_screen_rows();
	}
	
}


/*========================================================================
		INITIAL LOOP OF CF7 FORMS, ALSO USED FOR SAVING DATA TO OPTIONS DB
==========================================================================*/
function save_opts() {
	
	$cf7Forms = init_cf7_forms();
	$finalarr = array();

	foreach($cf7Forms as $form) {
		$id = $form->ID;
		$name = $form->post_title;
		$trackcode_val = $_POST[$id."_tcode"];
		$redircode_val = $_POST[$id."_rcode"];

		$row = new datarow();
		$row->setFormId($id);
		$row->setFormName($name);
		$row->setTrackCode($trackcode_val);
		$row->setRedirCode($redircode_val);
		$finalarr[$id."_".$name] = $row;
	}

	update_option("dilate_forms_utility_v1", $finalarr);
	
}


/*=============================================
		BUILD TABLE ROWS VIA DATAROW CLASS
==============================================*/
function build_screen_rows() {
	
	$opt = get_option("dilate_forms_utility_v1");
	$data = new datarow();
	foreach($opt as $data) {
		$row = new buildrow();
		echo $row->createRow($data);
	}
	
}


/*===================================================
		EXPORTS CURRENT FORMS AND SETTINGS TO CSV FILE
=====================================================*/
function convert_to_csv($opt){
  header("Content-Type: text/csv");
	header("Content-Disposition: attachment; filename=cf7forms.csv");
	header("Cache-Control: no-cache, no-store, must-revalidate");
	header("Pragma: no-cache");
	header("Expires: 0");

	ob_end_clean();
	$output = fopen("php://output", "w");
	foreach ($opt as $row) {
			$json  = json_encode($row);
			$array = json_decode($json, true);
			fputcsv($output, $array);
	}
	exit(0);
}



/*===================================================
		PRINT TRACKING AND REDIRECT SCRIPT TO FOOTER
=====================================================*/
function printCode() {
	$opt = get_option("dilate_forms_utility_v1");
	
	$temparr = [];
	$x = 0;
	
	$temparr[$x++] = "<script>";
	$temparr[$x++] = "document.addEventListener( 'wpcf7mailsent', function( event ) {";
	foreach($opt as $data) {
		$id = $data->getFormId();
		$tcode = $data->getTrackCode();
		$rcode = $data->getRedirCode();
		$temparr[$x++] = "if ( '".$id."' == event.detail.contactFormId ) {";
		$temparr[$x++] = stripslashes($tcode);
		
		if ( $rcode != "" || $rcode != null ) {
			$temparr[$x++] = "setTimeout(function () {";
			$temparr[$x++] = "window.location.replace('".stripslashes($rcode)."');";
			$temparr[$x++] = " }, 3000);";
		}
		$temparr[$x++] = "}";
	}
	$temparr[$x++] = "}, false );";
	$temparr[$x++] = "</script>";
	
	echo implode("\n",$temparr);
}
add_action( 'wp_footer', 'printCode' );




?>
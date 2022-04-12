<?php
/**
* Plugin Name: Plugin Compatibility Checker
* Description: Check Your Plugin are compatibale uptop which version of WordPress, before preforming WordPress Update
* Version: 1.7
* Author: Dinesh Pilani
* Author URI: https://www.linkedin.com/in/dineshpilani/
**/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( !class_exists('PCC')){
Class PCC{
  public  function __construct() {
//Hook to add admin menu 
add_action("admin_menu", array($this,"PCC_Menu_Pages"));
    }
//Define 'UCC_Menu_Pges'
function PCC_Menu_Pages()
{
    add_menu_page( 'Plugin Compatibility Checker', 'Plugin Compatibility Checker', 'manage_options', 'PCC_Check', array(__CLASS__,'PCC_Check'), 'dashicons-screenoptions', 90);

}
//Define function
public static function PCC_Check()
{
	
				//Initilize Of My Custom css
			wp_enqueue_style( 'pcctablecss.css', plugin_dir_url( __FILE__ ) . 'customcss/pcccustom.css', array(), '1.0.0' );
			
			wp_enqueue_style( 'pcctablecss.css' );
	
			wp_enqueue_script( 'filtertable.js', plugin_dir_url( __FILE__ ) . 'customjs/filtertable.js', array(), '1.0.0' );
			
			wp_enqueue_script( 'filtertable.js' );
	
		
			wp_enqueue_style( 'bootstrapcss.css', plugin_dir_url( __FILE__ ) . 'customcss/bootstrap.min.css', array(), '1.0.1' );
			
			wp_enqueue_style( 'bootstrapcss.css' );
			
		//	wp_enqueue_script( 'bootstrapjs.js', plugin_dir_url( __FILE__ ) . 'customjs/bootstrap.min.js', array(), '1.0.1' );
			
			//wp_enqueue_script( 'bootstrapjs.js' );
	
	
	
	
		echo '<h1>Check Your Plugin Compatibility</h1>';
        // Get Current Version of Running WordPress
        $CurrentWPVersion= get_bloginfo( 'version' );
        
        //Get Stable Version Of WordPress
        $wordpressurl = 'https://api.wordpress.org/core/version-check/1.7/';
        $wpresponse = wp_remote_get($wordpressurl);
        if(!isset($wpresponse))
        {
            echo '<center><h2>Please Reload The Page Again</h2></center>';
        }
        $json = $wpresponse['body'];
        $obj = json_decode($json);
        $upgrade = $obj->offers[0];
        $StableVersion=$upgrade->version;
 
        echo '<b>Your Current WordPress Version Running is :-'.$CurrentWPVersion.'</b><br>';
		if($CurrentWPVersion == $StableVersion)
		{
			echo '<b>You are already having the lastest version of WordPress </b><br><br>';
		}
		else
		{
		echo '<b>The Lastest Stable Version Of WordPress is Available is :-'.$StableVersion.'</b><br><br>';
		}
		
        // Include StyleSheet and Initilize Table
        echo '<b>Filter By Plugin Status</b> <select class="form-control fltr" data-role="select-dropdown" id="plgstatus">
<option value="all">Plugin Status </option>
<option value="Activated">Activated	</option>
<option value="Deactivated">Deactivated</option>
</select>';
        echo '<div class="table-responsive table-hover"><table class="table table-bordered" id="pcctable">
        <thead class="thead-dark">
        <tr>
        <th scope="col">Plugin Name</th>
        <th scope="col">Current Plugin Version</th>
        <th scope="col">Lastest Plugin Version</th>
        <th scope="col">Require PHP Version</th>
        <th scope="col">Compatible with WordPress Version</th>
        <th scope="col">Plugin Status</th>
        <th scope="col">Updateable</th>
        </tr>
        </thead>';
 
        
         $plugin=get_plugins();
         $getpluginstatus=get_option('active_plugins');
         $Total_plugin =count($plugin);
        $Number_Of_plugin_activate_flag= 0;
        $Number_Of_plugin_deactivate_flag= 0;
        
echo '<b>Total Number of Installed Plugin '.':-'.$Total_plugin .'</b>'. '<br><br>';
         
         foreach($plugin as $plug)
            {
         
                $PluginName=$plug['Name'];
                $PluginSlug=$plug['TextDomain'];
     
              	$PluginURI=$plug['PluginURI'];
				if(!$PluginSlug)
				{
					$PluginSlug=explode("/", $PluginURI, 5);
					$PluginSlug = rtrim($PluginSlug['4'],"/");
				}
			    $PluginCurrentVersion=$plug['Version'];
                $Pluginurlwithslug = 'https://api.wordpress.org/plugins/info/1.2/?action=plugin_information&request[slug]='.$PluginSlug; 
                $PluginResponse=wp_remote_get($Pluginurlwithslug); 
                $PluginResult=$PluginResponse['body'];
                if(!isset($PluginResult))
                {
                    echo '<center><h2>Please Reload The Page Again</h2></center>';
                }
                $pluginobj = (array)json_decode($PluginResult);
                $Pluginunserunserializedata= explode(',',$PluginResponse['body']);
                     if (!isset($pluginobj['error']))
                            { 
                                $lenght=count($Pluginunserunserializedata);
                                    for($i=0; $i <= $lenght; $i++)
                                        {
                                            if(array_key_exists($i,$Pluginunserunserializedata))
                                            $exp=explode('"',$Pluginunserunserializedata[$i]);
                                            if(array_key_exists(1,$exp))
                                            {
                                            if($exp['1'] == 'tested')
                                            {
                                            $TestuptoVersion=$exp['3'];
                                            }
                                            else if($exp['1'] == 'version')
                                            {
                                            $PluginLastestVerion=$exp['3'];
                                            }
                                            else if($exp['1'] == 'requires')
                                            {
                                            $PluginRequireVerion=$exp['3'];
                                            }
                                            
                                            }
                                        }
                            }
                    else
                    {
                        $PluginLastestVerion='NULL';
                        $TestuptoVersion='NULL';
                    }
                    
                    if($StableVersion == $TestuptoVersion)
                    {
                        $Upgradeable='Yes';
                        $Color='green';
                    }
                    else
                    {
                        $Upgradeable='No';
                        $Color='red';
                    }
                        if($PluginLastestVerion == 'version')
                        {
                            $PluginLastestVerion = $PluginCurrentVersion;
                        }
        
           if($PluginSlug){
 
   if (preg_grep("/$PluginSlug/", $getpluginstatus))
   {
     
     $plugstats= 'Activated';
     $Number_Of_plugin_activate_flag = $Number_Of_plugin_activate_flag + 1;
      }
      else
            {
                
                $plugstats= 'Deactivated';
                $Number_Of_plugin_deactivate_flag = $Number_Of_plugin_deactivate_flag + 1;
            }
        
       }
          
      
        echo '<tbody>
        <tr>
        <th scope="row">'.$PluginName.'</th>
        <td>'.$PluginCurrentVersion.'</td>
        <td>'.$PluginLastestVerion.'</td>
        <td>'.$PluginRequireVerion.'</td>
        <td>'.$TestuptoVersion.'</td>
        <td>'.$plugstats.'</td>
        <td style="color:'.$Color.'">'.$Upgradeable.'</td>
        </tr>';
}
        echo '</tbody>
        </table> </div>';
    
    
echo '<b>Total Number of Activate Plugin '.':-'.$Number_Of_plugin_activate_flag.'</b>'. '<br>';
echo '<b>Total Number of Deactivate Plugin '.':-'.$Number_Of_plugin_deactivate_flag .'</b>'. '<br>';
         
    
echo '<br><br><b>Note:- The Plugin which are showing NULL that are not found on wordpress org as they may be Custom Plugin or licenced Plugin so please check it with the Author or from the website you have buyed, that is there lastest version avaibale for the plugin.<b><br><br><b>After Analysis Of Above Plugin Please Update the WordPress Accordingly.</b>';



}  
}}
new PCC();
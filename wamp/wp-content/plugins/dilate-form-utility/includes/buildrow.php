<?php
/*=============================================
		CLASS FOR BUILDING SINGLE TABLE ROW
		
		Params: datarow object
==============================================*/
  class buildrow {
    var $tableRow;
    
    function setTableRow($new_table_row) {
      $this->tableRow = $new_table_row;
    }
    
    function getTableRow() {
      return $this->tableRow;
    }
    
    function createRow($row) {
      $cf7_formid = $row->getFormId();
      $cf7_formname = $row->getFormName();
      $cf7_trackcode = $row->getTrackCode();
      $cf7_redircode = $row->getRedirCode();
			$url = admin_url("admin.php?page=wpcf7&post=".$cf7_formid."&action=edit");
			$imgurl = plugin_dir_url(dirname(__FILE__)) . 'images/share-option.png';
      ob_start();
      ?>
      <tr>
				<td class="column-columnname"><a href="<?php echo $url; ?>" target="_blank"><?php echo $cf7_formname; ?><img src="<?php echo $imgurl; ?>"/></i></a></td>
				<td class="column-columnname"><?php echo $cf7_formid; ?></td>
				<td class="column-columnname">
					<div class="">
						<input type="hidden" name="<?php echo $cf7_formid."_hidden"; ?>" value="Y">
						<input type="text" name="<?php echo $cf7_formid."_tcode"; ?>" value="<?php echo stripslashes($cf7_trackcode) ?>" size="20">
					</div>
				</td>
				<td class="column-columnname">
					<div class="">
						<input type="hidden" name="<?php echo $cf7_formid."_hidden"; ?>" value="Y">
						<input type="text" name="<?php echo $cf7_formid."_rcode"; ?>" value="<?php echo stripslashes($cf7_redircode) ?>" size="20">
					</div>
				</td>
			</tr>
      <?php
      return ob_get_clean();
    }
  }
  
?>
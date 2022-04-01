<?php
/*============================================================
		CLASS FOR HANDLING DILATE UTILITY FORM DATA AND SETTINGS
==============================================================*/
    class datarow {
      
      var $formId;
      var $formName;
      var $trackCode;
      var $redirCode;
      
      
      function setFormId($new_form_id) {
        $this->formId = $new_form_id;
      }
      
      function getFormId() {
        return $this->formId;
      }
      
      function setFormName($new_form_name) {
        $this->formName = $new_form_name;
      }
      
      function getFormName() {
        return $this->formName;
      }
      
      function setTrackCode($new_track_code) {
        $this->trackCode = $new_track_code;
      }
      
      function getTrackCode() {
        return $this->trackCode;
      }
      
      function setRedirCode($new_redir_code) {
        $this->redirCode = $new_redir_code;
      }
      
      function getRedirCode() {
        return $this->redirCode;
      }
      
    }
?>
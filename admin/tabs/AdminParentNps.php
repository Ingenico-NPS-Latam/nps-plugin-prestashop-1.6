<?php
include_once( PS_ADMIN_DIR.'/../classes/AdminTab.php');
 
class AdminParentNps extends AdminTab
{
  public function __construct()
  {
  // Initialise the tab by linking it to a database table and setting its default permissions

  parent::__construct();
  }

  public function postProcess()
  {
  // This function is executed when the Submit button is clicked
  // Use it to store the value of text fields in the database

  parent::postProcess();
  }

  public function displayForm($token=NULL)
  {
  // This function can be used to create a form with text fields
  }
}
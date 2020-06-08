<?php

require_once 'view/adminView.php';

class AdminController{

  private $adminView;

  function __construct(){

    $this->adminView = new AdminView();

  }


  function showAdmin()
  {
    $this->adminView->showAdmin();
  }




}


 ?>

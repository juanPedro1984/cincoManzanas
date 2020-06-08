
<?php
require_once 'view/indexView.php';

class Controller{

  private $indexView;

  function __construct(){

    $this->indexView = new IndexView();

  }

  function showIndex(){
    $this->indexView->showIndex();
  }


}


 ?>

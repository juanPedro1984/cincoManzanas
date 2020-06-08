<?php


require_once('libs/Smarty.class.php');


class AdminView{

  function showAdmin(){
    $smarty = new Smarty();
    $smarty->display('templates/admin.tpl');
  }


}



 ?>

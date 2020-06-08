

<?php

require_once('libs/Smarty.class.php');


class IndexView{

  function showIndex(){
    $smarty = new Smarty();
    $smarty->display('templates/index.tpl');
  }


}



 ?>

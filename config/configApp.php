<?php

class ConfigApp{

  public static $ACTION = "action";
  public static $PARAMS = "params";
  public static $ACTIONS = [
    ''=>'controller#showIndex',
    'admin'=>'adminController#showAdmin'
  ];
}
 ?>
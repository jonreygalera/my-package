<?php

namespace Demo\MyPackage;

class Demo {
  public static function dd()
  {
    $args = func_get_args();
    foreach($args as $arg) {
      print_r($arg);
      echo "\n";
    }
  }
}
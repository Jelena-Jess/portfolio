<?php
define("APP_DIR","var/www/html/port/portfolio");

function autoloadCore($class){
  require_once "core/{$class}.php";
}
spl_autoload_register("autoloadCore");
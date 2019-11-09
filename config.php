<?php
define("APP_DIR","htdocs/portfolio/portfolio");

function autoloadCore($class){
  require_once "core/{$class}.php";
}
spl_autoload_register("autoloadCore");
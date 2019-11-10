<?php

abstract class Controller {
  public function loadView($view, $params=array()) {
		foreach ($params as $k=>$param) {
      $this->$k = $param;
    }
    if($view === "main"){
      include_once "view/templates/header_index.php";
    }else{
      include_once "view/templates/header.php";
    }
    include_once "view/{$view}.php";
    include_once "view/templates/sidebar.php";
    include_once "view/templates/footer.php";
  }
public function index() {
  echo "Podrazumevana strana";
}

// Load model
public function model($model){
// Require model file
require_once 'model/' . $model . '.php';

// Instantiate model
return new $model();
}
}
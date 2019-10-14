<?php
class JessieController extends Controller {

  function index() {
    $this->loadView("index");
  }

  function website() {
    $this->loadView("website");
  }

  function logo() {
    $this->loadView("logo");
  }

  function wordpress() {
    $this->loadView("wordpress");
  }

  function content() {
    $this->loadView("content");
  }

  function project_plan() {
    $this->loadView("project_plan");
  }

  function privacy() {
    $this->loadView("privacy");
  }
}
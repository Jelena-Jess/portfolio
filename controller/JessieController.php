<?php
class JessieController extends Controller {

  function index() {
    $this->loadView("templates/header_index");
    $this->loadView("index");
    $this->loadView("templates/sidebar");
    $this->loadView("templates/footer");
  }

  function website() {
    $this->loadView("templates/header");
    $this->loadView("website");
    $this->loadView("templates/sidebar");
    $this->loadView("templates/footer");
  }

  function logo() {
    $this->loadView("templates/header");
    $this->loadView("logo");
    $this->loadView("templates/sidebar");
    $this->loadView("templates/footer");
  }

  function wordpress() {
    $this->loadView("templates/header");
    $this->loadView("wordpress");
    $this->loadView("templates/sidebar");
    $this->loadView("templates/footer");
  }

  function content() {
    $this->loadView("templates/header");
    $this->loadView("content");
    $this->loadView("templates/sidebar");
    $this->loadView("templates/footer");
  }

  function project_plan() {
    $this->loadView("templates/header");
    $this->loadView("project_plan");
    $this->loadView("templates/sidebar");
    $this->loadView("templates/footer");
  }

  function privacy() {
    $this->loadView("templates/header");
    $this->loadView("privacy");
    $this->loadView("templates/sidebar");
    $this->loadView("templates/footer");
  }
  function project1() {
    $this->loadView("templates/header");
    $this->loadView("project1");
    $this->loadView("templates/sidebar");
    $this->loadView("templates/footer");
  }
  function project2() {
    $this->loadView("templates/header");
    $this->loadView("project2");
    $this->loadView("templates/sidebar");
    $this->loadView("templates/footer");
  }
  function project3() {
    $this->loadView("templates/header");
    $this->loadView("project3");
    $this->loadView("templates/sidebar");
    $this->loadView("templates/footer");
  }
}
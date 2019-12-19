<?php

class JessieController extends Controller {

  public function __construct() {
    $this->modelContact = $this->model('modelContact');
  }

  function index() {
    $this->loadView("main");
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
  function project1() {
    $this->loadView("project1");
  }
  function project2() {
    $this->loadView("project2");
  }
  function project3() {
    $this->loadView("project3");
  }
  function contact() {
    if(isset($_POST) && isset($_POST["send_mail"])){
     $get = $this->modelContact->contact();
      //ako je meil uspesno poslan onda (true) vratiti na contakt formu obavestenje o tome, ako forma nije dobra vratiti na formi sa prikazom greske. 
    } else {
    $this->loadView("contact");   //Ako ne postoji POST zahtev ucitaj ovo
    }
  }
  
}
<?php
  class CreateUser{

    public function __construct(){}

    public function createUser(){
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
        require_once "views/roles/admin/header.view.php";
        require_once 'views/modules/create_user.view.php';
        require_once "views/roles/admin/footer.view.php";
      }
      if($_SERVER['REQUEST_METHOD' == 'POST']){

      }
    }
  }


?>
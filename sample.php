<?php 

    include 'libs/load,php';
  $username=$_POST["email-add"];
  $password=$_POST["pass"];
// echo $username  ;
// echo $password;
  $result = valid_login($username, $password);
  if($result){
    print("login Succes");
  }
  else{
    print("niope");
    }  ?>
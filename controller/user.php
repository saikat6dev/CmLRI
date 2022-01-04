<?php 
 class User{

    function checkLogin(){
        return true;
    }


    function userAuthentication($userName, $password){
        if($userName == "saikat" && $password == "1234"){
            return true;
        }else{
            return false;
        }
    }
    function addNewUser($userName, $email, $contact, $address, $password){
        return true;

    }

 }

?>

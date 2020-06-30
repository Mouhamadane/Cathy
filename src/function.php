<?php
require_once("database/connexion.php");
global $connect;
function is_user($pseudo,$password){
    $req = "Select from users where pseudo = $pseudo AND password= $password";
   
}